<?php

declare(strict_types=1);

namespace Webinertia\Mvc;

use User\Service\UserServiceInterface;

interface UserServiceAwareInterface
{
    public function setUserService(UserServiceInterface $userService);

    public function getUserService(): UserServiceInterface;
}
