<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" href="../Styles/intro.css">
        <link rel="stylesheet" href="../Styles/create.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
        <title>VIEW | Create new  task</title>
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
            <main >
                <section class="tab active" id="create">
                <form method="post"  action="../model/create_model.php">
                    <label for="user">Name:</label>
                    <input name="user" type="text"><br>

                    <label for="start_date">Start date:</label>
                    <input name="start_date" type="datetime"><br><br>

                    <label for="description" style="font-size: 24px;">Description:</label><br>
                    <textarea name="description" type="text"></textarea><br>

                    <label for="status">Status:</label>


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
                     <?php 
                     $title = $_GET['record'];
                     echo $title;
                     ?>
            </main>
            <footer>
                <p>
                    &#169; 2022 ToDoApp, Developers Team.
                </p>
            </footer>
        </div>
    </body>
    
</html>

