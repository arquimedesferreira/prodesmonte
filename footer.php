        
   <?php $home_footer = get_template_directory_uri();?>
<!--no footer   -->
        <footer class="bg-faded text-center py-5">
            <div class="container">
              <p class="m-0">Copyright &copy; Arquitec 2017</p>
            </div>
        </footer>
        <script src="<?= $home_footer ?>/vendor/jquery/jquery.min.js"></script>
        <script src="<?= $home_footer ?>/vendor/popper/popper.min.js"></script>
        <script src="<?= $home_footer ?>/vendor/bootstrap/js/bootstrap.min.js"></script>
        
<?php wp_footer();?>