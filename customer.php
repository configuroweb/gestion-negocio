<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
<?php include('./constant/connect');
$sql = "SELECT * FROM tbl_client WHERE delete_status = 0";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> Ver Cliente</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Ver Cliente</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="add_customer.php"><button class="btn btn-primary">Agregar Cliente</button></a>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nombre del Cliente</th>
                                <th>Género</th>
                                <th># Móvil</th>
                                <th>Sucursal</th>
                                <th>Dirección</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            foreach ($result as $row) {
                                $no += 1;
                            ?>
                                <tr>
                                    <td><?php echo $no; ?></td>
                                    <td><?php echo $row['name'] ?></td>
                                    <td><?php echo $row['gender'] ?></td>
                                    <td><?php echo $row['mob_no'] ?></td>
                                    <td><?php echo $row['reffering'] ?></td>
                                    <td><?php echo $row['address'] ?></td>

                                    <td>

                                        <a href="editclient.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>



                                        <a href="php_action/removeclient.php?id=<?php echo $row['id'] ?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Deseas eliminar este registro?')"><i class="fa fa-trash"></i></button></a>


                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <?php include('./constant/layout/footer.php'); ?>