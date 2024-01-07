<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Danh mục</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>STT</th>
                        <th>Tên danh mục</th>
                        <th>Ưu tiên</th>
                        <th>Hiển thị</th>
                        <th>Sửa</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        if((isset($kq))&&(count($kq)>0)){
                            $i=1;
                            foreach($kq as $item){
                                echo '
                                    <tr>
                                        <td>'.$i++.'</td>
                                        <td>'.$item['name'].'</td>
                                        <td>'.$item['uutien'].'</td>
                                        <td>'.$item['hienthi'].'</td>
                                        <td><a href="index.php?act=updateformdm&id='.$item['id'].'" class="btn btn-outline-warning">Sửa</a></td>
                                        <td><a href="index.php?act=deldm&id='.$item['id'].'" class="btn btn-outline-danger">Xóa</a></td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>
            </table>
            <div class="mb-3">
                <form action="index.php?act=themdm" method="post">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                    <input type="text" class="form-control" placeholder="Tên danh mục" name="tendm"><br>
                    <input type="submit" class="btn btn-outline-success" name="themdm" value="ADD">
                </form>
            </div>
        </div>
    </div>

</div>