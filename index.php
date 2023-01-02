<?php get_header(); ?>
<main>

<section class="news--container">
<div class="current--cat--wrapper">
                    <span class="current--cat--heading--info hash">Nowości</span>
                </div>
                <div class="extra--menu-wrapper ">

                    <!-- ! start of extra--menu-wrapper -->
                    <i title="Otwórz panel opcji" id="options" class="fa-solid fa-gear"></i>
                    <i title="Pisz dla nas" class="fa-solid fa-pen-nib"></i>
                    <i title="Najnowsze komentarze" class="fa-solid fa-comment"></i>
                    <!-- ! end of extra--menu-wrapper -->

                </div>
                <!-- ! start of sidebar-wrapper -->
                <aside id="sidebar">
                    <i title="Zamknij" id="close" class="fa-solid fa-xmark"></i>
                    <div class="sidebar--heading">
                        <span class="current--cat--heading--info hash">Panel ekstra opcji</span>
                    </div>
                    <div class="avatar">
                    <?php
$user = wp_get_current_user();
 
if ( $user ) :
    ?>
    <img src="<?php echo esc_url( get_avatar_url( $user->ID ) ); ?>" />
<?php endif; ?>                        
<p class="nickname"><?php echo the_author_meta( 'nickname' , $current_user->ID );   ?></p>
                    </div>
                    <div class="list--sidebar--icon--wrapper">
                        <ul class="sidebar--icons">
                            <a title="Mój profil" href=""> <i class="fa-solid fa-user"></i>
                            </a>
                            <a title="Przewodnik po ocjach dodatkowych" href=""> <i class="fa-solid fa-question"></i>
                            </a>
                            <a title="Tryb jasny/ciemny" href="#"><i class="fa-solid fa-moon"></i> </a>
                            <a title="Wylosuj tekst" href="#"> <i class="fa-solid fa-dice"></i> </a>
                            <a title="Twoje ulubione teksty" href="#"> <i class="fa-solid fa-star"></i> </a>
                            <a title="Wyloguj" href="#"> <i class="fa-solid fa-power-off"></i> </a>
                        </ul>
                    </div>
                </aside>
                <!-- ! end of sidebar-wrapper -->


                <?php
      if( have_posts() ) :
          while( have_posts() ) :
              the_post();
              get_template_part( 'template-parts/content' );
          endwhile;
      else:
          get_template_part( 'template-parts/content-none' );
      endif;
      ?>

                <!-- !pagination--wrapper start -->
                <div class="pagination--wrapper">
                    <a href=""><i class="fa-solid fa-arrow-left pag--item"></i> </a>
                    <a class="pag--item">1</a>
                    <a class="pag--item">2</a>
                    <a class="pag--item">3</a>
                    <a href=""><i class="fa-solid fa-arrow-right pag--item"></i> </a>

                </div>
                <!-- !pagination--wrapper end -->

</section>

</main>

<?php get_footer( ); ?>
       
        <!-- ! end of container -->
       