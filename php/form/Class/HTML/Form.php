<?php

namespace form\HTML;

/**
 * Class Form
 * Allows generates entry form fast and easy 
 */
class Form
{
    /**
     * @var array data used by form
     */
    protected $data;

    /**
     * @var string Tag use to surround fields 
     */
    public $surround = 'p';

    /**
     * @param array $data data used by form
     */
    public function __construct($data = [])
    {
        $this->data = $data;
    }

    /**
     * @param [string] $html code Html to surround
     * @return string
     */
    protected function surround($html)
    {
        return "<{$this->surround}>{$html}</{$this->surround}>";
    }

    /**
     * @param [string] $index index of value to recover
     * @return string
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }

    /**
     * @param [string] $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<input type="text" name="' . $name . '" value="' . $this->getValue($name) . '">'
        );
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit">Envoyer</button>');
    }
}
