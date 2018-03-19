        
   <?php $home_footer = get_template_directory_uri();?>
<!--no footer   -->
        <footer class="bg-faded text-center py-5">
            <div class="container">
              
            <div class="bg-dark text-white">
    <div class="container">
      <div class="row">
        <div class="p-4 col-md-4">
          <h2 class="mb-4 text-secondary">ProDesmonte</h2>
          <p class="text-white">A ProDesmonte é uma empresa de confiança e responsabilidade.</p>
        </div>
        <div class="p-4 col-md-4">
          <h2 class="mb-4 text-secondary">Mapa do Site</h2>
          <ul class="list-unstyled">
            <a href="#" class="text-white">Home</a>
            <br>
            <a href="#" class="text-white">Sobre Nós</a>
            <br>
            <a href="#" class="text-white">Nossos Serviços</a>
            <br>
            <a href="#" class="text-white">Contato</a>
          </ul>
        </div>
        <div class="p-4 col-md-4">
          <h2 class="mb-4">Contact</h2>
          <p>
            <a href="tel:+246 - 542 550 5462" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-phone"></i>+246 - 542 550 5462</a>
          </p>
          <p>
            <a href="mailto:info@pingendo.com" class="text-white"><i class="fa d-inline mr-3 text-secondary fa-envelope-o"></i>info@pingendo.com</a>
          </p>
          <p>
            <a href="https://goo.gl/maps/AUq7b9W7yYJ2" class="text-white" target="_blank"><i class="fa d-inline mr-3 fa-map-marker text-secondary"></i>365 Park Street, NY</a>
          </p>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 mt-3">
          <p class="text-center text-white">© All Arquitec. </p>
        </div>
      </div>
    </div>
  </div>
            </div>
        </footer>
        <script src="<?= $home_footer ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= $home_footer ?>/vendor/popper/popper.min.js"></script>
        <script src="<?= $home_footer ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
        
<?php wp_footer();?>