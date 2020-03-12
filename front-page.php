<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Buziness
 */

get_header(); ?>
<section id="hero-section">
<!-- Carousel Start -->

<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
  <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol>
  <div class="carousel-inner">

  <div class="carousel-item active">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c3.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
      <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually in a close-knit learning community.</p>
        <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
      </div>
  </div>

  <div class="carousel-item ">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c4.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
        <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually in a close-knit learning community.</p>
        <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
      </div>
  </div>
  
  <div class="carousel-item ">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c5.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
      <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually in a close-knit learning community.</p>
        <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
      </div>
  </div>

  </div>
  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

    <!-- Carousel End -->
</section>
    
			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();
?>