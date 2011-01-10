<?php head(array('bodyid'=>'home')); ?>	

	<div id="primary">
		<div id="homepage-text">
		<p><?php echo get_theme_option('Homepage Text'); ?></p>
			    <?php if (get_theme_option('Display Featured Item') == 1): ?>
					</div>
					<div id="recent-items">
					    		<h2>Recently Added </h2>

					    		<?php 
					    		$homepageRecentItems = (int)get_theme_option('Homepage Recent Items') ? get_theme_option('Homepage Recent Items') : '2';
					    		set_items_for_loop(recent_items($homepageRecentItems));
					    		if (has_items_for_loop()): 
					    		?>

					    		<div class="items-list">
					    			<?php while (loop_items()): ?>

					    			<div class="item">

					    			

					    				<?php if(item_has_thumbnail()): ?>
					        				<div class="item-img">
					        				<?php echo link_to_item(item_square_thumbnail()); ?>						
					        				</div>
					    				<?php endif; ?>
										<h3><?php echo link_to_item(); ?></h3>

					    				<?php if($desc = item('Dublin Core', 'Description', array('snippet'=>125))): ?>

					    				    <div class="item-description"><?php echo $desc; ?><?php echo link_to_item('see more',(array('class'=>'show'))) ?></div>

					    				<?php endif; ?>	

					    			</div>
					    			<?php endwhile; ?>	
					    		</div>

					    		<?php else: ?>
					    			<p>No recent items available.</p>

					    		<?php endif; ?>

					    		<p class="view-items-link"><a href="<?php echo html_escape(uri('items')); ?>">View All Items</a></p>
					</div><!--end recent-items -->
				
	<!-- Featured Item -->
			 <div id="featured-item">
			   <h2>Featured Item</h2>
					<?php if ($randomitem = random_featured_item(true)):  ?>

						<?php set_current_item($randomitem); ?>

						<?php if (item_has_thumbnail()): ?>

						<?php echo link_to_item(item_fullsize()); ?>
										
						<?php endif; ?>
					<h3><?php echo link_to_item(); ?> </h3>	
							<?php else: ?>
					<h3>No Featured Items</h3>
					<p>You have no featured items. Please make some featured.</p>	
						    <?php endif; ?>	
					<!--end featured-item-->
								<?php endif; ?>	
								</div>
	<!-- Featured Collection -->							
								
	        <?php if (get_theme_option('Display Featured Collection') == 1): ?>
				 <div id="featured-collection" class="featured-box">
			        <?php echo display_random_featured_collection(); ?>
			      
					<?php endif; ?>	
					  </div><!--end featured collection -->
								
								        
			<?php if ((get_theme_option('Display Featured Exhibit') == 1) && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
							    	<!-- Featured Exhibit -->
			<div id="featured-exhibit" class="featured-box">
			 <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
									<?php endif; ?>
									</div><!--end featured exhibit -->
									
	</div><!--primary-->
	
<?php foot(); ?>