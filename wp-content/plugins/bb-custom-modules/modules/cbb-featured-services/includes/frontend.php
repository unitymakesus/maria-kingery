<?php
/**
 * Featured Services Module - Front End
 */

$items = $settings->items;
?>

<?php if ($items) : ?>
	<?php foreach ($items as $item) : ?>
	<section class="featured-service">
		<div
			class="featured-service__background"
			style="background-image:url(<?php echo esc_url($item->background_image_src); ?>);"
		></div>
		<?php if ($item->icon) : ?>
			<div class="featured-service__icon">
				<img src="<?php echo $item->icon_src; ?>" alt="" />
			</div>
		<?php endif; ?>
		<div class="featured-service__content">
			<h3 class="featured-service__heading"><?php echo $item->title; ?></h3>
			<p><?php echo $item->description; ?></p>
      <?php if ($item->cta_link) : ?>
        <a href="<?php echo esc_url($item->cta_link); ?>" class="featured-service__link">
          <div class="featured-service__link-text">
            <div class="link-border">
              <?php echo $item->cta_text; ?>
            </div>
          </div>
          <?php if ($item->cta_subtext) : ?>
            <div class="featured-service__link-subtext">
              <?php echo $item->cta_subtext; ?>
              <span aria-hidden="true">>></span>
            </div>
          <?php endif; ?>
        </a>
      <?php endif; ?>
		</div>
	</section>
	<?php endforeach; ?>
<?php endif; ?>
