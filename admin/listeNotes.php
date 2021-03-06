<!--

=========================================================
* Now UI Dashboard - v1.5.0
=========================================================

* Product Page: https://www.creative-tim.com/product/now-ui-dashboard
* Copyright 2019 Creative Tim (http://www.creative-tim.com)

* Designed by www.invisionapp.com Coded by www.creative-tim.com

=========================================================

* The above copyright notice and this permission notice shall be included in all copies or substantial portions of the Software.

-->
<?php
                            // Informations d'identification
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'projet_web');
 
// Connexion à la base de données MySQL 
$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
 
// Vérifier la connexion
if($conn === false){
    die("ERREUR : Impossible de se connecter. " . mysqli_connect_error());
}
                             $query = "SELECT * FROM `classe`";
                             $classes = mysqli_query($conn,$query) or die(mysql_error()); 
                             
                             
                           

                            ?>
<?php
  // Initialiser la session
  session_start();
  // Vérifiez si l'utilisateur est connecté, sinon redirigez-le vers la page de connexion
  if(!isset($_SESSION["username"])){
    header("Location: /projet");
    exit(); 
  }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="../assets/img/apple-icon.png">
    <link rel="icon" type="image/png" href="../assets/img/favicon.png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>
       Tek-up
    </title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0, shrink-to-fit=no' name='viewport' />
    <!--     Fonts and icons     -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700,200" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/now-ui-dashboard.css?v=1.5.0" rel="stylesheet" />
    <!-- CSS Just for demo purpose, don't include it in your project -->
    <link href="../assets/demo/demo.css" rel="stylesheet" />
</head>

<body class="">
<div class="wrapper ">
    <div class="sidebar" data-color="mycolor">
        <!--
          Tip 1: You can change the color of the sidebar using: data-color="blue | green | orange | red | yellow"
      -->
        <div class="logo">
            <img src="../assets/img/logo.jpg"></img>
        </div>
        <div class="sidebar-wrapper" id="sidebar-wrapper">
        <ul class="nav">
                <li>
                    <a href="dashboard.php">
                        <i class="now-ui-icons design_app"></i>
                        <p>Dashboard</p>
                    </a>
                </li>
                <li>
                    <a href="newuser.php">
                        <i class="now-ui-icons education_atom"></i>
                        <p>Ajouter un utilisateur</p>
                    </a>
                </li>
                <li>
                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="now-ui-icons ui-1_bell-53"></i>   enseignant
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="listeEns.php">liste des enseignant</a>
    <a class="dropdown-item" href="newEnsg.php">ajouter enseignant</a>

                </li>
                <li>
               
                        
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <i class="now-ui-icons ui-1_bell-53"></i>   etudiants
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="etudiants.php">liste des etudiants</a>
    <a class="dropdown-item" href="newEtudiant.php">ajouter etudiant</a>
    <a class="dropdown-item" href="abssence.php">Abssence</a>
    <a class="dropdown-item" href="Notes.php">Notes</a>

    <a class="dropdown-item" href="listeNotes.php">liste Notes</a>
    <a class="dropdown-item" href="listeAbssence.php">liste Absence</a>

  </div>
                            
                       
                  
                </li>
                <li>
               
                        
               <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
               <i class="now-ui-icons ui-1_bell-53"></i>   Affectation
               <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
<a class="dropdown-item" href="listeaffectation.php">Affecter</a>
<a class="dropdown-item" href="affectation.php">liste des Affectation</a>

</div>
           
      
 
