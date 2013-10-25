    <?php 
    /* Template Name: No Sidebar */
    get_header(); ?>
      <div class="row-fluid">
        <div class="span12">
          <!-- Start The Loop -->
          <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
              <div id="content">
                <h1><?php the_title(); ?></a></h1>
                <?php the_content() ?>
              </div><!--/content-->
          <?php endwhile; else: ?>
          <?php endif; ?>
          <!-- End the Loop -->
          </div><!--/ .span -->
        </div><!--/ .row -->
      <?php include("widget-footer.php"); ?>
      <?php get_footer(); ?>