<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>Talent</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/talents.css">

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
				<img src="<?= $document->cover_image->url ?>" alt="" class="anim__fade anim__delayMedium_1">
				<div class="wrapper">
					<h1 class="anim__slide anim__delayMedium_2">
						<?= RichText::asHtml($document->cover_title); ?>
					</h1>
					<a class="btn anim__slide anim__delayMedium_3" href="#section-form">
						<span class="btn-text">
							<?= RichText::asText($document->cover_cta_text); ?>
						</span>
						<svg class="btn-arrow" viewBox="0 0 14 8">
						   <use xlink:href="img/common/arrow.svg#arrow"></use>
						</svg>
					</a>
				</div>
			</section>

			<section id="section-join">
				<div class="wrapper">
					<div class="container-text container__anim">
						<h2 class="anim__slide anim__delayMedium_1"><?= RichText::asText($document->elements_title); ?></h2>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->elements_text); ?>
						</p>
					</div>
					<div class="container-tab">
						<div class="tab">
							<div class="icn">
								<img src="img/talents/tab-icn-1.svg" alt="">
								<img src="img/talents/tab-icn-1-color.svg" alt="">
							</div>
							<div class="text">
								<?= RichText::asText($document->elements_choice_1); ?>
							</div>
						</div>
						<div class="tab">
							<div class="icn">
								<img src="img/talents/tab-icn-2.svg" alt="">
								<img src="img/talents/tab-icn-2-color.svg" alt="">
							</div>
							<div class="text">
								<?= RichText::asText($document->elements_choice_2); ?>
							</div>
						</div>
						<div class="tab">
							<div class="icn">
								<img src="img/talents/tab-icn-3.svg" alt="">
								<img src="img/talents/tab-icn-3-color.svg" alt="">
							</div>
							<div class="text">
								<?= RichText::asText($document->elements_choice_3); ?>
							</div>
						</div>
					</div>
					<div class="container-el">
						<?php $i = 1;
						foreach ($document->body[0]->items as $el) {
						?>	
							<div class="el container__anim__dt">
								<div class="content">
									<div class="illu anim__fade anim__delayMedium_1">
										<img src="<?= $el->common_el_illustration->url ?>" alt="">
									</div>
									<div class="text">
										<h3 class="anim__slide anim__delayMedium_2">
											<?= RichText::asText($el->common_el_title); ?>
										</h3>
										<?= RichText::asHtml($el->common_el_texte); ?>
									</div>
								</div>
							</div>
						<?php $i++; } ?>
					</div>
					<script type="text/javascript">
						$('#section-join .container-el .el .text p').addClass('anim__slide anim__delayMedium_3');
						$('#section-join .container-el .el .text ul').each(function(){
							$(this).children().each(function(i) {
								$(this).addClass('anim__slide anim__delayMedium_' + (4 + i));
							})
						})
					</script>
				</div>
			</section>

			<section id="section-ftr" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1"><?= RichText::asText($document->icons_title); ?></h2>
						<p class="anim__slide anim__delayMedium_2"><?= RichText::asText($document->icons_text); ?></p>
					</div>
					<div class="container-el">
						<?php $i = 3;
						foreach ($document->body1[0]->items as $el) {
						?>	
							<div class="el">
								<img class="icn anim__slide anim__delayMedium_<?php echo($i); ?>" src="<?= $el->common_el_illustration->url ?>" alt="">
								<h3 class="anim__slide anim__delayMedium_<?php echo($i+1); ?>"><?= RichText::asText($el->common_el_title); ?></h3>
								<p class="anim__slide anim__delayMedium_<?php echo($i+2); ?>">
									<?= RichText::asText($el->common_el_texte); ?>
								</p>
							</div>
						<?php } ?>
					</div>
				</div>
			</section>

			<section id="section-form" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<h2 class="anim__slide anim__delayMedium_1">
							<?= RichText::asText($document->form_title); ?>
						</h2>
						<a class="btn anim__slide anim__delayMedium_2" href="<?=$document->form_cta_in_link->url; ?>">
							<img src="img/talents/icn-linkedin.svg" alt="" class="btn-img">
							<span class="btn-text"><?= RichText::asText($document->form_cta_in_text); ?></span>
							<svg class="btn-arrow" viewBox="0 0 14 8">
							   <use xlink:href="img/common/arrow.svg#arrow"></use>
							</svg>
						</a>
						<div class="sep anim__slide anim__delayMedium_3">
							<span>OU</span>
						</div>
					</div>
					<form action="">
						<div class="label anim__slide anim__delayMedium_4">
							<div class="title"><?= RichText::asText($document->form_label_prenom); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_5">
							<div class="title"><?= RichText::asText($document->form_label_nom); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_6">
							<div class="title"><?= RichText::asText($document->form_label_telephone); ?></div>
							<input type="text">
						</div>
						<div class="label anim__slide anim__delayMedium_7">
							<div class="title"><?= RichText::asText($document->form_label_mail); ?></div>
							<input type="text">
						</div>
						<div class="label textarea anim__slide anim__delayMedium_8">
							<div class="title"><?= RichText::asText($document->form_label_textarea); ?></div>
							<textarea></textarea>
						</div>
						<button class="btn anim__slide anim__delayMedium_9">
							<span class="btn-text"><?= RichText::asText($document->form_cta_text); ?></span>
							<svg class="btn-arrow" viewBox="0 0 14 8">
							   <use xlink:href="img/common/arrow.svg#arrow"></use>
							</svg>
						</button>
					</form>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/talents-min.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>