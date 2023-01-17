 <?php
    include('./constant/connect.php');


    ?>


 <div class="left-sidebar">

     <div class="scroll-sidebar">

         <nav class="sidebar-nav">
             <ul id="sidebarnav">
                 <li class="nav-devider"></li>
                 <li class="nav-label">Inicio</li>
                 <li> <a href="dashboard.php" aria-expanded="false"><i class="fa fa-tachometer"></i>Dashboard</a>
                 </li>

                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-user"></i><span class="hide-menu">Cliente</span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="add_customer.php">Agregar Cliente</a></li>

                             <li><a href="customer.php">Gestionar Cliente</a></li>
                         </ul>
                     </li>

                 <?php } ?>
                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-list"></i><span class="hide-menu">Categoría </span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="add-category.php">Agregar Categoría</a></li>

                             <li><a href="categories.php">Gestionar Categorías</a></li>
                         </ul>
                     </li>
                 <?php } ?>
                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                     <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-cutlery"></i><span class="hide-menu">Comida</span></a>
                         <ul aria-expanded="false" class="collapse">

                             <li><a href="add-food.php">Agregar Comida</a></li>

                             <li><a href="food.php">Gestionar Comida</a></li>
                         </ul>
                     </li>
                 <?php } ?>
                 <li> <a class="has-arrow" href="#" aria-expanded="false"><i class="fa fa-files-o"></i><span class="hide-menu">Factura</span></a>
                     <ul aria-expanded="false" class="collapse">

                         <li><a href="add-invoice.php">Agregar Factura</a></li>

                         <li><a href="invoice.php">Gestionar Facturas</a></li>
                     </ul>
                 </li>

                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                     <li><a href="report.php" href="#" aria-expanded="false"><i class="fa fa-flag"></i><span class="hide-menu">Reportes</span></a></li>

                 <?php } ?>
                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>
                 <?php } ?>

                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>

                 <?php } ?>

                 <?php if (isset($_SESSION['userId']) && $_SESSION['userId'] == 1) { ?>

                 <?php } ?>







             </ul>
         </nav>

     </div>

 </div>