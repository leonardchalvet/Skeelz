<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>About</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/about.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "color";
			$styleLink = "color";
			include('common-header.php');
		?>

		<main>
			<section id="section-home" class="container__anim">
				<div class="wrapper">
					<div class="container-text container__anim">
						<?= RichText::asHtml($document->cover_title); ?>	
						<script type="text/javascript">
							$('#section-home .container-text h1').addClass('anim__slide anim__delayMedium_1');
						</script>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->cover_text); ?>
						</p>
					</div>
					<div class="container-banner anim__slide anim__delayMedium_3" style="background-image: url(<?= $document->cover_image->url ?>);">
						<img src="img/about/shape.svg" alt="">
					</div>
					<div class="container-pres">
						<div class="container-infos anim__slide anim__delayMedium_1">
							<q>
								<?= RichText::asText($document->quote_text); ?>
							</q>
							<div class="author">
								<div class="infos">
									<div class="name"><?= RichText::asText($document->quote_name); ?></div>
									<div class="job"><?= RichText::asText($document->quote_job); ?></div>
								</div>
								<div class="container-pp">
									<div class="pp" style="background-image: url(<?= $document->quote_image_1->url ?>);"></div>
									<div class="pp" style="background-image: url(<?= $document->quote_image_2->url ?>);"></div>
								</div>
							</div>
						</div>
						<div class="container-paragraph anim__slide anim__delayMedium_2">
							<?= RichText::asHtml($document->content_text_col1); ?>
						</div>
						<div class="container-paragraph anim__slide anim__delayMedium_3">
							<?= RichText::asHtml($document->content_text_col2); ?>
						</div>
					</div>
				</div>
			</section>

			<section id="section-ftr" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?= RichText::asText($document->icons_title); ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->icons_text); ?>
						</p>
					</div>
					<div class="container-el">
						<?php $i = 1;
						foreach ($document->body[0]->items as $el) {
						?>	
							<div class="el anim__slide anim__delayMedium_<?php echo($i); ?>">
								<img class="icn anim__slide anim__delayMedium_<?php echo($i); ?>" src="<?= $el->common_el_illustration->url ?>" alt="">
								<div class="text">
									<h3 class="anim__slide anim__delayMedium_<?php echo($i+1); ?>">
										<?= RichText::asHtml($el->common_el_title); ?>
									</h3>
									<p class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
										<?= RichText::asHtml($el->common_el_texte); ?>
									</p>
								</div>
							</div>
						<?php $i++; } ?>
					</div>
					<div class="container-banner anim__slide anim__delayMedium_7" style="background-image: url(<?= $document->icons_image->url ?>);">
						
					</div>
				</div>
			</section>

			<section id="section-stats" class="container__anim">
				<div class="wrapper">
					<div class="container-col">
						<div class="col">
							<div class="container-text">
								<h2 class="anim__slide anim__delayMedium_1">
									<?= RichText::asText($document->number_title); ?>
								</h2>
								<p class="anim__slide anim__delayMedium_2">
									<?= RichText::asText($document->number_text); ?>
								</p>
								<a href="/<?=$document->number_cta_link->type; ?>" class="btn anim__slide anim__delayMedium_3">
									<span class="btn-text">
										<?= RichText::asText($document->number_cta_tex); ?>
									</span>
									<svg class="btn-arrow" viewBox="0 0 14 8">
									   <use xlink:href="img/common/arrow.svg#arrow"></use>
									</svg>
								</a>
							</div>
							<div class="container-sponsors">
								<div class="title anim__slide anim__delayMedium_4">
									<?= RichText::asText($document->number_partenaire_text); ?>
								</div>
								<div class="container-logo">
									<img class="anim__slide anim__delayMedium_5" src="<?= $document->number_partenaire_image_1->url ?>" alt="">
									<img class="anim__slide anim__delayMedium_6" src="<?= $document->number_partenaire_image_2->url ?>" alt="">
									<img class="anim__slide anim__delayMedium_7" src="<?= $document->number_partenaire_image_3->url ?>" alt="">
								</div>
							</div>
						</div>
						<div class="col">
							<div class="container-stats">
								<?php $i = 3;
								foreach ($document->body2[0]->items as $el) {
								?>	
									<div class="stat anim__slide anim__delayMedium_<?php echo($i); ?>">
										<div class="number anim__slide anim__delayMedium_<?php echo($i+1); ?>">
											<?= RichText::asText($el->stats_number_num); ?>
										</div>
										<h4 class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
											<?= RichText::asText($el->stats_number_title); ?>
										</h4>
										<p class="anim__slide anim__delayMedium_<?php echo($i+3); ?>">
											<?= RichText::asText($el->stats_number_text); ?>
										</p>
									</div>
								<?php $i++; } ?>
							</div>
						</div>
					</div>
				</div>
			</section>

			<section id="section-team" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?= RichText::asText($document->team_title); ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->team_text); ?>
						</p>
					</div>

					<div class="container-caroussel anim__slide anim__delayMedium_3">
						<div class="container-el">
							<?php
							foreach ($document->body1[0]->items as $el) {
							?>	
								<div class="el">
									<div class="pp" style="background-image: url(<?= $el->team_member_image->url ?>);"></div>
									<div class="text">
										<div class="name">
											<?= RichText::asText($el->team_member_name); ?>
										</div>
										<div class="post"><?= RichText::asText($el->team_member_job); ?></div>
									</div>
									<q>
										<?= RichText::asText($el->team_member_text); ?>
									</q>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/about-min.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>