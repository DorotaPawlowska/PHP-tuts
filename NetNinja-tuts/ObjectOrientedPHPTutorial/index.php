<?php

  // utility class
  class Weather {

    private static $tempConditions = [ 'cold', 'mild', 'warm' ];

    public static function celsiusToFarenheit($c){
      return $c * 9 / 5 + 32;
    }

    public static function determineTempCondition($f){
      if($f < 40){
        return self::$tempConditions[0];
      } elseif ($f < 70) {
        return self::$tempConditions[1];
      } else {
        return self::$tempConditions[2];
      }
    }
  }

  // $wetherInstance = new Weather();
  // print_r($wetherInstance->tempConditions);

  // print_r(Weather::$tempConditions);
  // echo Weather::celsiusToFarenheit(20);
  echo Weather::determineTempCondition(80);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP OOP Tutorial</title>
</head>
<body>
  
</body>
</html>