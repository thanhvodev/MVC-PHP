<?php

function confirm($msg)
{
    echo "<script type='text/javascript'>
    if (confirm('$msg') == true) {
        location.replace('profile');
    } else {
        location.replace('profile');
    }
    </script>";
}
confirm("Cập nhật thông tin thành công");