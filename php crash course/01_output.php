<?php
$var = "Hello";
$nums = [1,2,4];
// Lenght
// echo count($nums);

// Search in array
// var_dump(in_array(1, $nums));

// Add to an array
// array_push($nums, 6, 7);
// array_unshift($nums, 9);

// Remove Element
// unset($nums[0]);
// print_r($nums);

// Split into 2 chunks
$chunk_array = array_chunk($nums, 2);
print_r($chunk_array);

?>


<!DOCTYPE html>
<html>
    <head>
        <title>Dc</title>
    </head>
    <body>
        <h2>Hey there</h2>
    </body>
</html>