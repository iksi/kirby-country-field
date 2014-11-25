<?php

class CountryField extends SelectField {

    public function options() {
        $json = file_get_contents(__DIR__ . '/country.json');

        $options = json_decode($json, TRUE);

        natcasesort($options);

        return $options;
    }

}