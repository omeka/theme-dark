</div><!-- end content -->
	
	<div id="footer-container">
	<div id="footer">
	
		<ul class="navigation">
			<?php echo public_nav_main(array('Home' => uri(''), 'Browse Items' => uri('items'), 'Browse Collections'=>uri('collections')));
        	?>
		</ul>
		
		<p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>
	
	</div><!-- end footer -->
	</div><!-- end footer-container -->

</div><!--end wrap-->

<?php echo plugin_footer(); ?> 

</body>
</html>