<?php
require('./Database/connection.php');

$del = new Database();

$id = $_GET['id'];
$delete_row = $del->Delete($id);
  
if($delete_row){
  echo("Data Deleted Successfully");
}
?>