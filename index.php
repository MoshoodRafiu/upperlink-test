<?php

    function computeSum($a, $b) {
        $data = [10, 20, 30, 40, 50, 60, 70, 80, 90, 100];
        // Validate number is positive
        if ($a < 0 || $b < 0) return -1;
        // Validate first number is greater than second
        if ($a > $b) return 0;
        // Validate not both numbers not in array
        if (!in_array($a, $data) && !in_array($b, $data)) return 0;
        // Find index of the two nubers
        $start = array_keys($data, $a)[0];
        $end = array_keys($data, $b)[0];
        // If second number not in array
        if (!$end) $end = sizeof($data);
        // Compute array to sum
        $arrayToSum = array_splice($data, $start, ($end - $start + 1));
        // return result
        return array_sum($arrayToSum);
    }

    print_r(computeSum(30, 70));