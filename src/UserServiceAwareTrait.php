<?php

declare(strict_types=1);

namespace Webinertia\Mvc;

use User\Service\UserService;
use User\Service\UserServiceInterface;

trait UserServiceAwareTrait
{
    /** @var UserService $userService */
    protected $userService;

    public function setUserService(UserServiceInterface $userService): void
    {
        $this->userService = $userService;
    }

    public function getUserService(): UserService
    {
        return $this->userService;
    }
}
