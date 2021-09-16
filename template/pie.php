
<div class="overlay"></div>

<fooetr style="width: 100% !important;">
     <div class="copyright">
          <div class="container">
               <p>© 2021 All Rights Reserved. Design by<a> TecnoEAM</a></p>
          </div>
     </div>
</fooetr>

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/custom.js"></script>
<script src="js/jquery.mCustomScrollbar.concat.min.js"></script>

<script src="js/jquery-3.0.0.min.js"></script>
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

<style>
     #owl-demo .item {
          margin: 5px;
     }

     #owl-demo .item img {
          background-color: black;
          display: block;
          width: 100%;
          height: auto;
     }
</style>


<script>
     $(document).ready(function() {
          var owl = $('.owl-carousel');
          owl.owlCarousel({
               margin: 10,
               nav: true,
               loop: true,
               responsive: {
                    0: {
                         items: 1
                    },
                    600: {
                         items: 2
                    },
                    1000: {
                         items: 5
                    }
               }
          })
     })
</script>



     </div>
     </div>
</body>

</html>