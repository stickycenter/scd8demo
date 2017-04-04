<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || !$page): ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>></h2>
    <?php endif; ?>
    <?php print render($title_suffix); ?>
  </header>
  <?php endif; ?>

  <div class="content"<?php print $content_attributes; ?>>
    <?php
      // We hide the comments and links now so that we can render them later.
      hide($content['comments']);
      hide($content['links']);
	?>
	
	<div class"row ">
		<div class="col-md-12 offer-meta text-center">
		<h3 class="offer-title"><?php print render($content['field_offer_title']); ?> </h3>
		<h4><?php print render($content['field_offer_subtitle']); ?></h4>
		<p><?php print render($content['body']); ?></p>
		<strong><p><?php print render($content['field_exp_date']); ?></p></strong>
		<?php print render($content['field_barcode']); ?>
		
   			
   			
   		</div>
   </div>
  </div>

    
    <?php if (($tags = render($content['field_tags'])) || ($links = render($content['links']))): ?>
    <footer>
    <?php print render($content['field_tags']); ?>
    <?php print render($content['links']); ?>
    </footer>
    <?php endif; ?> 

  <?php print render($content['comments']); ?>

</article>

