<?php 

include "sql_config.php";

$id = $_GET['id'];



$query="DELETE FROM `member_data`  WHERE id=$id";
mysqli_query($conn, $query);


$query="SELECT FROM `member_data`  WHERE id=$id";
mysqli_query($conn, $query);


$file = "images/" ;

if (!unlink($file)) {
  echo ("Error deleting $file");
} else {
  echo ("Deleted $file");
}



//member_table_data_delete

include('db_pdo.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$query = "DELETE FROM tbl_sample WHERE id = '".$form_data->id."'";

$statement = $connect->prepare($query);
if($statement->execute())
{
 $message = 'Data Deleted';
}

$output = array(
 'message' => $message
);

echo json_encode($output);







 header('location: running_member.php' );

?>