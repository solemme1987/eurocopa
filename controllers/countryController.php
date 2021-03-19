<?php

class CountryController{

    public static function showCountryController(){
        $table="soccer_country";
        $request=CountryModel::showCountryModel($table);

        foreach ($request as $key => $match) {
            echo "<option value='{$match['country_id']}'>{$match['country_name']}</option>";
        }
    }
}