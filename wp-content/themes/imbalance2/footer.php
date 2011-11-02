	</div><!-- #main -->

	<div id="footer">
		<div id="site-info">
			© 2011 <a href="http://www.pagodabox.com/">Pagoda Box</a>
		</div><!-- #site-info -->
		<div id="footer-right"><?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'footer-right', 'walker' => new Imbalance2_Walker_Nav_Menu(), 'depth' => 1 ) ); ?></div>
		<div id="footer-left"><?php wp_nav_menu( array( 'container_class' => 'menu', 'theme_location' => 'footer-left', 'walker' => new Imbalance2_Walker_Nav_Menu(), 'depth' => 1 ) ); ?></div>
		<div class="clear"></div>
	</div><!-- #footer -->

</div><!-- .wrapper -->

<?php wp_footer(); ?>

<?php echo imbalance2google() ?>

</body>
</html>
