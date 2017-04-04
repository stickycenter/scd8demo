<article id="node-<?php print $node->nid; ?>" class="<?php print $classes; ?> clearfix"<?php print $attributes; ?>>

  <?php if ($title_prefix || $title_suffix || !$page): ?>
  <header>
    <?php print render($title_prefix); ?>
    <?php if (!$page): ?>
      <h2<?php print $title_attributes; ?>><a href="<?php print $node_url; ?>"><?php print $title; ?></a></h2>
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
		<div class="col-md-4">
			<div class="img-responsive tenant-logo"><?php print render ($content ['field_logo']); ?></div>
			<div class="hidden-xs">
				<div class="img-responsive"><?php print render ($content['field_store_photos']);?></div>
			</div>
		</div>
	
		<div class="col-md-8">
			<?php print render ($content['body']);?>
			<div class="addthis_sharing_toolbox"></div>
		  	<br>
		 	<div class="row">
		 		<div class="col-md-6">
		 			<?php print render ($content['field_store_address']);?>
		 			<?php print render ($conent['field_next_to_locator']);?><br>
		 			<?php print render ($content['field_phone_number']);?>
		 			<?php print render ($content['field_fax_number']);?><br>
		 			<?php print render ($content['field_website']);?>
		 		</div>
		 		<div class="col-md-6">
		 			<?php print render ($content['field_business_hours']);?> <br>
		 			<!-- <span class="glyphicon glyphicon-tag"></span>  --><?php print render ($content['field_category']);?><br><br>
		 		</div>
		 	</div>
		</div>
   </div>
   <div class="row">
   		<div class="col-md-6">
   			<?php print render ($content['field_offer'][0]);?>
   		</div>
   		<div class="col-md-6">
   			<?php print render ($content['field_offer'][1]);?>
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

