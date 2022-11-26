<?php include_once("Header.php");?>

<div id="contact"  class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Conctato</h2>
                  </div>
                  
                  <?php
                    if($_POST){

                         $Nombre=$_POST['nombre'];
                         $Apellido=$_POST['apellido'];
                         $Email= $_POST['email'];
                         $Sector= $_POST['sector'];
                         $Mensaje= $_POST['mensaje'];

                        if(empty($Nombre)){
                           echo"Escriba el nombre";
                        }

                        if(empty($Apellido)){
                            echo"Escriba el apellido";
                         }

                        if(empty( $Email)){
                            echo"Escriba su email";
                        }

                        if(empty($Sector)){
                            echo"Escriba su dirrecion";
                        }

                         if(empty($Mensaje)){
                            echo"Escriba su mensaje";
                         }
                             
                            echo"<p>Nos Conctataste</p>";
                             $Servidor = 'localhost';
                             $User = 'root';
                             $Pass = '';
                             $Db = 'db_proyectofinal_20210058';
                             $Con = new mysqli($Servidor,$User,$Pass,$Db ) or die('Error con la base de datos');
                             echo $Guardar = "insert into conctato (nombre, apellido, email, sector, mensaje) values
                                 ('$Nombre','$Apellido','$Email','$Sector','$Mensaje') ";

                             if(mysqli_query($Con,$Guardar)){
                                 echo"<p>Los datos han sido registrado correctamente</p>";
                             }else{
                                 echo"<p> Su registro no es valido</p>";
                             }
                    }
                 ?>