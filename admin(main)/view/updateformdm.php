<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Cập nhập danh mục</h2>
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
                                        <td><a href="index.php?updatedmform&id='.$item['id'].'" class="btn btn-outline-warning">Sua</a></td>
                                        <td><a href="index.php?act=deldm&id='.$item['id'].'" class="btn btn-outline-danger">Xoa</a></td>
                                    </tr>
                                ';
                            }
                        }
                    ?>
                </tbody>
            </table>
            <div class="mb-3">
                <form action="index.php?act=updateformdm" method="post">
                    <label for="exampleFormControlInput1" class="form-label">Tên danh mục</label>
                    <input type="hidden" name="id" value="<?=$kqone[0]['id']?>">
                    <input type="text" class="form-control" placeholder="Tên danh mục" name="tendm" value="<?=$kqone[0]['name'];?>"><br>
                    <input type="submit" class="btn btn-outline-success" name="capnhat" value="UPDATE">
                    <a href="index.php?act=danhmuc" class="btn btn-outline-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
    <?php
    //var_dump($kqone);
    ?>
</div>