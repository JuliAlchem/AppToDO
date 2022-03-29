<html>
	<head>
	<title>MODEL | Create new  task</title>
	</head>
		<body>
		<?php 
		$mysql = new mysqli("localhost","root","","mvc");
			if($mysql->connect_error)
			die('Cannot connect with database');
            if(isset($_POST['submit']))
            {    
                 $id= $_POST['id'];
                 $user = $_POST['user'];
                 $description = $_POST['description'];
                 $start_date = $_POST['start_date'];
                 $end_date = $_POST['end_date'];
                 $status = $_POST['status'];
            }
            $sql = "UPDATE tareas SET user='$user',description='$description',start_date='$start_date',status='$status' WHERE id='$id';";
          

                 if (mysqli_query($mysql, $sql)) {
                    echo "New record has been added successfully !";
                 } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                 }
                 mysqli_close($mysql);
                
                
        header("Location: ../view/findOne_v.php?record=The task was successfully mofified!");
		?>
       
		</body>
</html>