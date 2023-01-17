<?php include('./constant/layout/head.php'); ?>
<?php include('./constant/layout/header.php'); ?>

<?php include('./constant/layout/sidebar.php'); ?>

<div class="page-wrapper">

    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h3 class="text-primary">Reporte de Movimientos</h3>
        </div>
        <div class="col-md-7 align-self-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Inicio</a></li>
                <li class="breadcrumb-item active">Reporte de Movimientos</li>
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
                            <form class="form-horizontal" action="php_action/getOrderReport.php" method="post" id="getOrderReportForm">



                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de Inicio</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="startDate" name="startDate" placeholder="Fecha de Inicio" />
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="row">
                                        <label class="col-sm-3 control-label">Fecha de Fin</label>
                                        <div class="col-sm-9">
                                            <input type="date" class="form-control" id="endDate" name="endDate" placeholder="Fecha de Fin" />
                                        </div>
                                    </div>
                                </div>

                                <button type="submit" id="generateReportBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Generar Reporte</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <script>
            $(document).ready(function() {
                // order date picker
                $("#startDate").date();
                // order date picker
                $("#endDate").date();

                $("#getOrderReportForm").unbind('submit').bind('submit', function() {

                    var startDate = $("#startDate").val();
                    var endDate = $("#endDate").val();

                    if (startDate == "" || endDate == "") {
                        if (startDate == "") {
                            $("#startDate").closest('.form-group').addClass('has-error');
                            $("#startDate").after('<p class="text-danger">La fecha de inicio es requerida</p>');
                        } else {
                            $(".form-group").removeClass('has-error');
                            $(".text-danger").remove();
                        }

                        if (endDate == "") {
                            $("#endDate").closest('.form-group').addClass('has-error');
                            $("#endDate").after('<p class="text-danger">La fecha de fin es requerida</p>');
                        } else {
                            $(".form-group").removeClass('has-error');
                            $(".text-danger").remove();
                        }
                    } else {
                        $(".form-group").removeClass('has-error');
                        $(".text-danger").remove();

                        var form = $(this);

                        $.ajax({
                            url: form.attr('action'),
                            type: form.attr('method'),
                            data: form.serialize(),
                            dataType: 'date',
                            success: function(response) {
                                var mywindow = window.open('', 'Sistema de Facturas', 'height=400,width=600');
                                mywindow.document.write('<html><head><title>Reporte de Orden</title>');
                                mywindow.document.write('</head><body>');
                                mywindow.document.write(response);
                                mywindow.document.write('</body></html>');

                                mywindow.document.close(); // necessary for IE >= 10
                                mywindow.focus(); // necessary for IE >= 10

                                mywindow.print();
                                mywindow.close();
                            } // /success
                        }); // /ajax

                    } // /else

                    return false;
                });

            });
        </script>

        <?php include('./constant/layout/footer.php'); ?>