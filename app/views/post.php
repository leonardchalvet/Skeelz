<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
use Prismic\Dom\Date;
$document = $WPGLOBAL['document']->data;
$uid = $WPGLOBAL['uid'];
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
							<?php 
							$date = Date::asDate($el->banner_date);
							echo $date->format('j M Y');
							?>
						</div>
						<h1>
							<?= RichText::asText($document->banner_title); ?>
						</h1>
						<div class="cover" style="background-image: url(<?= $document->banner_image->url ?>);"></div>
					</div>
					<div class="content">
						<?= RichText::asHtml($document->banner_text); ?>

						<?php

						$slices = $document->body;
						foreach ($slices as $slice) {
							switch ($slice->slice_type) {

								case 'citation':
									echo '<div class="container-quote">
											<img class="obj" src="/img/post/icn-quote.svg" alt="">
											<p>'.$slice->primary->quote.'</p>
											<div class="name">'.$slice->primary->author.'</div>
										  </div>';
									break;

								case 'text':
									echo RichText::asHtml($slice->primary->text);
									break;

								case 'image':
									echo '<img src="'.$slice->primary->image->url.'" alt="">';
									break;

								case 'youtube':
									echo '<iframe src="'.$slice->primary->youtube_video_id->url.'" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
									break;
								
							}
						}

						?>
						<div class="container-rs">
							<a href="https://www.facebook.com/sharer/sharer.php?u=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
								<img src="/img/newz/Facebook-color.svg" alt="">
							</a>
							<a href="https://www.linkedin.com/sharing/share-offsite/?url=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
								<img src="/img/newz/LinkedIn-color.svg" alt="">
							</a>
							<a href="https://twitter.com/intent/tweet?url=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
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
