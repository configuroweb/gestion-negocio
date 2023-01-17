<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar Comida</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar Comida</li>
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
                            <form class="form-horizontal" method="POST" id="submitProductForm" action="php_action/createfood.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">

                                <!-- <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Food Image:</label>
                                                <div class="col-sm-9">
                                                 <div id="kv-avatar-errors-1" class="center-block" style="display:none;"></div>                         
                        <div class="kv-avatar center-block">                            
                            <input type="file" class="form-control" id="productImage" placeholder="Food Name" name="productImage" class="file-loading" style="width:auto;"/>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"> Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="productName" placeholder="Nombre Comida" name="productName" autocomplete="off" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Cantidad</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="quantity" placeholder="Cantidad" name="quantity" autocomplete="off" required="" pattern="^[0-9]+$" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Precio</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="rate" placeholder="Precio" name="rate" autocomplete="off" required="" pattern="^[0-9]+$" />
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Nombre de Categoría</label>
                                        <div class="col-sm-9">
                                            <select type="text" class="form-control" id="categoryName" placeholder="Nombre de Categoría" name="categoryName">
                                                <option value="">~~Seleccionar~~</option>
                                                <?php
                                                $sql = "SELECT categories_id, categories_name, categories_active, categories_status FROM categories WHERE categories_status = 1 AND categories_active = 1";
                                                $result = $connect->query($sql);

                                                while ($row = $result->fetch_array()) {
                                                    echo "<option value='" . $row[0] . "'>" . $row[1] . "</option>";
                                                } // while

                                                ?>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Estado</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="productStatus" name="productStatus">
                                                <option value="">~~Seleccionar~~</option>
                                                <option value="1">Disponible</option>
                                                <option value="2">No disponible</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>


                                <button type="submit" name="create" id="createProductBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Enviar</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>




        <?php include('./constant/layout/footer.php'); ?>