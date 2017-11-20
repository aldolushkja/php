<?php 
//String
$myStr = 'Hello world';
var_dump($myStr);

//Integer
$myInt = 55;
var_dump($myInt);

$myInt = -55;
var_dump($myInt);

//Float 
$myFloat = 4.4;
var_dump($myFloat);

//Boolean
$myBool = true;
var_dump($myBool);

$myBool = false;
var_dump($myBool);

//Array
$myArray = [3,3,3,3,5];
var_dump($myArray);

//Null
$myNull = null;
var_dump($myNull);

//Functions for string
$myString = 'Aldo Lushkja';
echo strlen('Hello world');
echo str_word_count($myString);
echo strrev($myString);
echo strpos($myString, 'Aldo');
echo str_replace('Aldo', 'Jim', $myString);

//Math & Numbers
echo max(33,2,66,254,111);
echo min(33,2,66,254,111);
echo abs(-10);
echo floor(4.7);
echo ceil(4.3);
echo rand(); //default 5 characters
echo rand(10,30); //range between 10 and 30

//Date function
echo 'The date is '.date('Y/m/d').'<br>';
echo 'The date is '.date('Y.m.d').'<br>';
echo 'The date is '.date('Y-m-d').'<br>';
echo 'The day is '.date('l').'<br>';
echo 'The month is '.date('M').'<br>';
echo 'The year is '.date('Y').'<br>';
echo 'The time is '.date('h:i.sa').'<br>';

//Set time zone
date_default_timezone_set('Italy/Rome');
echo 'The time is '.date('h:i.sa').'<br>';

$d = strtotime('11:00am January 10 2015');

echo 'The day is '.date('Y-m-d', $d).'<br>';

$d = strtotime('tomorrow');

echo 'The day is '.date('Y-m-d', $d).'<br>';