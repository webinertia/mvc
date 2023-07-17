<?php

declare(strict_types=1);

namespace Webinertia\Mvc\Controller;

use Webinertia\Mvc\Controller\ControllerInterface;
use Webinertia\Mvc\Controller\Trait\AjaxActionTrait;
use Webinertia\Mvc\Controller\Trait\QueryParamsTrait;
use Webinertia\Session\SessionContainerAwareTrait;
use Laminas\Form\FormElementManager;
use Laminas\Http\PhpEnvironment\Response;
use Laminas\Http\PhpEnvironment\Request;
use Laminas\I18n\Translator\TranslatorAwareTrait;
use Laminas\Mvc\Controller\AbstractActionController;
use Laminas\Mvc\MvcEvent;
use Laminas\View\Model\ViewModel;
use Webinertia\Acl\AclAwareTrait;
use Webinertia\Acl\CheckActionAccessTrait;
use Webinertia\Acl\ResourceAwareTrait;
use Webinertia\User\Service\UserServiceAwareTrait;

abstract class AbstractAppController extends AbstractActionController implements ControllerInterface
{
    use AclAwareTrait, CheckActionAccessTrait {
        CheckActionAccessTrait::isAllowed insteadof AclAwareTrait;
    }
    use AjaxActionTrait;
    use CheckActionAccessTrait;
    use ResourceAwareTrait;
    use SessionContainerAwareTrait;
    use TranslatorAwareTrait;
    use QueryParamsTrait;

    /** @var Request $request */
    protected $request;
    /** @var Response $response */
    protected $response;
    /** @var string $referringUrl */
    public $referringUrl;
    /** @var int|string $resourceId */
    protected $resourceId;
    /** @var ViewModel $view */
    protected $view;
    /** @var FormElementManager $formElementManager */
    protected $formManager;

    /**
     * @return void
     * @param array<string, mixed> $config
     * */
    public function __construct(
        protected array $config
    ) {
    }

    /** todo move this to a listener */
    public function onDispatch(MvcEvent $e)
    {
        $this->ajaxAction();
        parent::onDispatch($e);
    }
}
