<?php 
	//Get Categories for Current Post
	$catArray = wp_get_post_terms( $post->ID, $this->portfolio_category );
?>
<?php if( is_array( $catArray ) && count( $catArray ) ){?>
	<div class="otw_portfolio_manager-portfolio-meta-item">
		<?php if( !$this->listOptions['meta_icons'] ) : ?>
			<span class="head"><?php _e('Category:', OTW_PML_TRANSLATION);?></span>
		<?php else: ?>
			<span class="head"><i class="icon-folder-open-alt"></i></span>
		<?php endif; ?>
		<?php foreach( $catArray as $index => $cat ){ ?>
			<?php
				$category = get_term($cat, $this->portfolio_category);
				$catUrl = get_term_link( $category, $this->portfolio_category );
			?>
			<a href="<?php echo esc_url($catUrl);?>" rel="category" title="<?php _e('View all posts in ', OTW_PML_TRANSLATION); echo $category->name;?>">
			<?php echo $category->name;?>
			</a>
			<?php if( $index < count( $catArray ) - 1 ) { echo ', '; }?>
		<?php }?>
	</div>
<?php }?>