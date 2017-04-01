<div id="node-<?php print $node->nid; ?>" class="node-bildgalleri">
  <?php
    $imgcount = count($node->field_bildgalleri['und']);
    for ($i = 0; $i < $imgcount; $i++) {
      $image_uri = $node->field_bildgalleri['und'][$i]['uri'];
      // url
      $masthead_raw = image_style_url('galleri-tumnagel', $image_uri);
  ?>
      <a href="<?php print file_create_url($node->field_bildgalleri['und'][$i]['uri']); ?>" rel="group-<?php print $node->nid; ?>" class="fancybox">
        <img class="image<?php print ($i + 1);?>" src="<?php print $masthead_raw; ?>" />
      </a>
    <?php } ?>
</div>
