    <!-- Footer -->
<!--<footer class="bg-dark py-5">-->
    <footer class="py-5" style="background-color: #1B1A3C;">
      <div class="container">
        <div class="row">
          <div class="col-md-8 text-center text-md-left mb-3 mb-md-0">
            <small class="text-white">&copy; 2019<br> 
            	<a class="text-white" href="https://grupo-ioa.atmosfera.unam.mx">Centro de Ciencias de la Atmósfera. </a> 
            	<br> 
            	<a class="text-white" href="https://www.unam.mx"> Universidad Nacional Autónoma de México</a>. <br> Todos los derechos reservados
            </small>
          </div>

          <div class="col-md-4 align-self-center">
            <ul class="list-inline text-center text-md-right mb-0">
              <!--<li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Facebook">
                <a class="text-white" target="_blank" href="https://www.facebook.com/grupoioa">
                  <i class="fab fa-facebook"></i>
                </a>
              </li>
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Instagram">
                <a class="text-white" target="_blank" href="https://www.instagram.com/grupoioa">
                  <i class="fab fa-instagram"></i>
                </a>
              </li>
             < <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Twitter">
                <a class="text-white" target="_blank" href="https://twitter.com/grupoioa">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>-->
              <li class="list-inline-item mx-2" data-toggle="tooltip" data-placement="top" title="Github">
                <a class="text-white" target="_blank" href="https://github.com/grupoioa">
                  <i class="fab fa-github"></i>
                </a>
              </li>
            </ul>
          </div>
        </div>
      </div>
    </footer>
    <!-- End Footer -->

    <!-- JAVASCRIPTS (Load javascripts at bottom, this will reduce page load time) -->
    <!-- Global Vendor -->
    <script src="<?php echo base_url('assets/vendors/jquery.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/jquery.migrate.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/bootstrap/js/bootstrap.min.js'); ?>"></script>

    <!-- Components Vendor  -->
    <script src="<?php echo base_url('assets/vendors/jquery.parallax.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/typedjs/typed.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/slick-carousel/slick.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/counters/waypoint.min.js'); ?>"></script>
    <script src="<?php echo base_url('assets/vendors/counters/counterup.min.js'); ?>"></script>

    <!-- Theme Settings and Calls -->
    <script src="<?php echo base_url('assets/js/global.js'); ?>"></script>

    <!-- Theme Components and Settings -->
    <script src="<?php echo base_url('assets/js/vendors/parallax.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendors/carousel.js'); ?>"></script>
    <script src="<?php echo base_url('assets/js/vendors/counters.js'); ?>"></script>
    <!-- END JAVASCRIPTS -->

    <script>
      $(document).on('ready', function () {
        // initialization of text animation (typing)
        $(".js-display-typing").typed({
          strings: [
            "Stream",
            "Creative",
            "Innovative"
          ],
          typeSpeed: 60,
          loop: true,
          backDelay: 2500
        });
      });
    </script>
    <script>
      twttr.widgets.createTimeline(
        {
          sourceType: "profile",
          screenName: "TwitterDev"
        },
        document.getElementById("container")
      );
    </script>
  </body>
  <!-- End Body -->
</html>
