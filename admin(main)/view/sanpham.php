<div class="container-fluid">
    <div class="card">
        <div class="card-header">
            <h2>Sản phẩm</h2>
        </div>
        <div class="card-body">
            <table class="table table-striped">
                <thead class="table-dark">
                    <th>STT</th>
                    <th>Tên sản phẩm</th>
                    <th>Giá</th>
                    <th>Hình ảnh</th>
                    <th>Sửa</th>
                    <th>Xóa</th>
                </thead>
                <tbody>
                    <?php
                        if(isset($dssp)&&(count($dssp)>0)){
                            $i=1;
                            foreach ($dssp as $value) {
                                echo '
                                <tr>
                                    <td>'.$i++.'</td>
                                    <td>'.$value['name'].'</td>
                                    <td>'.$value['price'].'</td>
                                    <td><img src="./view/images/'.$value['img'].'" alt=""
                                     style="width:100px;height: 100px"></img></td>
                                    <td><a href="index.php?act=updateformsp&id='.$value['id'].'" class="btn btn-outline-warning">Sửa</a></td>
                                    <td><a href="index.php?act=xoasp&id='.$value['id'].'" class="
                                    btn btn-outline-danger">Xóa</a></td>
                                </tr>';
                             } 
                        } ?>
                </tbody>
            </table>
            <div class="mb-3">
                <form action="index.php?act=sanpham_add" method="post" enctype="multipart/form-data">
                    <label for="exampleFormControlInput1" class="form-label">Thêm sản phẩm</label>
                    <input type="text" class="form-control" placeholder="Tên sản phẩm" name="tensp"><br>
                    <input type="number" class="form-control" placeholder="Giá" name="price"  min="1"><br>
                    <input type="file" class="form-control" name="image"><br>
                    <select name="iddm" id="" class="form-control">
                        <option value="0">Chọn danh mục</option>
                        <?php
                        if(isset($dsdm)){
                            foreach ($dsdm as $dm) {
                                echo '<option value="'.$dm['id'].'">'.$dm['name'].'</option>';
                            }
                        }
                        ?>
                    </select><br>
                    <input type="submit" class="btn btn-outline-success" name="themdm" value="ADD">
                    <a href="index.php?act=" class="btn btn-outline-primary">Back</a>
                </form>
            </div>
        </div>
    </div>
</div>