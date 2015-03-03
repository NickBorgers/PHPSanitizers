<?php
    function SanitizeUsername($username) {
        return preg_replace('/[^a-z0-9]/s', "", filter_var(strtolower($username), FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    function SanitizeHex($key) {
            return preg_replace('/[^a-f0-9]/s', "", filter_var($key, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    function SanitizeInteger($number) {
        return preg_replace('/[^0-9]/s', "", filter_var($number,FILTER_SANITIZE_NUMBER_INT));
    }

    function SanitizeFloat($value) {
        return preg_replace('/[^0-9.]/s', "", filter_var($value,FILTER_SANITIZE_NUMBER_FLOAT, FILTER_FLAG_ALLOW_FRACTION));
    }

    function SanitizeGPS($value) {
        return preg_replace('/[^0-9.:+-]/s', "", filter_var($value,FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    # I happen to use PayPal's vault function, perhaps this one is helpful as an additional example
    function SanitizePayPalID($paypalID) {
        return preg_replace('/[^A-Z0-9-]/s', "", filter_var($paypalID, FILTER_SANITIZE_EMAIL));
    }

    function SanitizeText($text) {
            return preg_replace('/[^a-zA-Z0-9]/s', "", filter_var($text, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }
    
    function SanitizeNonNumericText($text) {
        return preg_replace('/[^a-zA-Z]/s', "", filter_var($text, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    function SanitizeRealName($text) {
        return preg_replace('/[^a-zA-Z\s+]/s', "", filter_var($text, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    function SanitizeBrowserName($text) {
        return preg_replace('/[^a-zA-Z0-9_\. -]/s', "", filter_var($text, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    function SanitizeEmail($email) {
        return filter_var(strtolower($email), FILTER_SANITIZE_EMAIL);
    }

    # Does not allow spaces in file names
    function SanitizeFileName($filename) {
        return preg_replace('/[^a-zA-Z0-9_\.-]/s', '_', filter_var($filename, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH));
    }

    # Does not allow spaces in directory names
    function SanitizeDirectory($directory) {
        return preg_replace('/\.\./s', '.', preg_replace('/[^a-zA-Z0-9_\.\/-]/s', '_', filter_var($directory, FILTER_SANITIZE_STRING,FILTER_FLAG_STRIP_LOW | FILTER_FLAG_STRIP_HIGH)));
    }

?>
