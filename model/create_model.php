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
                 $user = $_POST['user'];
                 $description = $_POST['description'];
                 $start_date = $_POST['start_date'];
                 $status = $_POST['status'];
                
                 $sql = "INSERT INTO tareas(description,user,start_date,status)
                 VALUES ('$description','$user','$start_date','$status');";
               //
                 if (mysqli_query($mysql, $sql)) {
                    echo "New record has been added successfully !";
                 } else {
                    echo "Error: " . $sql . ":-" . mysqli_error($conn);
                 }
                 mysqli_close($mysql);
            }
        header("Location: ../view/create_v.php?record=Task was successfully added!");
		?>
       
		</body>
</html>