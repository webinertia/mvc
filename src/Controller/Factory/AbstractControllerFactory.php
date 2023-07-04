<?php

declare(strict_types=1);

namespace Webinertia\Mvc\Controller\Factory;

use Laminas\Form\FormElementManager;
use Laminas\I18n\Translator\TranslatorAwareInterface;
use Laminas\Mvc\I18n\Translator;
use Laminas\Permissions\Acl\AclInterface;
use Laminas\Stdlib\DispatchableInterface;
use Laminas\ServiceManager\AbstractFactory\ReflectionBasedAbstractFactory;
use Psr\Container\ContainerInterface;
use Webinertia\Mvc\AclAwareInterface;
use Webinertia\Mvc\FormManagerAwareInterface;
use Webinertia\Mvc\UserServiceAwareInterface;
use Webinertia\Session\Container as SessionContainer;
use Webinertia\Session\SessionContainerAwareInterface;
use User\Service\UserServiceInterface;

class AbstractControllerFactory extends ReflectionBasedAbstractFactory
{
    /** @inheritDoc */
    public function __invoke(ContainerInterface $container, $requestedName, ?array $options = null): DispatchableInterface
    {
        $controller  = parent::__invoke($container, $requestedName, $options);
        if ($controller instanceof SessionContainerAwareInterface) {
            $controller->setSessionContainer($container->get(SessionContainer::class));
        }
        if ($controller instanceof AclAwareInterface) {
            $controller->setAcl($container->get(AclInterface::class));
        }
        if ($controller instanceof FormManagerAwareInterface) {
            $controller->setFormManager($container->get(FormElementManager::class));
        }
        if ($controller instanceof TranslatorAwareInterface) {
            $controller->setTranslator($container->get(Translator::class));
        }
        if ($controller instanceof UserServiceAwareInterface) {
            if ($container->has(UserServiceInterface::class)) {
                $controller->setUserService($container->get(UserServiceInterface::class));
            } else {
                $controller->setUserService($container->get(UserService::class));
            }
        }
        return $controller;
    }
}
