<h2>Danh sách khách hàng</h2>
</br>
<h5>Tìm kiếm khách hàng</h5>
<form action="./index.php?page=search" method="POST">
    <input type="text" placeholder="Nhập tên tìm kiếm" name="search">
    <input type="submit" value="Tìm kiếm">
</form></br>
<a href="./index.php?page=add">Thêm mới</a>
<table class="table">
    <thead>
        <tr>
            <th>STT</th>
            <th>Name</th>
            <th>Price</th>
            <th>Description</th>
            <th>Producer</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($products as $key => $product) : ?>
            <tr>
                <td><?php echo ++$key ?></td>
                <td><?php echo $product->name ?></td>
                <td><?php echo $product->price ?></td>
                <td><?php echo $product->description ?></td>
                <td><?php echo $product->producer ?>
                <td> <a href="./index.php?page=delete&id=<?php echo $product->id; ?>" class="btn btn-warning btn-sm">Delete</a></td>
                <td> <a href="./index.php?page=edit&id=<?php echo $product->id; ?>" class="btn btn-sm">Update</a></td>
            <?php endforeach; ?>
    </tbody>
</table>