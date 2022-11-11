<?php

namespace BMICalculate;
class BMICalculate
{

    public function calculate($length,$weight){
        if ($length >= 0 || $weight >= 0){
            if (is_numeric($length)){
                $a = $length * $length;
                $b = $weight / $a;
                $result = $b;
                ceil($result);
            }else{
                return "Enter your height as a decimal and your weight as a whole number";
                exit;
            }

        }


       if ($result > 0 && $result <= 18 ){

           return "Your weight is insufficient for your height";

       }
       if ($result > 18 && $result <= 25){
           return "Your weight is ideal";
       }
       if ($result > 25 && $result <= 30){
           return "You Are Overweight for Your Height";
       }
       if ($result > 30 && $result <= 35){
           return "you are fat";
       }
       if ($result > 35 && $result <= 45){
           return "second degree obese";
       }
       if ($result > 45){
           return "third degree obese";
       }
    }

}