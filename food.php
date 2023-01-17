<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
<?php include('./constant/connect');
$sql = "SELECT product_id, product_name,rate,quantity,brand_id,categories_id,active,status FROM product WHERE status = 1";
$result = $connect->query($sql);
//echo $sql;exit;

?>
<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary"> Gestionar Comida</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Gestionar Comida</li>
            </ol>
        </div>
    </div>


    <div class="container-fluid">




        <div class="card">
            <div class="card-body">

                <a href="add-food.php"><button class="btn btn-primary">Agregar Comida</button></a>

                <div class="table-responsive m-t-40">
                    <table id="myTable" class="table table-bordered table-striped">
                        <thead>
                            <tr>
                                <th>#</th>

                                <th>Nombre de Comida</th>
                                <th>Costo</th>

                                <th>Categoría</th>
                                <th>Estado</th>
                                <th>Acción</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $i = 1;
                            foreach ($result as $row) {

                                /* $sql="SELECT * from brands where brand_id='".$row['brand_id']."'";
    $result1 = $connect->query($sql);
    $row1=$result1->fetch_assoc();*/


                                $sql = "SELECT * from categories where categories_id='" . $row['categories_id'] . "'";
                                $result2 = $connect->query($sql);
                                $row2 = $result2->fetch_assoc();


                            ?>
                                <tr>
                                    <td><?php echo $i; ?></td>

                                    <td><?php echo $row['product_name'] ?></td>
                                    <td><?php echo $row['rate'] ?></td>

                                    <td><?php echo $row2['categories_name'] ?></td>
                                    <td><?php if ($row['active'] == 1) {

                                            $activeBrands = "<label class='label label-success' ><h4>Disponible</h4></label>";
                                            echo $activeBrands;
                                        } else {
                                            $activeBrands = "<label class='label label-danger'><h4>No disponible</h4></label>";
                                            echo $activeBrands;
                                        } ?></td>
                                    <td>

                                        <a href="editfood.php?id=<?php echo $row['product_id'] ?>"><button type="button" class="btn btn-xs btn-primary"><i class="fa fa-pencil"></i></button></a>



                                        <a href="php_action/removeproduct.php?id=<?php echo $row['product_id'] ?>"><button type="button" class="btn btn-xs btn-danger" onclick="return confirm('Deseas eliminar este registro?')"><i class="fa fa-trash"></i></button></a>


                                    </td>
                                </tr>
                            <?php
                                $i++;
                            }
                            ?>
                        </tbody>

                    </table>
                </div>
            </div>
        </div>

        <?php include('./constant/layout/footer.php'); ?>