<div class="otw_portfolio_manager-portfolio-content">
<a href="<?php echo get_permalink($post->ID);?>" class="otw_portfolio_manager-portfolio-continue-reading">
  <?php 
    (!empty($this->listOptions['continue_reading']))?  $read_link = $this->listOptions['continue_reading'] : $read_link = _e('Continue reading →', OTW_PML_TRANSLATION);
    echo $read_link;
  ?>
</a>
</div>