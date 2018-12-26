<?php 
use Prismic\Dom\RichText;
use Prismic\Dom\Link;
$document = $WPGLOBAL['document']->results[0]->data;
?>
<html>
	<head>

		<title>Newz</title>

		<meta name="description" content="" />

		<meta http-equiv="content-type" content="text/html; charset=utf8" />

		<meta name="viewport" content="width=device-width, initial-scale=1.0">

		<link rel="stylesheet" type="text/css" href="style/css/newz.css">

		<?php include('head.php'); ?>

	</head>
	
	<body>

		<?php 
			$styleLogo = "white";
			$styleLink = "white";
			include('common-header.php');
		?>

		<main>

			<section id="section-home" class="container__anim">
				<div class="wrapper">
					<div class="container-text">
						<?= RichText::asHtml($document->cover_title); ?>
						<script type="text/javascript">
							$('#section-home .wrapper h1').addClass('anim__slide anim__delayMedium_1');
						</script>
						<p class="anim__slide anim__delayMedium_2">
							<?= RichText::asText($document->cover_text); ?>
						</p>
						<div class="container-input anim__slide anim__delayMedium_3">
							<img src="img/newz/search.svg" alt="">
							<input type="text" placeholder="Rechercher">
						</div>
					</div>
				</div>
				<div class="container-follow anim__slide anim__delayMedium_4">
					<div class="title">
						<?= RichText::asText($document->cover_networks_text); ?>
					</div> 
					<div class="container-rs">
						<a href="<?= $document->link_network_facebook->url; ?>">
							<img src="img/newz/rs-icn-Facebook.svg" alt="">
						</a>
						<a href="<?= $document->link_network_twitter->url; ?>">
							<img src="img/newz/rs-icn-Twitter.svg" alt="">
						</a>
						<a href="<?= $document->link_network_instagram->url; ?>">
							<img src="img/newz/rs-icn-Instagram.svg" alt="">
						</a>
						<a href="<?= $document->link_network_linkedin->url; ?>">
							<img src="img/newz/rs-icn-LinkedIn.svg" alt="">
						</a>
					</div>
				</div>
				<img class="stars anim__fade anim__delayMedium_5" src="img/newz/group-stars.svg" alt="">
				<img class="shape" src="img/newz/shape.svg" alt="">
			</section>

			<section id="section-banner" class="container__anim">
				<div class="wrapper">
					<div class="container-img anim__slide anim__delayMedium_1" style="background-image: url(img/img-test/background-3.jpg);"></div>
					<div class="container-text">
						<div class="date anim__slide anim__delayMedium_2">10 décembre 2018</div>
						<h3 class="anim__slide anim__delayMedium_3">Rejoignez notre Club !</h3>
						<p class="anim__slide anim__delayMedium_4">
							Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec finibus nibh ac lectus tempus, et tempus dui varius. Ut placerat congue malesuada. Vivamus non diam ut augue fermentum rutrum. Donec massa magna, lobortis sit amet malesuada in, facilisis non nisi. Nulla id nisi est. Aliquam dignissim imperdiet tortor vel placerat. Ut ut velit finibus…
						</p>
						<a class="anim__slide anim__delayMedium_4" href="post.php">LIRE LA SUITE</a>
						<div class="container-share anim__slide anim__delayMedium_5">
							<a href="">
								<img src="img/newz/Facebook-color.svg" alt="">
							</a>
							<a href="">
								<img src="img/newz/Instagram-color.svg" alt="">
							</a>
							<a href="">
								<img src="img/newz/LinkedIn-color.svg" alt="">
							</a>
							<a href="">
								<img src="img/newz/Twitter-color.svg" alt="">
							</a>
						</div>
					</div>
				</div>
			</section>

			<section id="section-articles">
				<div class="wrapper">
					<div class="container-el">
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
						<div class="el">
							<div class="cover" style="background-image: url(img/img-test/background-1.jpg);"></div>
							<div class="text">
								<h4>
									Rejoignez notre Club !
								</h4>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad doloremque repellendus reprehenderit debitis, veritatis officia eius quisquam aliquid soluta, itaque officiis tenetur accusantium magni. Illum, numquam consectetur qui dolor eum.
								</p>
								<a href="post.php">LIRE LA SUITE</a>
								<div class="container-share">
									<a href="">
										<img src="img/newz/Facebook-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Instagram-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/LinkedIn-color.svg" alt="">
									</a>
									<a href="">
										<img src="img/newz/Twitter-color.svg" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
					<div class="container-btn">
						<a class="btn">
							<span class="btn-text"><?= RichText::asText($document->content_seemore_text); ?></span>
						</a>
					</div>
				</div>
			</section>

			<section id="section-newsletters">
				<div class="wrapper">
					<div class="container-text">
						<h2><?= RichText::asText($document->form_title); ?></h2>
						<p><?= RichText::asText($document->form_text); ?></p>
					</div>
					<div class="container-mail">
						<div class="title"><?= RichText::asText($document->form_label_mail); ?></div>
						<div class="container-input">
							<input type="text">
							<div class="btn">
								<svg class="btn-arrow" viewBox="0 0 14 8">
								   <use xlink:href="img/common/arrow.svg#arrow"></use>
								</svg>
							</div>
						</div>
					</div>
				</div>
			</section>

		</main>

		<?php include('common-footer.php') ?>

		<script type="text/javascript" src="script/minify/newz-min.js"></script>
		<script type="text/javascript" src="script/minify/common-min.js"></script>

	</body>
</html>