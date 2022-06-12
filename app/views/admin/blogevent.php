

<h1 class='text-center mb-3' style='color: #ff871d'>Quản lý Blog/Event</h1>
<h3 class='text-center mb-3' style='color: black'>Blog</h3>
<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thời gian</th>
            <!-- <th>Mô tả</th> -->
            <th>Tác giả</th>
            <!-- <th>Phân loại</th> -->
            <!-- <th>Số lượng sản phẩm</th> -->
        </tr>
    </thead>
    <tbody>
        <?php 
            $i = 0;
            $row = $data['blogs'];
            while ($i < count($data['blogs'])) {
                echo '<tr class="cell-1">
                        <td>'  . $row[$i]->ID . '</td>
                        <td>'  . $row[$i]->TITLE . '</td>
                        <td>'  . $row[$i]->TIMESTAMP . '</td>
                        <td>'  . $row[$i]->WRITER . '</td>
                    </tr>';
                $i++;
            }
        ?>
    </tbody>
</table>

<h3 class='text-center mb-3' style='color: black'>Event</h3>
<table class="table table-striped table-bordered table-hover mt-3" style="overflow-x:auto;">
    <thead>
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Thời gian</th>
            <!-- <th>Mô tả</th> -->
            <th>Tác giả</th>
            <!-- <th>Phân loại</th> -->
            <!-- <th>Số lượng sản phẩm</th> -->
        </tr>
    </thead>
    <tbody>
        <?php 
            $i = 0;
            $row = $data['events'];
            while ($i < count($data['events'])) {
                echo '<tr class="cell-1">
                        <td>'  . $row[$i]->ID . '</td>
                        <td>'  . $row[$i]->TITLE . '</td>
                        <td>'  . $row[$i]->TIMESTAMP . '</td>
                        <td>'  . $row[$i]->WRITER . '</td>
                    </tr>';
                $i++;
            }
        ?>
    </tbody>
</table>