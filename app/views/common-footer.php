<?php
	use Prismic\Dom\RichText;
	$footer = $WPGLOBAL['footer']->results[0]->data;	
?>
<footer>
	<div class="wrapper">
		<a href="/<?= $footer->cta_link_home->type; ?>" class="logo">
			<img src="<?= $footer->logo_color->url ?>" alt="">
		</a>
		
		<ul class="container-link">
			<li>
				<a href="/<?= $footer->cta_link_talent->type; ?>"><?= RichText::asText($footer->cta_talent); ?></a>
			</li>
			<li>
				<a href="/<?= $footer->cta_link_entreprise->type; ?>"><?= RichText::asText($footer->cta_entreprise); ?></a>
			</li>
			<li>
				<a href="/<?= $footer->cta_link_team->type; ?>"><?= RichText::asText($footer->cta_team); ?></a>
			</li>
			<li>
				<a href="/<?= $footer->cta_link_newz->type; ?>"><?= RichText::asText($footer->cta_newz); ?></a>
			</li>
		</ul>

		<div class="container-rs">
			<a href="<?= $footer->network_link_linkedin->url; ?>">
				<img src="img/newz/LinkedIn-color.svg" alt="">
			</a>
			<a href="<?= $footer->network_link_facebook->url; ?>">
				<img src="img/newz/Facebook-color.svg" alt="">
			</a>
			<a href="<?= $footer->network_link_twitter->url; ?>">
				<img src="img/newz/Twitter-color.svg" alt="">
			</a>
			<a href="<?= $footer->network_link_instagram->url; ?>">
				<img src="img/newz/Instagram-color.svg" alt="">
			</a>
		</div>
		<div class="foot">
			<p>
				<?= RichText::asText($footer->copyright_text); ?>
			</p>
		</div>
	</div>
</footer>