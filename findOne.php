<?php
session_start();

/*
if(isset($_POST['submit'])){
    require 'config.php';
    
   $result = $collection->find(
    ['Name'=> 'julia'],
    ['projection' => ['Name' => 1] ] // change this!
   );
   var_dump($result);   
                             
}
*/

if(isset($_POST['submit'])){
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

            <h1>Find One</h1>

<main>
<form method='POST'>

    <section>
    
            <strong>Search for Name:</strong><input type="search" name="Name" class="form-control" 
            placeholder="Name">

    </section>

        <br>
       

        
        <div class='form-group text-center'>
            <button type="submit" name="submit" class="btn btn=success" 
            style='color: white; background-color:  #0d90c3; border: none; width: 150px; padding: 7px; border-radius: 5px;'
            ><i class="icon fa fa-search"></i> Search</button> 
        </div>

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