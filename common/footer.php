</div><!-- end content -->
	
	<div id="footer-container">
	<div id="footer">
	
		<ul class="navigation">
		<?php echo nav(array('Home' => uri(''), 'Items' => uri('items/browse'), 'Exhibits' => 		uri('exhibits/browse'), 'Collections' => uri('collections/browse'), 'About' => uri('about'))); ?>
		</ul>
		
		<p>Proudly powered by <a href="http://omeka.org">Omeka</a>.</p>
	
	</div><!-- end footer -->
	</div><!-- end footer-container -->

</div><!--end wrap-->

<?php echo plugin_footer(); ?> 

</body>
</html>