</li>
                <li>
                    <a href="registre.php">
                        <i class="now-ui-icons users_single-02"></i>
                        <p>User Profile</p>
                    </a>
                </li>
               
            </ul>
        </div>
    </div>
    <div class="main-panel" id="main-panel">
        <!-- Navbar -->
        <nav class="navbar navbar-expand-lg navbar-transparent  bg-primary  navbar-absolute">
            <div class="container-fluid">
                <div class="navbar-wrapper">
                    <div class="navbar-toggle">
                        
                    </div>
                   
                </div>
                
                <div class="collapse navbar-collapse justify-content-end" id="navigation">
                   
                <ul class="navbar-nav">
                        
                        <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <?php echo $_SESSION['username']; ?><span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="logout.php">
                                 logout
                                        
                                    </a>

                                    <form id="logout-form" action="logout.php" method="POST" style="display: none;">
                                        
                                    </form>
                                </div>
                            </li>
                       
                    </ul>
                </div>
            </div>
        </nav>
        <!-- End Navbar -->
        <div class="panel-header panel-header-sm">
        </div>
        <div class="content">
            
        <div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title"> Ajouter Note</h4>
            </div>
            <div class="card-body">
               <form methode="GET" >
            <label for="name">Classe :</label>
                <select  name="idclasse" >
                <?php
                        
                        while($classe = mysqli_fetch_assoc($classes)):?>
                           <option value=<?php echo $classe['id'];?>><?php echo$classe ['label']?></option>
                            <?php
                            endwhile;
                            ?>
            </select>
            <input type=submit name="filter" value="filtrer" />
                        </form>
                <div class="table-responsive">
                
                    <table class="table">
                        
                        <thead class=" text-primary">
                        <th>
                        Etudiant
                        </th>
                        <th>
                        Module
                        </th>
                        <th>
                        Date
                        </th>
                        <th>
                        Note
                        </th>
                        
                        </thead>
                        <tbody>
                           
                            
                            <?php
                              if (isset( $_GET['filter'])){
                                 $c=$_GET['idclasse'];
                            
                             $query=("SELECT * FROM `examen` WHERE `id_etud`in (SELECT id FROM `etudiants` where classe =$c)");
                             $Notes= mysqli_query($conn,$query) or die(mysql_error()); 
                             $query= "SELECT * FROM `module`where id in (select id_mod from module_par_spec where id_spec in (select id_spec from classe where id =$c) AND id_niv in (select niveau from classe where id =$c) )";
                             $modules = mysqli_query($conn,$query) or die(mysql_error()); 
                             
                        foreach($Notes as $Note){
                        ?>
                        <tr>
                            <td>
                            <?php 
                            $id=$Note['id_etud'];
                             $query= "SELECT * FROM `etudiants` where id =$id";
                             $etudiants = mysqli_query($conn,$query) or die(mysql_error()); 
                             foreach($etudiants as $etudiant){
                            echo $etudiant ['nom']." ".$etudiant ['prenom'];} ?>
                            
                            </td>
                            <td>
            <?php   
                         $id=$Note['id_m'];
                         $query= "SELECT * FROM `module` where id =$id";
                         $modules = mysqli_query($conn,$query) or die(mysql_error()); 
                         foreach($modules as $module){
                        echo $module ['libelle'];
                        }} ?>
                            
                        
                            </td>
                            <td>
                          <?php echo $Note['date_ex'];?>
                            </td>
                            <td>
                            <?php echo $Note['note'];?>

                            </td>
                            <td class="text-right">

                            </td>
                        </tr><?php
                        }
                        ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
</div>
</div>

        <footer class="footer">
            <div class=" container-fluid ">
                <nav>
                    <ul>
                        <li>
                            <a href="https://www.creative-tim.com">
                                Creative Tim
                            </a>
                        </li>
                        <li>
                            <a href="http://presentation.creative-tim.com">
                                About Us
                            </a>
                        </li>
                        <li>
                            <a href="http://blog.creative-tim.com">
                                Blog
                            </a>
                        </li>
                    </ul>
                </nav>
                <div class="copyright" id="copyright">
                    &copy; <script>
                        document.getElementById('copyright').appendChild(document.createTextNode(new Date().getFullYear()))
                    </script>, Designed by <a href="https://www.invisionapp.com" target="_blank">Invision</a>. Coded by <a href="https://www.creative-tim.com" target="_blank">Creative Tim</a>.
                </div>
            </div>
        </footer>
    </div>
</div>
<!--   Core JS Files   -->
<script src="../assets/js/core/jquery.min.js"></script>
<script src="../assets/js/core/popper.min.js"></script>
<script src="../assets/js/core/bootstrap.min.js"></script>
<script src="../assets/js/plugins/perfect-scrollbar.jquery.min.js"></script>
<!--  Google Maps Plugin    -->
<script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY_HERE"></script>
<!-- Chart JS -->
<script src="../assets/js/plugins/chartjs.min.js"></script>
<!--  Notifications Plugin    -->
<script src="../assets/js/plugins/bootstrap-notify.js"></script>
<!-- Control Center for Now Ui Dashboard: parallax effects, scripts for the example pages etc -->
<script src="../assets/js/now-ui-dashboard.min.js?v=1.5.0" type="text/javascript"></script><!-- Now Ui Dashboard DEMO methods, don't include it in your project! -->
<script src="../assets/demo/demo.js"></script>
@yield('script')
</body>

</html>