<?php

declare(strict_types=1);

namespace Webinertia\Mvc\Controller;

use Laminas\I18n\Translator\TranslatorAwareInterface;
use Laminas\Permissions\Acl\Resource\ResourceInterface;
use Webinertia\Log\LoggerAwareInterface;
use Webinertia\Uploader\UploaderAwareInterface;
use Webinertia\Acl\AclAwareInterface;
//use Webinertia\User\Service\UserServiceAwareInterface;
use Webinertia\Session\SessionContainerAwareInterface;

interface ControllerInterface extends
    AclAwareInterface,
    TranslatorAwareInterface,
    LoggerAwareInterface,
    ResourceInterface,
    SessionContainerAwareInterface,
    UploaderAwareInterface
    //UserServiceAwareInterface
{
}
