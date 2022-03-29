<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Styles/intro.css">
        <link rel="stylesheet" href="../Styles/showAll.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    </head>
    <body>
        <div class = 'container'>
            <header>
                <p><a href="../intro.html" class="home"><i class="icon fa fa-home fa-2x fa-hover-show"></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
        </header>
            <nav class="menu">
                    <a href="create_v.php">Create</a> 
                    <a href="findOne_v.php">Find one</a>
                    <a href="showAll_v.php">Show all</a>  
            </nav>
            <main class="tabs">
                <section class="tab" id="showAll">
                    <?php  
                    $mysql= new mysqli("localhost","root","","mvc");
                    if($mysql->connect_error)
                        die('Cannot connect with database');
                    $registros=$mysql->query("SELECT id,description,user,start_date,end_date,status FROM tareas") or 
                        die ($mysql->error);
                
                    echo '<table class="all_tasks">';
                    echo '<tr><th>ID</th><th>Description</th><th>user</th><th>start date</th><th>end date</th><th>status</th></tr>';
                    while ($reg=$registros->fetch_array()) 
                    {
                        echo'<tr>';
                        echo'<td>';
                        echo $reg['id'];
                        echo'</td>';
                        echo'<td>';
                        echo $reg['description'];
                        echo'</td>';
                        echo'<td>';
                        echo $reg['user'];
                        echo'</td>';
                        echo'<td>';
                        echo $reg['start_date'];
                        echo'</td>';
                        echo'<td>';
                        echo $reg['end_date'];
                        echo'</td>';
                        echo'<td>';
                        echo $reg['status'];
                        echo'</td>';
                        echo'</tr>';
                    }
                    echo '<table>';
                    $mysql->close();
                ?>                 
                </section> 
            </main>
            <footer>
                <p>
                    &#169; 2022 ToDoApp, Developers Team.
                </p>    
            </footer>
        </div>
    </body>
    
</html>

