
<?php  

//member_table data edit

include('db_pdo.php');

$message = '';

$form_data = json_decode(file_get_contents("php://input"));

$data = array(
 ':first_name'  => $form_data->first_name,
 ':last_name'  => $form_data->last_name,
 ':test'  => $form_data->test,
 ':id'    => $form_data->id
);

$query = "
 UPDATE tbl_sample 
 SET first_name = :first_name, last_name = :last_name, test = :test 
 WHERE id = :id
";

$statement = $connect->prepare($query);
if($statement->execute($data))
{
 $message = 'Data Edited';
}

$output = array(
 'message' => $message
);

echo json_encode($output);

?>