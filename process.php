<?php
require_once 'BMICalculate.php';
use BMICalculate\BMICalculate;

if (isset($_POST['bmi'])) {
    $length = $_POST['length'];
    $weight = $_POST['weight'];
    $BMICalculate = new BMICalculate();
    echo $BMICalculate->calculate($length,$weight);
}


