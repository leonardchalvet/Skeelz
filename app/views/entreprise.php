<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>Entreprise</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/entreprise.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "white";
			$styleLink = "white";
			include('common-header.php');
		?>

		<main>

			<section id="section-cover" class="container__anim">
				<img src="<?= $document->cover_illustration->url ?>" alt="" class="anim__fade anim__delayMedium_1">
				<div class="wrapper">
					<h1 class="anim__slide anim__delayMedium_2">
						<?= RichText::asHtml($document->cover_title); ?>
					</h1>
					<a class="btn anim__slide anim__delayMedium_3" href="/<?= $document->cover_cta_link->type; ?>">
						<span class="btn-text"><?= RichText::asHtml($document->cover_cta_text); ?></span>
						<svg class="btn-arrow" viewBox="0 0 14 8">
						   <use xlink:href="img/common/arrow.svg#arrow"></use>
						</svg>
					</a>
				</div>
			</section>

			<section id="section-pres">
				<img class="obj" src="img/entreprise/shape-pres.svg" alt="">
				<div class="wrapper">
					<div class="container-el">
						<?php
						foreach ($document->body[0]->items as $el) {
						?>	
							<div class="el container__anim">
								<div class="content">
									<div class="illu anim__fade anim__delayMedium_1">
										<img src="<?= $el->common_el_illustration->url ?>" alt="">
									</div>
									<div class="text">
										<h3 class="anim__slide anim__delayMedium_2">
											<?= RichText::asText($el->common_el_title); ?>
										</h3>
										<p class="anim__slide anim__delayMedium_3">
											<?= RichText::asText($el->common_el_texte); ?>
										</p>
									</div>
								</div>
							</div>
						<?php } ?>
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
							<?= RichText::asText($document->icons_texte); ?>
						</p>
					</div>
					<div class="container-el">
						<?php $i = 3;
						foreach ($document->body1[0]->items as $el) {
						?>	
							<div class="el">
								<img class="icn anim__slide anim__delayMedium_<?php echo($i); ?>" src="<?= $el->common_el_illustration->url ?>" alt="">
								<h3 class="anim__slide anim__delayMedium_<?php echo($i+1); ?>">
									<?= RichText::asText($el->common_el_title); ?>
								</h3>
								<p class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
									<?= RichText::asText($el->common_el_texte); ?>
								</p>
							</div>
						<?php $i++; } ?>
					</div>
				</div>
			</section>

			<section id="section-form" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?= RichText::asText($document->form_title); ?>
						</h2>
					</div>
					<form action="">
						<div class="label anim__slide anim__delayMedium_2">
							<div class="title"><?= RichText::asText($document->form_label_prenom); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_3">
							<div class="title"><?= RichText::asText($document->form_label_nom); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_4">
							<div class="title"><?= RichText::asText($document->form_label_telephone); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_5">
							<div class="title"><?= RichText::asText($document->form_label_mail); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_6">
							<div class="title"><?= RichText::asText($document->form_label_poste); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_7">
							<div class="title"><?= RichText::asText($document->form_label_societe); ?></div>
							<input type="text">
						</div>
						<button class="btn anim__slide anim__delayMedium_8">
							<span class="btn-text"><?= RichText::asText($document->form_cta_texte); ?></span>
							<svg class="btn-arrow" viewBox="0 0 14 8">
							   <use xlink:href="img/common/arrow.svg#arrow"></use>
							</svg>
						</button>
					</form>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>