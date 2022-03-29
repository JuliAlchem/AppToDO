 <!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../Styles/intro.css">
        <link rel="stylesheet" href="../Styles/create.css">
        <link rel="stylesheet" href="../Styles/showAll.css">
        <link rel="stylesheet" href="../Styles/findOne.css">
        <!--<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
        <title>VIEW | Find One</title>
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
                <br>
                <section> <!--form para el buscador que pasa los parametros a la misma web -->

                    <div class="search-container">  
                    <form method="post" action="findOne_v.php">
                        <input type="text" placeholder="Search.. for task" name="id">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                      <form method="post" action="findOne_v.php">
                        <input type="text" placeholder="Search.. for name" name="user">
                        <button type="submit" class="btn"><i class="fa fa-search"></i></button>
                      </form>
                      <br>
                    </div>
                   
                    <section class="tab" id="showAll">

                    <?php  
                    $mysql= new mysqli("localhost","root","","mvc");
                    if($mysql->connect_error)
                        die('Cannot connect with database');
                    if (isset($_POST["id"])) {  //si se ha buscado por id busca la entrada
                    $registros=$mysql->query("SELECT id,description,user,start_date,end_date,status FROM tareas WHERE id=$_REQUEST[id]") or 
                        die ($mysql->error);}
                    if (isset($_POST["user"])) { //si se ha buscado por nombre busca todas la entradas
                    $registros=$mysql->query("SELECT id,description,user,start_date,end_date,status FROM tareas WHERE user='$_REQUEST[user]'") or 
                        die ($mysql->error);}
                        $mysql->close();
                        
                        $title = $_GET['record'];
                        echo $title;
                        if (isset($_POST["id"]) || isset($_POST["user"])) {  //si se ha lanzado la busqueda crea tabla 
                    echo '<table class="all_tasks">';
                    echo '<tr><th>ID</th><th>Description</th><th>user</th><th>start date</th><th>end date</th><th>status</th></tr>';}
                    while ($reg=$registros->fetch_array()) //hasta que haya entradas imprime registros, si es por id es una sola y si es por nombre pueden ser mas
	        
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
                        $id_loop=$reg['id'];
                        echo "<td><a href='../controller/modify_c.php?id=".$id_loop."'><i class='fa fa-edit'></i>Modify</a></td>";  // borra la entrada
                        echo'</td>';
                        echo "<td><span><a href='../model/erase_m.php?id=".$id_loop."'><i class='fa fa-trash'></i>Delete</a></span></td>"; // modifica la entrada                   
                        echo'</td>';
                        echo'</tr>';
                    }
                    echo '<table>';
                   
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

