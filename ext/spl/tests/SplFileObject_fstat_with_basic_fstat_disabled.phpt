--TEST--
SplFileObject::fstat when fstat() has been disabled.
--INI--
disable_functions="fstat"
--FILE--
<?php
$obj = New SplFileObject(__DIR__.'/SplFileObject_testinput.csv');
var_dump($obj->fstat());
?>
--EXPECTF--
array(26) {
  [0]=>
  int(%i)
  [1]=>
  int(%i)
  [2]=>
  int(%i)
  [3]=>
  int(%i)
  [4]=>
  int(%i)
  [5]=>
  int(%i)
  [6]=>
  int(%i)
  [7]=>
  int(%i)
  [8]=>
  int(%i)
  [9]=>
  int(%i)
  [10]=>
  int(%i)
  [11]=>
  int(%i)
  [12]=>
  int(%i)
  ["dev"]=>
  int(%i)
  ["ino"]=>
  int(%i)
  ["mode"]=>
  int(%i)
  ["nlink"]=>
  int(%i)
  ["uid"]=>
  int(%i)
  ["gid"]=>
  int(%i)
  ["rdev"]=>
  int(%i)
  ["size"]=>
  int(%i)
  ["atime"]=>
  int(%i)
  ["mtime"]=>
  int(%i)
  ["ctime"]=>
  int(%i)
  ["blksize"]=>
  int(%i)
  ["blocks"]=>
  int(%i)
}
