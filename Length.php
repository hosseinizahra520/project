<?php
class LengthConverter {
    public function convertToCentimeter($value, $unit) {
        if ($unit === 'inch') {
            return $value * 2.54;
        } elseif ($unit === 'foot') {
            return $value * 30.48;
        } else {
            return " اطلاعات پشتیبانی نمیشود!";
        }
    }

    public function convertToInch($value, $unit) {
        if ($unit === 'centimeter') {
            return $value / 2.54;
        } elseif ($unit === 'foot') {
            return $value * 12;
        } else {
            return " اطلاعات پشتیبانی نمیشود!";
        }
    }

    public function convertToFoot($value, $unit) {
        if ($unit === 'centimeter') {
            return $value / 30.48;
        } elseif ($unit === 'inch') {
            return $value / 12;
        } else {
            return " اطلاعات پشتیبانی نمیشود!";
        }
    }
}


$lengthConverter = new LengthConverter();
echo $lengthConverter->convertToInch(100, 'centimeter');
