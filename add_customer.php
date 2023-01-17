<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>


<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Agregar Cliente</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Agregar Cliente</li>
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
                            <form class="form-horizontal" method="POST" id="submitProductForm" action="php_action/createcustomer.php" method="POST" enctype="multipart/form-data">

                                <input type="hidden" name="currnt_date" class="form-control">


                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"> Nombre</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="name" placeholder=" Nombre del Cliente" name="name" autocomplete="off" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Género</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="brandName" name="gender">
                                                <option value="Femenino">Femenino</option>
                                                <option value="Masculino">Masculino</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label"># Móvil
                                        </label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" placeholder="" name="mob_no" autocomplete="off" required="" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Sucursal</label>
                                        <div class="col-sm-9">
                                            <input type="text" class="form-control" id="" placeholder="" name="reffering" autocomplete="off" required="" />

                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Dirección</label>
                                        <div class="col-sm-9">
                                            <textarea type="text" class="form-control" id="" placeholder="Dirección" name="address" autocomplete="off" required="" style="height: 150px;"></textarea>

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