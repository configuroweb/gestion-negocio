<?php
ini_set('display_errors', '1');
error_reporting(E_ALL);
//Including Database configuration file.
include('constant/connect.php');//Getting value of "search" variable from "script.js".
if (isset($_POST['search'])) {
//Search box value assigning to $Name variable.
   $name = $_POST['search'];
//$name = mysqli_real_escape_string($connect, $_POST['search']);
   $sql = "SELECT * FROM orders WHERE order_id LIKE '%$name%' order by order_id limit 20";
//print_r($sql) ;exit;
 $result = $connect->query($sql);
 //print_r($result);exit;
   if($result->num_rows > 0){    //if(mysqli_num_rows($result) >0)
   
   while($row = $result->fetch_assoc())
   {  
        

?>
                                <div class="form-group">
                                        <label lass="col-sm-3 control-label">Client Name</label>
                                        <?php  $sql1 = "SELECT * FROM tbl_client WHERE id ='".$row['client_name']."' ";
//print_r($sql) ;exit;
                                       $result1 = $connect->query($sql1);
                                       $row1 = $result1->fetch_assoc();  ?>
                                        <input type="text" name="invoice" id="ino" class="form-control" value="<?php echo $row1['name']; ?>" required="">
     
                                   </div>
                                 <div class="form-group">
                                     <label lass="col-sm-3 control-label">Client Contact</label>
                                        <input type="text" id="contact" name="contact" class="form-control" value="<?php echo $row['client_contact']; ?>" required="">
                                     </div> 
                                      
                                    
                                <a href="assets/myimages/<?php echo $row['file']; ?>"  class="f-w-600 btn btn-primary btn-flat m-b-30 m-t-30" target="_new">Download File</a>

                                    

<?php 
} 
}
}
?>