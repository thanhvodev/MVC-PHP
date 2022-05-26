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
                    echo '<tr class="cell-1">
                                <td>'  . $row['ID'] . '</td>
                                <td>'  . $row['USERNAME'] . '</td>
                                <td>'  . $row['EMAIL'] . '</td>
                                <td>'  . $row['PHONENUM'] . '</td>
                                <td>'  . $row['ADDRESS'] . '</td>
                                <td>'  . '<form><button class="btn btn-primary">Cập nhật</button></form>' . '</td>
                                <td>'  . '<form><button class="btn btn-danger">Cấm</button></form>' . '</td>
                                <td>'  . '<form action="/admin/deleteUser"
            method="POST"><input type="hidden" name="id" value="' . $row['ID'] . '"><button type="submit"
                class="btn btn-danger">Xóa</button></form>' . '</td>

            </tr>';
                }
            }
            ?>
        </tbody>

    </table>
</body>