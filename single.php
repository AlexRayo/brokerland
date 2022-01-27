<?php get_header(); ?>
<section class="">
<div class="container py-5 page box-shadow-1 border">
	<div class="row col-11 col-md-9 mx-auto bg-white px-2 px-md-4 mt-5">
		<div class="col-12 mt-md-5">
			<?php if(have_posts()):while (have_posts()):the_post(); ?>
			<h1 class="text-lg text-bold bg-gray py-4 px-2 text-center"><?php the_title(); ?></h1>	
			<div>
				<?php the_content(); ?>
			</div>
			<?php endwhile;else: ?>
					<h1>En Edición</h1>
			<?php endif; ?>	
			</div>	
		</div>
	</div>	
</div>
</section>

<?php get_footer(); ?>