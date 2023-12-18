<?php
/**
 * @package WordPress
 * @subpackage IKONIC
 */
?>



      <section class="footer">
            <div class="box-container">
                  <div class="box">
                        <h3>Quick Links</h3>
                        <a href="#home">Home</a>
                        <a href="#about">About</a>
                        <a href="#shop">Shop</a>
                        <a href="#packages">Packages</a>
                        <a href="#reviews">Reviews</a>
                        <a href="#blogs">Blogs</a>
                  </div>
                  <div class="box">
                        <h3>Extra Links</h3>
                        <a href="#">My Account</a>
                        <a href="#">My Order</a>
                        <a href="#">My Wishlist</a>
                        <a href="#">Ask Questions</a>
                        <a href="#">Term of Use</a>
                        <a href="#">Privacy Poilcy</a>
                  </div>
                  <div class="box">
                        <h3>Contact Info</h3>
                        <a href="tel:+92 3038464315"><i class="fas fa-phone-alt"></i> +92 3038464315</a>
                        <a href="tel:+92 3179227811"><i class="fas fa-phone-alt"></i> +92 3179227811</a>
                        <a href="mailto:engineer.sohaibishaque@gmail.com"><i class="fas fa-envelope"></i> engineer.sohaibishaque@gmail.com</a>
                        <a href=""><i class="fas fa-map-marker-alt"></i> Grid Colony Bagh AJK, Pakistan - 15500</a>
                  </div>
                  <div class="box">
                        <h3>Follow Us</h3>
                        <div class="icons">
                              <div class="icon">
                                    <a href=""><i class="fab fa-facebook"></i> Facebook</a>
                              </div>
                              <div class="icon">
                                    <a href=""><i class="fab fa-instagram"></i> Instagram</a>
                              </div>
                              <div class="icon">
                                    <a href=""><i class="fab fa-twitter"></i> Twitter</a>
                              </div>
                              <div class="icon">
                                    <a href=""><i class="fab fa-whatsapp"></i> WhatsApp</a>
                              </div>
                              <div class="icon">
                                    <a href=""><i class="fab fa-linkedin"></i> Linkedin</a>
                              </div>
                              <div class="icon">
                                    <a href=""><i class="fab fa-github"></i> Github</a>
                              </div>
                        </div>
                  </div>
            </div>
            <div class="credit">Created by <span>egnr. Sohaib Ishaque</span> | All Right Reserved</div>
      </section>
 	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/11.0.4/swiper-bundle.min.js"></script>
      <script src="<?php echo get_template_directory_uri();?>/assets/script.js"></script>
      <?php
          if(get_the_title(get_the_ID())=="Ajax End-Point"){
              ?>
                  <script type='text/javascript'  src="<?php echo get_template_directory_uri();?>/assets/custom-ajax.js"></script>
              <?php
          }
      ?>
</body>
</html>