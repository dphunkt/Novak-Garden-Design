<?php
class url {
    function urlize($title, $separator = '-') {
        $title = preg_replace('![^'.preg_quote($separator).'\pL\pN\s]+!u', '', strtolower($title));
     
        // Replace all separator characters and whitespace by a single separator
        $title = preg_replace('!['.preg_quote($separator).'\s]+!u', $separator, $title);
     
        // Trim separators from the beginning and end
        return trim($title, $separator);
    }
}