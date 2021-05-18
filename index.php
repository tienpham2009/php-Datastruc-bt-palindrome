<?php
include_once "Palindromes/Queue.php";
include_once "Palindromes/Stacks.php";

$string = "ablewelba";
$stack = new Stacks();
$queue = new Queue();
$totalStr = strlen($string);


for ($i = 0; $i < $totalStr; $i++) {
    $stack->add($string[$i]);
    $queue->enqueue($string[$i]);
}


function checkPalindrome($stack, $queue, $string): bool
{
    $totalStr = strlen($string);
    $dataStack = $stack->showStack();
    $dataQueue = $queue->showQueue();
    $flag = false;

    for ($i = 0; $i < $totalStr; $i++) {
        if ($dataQueue[$i] == $dataStack[$i]) {
            $flag = true;
        } else {
            $flag = false;
        }
    }
    return $flag;
}

if (checkPalindrome($stack, $queue, $string)) {
    echo $string . " is palindrome";
} else {
    echo $string . " is not palindrome";
}
