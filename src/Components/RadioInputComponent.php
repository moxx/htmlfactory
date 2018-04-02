<?php

namespace Nicat\HtmlFactory\Components;

use Nicat\HtmlFactory\Components\Contracts\RegisteredComponentInterface;
use Nicat\HtmlFactory\Elements\InputElement;
use Nicat\HtmlFactory\Attributes\Traits\AllowsCheckedAttribute;
use Nicat\HtmlFactory\Components\Traits\CanBeInline;

/**
 * Class representing the HTML-component '<input type="radio" />'
 *
 * Class RadioInputComponent
 * @package Nicat\HtmlFactory
 */
class RadioInputComponent extends InputElement implements RegisteredComponentInterface
{
    /**
     * Use corresponding traits for all type-specific HTML-attributes.
     */
    use AllowsCheckedAttribute;
	
	use CanBeInline;

    /**
     * Gets called during construction.
     * Overwrite to perform setup-functionality.
     */
    protected function setUp()
    {
        parent::setUp();
        $this->type('radio');
    }

    /**
     * Returns the method-name, under which this component will be accessible with the 'Html'-facade.
     *
     * @return string
     */
    static function getAccessor(): string
    {
        return 'radioInput';
    }
}