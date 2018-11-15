<?php

namespace Webflorist\HtmlFactory\Components;

use Webflorist\HtmlFactory\Components\Contracts\RegisteredComponentInterface;
use Webflorist\HtmlFactory\Elements\InputElement;
use Webflorist\HtmlFactory\Attributes\Traits\AllowsCheckedAttribute;
use Webflorist\HtmlFactory\Components\Traits\CanBeInline;

/**
 * Class representing the HTML-component '<input type="checkbox" />'
 *
 * Class CheckboxInputComponent
 * @package Webflorist\HtmlFactory
 */
class CheckboxInputComponent extends InputElement implements RegisteredComponentInterface
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
        $this->type('checkbox');
    }

    /**
     * Returns the method-name, under which this component will be accessible with the 'Html'-facade.
     *
     * @return string
     */
    static function getAccessor(): string
    {
        return 'checkboxInput';
    }
}