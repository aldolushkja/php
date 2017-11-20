<?php

//CONSTANT
define('HOSTNAME',localhost);
echo HOSTNAME;

//VARIABLE
$_user = 'Aldo Lushkja';
echo $_user;
$_num = 5;
echo $_num;
echo $_user .' has ' .$_num. ' donuts';


//ARRAYS
$_users = Array('Aldo','Nicoleta','Blerta');
//$_users = ['Aldo','Nicoleta','Blerta'];
//print_r($_users);
$_users[3] = 'Tom';
echo $_users[3];


//ASSOCIATED ARRAY
$ages = Array(
	'Karen' => 34,
	'Larry' => 44,
	'Jeff'	=> 38);
echo $ages['Larry'];


//FUNCTIONS
function writeMsg(){
	return 'Hello World';
}

echo writeMsg();

//FUNCTIONS
function writeMsg($msg){
	return $msg;
}

echo writeMsg('Hello');

//FUNCTIONS
function writeMsg($msg = 'Hello World'){
	return $msg;
}

echo writeMsg();


//CONDITIONALS
$num1 = 20;
$num2 = 10;

if($num1 >= 20 && num2 < 5){
	echo 'Yes it is';
} else {
	echo 'No it is not';
}


//LOOPS
for($i = 0; $i < 10; $i++){
	echo 'Number '.$i.'<br>';
}

$i = 0;
while($i < 10){
	echo 'Number '.$i.'<br>';
	$i++;
}

$_users = Array('Aldo','Nicoleta','Blerta');

foreach ($_users as $user ) {
	echo $user.'<br>';
}
?>