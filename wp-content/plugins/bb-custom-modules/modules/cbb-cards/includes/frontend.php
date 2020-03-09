<?php
/**
 * Cards Module - Front End
 */

$cards = $settings->cards;
?>

<?php if ($cards) : ?>
	<div class="cards">
		<?php foreach ($cards as $card) : ?>
			<article class="card">
				<div class="card__content">
					<h3 class="card__heading"><?php echo $card->title; ?></h3>
					<p><?php echo $card->description; ?></p>
				</div>
				<?php if ($card->cta_link) : ?>
					<a href="<?php echo esc_url($card->cta_link); ?>" class="card__link">
						<div class="link-border">
							<?php echo $card->cta_text; ?>
						</div>
					</a>
				<?php endif; ?>
			</article>
		<?php endforeach; ?>
	</div>
<?php endif; ?>
