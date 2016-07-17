<?php get_header(); ?>

<!-- Start index file -->

<div class="ui-breadcrumbs"> 
      <!-- Breadcrumbs -->
      <ul class="ui-breadcrumbs-list">
        <li><a href="/mc/" title="You are here">Home</a></li>
      </ul>
    </div>
    <!-- Content 24. 960 -->
    <div class="content container_24 clearfix">
      <div style="clear:both;"></div>
      <div id="page-content" class="grid_18 suffix_1 three-col-col-2 andrew">
        <div class="hidden-dragon">
          <h1>Marketing &amp; Communications </h1>
        </div>
        
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

		<div <?php post_class() ?> id="post-<?php the_ID(); ?>">

			<h2><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h2>

			<?php include (TEMPLATEPATH . '/inc/meta.php' ); ?>

			<div class="entry">
				<?php the_content(); ?>
			</div>

			<div class="postmetadata">
				<?php the_tags('Tags: ', ', ', '<br />'); ?>
				Posted in <?php the_category(', ') ?> | 
				<?php comments_popup_link('No Comments &#187;', '1 Comment &#187;', '% Comments &#187;'); ?>
			</div>

		</div>

	<?php endwhile; ?>

	<?php include (TEMPLATEPATH . '/inc/nav.php' ); ?>

	<?php else : ?>

		<h2>Not Found</h2>

	<?php endif; ?>



        
      </div>
      
      <!-- End index.php -->
      
      <!-- Right Sidebar -->
      
      <?php get_sidebar(); ?>

	

    </div>
    <!-- End Content 24 --> 
  </div>
  <!-- End page three-column --> 
  
<?php get_footer(); ?>