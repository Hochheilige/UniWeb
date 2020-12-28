<? 
    include_once("db.php");
?>

<?
    $products = getList();
    //vd($products);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <script src="script.js?<?=rand()?>"></script>
    <title>DATABASE</title>
  </head>
  <body>
    <div class="container-lg">
        <div class="row">
            <div class="col-12">

                <br>
                <br>
                <br>
                <br>
                <br>


                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Название</th>
                            <th scope="col">Описание</th>
                            <th scope="col">Картинка</th>
                            <th scope="col">Удалить</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?foreach ($products as $id_p => $p):?>
                            <tr>
                                <th scope="row"><?=$id_p?></th>
                                <td><?=$p['name']?></td>
                                <td><?=$p['desc']?></td>
                                <td>
                                    <?if($p['img'] != '') :?>
                                        <img src="<?=$p['img']?>" style="width:70px;">
                                    <?endif;?>
                                </td>
                                <td><a href="javascript:;">Удалить</td>
                            </tr>
                        <?endforeach;?>    
                    </tbody>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#add_modal">Добавить</button>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>

    <div class="modal fade" id="add_modal" tabindex="-1" role="dialog" aria-labelledby="add_modalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="add_modalLabel">Добавить новый продукт</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
            <form id="add_product_form">
                <div class="form-group">
                    <label for="product_name">Название продукта</label>
                    <input type="text" class="form-control" id="product_name" placeholder="Product name" name="name">
                </div>
                <div class="form-group">
                    <label for="product_desc">Описание продукта</label>
                    <input type="text" class="form-control" id="product_desc" placeholder="Product description" name="desc">
                </div>
                <div class="form-group">
                    <label for="product_img">Картинка</label>
                    <input type="file" class="form-control-file" id="product_img" name="img">
                </div>
            </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" onclick="addProduct('#add_product_form')">Save</button>
            </div>
            </div>
        </div>
    </div>
  </body>
</html>