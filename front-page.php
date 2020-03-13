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
  <!-- <ol class="carousel-indicators">
    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
  </ol> -->
  <div class="carousel-inner">

  <div class="carousel-item active">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c3.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
      <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
        <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
      </div>
  </div>

  <div class="carousel-item ">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c4.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
        <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
        <button type="submit" class="btn btn-outline btn-primary">Explore College</button>
      </div>
  </div>
  
  <div class="carousel-item ">
      <div class="banner" style="background-image: url(<?php echo get_template_directory_uri();?>/assets/images/c5.jpg)"></div>
      <div class="carousel-caption hero-banner d-none d-md-block">
      <h5>Building</h5>
        <h5> Character</h5>
        <p>Our students are challenged to grow intellectually here I am again adding new content for p elelment</p>
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
<!-- End of Hero Section  -->


<!-- starting second section  -->
<section id="message-from-principle">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <h1>
        Attainment of education should have its core significance
  when its applicability
        </h1>
        <p>Welcome to Texas College located at the heart of Kathmandu near Chabahil Area</p>
        <button class="btn btn-primary wel-btn">Welcome </button>
      </div>
      <div class="col-md-6">
        <figure>
          <img src="<?php echo get_template_directory_uri()?>/assets/images/c5.jpg" alt="">
          <figcaption>Prof. Dr. Jai Raj Awasthi</figcaption>
        </figure>
      </div>
    </div>
  </div>
</section>

<!-- ending of second section  -->


<!-- starting of iamge Grid session  -->
<section id="img-grid">
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 grid-img">
        <!-- small circle  -->
          <div>
            <div class="position-absolute circle-md">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u1.jpeg" alt="">
            </div>
            <div class="position-absolute circle-md">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u4.jpeg" alt="">
            </div>
            <div class="position-absolute circle-md">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u5.jpeg" alt="">
            </div>
          </div>
        <!-- large circle  -->
          <div>
            <div class="position-absolute circle-big">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u2.jpeg" alt="">
            </div>
            <div class="position-absolute circle-big">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u8.jpeg" alt="">
            </div>
          </div>
      </div>
      <div class="col-md-4 mid-text">
        <h1>A Community of Connection</h1>
        <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. 
          Debitis alias tempora, consequuntur accusamus at doloremque 
          saepe, nulla sit deleniti sequi iure reiciendis! Animi 
          accusantium consequuntur quis atque illum iusto numquam!</p>
      </div>
      <div class="col-md-4 grid-img right-grid">
         <!-- small circle  -->
         <div>
            <div class="position-absolute circle-md">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u6.jpeg" alt="">
            </div>
            <div class="position-absolute circle-md">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u7.jpeg" alt="">
            </div>
            <div class="position-absolute circle-md">
            <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u9.jpeg" alt="">
            </div>
          </div>
        <!-- large circle  -->
          <div>
            <div class="position-absolute circle-big">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u10.jpeg" alt="">
            </div>
            <div class="position-absolute circle-big">
              <img src="<?php echo get_template_directory_uri()?>/assets/images/users/u11.jpeg" alt="">
            </div>
          </div>
      </div>
    </div>
  </div>
</section>
<!-- ending of image grid session  -->

<!-- about us session start  -->

<section id="about-us">
  <div class="container-fluid">
    <div class="row about-row">
      <div class="col-md-4 about-banner">
        <h1>Our Schools</h1>
        <p>Lorem ipsum dolor, sit amet consectetur adipisicing 
          elit. Impedit at id autem aspernatur, labore, vero 
          exercitationem rem corporis voluptates iste tempora 
          suscipit, ipsum commodi voluptatem nam laboriosam 
          fugit fugiat vel.</p>

      <button class="btn btn-primary">Apply Now</button>
      </div>
      <div class="col-md-4">
        <div class="place">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/school/college.jpeg" alt="">
      
      </div>
      </div>
      <div class="col-md-4 ">
        <div class="place">
      <img src="<?php echo get_template_directory_uri()?>/assets/images/school/college.jpeg" alt="">
      </div>
      </div>
    </div>
  </div>
</section>

<!-- about us session end  -->

<section id="footer">
  <div class="container-fluid">
    <div class="container">
      <div class="row">
        <div class="col-md-3">
          <h3>Contact</h3>
          <p>Chabahil Pipalbot</p>
          <p>Ph. no 123 456</p>
        </div>
        <div class="col-md-4">
          <h3>Quick Links</h3>
          <nav class="quick-links">
            <ul>
              <li>Contact Us</li>
              <li>Terms and Conditions</li>
              <li>Blogs</li>
            </ul>
          </nav>
        </div>
        <div class="col-md-5">

        </div>
      </div>
    </div>
  </div>
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