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
if ($data['error'] == 'Sai tài khoản hoặc mật khẩu, vui lòng kiểm tra lại!') {
    confirm($data['error']);
}
