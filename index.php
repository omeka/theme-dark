<?php head(array('bodyid'=>'home')); ?>	

	<div id="primary">
		<!-- Featured Item -->
		<div id="featured-item">
			<h2>Featured Item</h2>
			<?php $randomitem = random_featured_item();  ?>
			
			<?php if(!empty($randomitem)):?>
			
			<?php if(has_thumbnail($randomitem)): ?>
			
				<?php echo link_to_fullsize($randomitem, array('class'=>'image')); ?>
			
			<?php endif; ?>
			<h3><?php echo link_to_item($randomitem); ?> </h3>	
			<?php else: ?>
				<h3>No Featured Items</h3>
				<p>You have no featured items. Please make some featured.</p>	
			<?php endif; ?>	
		</div><!--end featured-item-->	
		
		<div id="recent-items">
		<h2>Recently Added</h2>
			<?php $recent = recent_items(3); 
			if(!empty($recent)):
			?>
			<ul>
				<?php foreach($recent as $item ): ?>
				<li><a href="<?php echo uri('items/show/'.$item->id); ?>"><?php echo link_to_item($item, 'show', null, array('class'=>'item-title')); ?> </a><?php echo link_to_thumbnail($item); ?> <?php echo h(snippet($item->description, 0, 150)); ?> </li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
					<h3>No Recent Items</h3>
					<p>No recent items available.</p>	
				<?php endif; ?>
		</div><!--end recent-items -->	

	</div><!--primary-->
	
<?php foot(); ?>