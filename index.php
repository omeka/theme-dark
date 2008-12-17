<?php head(array('bodyid'=>'home')); ?>	

	<div id="primary">
		<!-- Featured Item -->
		<div id="featured-item">
			<h2>Featured Item</h2>
			<?php if($randomitem = random_featured_item(true)):  ?>
			    
			    <?php set_current_item($randomitem); ?>
			
			<?php if (item_has_thumbnail()): ?>
			
				<?php echo link_to_item(item_fullsize()); ?>
			
			<?php endif; ?>
			<h3><?php echo link_to_item(); ?> </h3>	
			<?php else: ?>
				<h3>No Featured Items</h3>
				<p>You have no featured items. Please make some featured.</p>	
			<?php endif; ?>	
		</div><!--end featured-item-->	
		
		<div id="recent-items">
		<h2>Recently Added</h2>
    		<?php set_items_for_loop(recent_items(4)); ?>
    		<?php if (has_items_for_loop()): ?>

    		<div class="items-list">
    			<?php while (loop_items()): ?>

    			<div class="item">
    			    
    			    <?php if(item_has_thumbnail()): ?>
        				<div class="item-img">
        				<?php echo link_to_item(item_square_thumbnail()); ?>						
        				</div>
    				
    				<?php else: ?>

    				<h3><?php echo link_to_item(); ?></h3>

    				<?php if($desc = item('Dublin Core', 'Description', array('snippet'=>200))): ?>

    				    <div class="item-description"><?php echo $desc; ?><?php echo link_to_item('see more',(array('class'=>'show'))) ?></div>

    				<?php endif; ?>	
    				
    				<?php endif; ?>

    			</div>
    			<?php endwhile; ?>	
    		</div>

    		<?php else: ?>
    			<p>No recent items available.</p>

    		<?php endif; ?>

    		<p class="view-items-link"><a href="<?php echo uri('items'); ?>">View All Items</a></p>

    	</div><!--end recent-items -->

	</div><!--primary-->
	
<?php foot(); ?>