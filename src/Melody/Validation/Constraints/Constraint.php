<?php

namespace Melody\Validation\Constraints;

use Melody\Validation\Validatable;

/**
 * @author Marcelo Santos <marcelsud@gmail.com>
 */
abstract class Constraint implements Validatable
{
    protected $errorMessageTemplate;

    public function __construct()
    {
        $this->setErrorMessageTemplate("{{input}} is invalid");
    }

    public function setErrorMessageTemplate($template)
    {
        $this->errorMessageTemplate = $template;
    }

    public function getErrorMessageTemplate()
    {
        return $this->errorMessageTemplate;
    }

}