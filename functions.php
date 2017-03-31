<?php

/**
 * Returns formatted date according to format: 01.01.1970 at 12:00:00
 */
if (!function_exists('formatDate')) {
    function formatDate($date)
    {
        return date('d.m.Y \a\t H:i', strtotime($date));
    }
}

/**
 * Redirects to a given URL
 */
if (!function_exists('redirect')) {
    function redirect($url)
    {
        header('Location: ' . $url);
    }
}

/**
 * Debugging Functions
 */
if (!function_exists('d')) {
    function d()
    {
        $vars = func_get_args();
        echo '<pre>';
        foreach ($vars as $var) {
            echo '<strong>(' . gettype($var) . ')</strong> ';
            print_r($var);
        }
        echo '</pre>';

        return;
    }
}

if (!function_exists('dd')) {
    function dd()
    {
        call_user_func_array('d', func_get_args());
        die();
    }
}
