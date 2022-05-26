<?php

function confirm($msg)
{
    echo "<script type='text/javascript'>
    if (confirm('$msg') == true) {
        location.replace('http://localhost/admin/users');
    } else {
        location.replace('http://localhost/admin/users');
    }
    </script>";
}

confirm($data['error']);