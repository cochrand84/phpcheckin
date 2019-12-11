<?php

/**
 * Escapes HTML for output
 *
 */

function escape($html) {
    return htmlspecialchars($html, ENT_QUOTES | ENT_SUBSTITUTE, "UTF-8");
}

$ver = 1.06;

/**define('phpusername', 'phpusername');
if(!isset($_COOKIE[phpusername])) {
	echo "Not logged in, please login";
} else {
    echo "Logged in as " . $_COOKIE[phpusername];
    $username = $_COOKIE[phpusername];
}
*/
