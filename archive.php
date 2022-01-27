<?php get_header(); ?>	
	
<!--INICIO main-->
<div class="container col-12 col-md-12 col-xl-10" style="margin-bottom: 100px;">
	<h2 class="text-center display-4 mb-4 py-md-5" style="margin-top: 100px;"><?php single_cat_title($prefix='',$display=true); ?></h2>	
	
	<?php if(have_posts()):while (have_posts()):the_post(); ?>
		<div class="row col-11 mx-auto col-md-10 d-flex mb-5" style="min-height: 300px;">
			<div class="position-relative overflow-hidden col-12 col-md-6" style="min-height: 125px;">
				<div class="thumb-bg" style="background-image: url('<?php echo wp_get_attachment_url( get_post_thumbnail_id( $post->ID ) ); ?>');">
			</div>
				
			</div>
			<div class="col-11 col-md-6 align-self-center">
				<h4 class="text-center text-primary pt-4"><b><?php the_title(); ?></b></h4>
				<div class="text-justify px-4" style="min-height: 130px;">
					<?php the_excerpt(); ?>
				</div>
				<div class="text-center">
					<a href="<?php the_permalink(); ?>" class="btn btn-primary">Ver más</a>
				</div>				
			</div>						
		</div>	
		<?php $i++; endwhile;else: ?>
			<h2 class="text-center display-5">Próximamente...</h2>
		<?php endif; ?>
	</div>
</div>
<?php get_footer(); ?>