<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>Home</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/home.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "white";
			$styleLink = "color";
			include('common-header.php');
		?>

		<main>

			<section id="section-home" class="container__anim">
				<div class="wrapper">
					<div class="container-illu anim__fade anim__delayMedium_1">
    					<img src="<?= $document->cover_illustration->url ?>" />
					</div>
					<div class="container-text">
						<h2 class="wrapLine bnd">
							<?= RichText::asText($document->cover_title); ?>
						</h2>
						<p class="anim__slide anim__delayMedium_7">
							<?= RichText::asText($document->cover_text); ?>
						</p>
						<div class="container-btn anim__slide anim__delayMedium_9">
							<a class="btn" href="/<?= $document->cover_cta_link_1->type; ?>">
								<span class="btn-text"><?= RichText::asText($document->cover_cta_text_1); ?></span>
								<svg class="btn-arrow" viewBox="0 0 14 8">
								   <use xlink:href="img/common/arrow.svg#arrow"></use>
								</svg>
							</a>
							<a class="btn" href="/<?=$document->cover_cta_link_2->type; ?>">
								<span class="btn-text"><?= RichText::asText($document->cover_cta_text_2); ?></span>
								<svg class="btn-arrow" viewBox="0 0 14 8">
								   <use xlink:href="img/common/arrow.svg#arrow"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="section-ftr" class="container__anim">
				<div class="wrapper">
					<div class="container-el">
						<?php $i = 1;
						foreach ($document->body[0]->items as $el) {
						?>	
							<div class="el">
								<img class="icn anim__slide anim__delayMedium_<?php echo($i); ?>" src="<?= $el->common_el_illustration->url; ?>" alt="">
								<div class="text">
									<h3 class="anim__slide anim__delayMedium_<?php echo($i+1); ?>">
										<?= RichText::asText($el->common_el_title); ?>
									</h3>
									<p class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
										<?= RichText::asText($el->common_el_texte); ?>	
									</p>
								</div>
							</div>
						<?php $i++; } ?>
					</div>
				</div>
			</section>

			<section id="section-desc">
				<div class="wrapper">
					<div class="container-el">
						<?php
						foreach ($document->body1[0]->items as $el) {
						?>	
							<div class="el container__anim">
								<div class="text">
									<h3 class="anim__slide anim__delayMedium_1">
										<?= RichText::asText($el->common_el_title); ?>
									</h3>
									<p class="anim__slide anim__delayMedium_2">
										<?= RichText::asText($el->common_el_texte); ?>
									</p>
								</div>
								<div class="illu anim__slide anim__delayMedium_3">
									<img src="<?= $el->common_el_illustration->url; ?>" alt="">
								</div>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

			<section id="section-quotes" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1"><?= RichText::asText($document->quote_title); ?></h2>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->quote_text); ?>
						</p>
					</div>
					<div class="container">
						<div class="container-quotes">
							<div class="container-el">
								<?php
								foreach ($document->body2[0]->items as $el) {
								?>	
									<div class="el">
									<q>
										<?= RichText::asText($el->common_quote_texte); ?>
									</q>
									<div class="author">
										<div class="pp" style="background-image: url(<?= $el->common_quote_profil->url; ?>);"></div>
										<div class="text">
											<div class="name">
												<?= RichText::asText($el->common_quote_name); ?>
											</div>
											<div class="infos">
												<?= RichText::asText($el->common_quote_infos); ?>
											</div>
										</div>
									</div>
								</div>
								<?php } ?>
							</div>
							<div class="container-btn">
								<div class="btn btn-prev">
									<svg viewBox="0 0 14 8">
									   <use xlink:href="img/common/arrow.svg#arrow"></use>
									</svg>
								</div>
								<div class="btn btn-next">
									<svg viewBox="0 0 14 8">
									   <use xlink:href="img/common/arrow.svg#arrow"></use>
									</svg>
								</div>
							</div>
						</div>
						<div class="container-logos">
							<div class="container-el">
								<?php $i = 1;
								foreach ($document->body2[1]->items as $el) {
								
									$class = 'position-'.$i;
									if($i > 6) {
										$class = 'position-wait wait-'.($i-6);
									}
								?>	
									<div class="el <?php echo($class); ?>">
										<img src="<?= $el->common_icons_svg->url; ?>" alt="">
									</div>
								<?php $i++; } ?>
							</div>
						</div>
					</div>
					
				</div>
			</section>

			<section id="section-prm" class="container__anim">
				<div class="wrapper">
					<div class="container-el">
						<?php $i = 1;
						foreach ($document->body3[0]->items as $el) {
						?>	
							<div class="el anim__slide anim__delayMedium_<?php echo($i); ?>">
								<img class="icn anim__slide anim__delayMedium_<?php echo($i+1); ?>" src="<?= $el->common_cta_icon->url; ?>" alt="">
								<p class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
									<?= RichText::asText($el->common_cta_texte); ?>
								</p>
								<a href="/<?= $el->common_cta_link->type; ?>" class="btn anim__slide anim__delayMedium_<?php echo($i+3); ?>">
									<span class="btn-text"><?= RichText::asText($el->common_cta_name); ?></span>
									<svg class="btn-arrow" viewBox="0 0 14 8">
									   <use xlink:href="img/common/arrow.svg#arrow"></use>
									</svg>
								</a>
							</div>
						<?php $i++; } ?>
					</div>
				</div>
			</section>
			
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/index-min.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>