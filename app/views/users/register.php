<?php

function confirm($msg)
{
    echo "<script type='text/javascript'>
    if (confirm('$msg') == true) {
        location.replace('index');
    } else {
        location.replace('index');
    }
    </script>";
}

confirm($data['error']);
