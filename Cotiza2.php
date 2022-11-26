<?php include_once("Header.php");?>

<div id="contact"  class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Cotiza</h2>
                  </div>
                  <?php
                    if($_POST){

                        $Nombre=$_POST['nombre'];
                         $Email= $_POST['email'];
                         $Numero= $_POST['numero'];
                         $Sector= $_POST['sector'];
                         $Peticion= $_POST['peticion'];

                        if(empty($Nombre)){
                           echo"Escriba el nombre";
                        }

                        if(empty($Email)){
                            echo"Escriba su email";
                        }

                        if(empty($Numero)){
                            echo"Escriba su numero";
                        }

                        if(empty($Sector)){
                            echo"Escriba su sector";
                        }

                        if(empty($Peticion)){
                            echo"Escriba su peticion";
                        }

                            echo"<p>Resgistrado</p>";
                             $Servidor = 'localhost';
                             $User = 'root';
                             $Pass = '';
                             $Db = 'db_proyectofinal_20210058';
                             $Con = new mysqli($Servidor,$User,$Pass,$Db ) or die('Error con la base de datos');
                             echo $Guardar = "insert into cotiza (nombre, email, numero, sector, peticion) values
                                 ('$Nombre','$Email','$Numero','$Sector','$Peticion') ";

                             if(mysqli_query($Con,$Guardar)){
                                 echo"<p>Los datos han sido registrado correctamente</p>";
                             }else{
                                 echo"<p> Su registro no es valido</p>";
                             }
                    }
                 ?>