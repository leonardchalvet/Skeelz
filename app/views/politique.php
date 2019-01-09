<?php 
use Prismic\Dom\RichText;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title><?= RichText::asText($document->meta_title); ?></title>
		<meta name="description" content="<?= RichText::asText($document->meta_description); ?>" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/cgu.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "color";
			$styleLink = "color";
			$styleBurger = "color";
			include('common-header.php');
		?>

		<main>

			
			<section id="section-cgu">

				<div class="wrapper">
					<?= RichText::asHtml($document->content_title); ?>

					<div class="container-col">
						<div class="col">
							<?php
							foreach ($document->body[0]->items as $el) {
							?>	
								<div class="el">
									<?= RichText::asHtml($el->content_col_el); ?>
								</div>
							<?php } ?>
						</div>
						<div class="col">
							<?php
							foreach ($document->body[1]->items as $el) {
							?>	
								<div class="el">
									<?= RichText::asHtml($el->content_col_el); ?>
								</div>
							<?php } ?>
						</div>
					</div>
				</div>

			</section>


		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>