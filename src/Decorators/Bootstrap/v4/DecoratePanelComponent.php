<?php

namespace Webflorist\HtmlFactory\Decorators\Bootstrap\v4;

use Webflorist\HtmlFactory\Components\PanelComponent;
use Webflorist\HtmlFactory\Decorators\Abstracts\Decorator;

class DecoratePanelComponent extends Decorator
{

    /**
     * The element to be decorated.
     *
     * @var PanelComponent
     */
    protected $element;

    /**
     * Returns the group-ID of this decorator.
     *
     * Returning null means this decorator will always be applied.
     *
     * @return string|null
     */
    public static function getGroupId()
    {
        return 'bootstrap:v4';
    }

    /**
     * Returns an array of class-names of elements, that should be decorated by this decorator.
     *
     * @return string[]
     */
    public static function getSupportedElements(): array
    {
        return [
            PanelComponent::class
        ];
    }

    /**
     * Perform decorations on $this->element.
     */
    public function decorate()
    {
        $this->element->addClass('card');

        $context = 'default';
        if ($this->element->hasContext()) {
            $context = $this->element->getContext();
        }

        $this->element->addClass('card-'.$context);

        $this->element->headerWrapper->addClass('card-header');
        $this->element->footerWrapper->addClass('card-footer');
        $this->element->contentWrapper->addClass('card-body');

    }
}