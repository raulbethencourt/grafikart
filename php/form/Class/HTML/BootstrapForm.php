<?php

namespace form\HTML;

class BootstrapForm extends Form
{
    /**
     * @param [string] $index index of value to recover
     * @return string
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    /**
     * @param [string] $html code Html to surround
     * @return string
     */
    protected function surround($html)
    {
        return '<div class="form-group">' . $html . '</div>';
    }

    /**
     * @param [string] $name
     * @return string
     */
    public function input($name)
    {
        return $this->surround(
            '<label>' . $name . '</label><input type="text" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">'
        );
    }

    /**
     * @return string
     */
    public function submit()
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}
