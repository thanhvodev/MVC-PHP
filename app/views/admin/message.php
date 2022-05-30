<?php

function confirm($msg)
{
    echo "<script type='text/javascript'>
    if (confirm('$msg') == true) {
        location.replace('users');
    } else {
        location.replace('users');
    }
    </script>";
}

confirm($data['error']);