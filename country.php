<?php

class CountryField extends SelectField {

    public function options() {

        $json = file_get_contents(url('assets/data/countries.json'));

        $options = json_decode($json, true);

        natcasesort($options);

        return $options;
    }

}
