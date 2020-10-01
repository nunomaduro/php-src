--TEST--
Auto-globals in arrow functions
--FILE--
<?php

// This should work, but *not* generate a binding for $GLOBALS
$a = 123;
$fn = fn() => $GLOBALS['a'];
var_dump($fn());

$a = 456;
$fn = fn() => { return $GLOBALS['a']; };
var_dump($fn());

?>
--EXPECT--
int(123)
int(456)
