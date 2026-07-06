<?php

if (!function_exists('calculateDiscount')) {
    function calculateDiscount($total) {
        $persen = 0;
        
        if ($total >= 50000000) {
            $persen = 20; 
        } elseif ($total >= 25000000) {
            $persen = 12; 
        } elseif ($total >= 15000000) {
            $persen = 7;  
        } elseif ($total >= 5000000) {
            $persen = 3;  
        } else {
            $persen = 0;  
        }

        $nominal = ($persen / 100) * $total;

        return [
            'persen'  => $persen,
            'nominal' => $nominal
        ];
    }
}