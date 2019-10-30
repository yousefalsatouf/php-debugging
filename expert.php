<?php
declare(strict_types=1);

// === Exercise 1 ===
// Below we're defining a function, but it doesn't work when we run it.
// Look at the error you get, read it and it should tell you the issue...,
// sometimes, even your IDE can tell you what's wrong

$x = 1;

echo "Exercise ". $x ." starts here:";

function new_exercise($x) {
    $block = "<br/><hr/><br/><br/>Exercise ". $x ." starts here:<br/>";
    echo $block;
}

new_exercise($x);
