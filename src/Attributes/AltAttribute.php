<?php

namespace Nicat\HtmlFactory\Attributes;

use Nicat\HtmlFactory\Attributes\Abstracts\StringAttribute;

/**
 * Class representing the HTML-attribute 'alt'
 *
 * Class AltAttribute
 * @package Nicat\HtmlFactory
 */
class AltAttribute extends StringAttribute
{

    public function getName(): string
    {
        return 'alt';
    }
}