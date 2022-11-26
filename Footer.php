<!-- map -->

      <!-- end map -->
      <!--  footer -->
      <footer>
         <div class="footer">
            <div class="container">
               <div class="row">
                  <div class="col-md-12">
                     <h2>Inscribete en nuestro Newsletter </h2>
                     <form class="news">
                        <input class="newslatter" placeholder="Inserta tu email" type="text" name=" Inserta tu Email">
                        <button class="submit">Inscribete</button>
                     </form>
                  </div>
                  <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 ">
                     <div class="row">
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           <div class="address">
                              <h3>Sobre Nosotros </h3>
                              <a  href="index.png"> <img class="logo1" src="images/logo2.png" alt="logo"></a>
                              <ul class="sociel">
                                 <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                                 <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                                 <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a></li>
                                 <li> <a href="Javascript:void(0)"><i class="fa fa-instagram"></i></a></li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           <div class="address">
                              <h3>Links Rápidos  </h3>
                              <ul class="Links_footer">
                                 <li class="active"><a href="index.php"> <i class="fa fa-angle-right" aria-hidden="true"></i>Inicio </a> </li>
                                  <li><a href="Arte.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Arte  </a> </li>
                                 <li><a href="#Servicios.php"><i class="fa fa-angle-right" aria-hidden="true"></i> Servicios</a> </li>
                                 <li><a href="Conctato.php"><i class="fa fa-angle-right" aria-hidden="true"></i>Conctatos  </a> </li>
                              </ul>
                           </div>
                        </div>
                        <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12">
                           <div class="address">
                              <h3>Información </h3>
                              <ul class="loca">
                                 <li>
                                    <a href="Javascript:void(0)"><img src="icon/1.png" alt="#" /></a>  <span class="offf">Oficiona Corporativa Dirección:</span><br>Santo Domingo, Zona Colonial <br>
                                 </li>
                                 <li>
                                    <a href="Javascript:void(0)"><img src="icon/2.png" alt="#" /></a> 809-000-0000
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
      </footer>
      <!-- end footer -->
      </div>
      </div>
      <div class="overlay"></div>
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
      <script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
      <script type="text/javascript">
         $(document).ready(function() {
         
             $("#sidebar").mCustomScrollbar({
                 theme: "minimal"
             });
         
             $('#dismiss, .overlay').on('click', function() {
                 $('#sidebar').removeClass('active');
                 $('.overlay').removeClass('active');
             });
         
             $('#sidebarCollapse').on('click', function() {
                 $('#sidebar').addClass('active');
                 $('.overlay').addClass('active');
                 $('.collapse.in').toggleClass('in');
                 $('a[aria-expanded=true]').attr('aria-expanded', 'false');
             });
         
         });
      </script>
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>