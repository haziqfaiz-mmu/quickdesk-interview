<?php
/***************** Testing the Stack ***************/
include('1b.php');
error_reporting (E_ALL ^ E_NOTICE);

$stack = new QUEUE();
$stack->enqueue(10);
$stack->enqueue(15);

echo "Array: ";
foreach($stack->getQueue() as $e){
    echo $e." ";
}
echo PHP_EOL;

echo "Removing ".$stack->dequeue();
echo PHP_EOL;

echo "Array: ";
foreach($stack->getQueue() as $e){
    echo $e." ";
}
echo PHP_EOL;


?>