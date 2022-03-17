<?php

class Country
{
    function getCountriesFormatted(): string
    {
        $result = $this->getCountries();
        $html = "";


        foreach ($result as $country) {
            $pop = number_format($country->population, 0, ",", ".");
            $html .= "<tr>
                <td>$country->id</td>
                <td>$country->name</td>
                <td>$country->capitalCity</td>
                <td>$country->continent</td>
                <td>$pop</td>
            </tr>";
        }

        return $html;

    }

    function getCountries()
    {
        $conn = new Database();
        $conn->query('SELECT * FROM countries');

        return $conn->resultSet();
    }
}