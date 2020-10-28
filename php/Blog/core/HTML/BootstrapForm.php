<?php

namespace Core\HTML;

class BootstrapForm extends Form
{
    /**
     * @param string $index index of value to recover
     * @return string
     */
    protected function getValue($index)
    {
        return isset($this->data[$index]) ? $this->data[$index] : null;
    }


    /**
     * @param string $html code Html to surround
     */
    protected function surround($html): string
    {
        return '<div class="form-group">' . $html . '</div>';
    }

    /**
     * @param string $name
     * @param string $label
     * @param array $options
     */
    public function input($name, $label, $options = []): string
    {
        $type = isset($options['type']) ? $options['type'] : 'text';
        return $this->surround(
            '<label>' . $label . '</label><input type="' . $type . '" name="' . $name . '" value="' . $this->getValue($name) . '" class="form-control">'
        );
    }

    public function submit(): string
    {
        return $this->surround('<button type="submit" class="btn btn-primary">Envoyer</button>');
    }
}
