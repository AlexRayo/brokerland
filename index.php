<?php get_header(); ?>

<!--  COVER DINAMIC  -->
<div class="container-fluid bg-secondary cover d-flex align-items-center">
	<div class="col-12 col-md-8 mx-auto d-flex justify-content-between mt-5">
	<?php query_posts('category_name=cover'); ?>
	<?php $post = 1; if(have_posts()):while (have_posts() && $post < 2) : the_post(); ?>	
		<div class="col-11 col-md-6 align-self-center">
			<div class="px-4 text-white" style="">
				<h1 class="title text-xl"><?php the_title(); ?></h1>
				<?php the_content(); ?>
			</div>			
		</div>
		<div class="h-100 col-11 col-md-6 d-none d-md-inline">
			<div class="thumb" style=""><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
		</div>
		<?php $post++; endwhile;else: ?>
		<h2 class="display-3">En construcción...</h2>
		<?php endif; ?>	
	</div>
	<img src="" alt="" class="btn">
</div>

<!--  NUESTROS PLANES -->
<section class="container col-11 mx-auto py-5 my-5">				
	<div class="col-11 mb-5 mx-auto col-md-4 text-center">
		<h2>Nuestros planes</h2>
		<p>Te proporcionamos todo lo que necesitas para construir tu presencia en internet</p>		
	</div>
	<!--  PLANES -->
	<div class="row d-flex col-12 mx-auto h-100 justify-content-between">
		<?php query_posts('category_name=planes'); ?>
		<?php $post = 1; if(have_posts()):while (have_posts() && $post < 4) : the_post(); ?>
				
		<div class="plan mx-auto" style="">
			<h3 class=""><?php the_title(); ?></h3>
			<div class=""><?php the_content(); ?></div>		
		</div>
		<?php $post++; endwhile;else: ?>
			<h2 class="mx-auto text-xl">En construcción...</h2>
		<?php endif; ?>
	</div>
</section>

<!--  BENEFICIOS -->
<section class="container-fluid mx-auto py-5 bg-gray">
	<!--  PLANES -->
	<div class="row d-flex col-12 col-md-8 mx-auto h-100 justify-content-between">
		<?php query_posts('category_name=benefits'); ?>
		<?php $post = 1; if(have_posts()):while (have_posts() && $post < 4) : the_post(); ?>
				
		<div class="benefit col-10 col-sm-7 col-md-3 mx-auto" style="">
			<h3 class="title"><?php the_title(); ?></h3>
			<div class="thumb" style=""><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
			<?php the_content(); ?>	
		</div>
		<?php $post++; endwhile;else: ?>
		<?php endif; ?>
	</div>
</section>

<!--  HOSTING SPEED -->
<div class="hosting-speed container-fluid position-relative d-flex align-items-center justify-content-center justify-content-md-center text-center">
	<div class="layer"></div>
	<?php query_posts('category_name=hosting-speed'); ?>
	<?php $post = 1; if(have_posts()):while (have_posts() && $post < 2) : the_post(); ?>
		<div class="col-11 col-md-4 mx-auto content text-white text-center">
			<h2 class="text-xl"><?php the_title(); ?></h2>
			<div class="text-md"><?php the_content(); ?></div>
		</div>
		<div class="thumb" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');"></div>		
		<?php $post++; endwhile;else: ?>
	<?php endif; ?>	
</div>

<!--  CLIENTE SUPPORT -->
<div class="container support d-flex align-items-center my-5 py-md-5">
	<div class="col-12 col-md-10 mx-auto d-flex justify-content-between mt-5">
	<?php query_posts('category_name=support'); ?>
	<?php $post = 1; if(have_posts()):while (have_posts() && $post < 2) : the_post(); ?>	
		<div class="h-100 col-11 col-md-6 d-none d-md-inline">
			<div class="thumb" style=""><?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?></div>
		</div>	
		<div class="content col-11 col-md-6 align-self-center">
			<div class="px-4">
				<h2 class="title text-lg"><?php the_title(); ?></h2>
				<?php the_content(); ?>
			</div>			
		</div>
		<?php $post++; endwhile;else: ?>
		<h2 class="display-3">En construcción...</h2>
		<?php endif; ?>	
	</div>
</div>


<div id="adt-widget-placeholder"></div>
<script defer src="https://cdn.adtr-ct.com/widgets/compare-loans/js/client/widget.client.min.js"></script>
<?php get_footer(); ?>