<?php

class TemperatureConverter {
    public function convertToCelsius($value, $unit) {
        if ($unit === 'fahrenheit') {
            return ($value - 32) * (5/9);
        } elseif ($unit === 'kelvin') {
            return $value - 273.15;
        } else {
            return " اطلاعات پشتیبانی نمیشود!";
        }
    }

    public function convertToFahrenheit($value, $unit) {
        if ($unit === 'celsius') {
            return ($value * (9/5)) + 32;
        } elseif ($unit === 'kelvin') {
            return ($value - 273.15) * (9/5) + 32;
        } else {
            return " اطلاعات پشتیبانی نمیشود!";
        }
    }
}


$temperatureConverter = new TemperatureConverter();
echo $temperatureConverter->convertToFahrenheit(100, 'celsius');