<!-- To start writing PHP code, use PHP opening tags-->
<?php


// To print a string in PHP, use echo
// PHP uses a semicolon to end statements


echo 'hello world';
echo '<br/>';

// use $ sign to create variable

$a = 'test';
$b = 10;

// echo can force non-string value to a string

echo $a . $b;
echo '<br/>';
// but can't operate string to non string

// echo $a + $b; // This causes an error because one of the operands is not a numeric string

// Try changing the value to a numeric string, and the operation will work even through it's a string

$a = '10';

echo $a + $b;
echo '<br/>';
// Reason Why a Numeric String Can Be Operated with a Number:
// In PHP, when you perform arithmetic operations on a numeric string (a string that contains only digits),
// PHP automatically converts the string to a number. This process is known as type juggling.
// So, when you add a numeric string like '10' to an integer like 10, PHP treats both values as numbers
// and performs the addition without any issues.

// echo can't print an array it will cause warning array to string conversion.
$a = [1, 2, 3, 4, 5];

echo $a;
echo '<br/>';
// because of that, you can use for loop to print value inside array

foreach ($a as $key => $value) {
    echo $value;
    echo '<br/>';
}

// echo doesn't return a value because it is a language construct even it is said to be a function
// and because it doesn't return a value, you can't assign it to a variable or use it in expression
// $a = echo 'echo does not return value';// will cause parse error unexpected token 
// echo $a;

// but print can return a value because it is a function

$a = print ('echo name');

echo $a;
echo '<br/>';
