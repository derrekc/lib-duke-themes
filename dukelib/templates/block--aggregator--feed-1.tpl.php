<?php


?>
<div class="navArrows">
	<div class="navButton prevButton" id="prevNews"></div>
	<div class="navButton nextButton" id="nextNews"></div>
</div>
<?php if ($block->subject): ?>
	<h4 <?php print $title_attributes; ?>><?php print $block->subject; ?></h4>
<?php endif; ?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes;?>>
	<?php print render($title_prefix); ?>
	<?php print render($title_suffix); ?>
	<div <?php print $content_attributes; ?>>
	<?php echo $content; ?>
	</div>
</div>
