<?php
$var = '122.34343The';
$float_value_of_var = floatval($var);
echo $float_value_of_var; // 122.34343

$var = '122.34343The';
$float_value_of_var = '(float)';
echo $float_value_of_var; // 122.34343

$var = 'The122.34343';
$float_value_of_var = (float) '$var';
echo $float_value_of_var; // 0