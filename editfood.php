<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect.php');

$sql = "SELECT * from product where  product_id='" . $_GET['id'] . "'";
$result = $connect->query($sql)->fetch_assoc();
?>





<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Editar Información de Comida</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                <li class="breadcrumb-item active">Editar Información de Comida</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="row">
            <div class="col-lg-8" style="    margin-left: 10%;">
                <div class="card">
                    <div class="card-title">

                    </div>
                    <div id="add-brand-messages"></div>
                    <div class="card-body">
                        <div class="input-states">

                            <form class="form-horizontal" method="POST" id="submitProductForm" action="php_action/editfood.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">

                                <fieldset>
                                    <h1>Información de Comida</h1>



                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Nombre de Comida</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="editProductName" value="<?php echo $result['product_name'] ?>" name="editProductName" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Cantidad</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="editQuantity" value="<?php echo $result['quantity'] ?>" name="editQuantity" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Precio</label>
                                            <div class="col-sm-9">
                                                <input type="text" class="form-control" id="editRate" value="<?php echo $result['rate'] ?>" name="editRate" autocomplete="off">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Nombre de Categoría</label>
                                            <div class="col-sm-9">
                                                <select id="editCategoryName" name="editCategoryName" required class="form-control">
                                                    <?php
                                                    $sql = ("SELECT * FROM categories  where categories_status=1 ");
                                                    //echo $sql;exit;
                                                    $result1 = mysqli_query($connect, $sql);
                                                    //echo "23";exit;
                                                    while ($row = mysqli_fetch_assoc($result1)) {
                                                        //echo $row['categories_name'];exit;
                                                    ?>
                                                        <option value="<?php echo $row['categories_id']; ?>" <?php if ($result['categories_id'] == $row['categories_id']) {
                                                                                                                    echo "selected";
                                                                                                                } ?>><?php echo $row['categories_name']; ?></option>";
                                                    <?php   }
                                                    ?>
                                                </select>

                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="row">
                                            <label class="col-sm-3 control-label">Estado</label>
                                            <div class="col-sm-9">
                                                <select class="form-control" id="editProductStatus" name="editProductStatus">
                                                    <option value="1" <?php
                                                                        if ($result['active'] == "1") {
                                                                            echo "selected";
                                                                        }
                                                                        ?>>Disponible</option>
                                                    <option value="2" <?php if ($result['active'] == "2") {
                                                                            echo "selected";
                                                                        } ?>>No disponible</option>
                                                </select>

                                            </div>
                                        </div>
                                    </div>


                                    <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
                                </fieldset>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <?php include('./constant/layout/footer.php'); ?>

        <script src="custom/js/product.js"></script>