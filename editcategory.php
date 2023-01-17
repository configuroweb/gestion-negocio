<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<?php include('./constant/connect.php');

$sql = "SELECT * from categories where  categories_id='" . $_GET['id'] . "'";
$result = $connect->query($sql)->fetch_assoc();  ?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Editar Categoría</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="javascript:void(0)">Inicio</a></li>
                <li class="breadcrumb-item active">Editar Categoria</li>
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
                            <form class="form-horizontal" method="POST" id="submitBrandForm" action="php_action/editCategories.php?id=<?php echo $_GET['id']; ?>" enctype="multipart/form-data">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre de Categoría</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="categoriesName" placeholder="Nombre de Categoría" name="categoriesName" value="<?php echo $result['categories_name'] ?>" required="" pattern="^[a-zA-z]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Estado</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categoriesStatus" name="categoriesStatus">
                                                <option value="1" <?php
                                                                    if ($result['categories_active'] == "1") {
                                                                        echo "selected";
                                                                    }
                                                                    ?>>Disponible</option>
                                                <option value="2" <?php if ($result['categories_active'] == "2") {
                                                                        echo "selected";
                                                                    } ?>>No disponible</option>
                                            </select>

                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createCategoriesBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Actualizar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <?php include('./constant/layout/footer.php'); ?>