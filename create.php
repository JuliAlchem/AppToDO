<?php
session_start();
if(isset($_POST['submit'])){
    require 'config.php';
    $insertOneResult = $collection->insertOne([
        'Name' => $_POST['Name'],
        'Surname' => $_POST['Surname'],
        'Email' => $_POST['Email'],
        'Start' => $_POST['Start'],
        'Description' => $_POST['Description'],
        'Status' => $_POST['Status'],
        'Finish' => $_POST['Finish']
        
    ]);
    $_SESSION['success'] = 'Task Added Successfully';
    header("Location: showAll.php");
 }
 if(isset($_POST['cancelar'])){
     $_SESSION = array();
     header("Location: showAll.php");
 }
?>
<!DOCTYPE html>
<head>
    <link rel="stylesheet" href="Styles\index.css">
    <link rel="stylesheet" href="Styles\create.css">
    <link rel="stylesheet" 
    href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" 
    integrity="sha512-10/jx2EXwxxWqCLX/hHth/vu2KY3jCF70dCQB8TSgNjbCVAC/8vai53GfMDrO2Emgwccf2pJqxct9ehpzG+MTw==" 
    crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title> ToDoApplication </title>    
</head>
<body>
    <div class="container">

            <header>
                    <p><a href="../MongoPhpApp/index.php" class="home"><i class="icon fa fa-home fa-2x fa-hover-show"></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
            </header>

            <nav class="menu">
                    <a href="../MongoPhpApp/create.php">Create</a> 
                    <a href="../MongoPhpApp/findOne.php">Find one</a>
                    <a href="../MongoPhpApp/showAll.php">Show all</a>  
            </nav>

        
        <h1>Create Task</h1>
        
        


<main>
    <form method='POST'>
    <section>
    
            <strong>Name:</strong><input type="text" name="Name" required="" class="form-control" 
            placeholder="Name">

            <strong>Surname:</strong><input type="text" name="Surname" required="" class="form-control" 
            placeholder="Surname">

            <strong>Email:</strong><input type="email" name="Email" required="" class="form-control" 
            placeholder="Email">

            <strong>Start:</strong><input type="date" name="Start" required="" class="form-control" 
            placeholder="Date/Time">

            <strong>Description:</strong><textarea type="text" name="Description" required="" class="aside" 
            placeholder="Description"></textarea>
 <!--
            <strong>Status:</strong><input type="text" name="Status" required="" class="form-control" 
            placeholder="Status"> 
-->
            <strong>Status:</strong><select  name="Status">
                                        <option value="to do">To do</option>
                                        <option value="doing">Doing</option>
                                        <option value="done">Done</option>
                                    </select>

            <strong>Finish:</strong><input type="date" name="Finish" required="" class="form-control" 
            placeholder="Date/Time">
        
        </section>

        <br>
        <div class='form-group text-center'>
            <button type="submit" name="submit" class="btn btn=success" 
            style='color: white; background-color:  #0d90c3; border: none; width: 150px; padding: 7px; border-radius: 5px;'
            >New</button> 
        </div>
<!--
        <form method='POST'>
            <button type='submit' name='cancelar' class='btn btn-denger' 
            style='color: white; background-color:  #0d90c3; border: none; width: 150px; padding: 7px; border-radius: 5px;'
            >Cancel</button>
        </form>
-->
        </form>
</main>
        <footer>
                <p>
                    &#169; 2022 ToDoApp, Developers Team.
                </p>
        </footer>
</div>
</body>
</html>