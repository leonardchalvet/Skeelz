<?php
	use Prismic\Dom\RichText;
	$header = $WPGLOBAL['header']->results[0]->data;	
?>
<header id="header-desktop" class="<?php echo($linkActive); ?>">
	<div class="wrapper">
		<a class="logo <?php echo($styleLogo); ?>" href="<?= $header->cta_link_home->url; ?>">
			<img src="<?= $header->logo_color->url ?>" alt="">
			<img src="<?= $header->logo_white->url ?>" alt="">
		</a>
		<div class="container-link <?php echo($styleLink); ?>">
			<a href="<?= $header->cta_link_talent->url; ?>"><?= RichText::asText($header->cta_talent); ?></a>
			<a href="<?= $header->cta_link_entreprise->url; ?>"><?= RichText::asText($header->cta_entreprise); ?></a>
			<a href="<?= $header->cta_link_team->url; ?>"><?= RichText::asText($header->cta_team); ?></a>
			<a href="<?= $header->cta_link_newz->url; ?>"><?= RichText::asText($header->cta_newz); ?></a>
		</div>
		<a href="<?= $header->cta_link_contact->url; ?>" class="btn">
			<span class="btn-text"><?= RichText::asText($header->cta_contact); ?></span>	
		</a>
	</div>
</header>

<header id="header-mobile">	
	<div class="head">	
		<div class="wrapper">	
			<a class="container-logo <?php echo($styleLogo); ?>" href="index.php">
				<img src="<?= $header->logo_color->url ?>" alt="">
				<img src="<?= $header->logo_white->url ?>" alt="">
			</a>
			<div class="container-action">
				<div class="burger <?php echo($styleBurger); ?>">
					<div class="line"></div>
					<div class="line"></div>
				</div>
			</div>
			
		</div>
	</div>
	<div class="container-link">
		<div class="wrapper">	
			<ul>
				<li><a href="<?= $header->cta_link_talent->url; ?>"><?= RichText::asText($header->cta_talent); ?></a></li>
				<li><a href="<?= $header->cta_link_entreprise->url; ?>"><?= RichText::asText($header->cta_entreprise); ?></a></li>
				<li><a href="<?= $header->cta_link_team->url; ?>"><?= RichText::asText($header->cta_team); ?></a></li>
				<li><a href="<?= $header->cta_link_newz->url; ?>"><?= RichText::asText($header->cta_newz); ?></a></li>
			</ul>
			<a href="<?= $header->cta_link_contact->url; ?>" class="btn">
				<span class="btn-text"><?= RichText::asText($header->cta_contact); ?></span>	
			</a>
		</div>
	</div>
</header>

<div id="cookies" class="hide">
	<div class="wrapper">
		<div class="text">
			<p><?= RichText::asText($header->cookie_text); ?></p>
			<a href="<?= $header->cookie_cta_link->url; ?>"><?= RichText::asText($header->cookie_cta_text); ?></a>
		</div>
		<div class="btn">
			<span class="btn-text"><?= RichText::asText($header->cookie_button); ?></span>	
		</div>
	</div>
</div>
<script type="text/javascript">
	if(Cookie.Read('accept') != null && Cookie.Read('accept') == 'false') {
		$('#cookies').removeClass('hide');
	}

	$('#cookies .wrapper .btn').click(function(){
		Cookie.Create('accept', 'true', 365);
	})
</script>