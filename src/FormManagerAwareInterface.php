<?php

declare(strict_types=1);

namespace Webinertia\Mvc;

use Laminas\Form\FormElementManager;

interface FormManagerAwareInterface
{
    /**
     * Set the FormElementManager instance
     */
    public function setFormManager(FormElementManager $formManager);

    public function getFormManager(): FormElementManager;
}
