<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->data;
?>
<html>
	<head>

		<title>Post</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="/style/css/post.css">

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
			<section id="section-post">
				<div class="wrapper">
					<div class="head">
						<div class="date">
							<?= RichText::asText($document->banner_date); ?>
						</div>
						<h1>
							<?= RichText::asText($document->banner_title); ?>
						</h1>
						<div class="cover" style="background-image: url(<?= $document->banner_image->url ?>);"></div>
					</div>
					<div class="content">
						<?= RichText::asHtml($document->banner_text); ?>
						<div class="container-quote">
							<img class="obj" src="/img/post/icn-quote.svg" alt="">
							<p>
								<?= RichText::asText($document->content_citation_text); ?>
							</p>
							<div class="name">
								<?= RichText::asText($document->content_citation_name); ?>
							</div>
						</div>
						<p>
							<?= RichText::asText($document->content_text_1); ?>
							<img src="<?= $document->content_image_1->url ?>" alt="">
						</p>
						
						<h2>
							<?= RichText::asText($document->content_title_2); ?>
						</h2>
						<?= RichText::asHtml($document->content_text_2); ?>
						<h3>
							<?= RichText::asText($document->content_title_3); ?>
						</h3>
						<p>
							<?= RichText::asText($document->content_text_3); ?>
						</p>
						<iframe src="<?= $document->content_video->url ?>" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
						<div class="container-rs">
							<a href="<?= $document->banner_link_facebook->url; ?>">
								<img src="/img/newz/Facebook-color.svg" alt="">
							</a>
							<a href="<?= $document->banner_link_instagram->url; ?>">
								<img src="/img/newz/Instagram-color.svg" alt="">
							</a>
							<a href="<?= $document->banner_link_linkedin->url; ?>">
								<img src="/img/newz/LinkedIn-color.svg" alt="">
							</a>
							<a href="<?= $document->banner_link_twitter->url; ?>">
								<img src="/img/newz/Twitter-color.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</section>
		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="/script/minify/common-min.js"></script>

	</body>
</html>
