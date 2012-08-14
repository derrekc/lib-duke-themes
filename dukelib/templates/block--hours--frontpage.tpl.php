<?php


?>
<div id="<?php print $block_html_id; ?>" class="<?php print $classes; ?>"<?php print $attributes;?>>
	<?php print render($title_prefix); ?>
<?php if ($block->subject): ?>
	<h4 <?php print $title_attributes; ?>><?php print $block->subject; ?></h4>
<?php endif; ?>
	<?php print render($title_suffix); ?>
	<div class="content" <?php print $content_attributes; ?>>
	<?php echo $content; ?>
	</div>
	<div class='toggle-trigger'><a href="#" id="hours-expand">Today</a></div>
	<p class="hours-links">
		<a href="http://library.duke.edu/about/hours" 
		   onclick="pageTracker._trackEvent('homepage', 'otherLibraryHours');">
		   Other Library Hours
		</a><br />
		<a href="news/main/2012/article6.html" 
		   onclick="pageTracker._trackEvent('homepage', 'libraryHoursUpdate');" 
		   title="Revised Public Hours and Card-Access Entry Points">
		   About Public Hours
		</a>
	</p>
</div>
