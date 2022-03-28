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
                    <p>Welcome to <a href="../MongoPhpApp/index.php" class="home"><i class="icon fa fa-home fa-2x fa-hover-show" ></i><b>ToDoApp</b></a></p><!-- delete 'Welcome to' in other pages -->
            </header>

            <nav class="menu">
                    <a href="../MongoPhpApp/create.php">Create</a> 
                    <a href="../MongoPhpApp/findOne.php">Find one</a>
                    <a href="../MongoPhpApp/showAll.php">Show all</a>  
            </nav>
            <h1>Show All</h1>
       
        <main>
            <section style='width: 700px; text-align: justify;'>
                        <p> Descripció </p>
                        <p>
                            Creeu una aplicació que permeti portar un llistat de tasques per fer. 
                            Ha de contemplar l'opció d'afegir tasques, llistar-les i mostrar el seu estat (pendents, en execució o acabades), 
                            i l'hora d'inici i fi de la tasca, així com l'usuari que la va donar d'alta.
                        </p>
                        <p>
                            La aplicació ha de complir els següents casos d'ús: 
                            crear tasca, actualitzar tasca, esborrar tasca, llistar totes les tasques 
                            o llistar una tasca específica.
                        </p>
                        <p>
                            Heu d'utilitzar un repositori github seguint la seqüència gitflow.
                        </p>
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