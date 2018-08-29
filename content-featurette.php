<?php 	
	$video_title = get_field('video_title');
	$video_link = get_field('video_link');
	$video_background = get_field('video_background');
?>

<!-- VIDEO FEATURETTE -->
<section id="featurette" style="background: url('<?php echo $video_background['url']; ?>') 50% 100% repeat fixed; background-size: cover;">
	<div class="container">
		<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<h2><?php echo $video_title; ?></h2>
				<div class="embed-responsive embed-responsive-16by9">
				<iframe width="100%" height="415" src="<?php echo $video_link; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
				</div>
			</div><!-- end col -->
		</div><!-- row -->			
	</div><!-- container -->
</section><!-- featurette -->