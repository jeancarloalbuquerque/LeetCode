<?php

class Solution {

    /**
     * @param String[] $s
     * @return NULL
     */
    function reverseString(&$s) {
        $start = 0;
        $end = count($s) - 1;

        while ($start < $end) {
            $tmp = $s[$start];
            $s[$start] = $s[$end];
            $s[$end] = $tmp;
            
            $start++;
            $end--;
        }
    }
}
