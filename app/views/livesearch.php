<?php 
	
	use Prismic\Dom\RichText;

	require_once '../config.php';

	$document = $WPGLOBAL['document'];
	$newz = $WPGLOBAL['newz']->results[0]->data;
	
	$value = isset($_GET['value']) ? $_GET['value'] : -1;

	if($value != -1) {

		foreach ($document->results as $el) {

			$uid = $el->uid;
			$el = $el->data;

			$titre = RichText::asText($el->banner_title);
			
			if( strpos($titre, $value) !== false ) { ?>
				<div class="el">
					<div class="cover" 
					     style="background-image: url(<?= $el->banner_image->url ?>);"></div>
					<div class="text">
						<h4>
							<?= RichText::asText($el->banner_title); ?>
						</h4>
						<p>
							<?= RichText::asText($el->banner_text); ?>
						</p>
						<a href="/newz/<?php echo($uid); ?>">
							<?= RichText::asText($newz->content_cta_text); ?>
						</a>
						<div class="container-share">
							<a href="https://www.facebook.com/sharer/sharer.php?u=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
								<img src="img/newz/Facebook-color.svg" alt="">
							</a>
							<a href="https://www.linkedin.com/sharing/share-offsite/?url=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
								<img src="img/newz/LinkedIn-color.svg" alt="">
							</a>
							<a href="https://twitter.com/intent/tweet?url=https://skeelz.com/newz/<?php echo($uid); ?>" target="_blank">
								<img src="img/newz/Twitter-color.svg" alt="">
							</a>
						</div>
					</div>
				</div>
		<?php
			} 
			$i++;
		}
	}
?>