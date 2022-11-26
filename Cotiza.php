<?php include_once("Header.php");?>

<div id="contact"  class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Cotiza tu arte</h2>
                     <h3>Obtendrá respuesta en 24 horas.</h3>
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12">
                  <form action="Cotiza2.php" method="post" id=" color_chang" class="main_form">
                     <div class="row">
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input required class="form-control" placeholder="Nombre Completo" type="text" name="nombre">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input required class="form-control" placeholder="Email" type="email" name="email">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input required class="form-control" placeholder="Numero" type="text" name="numero">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <input required class="form-control" placeholder="Sector" type="text" name="sector">
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <textarea required class="textarea" placeholder="Petición" type="text" name="peticion"></textarea>
                        </div>
                        <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12">
                           <button class="send">Enviar</button>
                        </div>
                     </div>
                  </form>
               </div>
               <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                  <div class="map_section">
                     <div id="map">
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>