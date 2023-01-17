

<?php
//error_reporting(0);
require_once('./constant/connect');
/* echo$sql_service1 ="SELECT * FROM tbl_product WHERE id  = 1";
       $statement = $conn->prepare($sql_service1);
 $statement->execute();
                                                             
                                                                
    $service1 = $statement->fetch(PDO::FETCH_ASSOC);
    $data['product']=$service1;
print_r($service1);
*/ 
 
?>

<?php
//include('connect.php');


    $users_arr = array();

      $sql1 = "SELECT * FROM tbl_client  
          WHERE id = '".$_POST['customer_id']."'";

        $result1 = $connect->query($sql1);
        $row = $result1->fetch_assoc();

      echo$mob_no = $row['mob_no'];
      
        /*$result1=$conn->query($sql_service1);  
        $service1 = mysqli_fetch_array($result1);
        *//*$data['product']=$service1;
        echo json_encode($data); exit;*/
        ?>