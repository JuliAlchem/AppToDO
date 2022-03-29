<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Styles/intro.css">
        <link rel="stylesheet" href="../Styles/create.css">
        <link rel="stylesheet" href="../Styles/findOne.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>CONTROLLER | Modify task</title>
    </head>
    <body>
        <div class = 'container'>
            <header>
                <p><a href="intro.html" class="home"><i class="icon fa fa-home fa-2x fa-hover-show"></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
            </header>
            <nav class="menu">
                    <a href="../view/create.php">Create</a> 
                    <a href="../view/findOne_v.php">Find one</a>
                    <a href="../view/showAll.php">Show all</a>  
            </nav>
            <main >
<?php 

$mysql = new mysqli("localhost","root","","mvc");
if($mysql->connect_error)
	die('Cannot connect with database');
    $cont=$_GET['id'];
  
        $entry = $mysql->query("SELECT * FROM tareas WHERE id = $cont") or 
        die ($mysql->error);
    //echo"Tasks with index ".$cont." has been erased!";
    //header("Location: findOne_v.php?record=Task was successfully deleted!");

$mysql->close();

echo"<br>";
 ?>                    
                    <?php
                    $cont=$_GET['id'];
                    echo '<table class="all_tasks">';
                    echo '<tr><th>ID</th><th>Description</th><th>user</th><th>start date</th><th>end date</th><th>status</th></tr>';
                    if ($reg=$entry->fetch_array())
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
                    ?>
                    <form method="post"  action="../model/modify_m.php">
                    <label for="id">ID</label>
                    <input name="id" type="text" value="<?php echo $cont;?>">
                    <label for="user">Name:</label>
                    <input name="user" type="text" placeholder="insert new name"><br>               
                    <label for="start_date">New start date:</label>
                    <input name="start_date" type="datetime"placeholder="insert new start date"><br><br>
                    <label for="end_date">New finish date:</label>
                    <input name="end_date" type="datetime" placeholder="insert end date"><br><br>

                    <label for="description" style="font-size: 24px;">New description:</label><br>
                    <textarea name="description" type="text" placeholder="insert new description"></textarea><br>

                    <label for="status">Update status:</label>


                    <select id="status" name="status">
                    <option name="pending" value="pending">Pending</option>
                    <option name="progress" value="progress">Progress</option>
                    <option name="finished" value="finished">Finished</option>
                    </select>
                     <br>
                     <br>

                    <input name='submit' type="submit" value="New" 
                           style="
                                    font-weight: bold ;
                                    background-color: #0d90c3 ;
                                    padding: 16px 32px;
                                    margin-top: 25px;
                                    margin-bottom: 0px;
                                    cursor: pointer;
                                    color: white ";>

                </form> 
               

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