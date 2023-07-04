<?php

declare(strict_types=1);

namespace Webinertia\Mvc\Controller\Trait;

trait AjaxActionTrait
{
    public function ajaxAction(): bool
    {
        if ($this->request->isXmlHttpRequest()) {
            $this->view->setTerminal(true);
            return true;
        } else {
            return false;
        }
    }
}
