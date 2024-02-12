<?php

class SpeedConverter {
    public function convertToKilometerPerHour($value, $unit) {
        if ($unit === 'meterPerSecond') {
            return $value * 3.6;
        } elseif ($unit === 'milePerHour') {
            return $value * 1.60934;
        } else {
            return "اطلاعات پشتیبانی نمیشود!";
        }
    }

    public function convertToMilePerHour($value, $unit) {
        if ($unit === 'kilometerPerHour') {
            return $value / 1.60934;
        } elseif ($unit === 'meterPerSecond') {
            return $value * 2.23694;
        } else {
            return "  اطلاعات پشتیبانی نمیشود!";
        }
    }
}


$speedConverter = new SpeedConverter();
echo $speedConverter->convertToMilePerHour(100, 'kilometerPerHour');





