<?php error_reporting(1); ?>
<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>
<?php

$sql = "SELECT * FROM product WHERE status = 1";
$query = $connect->query($sql);
$countProduct = $query->num_rows;

$orderSql = "SELECT * FROM orders WHERE order_status = 1";
$orderQuery = $connect->query($orderSql);
$countOrder = $orderQuery->num_rows;

$totalRevenue = 0;

while ($orderResult = $orderQuery->fetch_assoc()) {
    //echo $orderResult['paid'];exit;
    $totalRevenue += $orderResult['paid'];
}

$lowStockSql = "SELECT * FROM product WHERE quantity <= 3 AND status = 1";
$lowStockQuery = $connect->query($lowStockSql);
$countLowStock = $lowStockQuery->num_rows;

$userwisesql = "SELECT tbl_client.name , SUM(orders.grand_total) as totalorder,order_id FROM orders INNER JOIN tbl_client ON orders.client_name = tbl_client.id WHERE orders.order_status = 1 GROUP BY orders.client_name";
$userwiseQuery = $connect->query($userwisesql);
$userwieseOrder = $userwiseQuery->num_rows;

$connect->close();

?>

<style type="text/css">
    .ui-datepicker-calendar {
        display: none;
    }
</style>

<div class="page-wrapper">




    <div class="container-fluid">




        <div class="row">

            <div class="row">
                <div class="col-md-6 dashboard">
                    <div class="card " style="background: #fc7d1c ">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-user f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">
                                <h2 class="color-white"><?php echo $countProduct; ?></h2>
                                <a href="food.php">
                                    <p class="m-b-0">Total de Clientes</p>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

                <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                    <div class="col-md-6 dashboard">
                        <div class="card" style="background-color: #fc7d1c ">
                            <div class="media widget-ten">
                                <div class="media-left meida media-middle">
                                    <span><i class="ti-files f-s-40"></i></span>
                                </div>
                                <div class="media-body media-text-right">

                                    <h2 class="color-white"><?php echo $countOrder; ?></h2>
                                    <a href="invoice.php">
                                        <p class="m-b-0">Total de Facturas</p>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <div class="col-md-6 dashboard">
                    <div class="card" style="background-color:#fc7d1c;">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="ti-calendar  f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">

                                <h1 style="color:white;"><?php echo date('d'); ?></h1>



                                <p style="color:white;"><?php echo date('l') . ' ' . date('d') . ', ' . date('Y'); ?></p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 dashboard">
                    <div class="card" style="background-color:#fc7d1c;">
                        <div class="media widget-ten">
                            <div class="media-left meida media-middle">
                                <span><i class="fa fa-money f-s-40"></i></span>
                            </div>
                            <div class="media-body media-text-right">


                                <h1 style="color:white;"><?php if ($totalRevenue) {
                                                                echo $totalRevenue;
                                                            } else {
                                                                echo '0';
                                                            } ?></h1>



                                <p style="color:white;">Total de Ganancias</p>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <?php include('./constant/connect.php');
            $user = $_SESSION['userId'];
            $sql = "SELECT order_id, order_date, client_name, client_contact, payment_status FROM orders WHERE order_status = 1 AND user_id = '$user'";
            $result = $connect->query($sql);

            //echo $sql;exit;

            //echo $itemCountRow;exit; 
            ?>

            </ /?php if(isset($_SESSION['userId']) && $_SESSION['userId']==1) { ?>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <strong class="card-title">Movimientos Generales</strong>
                    </div>
                    <div class="card-body" style="color:white;">
                        <table id="myTable" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Fecha de Factura</th>
                                    <th>Contacto</th>
                                    <th>Estado del Pago</th>

                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                foreach ($result as $row) {


                                ?>
                                    <tr>
                                        <td><?php echo $row['order_id'] ?></td>
                                        <td><?php echo $row['order_date'] ?></td>
                                        <td><?php echo $row['client_contact'] ?></td>
                                        <td><?php if ($row['payment_status'] == 1) {

                                                $paymentStatus = "<label class='label label-success' ><h4>Pago Completo</h4></label>";
                                                echo $paymentStatus;
                                            } else if ($row['payment_status'] == 2) {
                                                $paymentStatus = "<label class='label label-danger'><h4>Pago Parcial</h4></label>";
                                                echo $paymentStatus;
                                            } else {
                                                $paymentStatus = "<label class='label label-warning'><h4>No pagada</h4></label>";
                                                echo $paymentStatus;
                                            } // /els
                                            ?></td>s
                                    </tr>

                            </tbody>
                        <?php
                                }

                        ?>
                        </table>
                    </div>
                </div>
            </div>
            </ /?php }?>
        </div>


    </div>
</div>
</div>
<?php include('./constant/layout/footer.php'); ?>