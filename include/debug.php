<?php
/**
 * File Name: debug.php
 * author: alexandre trudelle
 */
function echo_debug($message = 'débogage') {

    if (defined('DEVEL') && DEVEL === true) {
        echo '<div class="debug">';

        if (is_array($message) || is_object($message)) {
            print_r($message);
        }
        else {
            echo $message;
        }

        echo '</div>';
    }
}
?>