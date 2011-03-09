<?php head(array('bodyid'=>'home')); ?>	

<div id="primary">
    <?php if ($homepageText = get_theme_option('Homepage Text')): ?>
    <div id="homepage-text">
        <p><?php echo $homepageText; ?></p>
    </div>
    <?php endif; ?>
	
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
	</div><!-- end recent-items -->

    <?php if (get_theme_option('Display Featured Item') !== '0'): ?>
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
            <p>No featured items are available.</p>	
        <?php endif; ?>	
	</div><!-- end featured-item -->
    <?php endif; ?>
							
    <?php if (get_theme_option('Display Featured Collection') !== '0'): ?>
    <!-- Featured Collection -->
    <div id="featured-collection" class="featured-box">
        <?php echo display_random_featured_collection(); ?>
	</div><!-- end featured collection -->
	<?php endif; ?>
	
    <?php if ((get_theme_option('Display Featured Exhibit') !== '0')
           && function_exists('exhibit_builder_display_random_featured_exhibit')): ?>
    <!-- Featured Exhibit -->
    <div class="featured-box">
        <?php echo exhibit_builder_display_random_featured_exhibit(); ?>
    </div><!-- end featured exhibit -->
    <?php endif; ?>

</div><!-- end primary -->
	
<?php foot();
