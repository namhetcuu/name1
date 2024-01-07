<?php
require_once 'database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body class="bg-dark">
    <div class="container">
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Add items</h4>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_alert"></div>
                        <form action="#" method="POST" id="add_form">
                            <div id="show_item">
                                <div class="row">
                                    <div class="col-md-4 mb-3">
                                        <input type="text" name="product_name[]" class="form-control"
                                        placeholder="Item Name" require>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_price[]" class="form-control"
                                        placeholder="Item Price" require>
                                    </div>
                                    <div class="col-md-3 mb-3">
                                        <input type="number" name="product_quantity[]" class="form-control"
                                        placeholder="Item Quantity" require>
                                    </div>
                                    <div class="col-md-2 mb-3 d-grid">
                                        <button class="btn btn-success add_item_btn">Add more</button>
                                    </div>
                                </div>
                            </div>
                            <div>
                                <input type="submit" value="Add" class="btn btn-primary w-25" id="add_btn">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="row my-4">
            <div class="col-lg-10 mx-auto">
                <div class="card shadow">
                    <div class="card-header">
                        <h4>Show items</h4>
                    </div>
                    <div class="card-body p-4">
                        <div id="show_alert"></div>
                        <form action="#" method="POST" id="form">
                            <table class="table">
                                <thead class="thead-dark">
                                    <tr>
                                        <td scope="col">STT</td>
                                        <td scope="col">Product Name</td>
                                        <td scope="col">Product Price</td>
                                        <td scope="col">Product Quantity</td>
                                        <td scope="col">Update</td>
                                        <td scope="col">Delete</td>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $db = Db::getInstance();
                                    $sql = "SELECT * FROM product";
                                    $req=$db->query($sql);
                                    $i=0;
                                    foreach($req->fetchAll() as $product){?>
                                        <tr>
                                            <td> <?= $i++ ?></td>
                                            <td> <?= $product['product_name'] ?></td>
                                            <td> <?= $product['product_price'] ?></td>
                                            <td> <?= $product['product_quantity'] ?></td>
                                            <td><input type="submit" value="Update" class="btn btn-outline-warning"></td>
                                            <td><input type="submit" value="Delete" class="btn btn-outline-danger"></td>
                                        </tr>
                                    <?php }
                                    ?>
                                    
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            $('.add_item_btn').click(function(e){
                e.preventDefault();
                $("#show_item").prepend(`
                <div class="row append_item">
                    <div id="show_item">
                        <div class="row">
                            <div class="col-md-4 mb-3">
                                <input type="text" name="product_name[]" class="form-control"
                                placeholder="Item Name" require>
                            </div>
                            <div class="col-md-3 mb-3">
                                <input type="number" name="product_price[]" class="form-control"
                                placeholder="Item Price" require>
                            </div>
                            <div class="col-md-3 mb-3">
                                <input type="number" name="product_quantity[]" class="form-control"
                                placeholder="Item Quantity" require>
                            </div>
                            <div class="col-md-2 mb-3 d-grid">
                                <button class="btn btn-danger remove_item_btn">Remove</button>
                            </div>
                        </div>
                    </div>
                </div>
                `);
            });
            $(document).on('click','.remove_item_btn', function(e){
                e.preventDefault();
                let row_item = $(this).parent().parent();
                $(row_item).remove();
            });
            $('#add_form').submit(function(e){
                e.preventDefault();
                $('#add_btn').val('Adding...');
                $.ajax({
                    url: 'action.php',
                    method: 'post',
                    data: $(this).serialize(),
                    success:function(response){
                        console.log(response);
                        $('#add_btn').val('Add');
                        $('#add_form')[0].reset();
                        $(".append_item").remove();
                        $('#show_alert').html(`<div class="alert alert-success" role="alert">${response}</div>`)
                    }
                })
            })
        })
    </script>
</body>
</html>
