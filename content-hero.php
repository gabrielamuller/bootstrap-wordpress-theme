<?php
// Custom Fields
$prelaunch_price = get_post_meta( 7, 'prelaunch_price', true);
$launch_price = get_post_meta(7, 'launch_price', true );
$final_price = get_post_meta( 7, 'final_price', true);
$course_url = get_post_meta( 7, 'course_url', true);
$button_text = get_post_meta( 7, 'button_text', true);
$price_one_title= get_post_meta( 7, 'price_one_title', true);
$price_one_title2= get_post_meta( 7, 'price_one_title2', true);
$price_two_title= get_post_meta( 7, 'price_two_title', true);
$price_two_title2= get_post_meta( 7, 'price_two_title2', true);
$price_three_title= get_post_meta( 7, 'price_three_title', true);
$price_three_title2= get_post_meta( 7, 'price_three_title2', true);

$logo = get_field('logo');


?>


<!-- HERO -->
	<section id="hero" data-type="background" data-speed="5">
    	<article>
    		<div class="container clearfix">
    			<div class="row">
    			
    				<div class="col-sm-5">
		    			<?php if( !empty($logo) ) : ?>
					<img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>">
				<?php endif; ?>
    				</div><!-- col -->
		    		
		    		<div class="col-sm-7 hero-text">
			    		<h1><?php bloginfo('name'); ?></h1>
			            <p class="lead"><?php bloginfo('description'); ?></p>
			            
			            <div id="price-timeline">
			            	<div class="price active">
			            		<h4><?php echo $price_one_title ?><small><?php echo $price_one_title2 ?></small></h4>
			            		<span><?php echo $prelaunch_price ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4><?php echo $price_two_title ?> <small><?php echo $price_two_title2 ?></small></h4>
			            		<span><?php echo $launch_price ?></span>
			            	</div><!-- end price -->
			            	<div class="price">
			            		<h4><?php echo $price_three_title ?> <small><?php echo $price_three_title2 ?></small></h4>
			            		<span><?php echo $final_price ?></span>
			            	</div><!-- end price -->
			            </div><!-- price-timeline -->

			            <p><a class="btn btn-lg btn-danger" href="<?php echo $course_url ?>" role="button"><?php echo $button_text ?></a></p>
		    		</div><!-- col -->
		    		
    			</div><!-- row -->
    		</div><!-- container -->
    	</article>
    </section>