<?php

class CountryField extends SelectField {

    public function options() {

        $json = url('assets/data/countries.json');

        $options = json_decode($json, TRUE);

        natcasesort($options);

        return $options;
    }

}
