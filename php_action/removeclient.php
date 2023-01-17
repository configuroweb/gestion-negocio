<?php 	

require_once 'core.php';


//$valid['success'] = array('success' => false, 'messages' => array());

$id = $_GET['id'];
//echo $brandId;exit;


 $sql = "UPDATE tbl_client SET delete_status = 1 WHERE id = {$id}";
//echo $sql;exit;
 if($connect->query($sql) === TRUE) {
 	$valid['success'] = true;
	$valid['messages'] = "Successfully Removed";
	header('location:../customer.php');		
 } else {
 	$valid['success'] = false;
 	$valid['messages'] = "Error while remove the brand";
 	header('location:../customer.php');
 }
 
 $connect->close();

 echo json_encode($valid);
 
 // /if $_POST