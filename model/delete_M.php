<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="Styles\intro.css">
        <link rel="stylesheet" href="Styles\findOne.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>VIEW | Find One</title>
    </head>
    <body>
        <div class = 'container'>
            <header>
                <p><a href="intro.html" class="home"><i class="icon fa fa-home fa-2x fa-hover-show"></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
        </header>
            <nav class="menu">
                    <a href="create.html">Create</a> 
                    <a href="findOne_v.php">Find one</a>
                    <a href="showAll.php">Show all</a>  
            </nav>
            <main class="tabs">
                <section>

                    <div class="search-container">
                    <form method="post" action="findOne_v.php">
                        <input type="text" placeholder="Search.. for task" name="id">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                      <form method="post" action="/app/findOne_v.php">
                        <input type="text" placeholder="Search.. for name" name="user">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                    </div>
                    <section class="tab" id="showAll">

                    <?php  
                    $mysql= new mysqli("localhost","root","","mvc");
                    if($mysql->connect_error)
                        die('Cannot connect with database');
                    if (isset($_POST["id"])) {
                    $registros=$mysql->query("SELECT id,description,user,start_date,status FROM tareas WHERE id=$_REQUEST[id]") or 
                        die ($mysql->error);}
                    if (isset($_POST["user"])) {
                    $registros=$mysql->query("SELECT id,description,user,start_date,status FROM tareas WHERE user='$_REQUEST[user]'") or 
                        die ($mysql->error);}
                    

                    echo '<table class="all_tasks">';
                    echo '<tr><th>ID</th><th>Description</th><th>user</th><th>start date</th><th>status</th></tr>';
                    while ($reg=$registros->fetch_array()) 
                    /*if ($reg=$registros->fetch_array())*/
	        
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
                        echo $reg['status'];
                        echo'</td>';
                        echo'<td class="aside">';
                        $id_loop=$reg['id'];
                        echo'<button class="btn"><i class="fa fa-edit" type="submit" value="$id_loop" ></i> Edit</button>';
                        echo'</td>';
                        echo '<td>';
                        echo "<td ><a href='erase.php?id=".$id_loop."'>Delete</a></td>"; // ESTE FUNCIONA

                         /*echo "<td><a href="delete.php?id='.$reg['id'].'">Delete</a></td>";*/
                        /*echo'<form>';            
                        echo"<input type='submit' name='del' value="$id_loop" action='erase.php'>";
                        echo'</form>'; 
                        /*echo'<button class="btn" type="submit" value="$id_loop"  action="erase.php"><i class="fa fa-trash"></i> Trash</button>'; */
                        echo'</td>';
                        echo'</tr>';
                    }
                    echo '<table>';
                    $mysql->close();
                    header("Location: findOne_v.php?record=Task was successfully deleted!");
                ?>                 
                </section>                 
                        <button class="btn"><i class="fa fa-refresh"></i> Refresh</button>                      
                        <button class="btn"><i class="fa fa-edit"></i> Edit</button>
                        <button class="btn"><i class="fa fa-trash"></i> Trash</button>
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

