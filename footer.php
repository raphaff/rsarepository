<div class="container"> <footer class="py-3 my-4"> <ul class="nav justify-content-center border-bottom pb-3 mb-3"> <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Home</a></li> <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Features</a></li> <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">Pricing</a></li> <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">FAQs</a></li> <li class="nav-item"><a href="#" class="nav-link px-2 text-body-secondary">About</a></li> </ul> <p class="text-center text-body-secondary">Raphaff Soluções Digitais © 2026 - Todos os direitos reservados.</p></footer> </div>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
      <?php wp_footer(); ?>
    </body>
  </html>


  <div class="widget widget_categories">
					<h2 class="widget-title"><?php esc_html_e( 'Most Used Categories', 'elementic' ); ?></h2>
					<ul>
						<?php
						wp_list_categories(
							array(
								'orderby'    => 'count',
								'order'      => 'DESC',
								'show_count' => 1,
								'title_li'   => '',
								'number'     => 10,
							)
						);
						?>
					</ul>
				</div><!-- .widget -->