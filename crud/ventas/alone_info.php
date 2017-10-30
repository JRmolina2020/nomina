<?php
// include Database connection file
include("../../conexion.php");
// check request
if(isset($_POST['id']) && isset($_POST['id']) != "")
{
// get venta ID
$trabajador_id = $_POST['id'];

// Get venta Details
$query = "SELECT * FROM trabajador WHERE idtrabajador = '$trabajador_id'";
if (!$result = mysqli_query($con, $query)) {
exit(mysqli_error($con));
}
$response = array();
if(mysqli_num_rows($result) > 0) {
while ($row = mysqli_fetch_assoc($result)) {
$response = $row;
}
}
else
{
$response['status'] = 200;
$response['message'] = "Data not found!";
}
// display JSON data
echo json_encode($response);
}
else
{
$response['status'] = 200;
$response['message'] = "Invalid Request!";
}