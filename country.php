<?php

class CountryField extends SelectField {

    public $format = 'name';

    public function __construct() {
        $this->type    = 'select';
        $this->options = array();
        $this->icon    = 'chevron-down';

        if (is_readable(__DIR__ . DS . 'countries.php')) {
            $this->options = include(__DIR__ . DS . 'countries.php');
        }
    }

    public function options() {
        $labels = array_values($this->options);
        $values = ($this->format === 'code') ? array_keys($this->options) : $labels;

        return array_combine($values, $labels);
    }
}
