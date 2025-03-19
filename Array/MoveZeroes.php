<?php

class Solution {

    /**
    * @param Integer[] $nums
    * @return NULL
    */
    function moveZeroes(&$nums) {
        $len = count($nums);
        $pointer_zero = $pointer_non_zero = 0;

        while ($pointer_non_zero < $len) {
            if ($nums[$pointer_zero] == 0 && $nums[$pointer_non_zero] <> 0) {
                $this->swap($nums, $pointer_zero, $pointer_non_zero);
                $pointer_zero++;
            }
            
            if ($nums[$pointer_zero] <> 0) {
                $pointer_zero++;
            }

            $pointer_non_zero++;
        }
    }

    function swap(array &$array, int $i, int $j) {
        $tmp = $array[$i];
        $array[$i] = $array[$j];
        $array[$j] = $tmp;
    }
}

