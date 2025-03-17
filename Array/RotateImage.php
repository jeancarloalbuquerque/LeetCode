<?php

class Solution {

    /**
    * @param Integer[][] $matrix
    * @return NULL
    */
    function rotate(&$matrix) {
        $len = count($matrix);

        for ($start = 0; $start < intdiv($len, 2); $start++) {
            $end = $len - $start - 1;
            $row = $col = $start;

            while ($col < $end) {      
                $top_left = $matrix[$row][$col];
                $top_rigth = $matrix[$col][$end];
                $bottom_right = $matrix[$end][$len - $col - 1];
                $bottom_left = $matrix[$len - $col - 1][$start];

                $matrix[$row][$col] = $bottom_left;
                $matrix[$col][$end] = $top_left; 
                $matrix[$end][$len - $col - 1] = $top_rigth; 
                $matrix[$len - $col - 1][$start] = $bottom_right; 

                $col++;
            }
        }
    }
}
