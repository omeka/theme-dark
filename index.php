<?php head(array('bodyid'=>'home')); ?>	

	<div id="primary">
		<!-- Featured Item -->
		<div id="featured-item">
			<h2>Featured Item</h2>
			<?php $randomitem = random_featured_item();  ?>
			
			<?php if(!empty($randomitem)):?>
			
			<?php if(has_thumbnail($randomitem)): ?>
			<a class="image" href="<?php echo uri('items/show/'.$randomitem->id); ?>"><?php echo fullsize($randomitem); ?></a>
			<?php endif; ?>
			<h3><a href="<?php echo uri('items/show/'.$randomitem->id); ?>"><?php echo $randomitem->title; ?></a></h3>	
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
				<li><a href="<?php echo uri('items/show/'.$item->id); ?>"><?php echo "<span class=\"item-title\">".$item->title."</span>"; ?></a><?php if ($item ->has_thumbnail); {echo link_to_thumbnail($item); } ?><?php if ($item->description); 
				{ echo "<span class=\"item-description\">".snippet($item->description, 0, 150)."</span>"; } ?></li>
				<?php endforeach; ?>
			</ul>
			<?php else: ?>
					<h3>No Recent Items</h3>
					<p>No recent items available.</p>	
				<?php endif; ?>
		</div><!--end recent-items -->	

	</div><!--primary-->
	
<?php foot(); ?>