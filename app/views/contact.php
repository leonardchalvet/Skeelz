<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>Contact</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/contact.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "white";
			$styleLink = "color";
			include('common-header.php');
		?>


		<main>

			<section id="section-contact" class="container__anim">
				<div class="wrapper">
					<div class="container-illu">
						<img src="<?= $document->cover_image->url ?>" alt="">
					</div>
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?= RichText::asText($document->cover_title); ?>
						</h2>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->cover_text); ?>
						</p>
						<a class="adress anim__slide anim__delayMedium_3" href="https://www.google.com/maps/place/40+Avenue+de+Suffren,+75015+Paris/@48.8543033,2.2935298,17z/data=!3m1!4b1!4m5!3m4!1s0x47e6701ef30aaf73:0x95c596e8c0d24f6b!8m2!3d48.8543033!4d2.2957185" target="_blank">
							<?= RichText::asText($document->cover_adress); ?>
						</a>
						<a class="tel anim__slide anim__delayMedium_4" href="tel:+33182836868">
							<img src="img/contact/phone.svg" alt="">
							<span><?= RichText::asText($document->cover_phone); ?></span>
						</a>
						<div class="container-btn anim__slide anim__delayMedium_9">
							<a class="btn">
								<span class="btn-text">JE SUIS UN TALENT</span>
								<svg class="btn-arrow" viewBox="0 0 14 8">
								   <use xlink:href="img/common/arrow.svg#arrow"></use>
								</svg>
							</a>
							<a class="btn">
								<span class="btn-text">JE SUIS UNE ENTREPRISE</span>
								<svg class="btn-arrow" viewBox="0 0 14 8">
								   <use xlink:href="img/common/arrow.svg#arrow"></use>
								</svg>
							</a>
						</div>
					</div>
				</div>
			</section>
			
		</main>


		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>