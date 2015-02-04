<?php 

require_once "fibonacci.php";

/*** execute ***/
$n = $_GET['numFib'];
 
if ( !empty($n)) {
    $fib = new Fibonacci($n); 
}
 
?>

<form action="outputFibonacci.php">
    <input type="text" name="numFib">
    <input type="submit">
</form>

<p class="output"><?php echo $fib->response;?></p>
