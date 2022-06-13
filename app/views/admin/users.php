<?php
    
    if(!isset($_SESSION['user_id']) || $_SESSION['permission'] == 0) {
        echo "<script type='text/javascript'>
            location.replace('dead');
         </script>";  
    }
    $usersPerPage = 10;
    $noOfPage = $data['users']->num_rows/$usersPerPage + 1;
    $array_uri = explode('/',$_SERVER['REQUEST_URI']);
    $page = $array_uri[count($array_uri)-1];
    if ($page == "users")
    {
        echo "<script type='text/javascript'>
            location.replace('users/1');
         </script>"; 
    }
    else
    {
        $page = (int)$page;
    }
?>

<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý thành viên</h1>
<?php
    require_once APP_ROOT . '/views/components/user-overall.php';
?>
<body>
    <table class="table">
        <thead>
            <tr>
                <th>#</th>
                <th>Tên người dùng</th>
                <th>Email</th>
                <th>Số điện thoại</th>
                <th>Địa chỉ</th>
                <th>Cập nhật thông tin</th>
                <th>Cấm thành viên</th>
                <th>Xóa thành viên</th>
            </tr>
        </thead>
        <tbody class="table-body">
            <?php
            if ($data['users']->num_rows > 0) {
                // output data of each row
                $i = 0;
                while ($row = $data['users']->fetch_assoc()) {
                    $i += 1;
                    if ($i > $usersPerPage*($page-1) && $i <= $usersPerPage*$page)
                    {
                        if ($row['PERMISSION'] == 0) {
                            $ban_button = '<form action="'.URL_ROOT.'/admin/ban_user" method="POST"><input type="hidden" name="id" value="' . $row['ID'] . '"><button class="btn btn-danger">Cấm</button></form>';
                        } else {
                            $ban_button = '<form action="'.URL_ROOT.'/admin/unban_user" method="POST"><input type="hidden" name="id" value="' . $row['ID'] . '"><button class="btn btn-primary">Hủy cấm</button></form>';
                        }

                        if ($row['PHONENUM']) {
                            $phone_num = $row['PHONENUM'];
                        } else {
                            $phone_num = '<input type="number" name="phone_no"/>';
                        }

                        if ($row['ADDRESS']) {
                            $address = $row['ADDRESS'];
                        } else {
                            $address = '<input type="text" name="address"/>';
                        }

                        if ($row['PHONENUM'] && $row['ADDRESS']) {
                            $disable_update = 'disabled';
                        } else {
                            $disable_update = '';
                        }

                        echo '<tr class="cell-1">
                                    <td>'  . $row['ID'] . '</td>
                                    <td>'  . $row['USERNAME'] . '</td>
                                    <td>'  . $row['EMAIL'] . '</td>
                                    <form action="'.URL_ROOT.'/admin/update_user"
                                    method="POST">
                                    <td>'  . $phone_num . '</td>
                                    <td>'  . $address . '</td>
                                    <td>'  . '<input type="hidden" name="id" value="' . $row['ID'] . '"><button class="btn btn-primary"' . $disable_update . '>Cập nhật</button>' . '</td>
                                    </form>
                                    <td>'  . $ban_button . '</td>
                                    <td>'  . '<form action="'.URL_ROOT.'/admin/deleteUser"
                                                    method="POST"><input type="hidden" name="id" value="' . $row['ID'] . '"><button type="submit"
                                                    class="btn btn-danger">Xóa</button></form>' . '</td>

                             </tr>';
                     }
                }
            }


            $pageFrontend = '';
            for ($i = 1; $i < $noOfPage; $i++)
            {
                if ($i == $page)
                {
                    $pageFrontend = $pageFrontend . '<li class="page-item active"><a class="page-link" href="./'. $i .'">' . $i .'</a></li>';
                }
                else
                {
                    $pageFrontend = $pageFrontend . '<li class="page-item"><a class="page-link" href="./'. $i .'">' . $i .'</a></li>';
                }
            }

            echo '<nav aria-label="...">
                      <ul class="pagination">
                        '.$pageFrontend.'
                      </ul>
                    </nav>';
            ?>
        </tbody>

    </table>
</body>