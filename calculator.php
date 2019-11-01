<?php

echo "Please choose your operation: (+, -)", PHP_EOL;
$answer = readline("");
echo PHP_EOL;

if ($answer == "+" or $answer == "-") {
	$num1 = readline("What is your first number?: ");
} else {
	echo "'$answer' is not an operation.";
	exit;
}

if (is_numeric($num1)) {
	$num2 = readline("What is your second number?: ");
} else {
	echo "This is not a number", PHP_EOL;
}

if (is_numeric($num2)) {
	if ($answer == "+") {
		$add = $num1 + $num2;
		echo "Your answer is: $add", PHP_EOL;
		exit
	} else {
		$sub = $num1 - $num2;
		echo "Your answer is: $sub", PHP_EOL;
		exit
	}
}

?>
