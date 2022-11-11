<?php
require_once 'BMICalculate.php';
use BMICalculate\BMICalculate;

if (isset($_POST['bmi'])) {
    (float)$length = $_POST['length'];
    (int)$weight = $_POST['weight'];
    $BMICalculate = new BMICalculate();
    echo $BMICalculate->calculate($length,$weight);
}


