<?php

function confirm($msg)
{
    echo "<script type='text/javascript'>
    if (confirm('$msg') == true) {
        location.replace('http://localhost/index');
    } else {
        location.replace('http://localhost/index');
    }
    </script>";
}

confirm($data['error']);
