<?php 

session_start();
$Name= null;
$Surname = null;

?>

<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="Styles\index.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" 
    integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> ToDoApplication </title> 
</head>
<body>
    <div class='container'>
        

            <header>
                    <p><a href="../MongoPhpApp/index.php" class="home"><i class="icon fa fa-home fa-2x fa-hover-show" ></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
            </header>

            <nav class="menu">
                    <a href="../MongoPhpApp/create.php">Create</a> 
                    <a href="../MongoPhpApp/findOne.php">Find one</a>
                    <a href="../MongoPhpApp/showAll.php">Show all</a>  
            </nav>
            <h1>Show All</h1>
       
        <main>
        <table class="table = table-hover">
            <tr> 
                <th>Name</th>    
                <th>Surname</th>
                <th>Email</th>
                <th>Start</th>
                <th>Task Description</th>
                <th>Status</th>
                <th>Finish</th>
            </tr>
            
            <?php
            require 'config.php';
            $users = $collection->find([]); // CHANGE ME!
            foreach($users as $user) {

                echo "<tr>";
                echo "<td>".$user->Name."</td>";
                echo "<td>".$user->Surname."</td>";
                echo "<td>".$user->Email."</td>";
                echo "<td>".$user->Start."</td>";
                echo "<td>".$user->Description."</td>";
                echo "<td>".$user->Status."</td>";
                echo "<td>".$user->Finish."</td>";
                echo "<td class='aside'>";
                echo "<a href='edit.php?id=".$user->_id."' class='fa fa-edit' style='padding: 5px;'></a>";
                echo "<a href='delete.php?id=".$user->_id."' class='fa fa-trash' style='padding: 5px;'></a>";
                echo "</td>";
                echo "</tr>";
            };
            ?>
        </table>
        </main>
        <footer>
                <p>
                    &#169; 2022 ToDoApp, Developers Team.
                </p>
        </footer>
    </div>              
</body>
</html>