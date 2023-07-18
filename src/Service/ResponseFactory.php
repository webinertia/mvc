<?php

namespace Webinertia\Mvc\Service;

use Laminas\ServiceManager\Factory\FactoryInterface;
use Psr\Container\ContainerInterface;
use Webinertia\Mvc\Http;

class ResponseFactory implements FactoryInterface
{
    /**
     * Create and return a response instance.
     *
     * @param  ContainerInterface $container
     * @param  string $requestedName
     * @param  null|array $options
     */
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null): Http\Response
    {
        return new Http\Response();
    }
}
