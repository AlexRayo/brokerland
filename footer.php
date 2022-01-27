<footer class="container-fluid bg-gray mx-auto">
	<div class="row d-flex col-12 col-md-8 mx-auto h-100 justify-content-between py-5">					
		<div class="col-8 col-sm-5 col-md-3 mx-auto mb-5 mb-md-0">
			<?php if ( !function_exists('footer_block1') || !dynamic_sidebar("footer block1") ) : ?>
			<?php endif;?>
		</div>
		<div class="col-8 col-sm-5 col-md-3 mx-auto mb-5 mb-md-0">
			<?php if ( !function_exists('footer_block2') || !dynamic_sidebar("footer block2") ) : ?>
			<?php endif;?>
		</div>
		<div class="col-8 col-sm-5 col-md-3 mx-auto mb-5 mb-md-0">
			<?php if ( !function_exists('footer_block3') || !dynamic_sidebar("footer block3") ) : ?>
			<?php endif;?>
		</div>
	</div>
	<div class="copyright text-center py-2 col-10 col-md-8 mx-auto">
		<p>© 2020 brokerland.es | Sevilla - España</p>
	</div>
</footer>
<script>
	//Do not delete de script bellow if submenu is needed. This allows toggle submenus instead open its link
    jQuery( document ).ready( function($) {
        if ( $( '.menu-toggle' ).is( ':visible' ) ) {
            $( '.main-navigation' ).addClass( 'sfHover' );
            $( '.main-navigation .sub-menu' ).addClass( 'toggled-on' );
        }
    } );
</script>
<?php wp_footer(); ?>
</body>
</html>