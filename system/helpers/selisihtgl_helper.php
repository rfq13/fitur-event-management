<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
if (!function_exists('selisihtgl_helper')) {
    function selisihtgl($mulai)
    {
        $booking    = new DateTime($mulai);
        $today      = new DateTime();
        $d          = $today->diff($booking)->d;

        return $d;
    }
}
