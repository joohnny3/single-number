<?php

$nums1 = [2, 2, 1];
$nums2 = [4, 1, 2, 1, 2];
$nums3 = [1];
$nums4 = [9, 5, 9, 5, 3, 2, 5, 7, 2, 5, 7];

function singleNumber($nums)
{
    sort($nums);

    $c = count($nums);
    for ($i = 0; $i < $c; $i = $i + 2) {
        if ($i == $c - 1 || $nums[$i] != $nums[$i + 1]) {

            return $nums[$i];
        }
    }
    return $nums[$c - 1];
}

print singleNumber($nums4);

?>