<?php
if(have_posts()):
  while(have_posts()) : the_post();
?>
<!-- 繰り返し処理 -->
<?php
  endwhile;
endif;
?>