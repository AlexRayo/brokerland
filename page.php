<?php get_header(); ?>
<div class="cover-single">
		<div class="position-absolute d-flex align-items-center justify-content-center h-100 w-100">
			<div class="block col-11 col-md-6 mx-auto text-center align-self-center">
				<h1 class="title title-single text-bold text-primary mt-5 py-2"><?php the_title(); ?></h1>
			</div>
		</div>
		<?php if(has_post_thumbnail()) {the_post_thumbnail('list_articles_thumb'); } ?>
	</div>
	<section class="">
		<div class="container py-5 page box-shadow-1 border">
			<div class="row col-11 col-md-9 mx-auto bg-white px-2 px-md-4 mt-5">
				<div class="col-12 mt-md-5">
					<?php if(have_posts()):while (have_posts()):the_post(); ?>	
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