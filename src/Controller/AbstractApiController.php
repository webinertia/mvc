<?php

declare(strict_types=1);

namespace Webinertia\Mvc\Controller;

use Webinertia\Mvc\Controller\ControllerInterface;
use Webinertia\Mvc\Controller\Trait\AjaxActionTrait;
use Webinertia\Mvc\Controller\Trait\QueryParamsTrait;
use Webinertia\Mvc\Session\SessionContainerAwareTrait;
use Laminas\Http\PhpEnvironment\Response;
use Laminas\Http\PhpEnvironment\Request;
use Laminas\I18n\Translator\TranslatorAwareTrait;
use Laminas\View\Model\JsonModel;
use Laminas\View\Model\ViewModel;
use Laminas\Permissions\Acl\Resource\ResourceInterface;
use Laminas\Mvc\Controller\AbstractRestfulController;
use User\Acl\AclAwareTrait;
use User\Acl\CheckActionAccessTrait;
use User\Acl\ResourceAwareTrait;
use User\Service\UserServiceAwareTrait;

class AbstractApiController extends AbstractRestfulController implements ControllerInterface
{
    use AclAwareTrait;
    use AjaxActionTrait;
    use ResourceAwareTrait;
    use SessionContainerAwareTrait;
    use TranslatorAwareTrait;
    use UserServiceAwareTrait;
    use QueryParamsTrait;

    /** @var Request $request */
    protected $request;
    /** @var Response $response */
    protected $response;
    /** @var string $baseUrl */
    public $baseUrl;
    /** @var string $basePath */
    public $basePath;
    /** @var string $referringUrl */
    public $referringUrl;
    /** @var int|string $resourceId */
    protected $resourceId;
    /** @var ViewModel $view */
    protected $view;

    /**
     * @return void
     * @param array<string, mixed> $config
     * */
    public function __construct(protected array $config)
    {
    }
}
