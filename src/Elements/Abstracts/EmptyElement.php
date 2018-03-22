<?php

namespace Nicat\HtmlFactory\Elements\Abstracts;

/**
 * A HTML-element, that cannot contain other elements.
 * They are closed in the start tag (e.g. '<br />').
 *
 * Class EmptyElement
 * @package Nicat\HtmlFactory
 */
abstract class EmptyElement extends Element
{
    /**
     * Renders the element.
     *
     * @return string
     */
    public function render(): string
    {
        return '<' . $this->getName() . $this->attributes->render() . ' />';

    }
}