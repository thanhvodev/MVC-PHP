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
                while ($row = $data['users']->fetch_assoc()) {
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
            ?>
        </tbody>

    </table>
</body>