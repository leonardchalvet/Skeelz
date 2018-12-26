<?php
	use Prismic\Dom\RichText;
	$header = $WPGLOBAL['header']->results[0]->data;	
?>


<header id="header-desktop">
	<div class="wrapper">
		<a class="logo <?php echo($styleLogo); ?>" href="index.php">
			<img src="<?= $header->logo_color->url ?>" alt="">
			<img src="<?= $header->logo_white->url ?>" alt="">
		</a>
		<div class="container-link <?php echo($styleLink); ?>">
			<a href="/<?= $header->cta_link_talent->type; ?>"><?= RichText::asText($header->cta_talent); ?></a>
			<a href="/<?= $header->cta_link_entreprise->type; ?>"><?= RichText::asText($header->cta_entreprise); ?></a>
			<a href="/<?= $header->cta_link_team->type; ?>"><?= RichText::asText($header->cta_team); ?></a>
			<a href="/<?= $header->cta_link_newz->type; ?>"><?= RichText::asText($header->cta_newz); ?></a>
		</div>
		<a href="/<?= $header->cta_link_contact->type; ?>" class="btn">
			<span class="btn-text"><?= RichText::asText($header->cta_contact); ?></span>	
		</a>
	</div>
</header>