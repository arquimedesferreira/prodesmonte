<?php get_header();?>
<!--page page -->
<?php $page_diretorio = get_template_directory_uri();?>



<!--End Testabo page -->
		
					

				
<?php if(is_page('parceiros')){ ?>
<!--End Testando servico-->
      <!--Pagina de Servico-->
      <div class="container">

      <div class="bg-faded p-4 my-4">
        
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">
         <strong>Parceiros</strong> dos quais
          <strong> trabalhamos </strong>
        </h2>
        <hr class="divider">
        <div class="row">
            <!-- -->
            <div class="col-lg-6">
              <img class="img-fluid mb-4 mb-lg-0" src="<?= $page_diretorio ?>/img/slide-2.jpg" alt="">
            </div>
          
          <div class="col-lg-6">
            <p>Trabalhamos com empresas que disponibilizam serviços de qualidade e comodidade.</p>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Parceiros</h2>
        <hr class="divider">

        <div class="row">
        
        <?php     $args = array('post_type'=>'parceiros');
                        // The Query
                        $loop = new WP_Query( $args );

                        // The Loop
                        if ( $loop->have_posts() ) {
                             ?>   

                            
                            <?php while ( $loop->have_posts() ) {
                                $loop->the_post(); 
                            ?>
                            <div class="col-md-4 mb-4 mb-4">
                                <div class="card h-100">
                                  <?php the_post_thumbnail('thumbnail', ['class' => 'd-block img-fluid w-100 wp-post-image']); ?>
                                  <div class="card-body text-center">
                                      <h4 class="card-title m-0"><?php the_title();?>
                                      <small class="text-muted">  </small>
                                      </h4>
                                  </div>
                                </div>
                            </div>
                            <?php                           
                            }            
                                     
                            /* Restore original Post Data */
                            wp_reset_postdata();
                        } else {
                            // no posts found
                        }                     
                        ?>           

    </div>
    <!-- /.container -->

<?php } //End servicos?>
                                                           
<?php if(is_page('contatos')){ ?>
     <!--Pagina de Contato-->
         
     <div class="container">

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0">Localização | <strong>Contato</strong></h2>
        <hr class="divider">
        <div class="row">
          <div class="col-lg-8">
              <a href="https://www.google.com.br/maps/search/AVENIDA+CASTELO+BRANCO,+3351B/@-3.7135792,-38.5716783,14.64z" 
                 alt="Clique no mapa">
                 <img class="img-fluid mb-4 mb-lg-0" 
                  src="<?= $page_diretorio ?>/img/mapa_pro_desmonte.png" 
                  title="Localização de VoliCharter" alt="Localização de VoliCharter">
            </a>
            
          </div>
          <div class="col-lg-4 ">
            <h5 class="mb-0"><strong>Telefone:</strong></h5>
            <div class="mb-4"> </div>
            <div class="mb-4"> <strong>BR +55 85 9.8534-6534 </strong> <img class="img-responsive" src="<?= $page_diretorio ?>/img/whatsapp.48_48.svg" alt=""></div>
            <div class="mb-4"><strong>BR +55 85 9.8935-2193 </strong>     <img class="img-responsive" src="<?= $page_diretorio ?>/img/whatsapp.48_48.svg" alt=""></div>
            <h5 class="mb-0 " ><strong>Email:</strong></h5>
            <div class="mb-4"><a href="mail:prodesmonte@gmail.com"><strong>prodesmonte@gmail.com</strong></a> <br></div>
            <h5 class="mb-0"><strong>Endereço:</strong></h5>
            <div class="mb-4">
                <strong>Avenida Castelo Branco,3351b </strong>
              <br>
              <strong>Centro de Fortaleza-CE,</strong><br>
              <strong>CEP: 60335-050</strong><br>
            </div>
          </div>
        </div>
      </div>

      <div class="bg-faded p-4 my-4">
        <hr class="divider">
        <h2 class="text-center text-lg text-uppercase my-0"><strong>Contato</strong>
          
        </h2>
        <hr class="divider">
        <form>
          <div class="row">
            <div class="form-group col-lg-4">
              <label class="text-heading">Nome</label>
              <input type="text" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Email</label>
              <input type="email" class="form-control">
            </div>
            <div class="form-group col-lg-4">
              <label class="text-heading">Telefone</label>
              <input type="tel" class="form-control">
            </div>
            <div class="clearfix"></div>
            <div class="form-group col-lg-12">
              <label class="text-heading">Mensagem</label>
              <textarea class="form-control" rows="6"></textarea>
            </div>
            <div class="form-group col-lg-12">
              <button type="submit" class="btn btn-secondary">Enviar</button>
            </div>
          </div>
        </form>
      </div>

    </div>


    <!-- Zoom when clicked function for Google Map -->
    <script>
      $('.map-container').click(function () {
        $(this).find('iframe').addClass('clicked')
      }).mouseleave(function () {
        $(this).find('iframe').removeClass('clicked')
      });
    </script>
<?php } //End Contato  ?>

	 

<?php get_footer();?>