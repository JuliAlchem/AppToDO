
<?php 

$mysql = new mysqli("localhost","root","","mvc");
if($mysql->connect_error)
	die('Cannot connect with database');
    $cont=$_GET['id'];
if(isset($_GET['id'])) {    
    $stmt = $mysql->query("DELETE FROM tareas WHERE id = '$cont'") or 
	die ($mysql->error);
    //echo"Tasks with index ".$cont." has been erased!";
    header("Location: ../view/findOne_v.php?record=Task was successfully deleted!");
}
$mysql->close();
echo"<br>";
 ?>

