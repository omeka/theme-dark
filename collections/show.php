<?php head(array('title' => html_escape($collection->name),'bodyid'=>'collections','bodyclass' => 'show')); ?>

<div id="primary" class="show">
    <h1><?php echo collection('Name'); ?></h1>

    <div id="collection-description" class="element">
        <h2>Description</h2>
        <div class="element-text"><?php echo nls2p(collection('Description')); ?></div>
    </div><!-- end collection-description -->
    
    <div id="collectors" class="element">
        <h2>Collector(s)</h2> 
        <div class="element-text">
            <ul>
                <li><?php echo collection('Collectors', array('delimiter'=>'</li><li>')); ?></li>
            </ul>
        </div>
    </div><!-- end collectors -->
    
    <div id="collection-items">
			    
        <?php while (loop_items_in_collection(5)): ?>
            
            <div class="item hentry">
    			<div class="item-meta">
            
    		<h3><?php echo link_to_item(item('Dublin Core', 'Title'), array('class'=>'permalink')); ?></h3>

    		<?php if (item_has_thumbnail()): ?>
    		<div class="item-img">
    			<?php echo link_to_item(item_square_thumbnail(array('alt'=>item('Dublin Core', 'Title')))); ?>						
    		</div>
    		<?php endif; ?>

    		<?php if ($text = item('Item Type Metadata', 'Text', array('snippet'=>250))): ?>
    			<div class="item-description">
    			<p><?php echo $text; ?></p>
    			</div>
    		<?php elseif ($description = item('Dublin Core', 'Description', array('snippet'=>250))): ?>
    			<div class="item-description">
    			<?php echo $description; ?>
    			</div>
		    <?php endif; ?>
		    
		    	</div><!-- end class="item-meta" -->
			</div><!-- end class="item hentry" -->
		
    <?php endwhile; ?>
    
        <p class="view-items-link"><?php echo link_to_browse_items('View the items in ' . collection('Name'), array('collection' => collection('id'))); ?></p>
    </div><!-- end collection-items -->
    
    <?php echo plugin_append_to_collections_show(); ?>
    
</div><!-- end primary -->

<?php foot(); ?>