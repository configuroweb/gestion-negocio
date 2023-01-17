<?php include('./constant/layout/head.php');?>
<?php include('./constant/layout/header.php');?>

<?php include('./constant/layout/sidebar.php');?>  
<?php 

$user_id = $_SESSION['userId'];
//echo $user_id;exit;
$sql = "SELECT * FROM users WHERE user_id = {$user_id}";
$query = $connect->query($sql);
$result = $query->fetch_assoc();
//echo $result['user_id'];exit;
$connect->close();
?>


        <div class="page-wrapper">
            
            <div class="row page-titles">
                <div class="col-md-5 align-self-center">
                    <h3 class="text-primary">Change Password</h3> </div>
                <div class="col-md-7 align-self-center">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                        <li class="breadcrumb-item active">Change Password</li>
                    </ol>
                </div>
            </div>
            
            
            <div class="container-fluid">
                
                
                
                
                <div class="row">
                    <div class="col-lg-8" style="    margin-left: 10%;">
                        <div class="card">
                            
                            <div id="add-brand-messages"></div>
                            <div class="card-body">
                                <div class="input-states">
                                    <form class="form-horizontal" method="POST"  id="submitBrandForm" action="php_action/changeUsername.php" enctype="multipart/form-data">

                                        
                        <h1>Change Username</h1>
<div class="changeUsenrameMessages"></div>
                                        <div class="form-group">
                                            <div class="row">
                                                <label class="col-sm-3 control-label">Username</label>
                                                <div class="col-sm-9">
                                                   <input type="text"  class="form-control"id="username" name="username" placeholder="Usename" value="<?php echo $result['username']; ?>"  required="">
                                                </div>
                                            </div>
                                        </div>
                                        

                                        <button type="submit" name="create" id="changeUsernameBtn" class="btn btn-primary btn-flat m-b-30 m-t-30">Save Changes</button>
                                       

                                    </form>
                                    <form action="php_action/changePassword.php" method="post" class="form-horizontal" id="changePasswordForm">
                    
                        <h1>Change Password</h1>

                        <div class="changePasswordMessages"></div>

                        <div class="form-group">
                        <label class="col-sm-3 control-label">Current Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="password" name="password" placeholder="Current Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">New password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="npassword" name="npassword" placeholder="New Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <label class="col-sm-3 control-label">Confirm Password</label>
                        <div class="col-sm-10">
                          <input type="password" class="form-control" id="cpassword" name="cpassword" placeholder="Confirm Password">
                        </div>
                      </div>

                      <div class="form-group">
                        <div class="col-sm-offset-2 col-sm-10">
                             <input type="hidden" name="user_id" id="user_id" value="<?php echo $result['user_id'] ?>" />
                          <button type="submit" class="btn btn-primary btn-flat m-b-30 m-t-30">Save Changes </button>
                          
                        </div>
                      </div>


                
                </form>
                                </div>
                            </div>
                        </div>
                    </div>
                  
                </div>
                
               


<?php include('./constant/layout/footer.php');?>


