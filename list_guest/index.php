<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }

        th,
        td {
            padding: 8px;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        .thumbnail {
            height: 60px;
            width: 100px;
            overflow: hidden;
        }

        .thumbnail img {
            width: 100%;
        }
    </style>
</head>

<body>
    <table border="0">
        <caption>
            <h2>Danh sách khách hàng</h2>
        </caption>
        <tr>
            <th>STT</th>
            <th>Tên</th>
            <th>Ngày sinh</th>
            <th>Địa chỉ</th>
            <th>Ảnh</th>
        </tr>
        <?php
        $customerlist = array(
            "1" => array("ten" => "Mai Văn Hoàn", "ngaysinh" => "1983-08-20", "diachi" => "Hà Nội", "anh" => "https://i.pinimg.com/originals/4e/db/24/4edb247859692de9fbd93035b553822e.jpg"),
            "2" => array("ten" => "Nguyễn Văn Nam", "ngaysinh" => "1983-08-21", "diachi" => "Bắc Giang", "anh" => "https://i.pinimg.com/originals/3c/b4/7c/3cb47cd89b2b8a8edbef584584d6ee1a.jpg"),
            "3" => array("ten" => "Nguyễn Thái Hòa", "ngaysinh" => "1983-08-22", "diachi" => "Nam Định", "anh" => "https://image.winudf.com/v2/image/Y29tLmRlZ2VhaGQud2FsbHBhcGVyX3NjcmVlbl81XzE1MjIyOTUzMDFfMDU2/screen-5.jpg?fakeurl=1&type=.jpg"),
            "4" => array("ten" => "Trần Đăng Khoa", "ngaysinh" => "1983-08-17", "diachi" => "Hà Tây", "anh" => "https://wallpapercave.com/wp/wc1672951.jpg"),
            "5" => array("ten" => "Nguyễn Đình Thi", "ngaysinh" => "1983-08-19", "diachi" => "Hà Nội", "anh" => "https://wallpapercave.com/wp/wp3882638.jpg")
        );
        foreach ($customerlist as $key => $values) {
            echo "<tr>";
            echo "<td>" . $key . "</td>";
            echo "<td>" . $values['ten'] . "</td>";
            echo "<td>" . $values['ngaysinh'] . "</td>";
            echo "<td>" . $values['diachi'] . "</td>";
            echo "<td><div class='thumbnail'><image src = '" . $values['anh'] . "'/></div></td>";
            echo "</tr>";
        }
        ?>
    </table>
</body>

</html>