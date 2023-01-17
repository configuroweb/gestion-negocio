<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?> 

 
 <link href="assets/css/custom.css" rel="stylesheet"> 
 

 

        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Import Brand Management</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">>Import Brand</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            <div class="card-title">
                               
                            </div>
                        
                            <div class="card-body">
                                <div class="input-states">
                                   <form class="form-horizontal" id="submitImportForm" action="php_action/createBrandImport.php" method="POST" enctype="multipart/form-data">
                                    <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Import Brand FIle</label>
                                                
                                                <div class="col-sm-9">
                                                 <input type="file" class="form-control" id="brandfile" placeholder="Import Brand FIle" name="brandfile" class="file-loading" style="width:auto;"/>
                                                
                                                </div>
                                            </div>
                                        </div>
                                         
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label"></label>
                                                
                                                <div class="col-sm-2">
                                                 
                                                 <a href="assets/import/brand.xlsx" download>Sample file</a>
                                                </div>
                                            </div>
                                        </div>
                                       <button type="submit" class="btn btn-success btn-flat m-b-30 m-t-30" id="importBrandBtn" value="showAlert" onclick="showAlert();">Import</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
   
<?php include('./constant/layout/footer.php');?>


<script type="text/javascript">
    function showAlert(){
  if($("#myAlert").find("div#myAlert2").length==0){
    $("#myAlert").append("<div class='alert alert-success alert-dismissable' id='myAlert2'> <button type='button' class='close' data-dismiss='alert'  aria-hidden='true'>&times;</button> Success! message sent successfully.</div>");
  }
  $("#myAlert").css("display", "");
}
</script>