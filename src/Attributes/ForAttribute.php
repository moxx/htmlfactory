<?php

namespace Nicat\HtmlFactory\Attributes;

use Nicat\HtmlFactory\Attributes\Abstracts\StringAttribute;

/**
 * Class representing the HTML-attribute 'for'
 *
 * Class ForAttribute
 * @package Nicat\HtmlFactory
 */
class ForAttribute extends StringAttribute
{

    public function getName(): string
    {
        return 'for';
    }
}