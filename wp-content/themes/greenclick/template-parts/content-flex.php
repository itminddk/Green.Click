<?php
/**
 * Template part for displaying flexible fields
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Green_Click
 */

?>

<?php
if( have_rows('flex') ):
    while ( have_rows('flex') ) : the_row();
        if( get_row_layout() == 'flex-text' ):
            $color = get_sub_field('text-design'); ?>

            <section class="section <?php if( $color == 'blue') : ?>section--grey-alt<?php endif; ?> section--burj">

                <div class="container">

                    <?php
                    $headline = get_sub_field('text-headline');
                    $subtitle = get_sub_field('text-subtitle');
                    $content = get_sub_field('text-content');
                    $button = get_sub_field('text-button-text');
                    $link = get_sub_field('text-button-link');
                    $button_two = get_sub_field('text-button_two-text');
                    $link_two = get_sub_field('text-button_two-link'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

                    <?php if( $button && !$button_two ) : ?><a href="<?php echo $link; ?>" class="button button--<?php echo $color; ?>"><?php echo $button; ?></a><?php endif; ?>
                    <?php if( $button && $button_two ) : ?>
                        <div class="button-group">
                            <a href="<?php echo $link; ?>" class="button button--<?php echo $color; ?>"><?php echo $button; ?></a>
                            <a href="<?php echo $link_two; ?>" class="button button--<?php echo $color; ?> button--outline"><?php echo $button_two; ?></a>
                        </div>
                    <?php endif; ?>

                </div>

            </section>

        <?php elseif( get_row_layout() == 'flex-cta' ):
            $color = get_sub_field('cta-design'); ?>

            <section class="section <?php if( $color == 'blue') : ?>section--grey-alt<?php endif; ?> section--burj">

                <div class="container">

                    <?php
                    $headline = get_sub_field('cta-headline');
                    $subtitle = get_sub_field('cta-subtitle');
                    $content = get_sub_field('cta-content');
                    $button = get_sub_field('cta-button-text');
                    $confirmation = get_sub_field('cta-button-confirmation'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

                    <?php if( $button ) : ?>
                        <div class="contact" id="contactForm">
                            <form class="button-container" action="" method="">
                        		<div class="button-group is-inactive">
                        			<input type="text" class="input input--first" placeholder="Navn">
                        			<span class="tel-prefix">+45</span><input type="tel" class="input input--second" placeholder="Telefonnummer" required>
                        			<button type="submit" class="button--<?php echo $color; ?> contact__button" id="contactButton"><span><?php echo $button; ?></span></button>
                        			<p><?php echo $confirmation; ?></p>
                        		</div>
                        	</form>
                        </div>
                    <?php endif; ?>
                </div>

            </section>

        <?php elseif( get_row_layout() == 'flex-text_two' ):  ?>

            <?php
            $bg = get_sub_field('text-bg');
            $color = get_sub_field('text-design');
            $headline = get_sub_field('text-headline');
			$subtitle = get_sub_field('text-subtitle');
            $content = get_sub_field('text-content');
            $image = get_sub_field('text-image');
            $button = get_sub_field('text-button-text');
            $link = get_sub_field('text-button-link'); ?>

            <section class="section section--fullwidth <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?> section--burj">
                <div class="block-container">
                    <div class="block">
                        <div class="block__column">
                            <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
                        </div>
                        <div class="block__column">
                            <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
								<?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                            <?php if( $content ) : ?><?php echo $content; ?><?php endif; ?>
                            <?php if( $button && $link ) : ?><a href="<?php echo $link; ?>" class="button button--green"><?php echo $button; ?></a><?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

		<?php elseif( get_row_layout() == 'flex-text_two-margin' ):  ?>

			<?php
			$bg = get_sub_field('text-bg');
			$color = get_sub_field('text-design');
			$headline = get_sub_field('text-headline');
			$content = get_sub_field('text-content');
			$image = get_sub_field('text-image');
			$button = get_sub_field('text-button-text');
			$link = get_sub_field('text-button-link'); ?>

			<section class="section section--fullwidth section--no-margin <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?>">
				<div class="block-container">
					<div class="block">
						<div class="block__column block__column--image">
							<?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
						</div>
						<div class="block__column block__column--text">
							<?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
							<?php if( $content ) : ?><?php echo $content; ?><?php endif; ?>
							<?php if( $button ) : ?><a href="#" class="button button--green"><?php echo $button; ?></a><?php endif; ?>
						</div>
					</div>
				</div>
			</section>

		<?php elseif( get_row_layout() == 'flex-text_two-image' ):  ?>

			<?php
			$bg = get_sub_field('text-bg');
			$video = get_sub_field('text-video');
			$image = get_sub_field('text-image'); ?>

			<section class="section section--fullwidth section--video <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?> section--burj">
				<div class="block-container">
					<div class="block">
						<div class="block__column block__column--video">
							<div class="video">
								<iframe width="1280" height="720"  src="https://www.youtube.com/embed/<?php echo $video; ?>" frameborder="0" allowfullscreen></iframe>
							</div>
						</div>
						<div class="block__column block__column--image">
							<?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
						</div>
					</div>
				</div>
			</section>

        <?php elseif( get_row_layout() == 'flex-text_two-headline' ):  ?>

            <?php
            $bg = get_sub_field('text-bg');
            $color = get_sub_field('text-design');
            $headline = get_sub_field('text-headline');
            $content = get_sub_field('text-content'); ?>

            <section class="section section--fullwidth section--fullwidth-text <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?> section--eiffel">

                <div class="block-container">
                    <div class="block">
                        <div class="block__column">
                            <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
                        </div>
                        <div class="block__column">
                            <?php if( $content ) : ?><?php echo $content; ?><?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'flex-text_two-pure' ):  ?>

            <?php
            $bg = get_sub_field('text-bg');
            $color = get_sub_field('text-design');
            $headline = get_sub_field('text-headline');
            $subtitle = get_sub_field('text-subtitle');
            $content = get_sub_field('text-content');
            $content_two = get_sub_field('text-content-two'); ?>

            <section class="section section--fullwidth section--fullwidth-text <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?> section--eiffel">

                <div class="container">
                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                </div>

                <div class="block-container">
                    <div class="block">
                        <div class="block__column">
                            <?php if( $content ) : ?><?php echo $content; ?><?php endif; ?>
                        </div>
                        <div class="block__column">
                            <?php if( $content_two ) : ?><?php echo $content_two; ?><?php endif; ?>
                        </div>
                    </div>
                </div>
            </section>

        <?php elseif( get_row_layout() == 'flex-text_image' ):
            $color = get_sub_field('text-design');
            $margin = get_sub_field('text-margin'); ?>

            <section class="section section--image-bottom <?php if( $margin ) : ?>section--npb<?php endif; ?> section--burj">

                <div class="container">

                    <?php
                    $headline = get_sub_field('text-headline');
                    $subtitle = get_sub_field('text-subtitle');
                    $content = get_sub_field('text-content');
                    $button = get_sub_field('text-button-text');
                    $link = get_sub_field('text-button-link');
                    $button_two = get_sub_field('text-button_two-text');
                    $link_two = get_sub_field('text-button_two-link');
                    $image = get_sub_field('text-image');
                    $image_mobile = get_sub_field('text-image_mobile');
                    $margin = get_sub_field('text-margin'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
                    <?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

                    <?php if( $button && !$button_two ) : ?><a href="<?php echo $link; ?>" class="button button--<?php echo $color; ?>"><?php echo $button; ?></a><?php endif; ?>
                    <?php if( $button && $button_two ) : ?>
                        <div class="button-group">
                            <a href="<?php echo $link; ?>" class="button button--<?php echo $color; ?>"><?php echo $button; ?></a>
                            <a href="<?php echo $link_two; ?>" class="button button--<?php echo $color; ?> button--outline"><?php echo $button_two; ?></a>
                        </div>
                    <?php endif; ?>

                </div>

                <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" class="<?php if( $image_mobile ) : ?>hidden-sm-down<?php endif; ?>"><?php endif; ?>
                <?php if( $image_mobile ): ?><img src="<?php echo $image_mobile['url']; ?>" alt="<?php echo $image_mobile['alt']; ?>" class="hidden-md-up"><?php endif; ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-accordion' ):
            $headline = get_sub_field('accordion-headline');
            $content = get_sub_field('accordion-content');
			?>

            <section class="section section--accordion section--burj">
    			<div class="block-container">
    				<div class="block">
    					<div class="block__column">
    						<h1 class="whale whale--black"><?php echo $headline; ?></h1>
							<?php echo $content; ?>
    					</div>
    					<div class="block__column">
    						<div class="accordion">
                                <ul>

                                <?php if( have_rows('accordion-repeater') ):
                                    $count = 0;
                                    while ( have_rows('accordion-repeater') ) : the_row();
                                    $question = get_sub_field('accordion-question');
                                    $answer = get_sub_field('accordion-answer');

                                    $count++; ?>

                                    <li class="question">
    									<div class="question__header">
    										<a class="accordion-trigger" href="#collapse<?php echo $count; ?>">
    											<div class="question__title">
    												<p><?php echo $question; ?></p>
    											</div>
    										</a>
    									</div>
    									<div id="collapse<?php echo $count; ?>" class="accordion-collapse collapse">
    										<div class="answer">
    											<div class="answer__content">
    												<p><?php echo $answer; ?></p>
    											</div>
    										</div>
    									</div>
    								</li>

                                    <?php endwhile; ?>
                                    <?php $count = 0; ?>
                                <?php endif; ?>

                                </ul>
    						</div>
    					</div>
    				</div>
    			</div>

    		</section>

        <?php elseif( get_row_layout() == 'flex-list' ):
            $headline = get_sub_field('list-headline');
            $bg = get_sub_field('list-bg');
            $button = get_sub_field('list-button');
            $link = get_sub_field('list-link'); ?>

            <section class="section section--features <?php if( $bg ) : ?>section--<?php echo $bg; endif; ?> section--empire">
    			<div class="container">
    				<?php if( $headline ) : ?><h1 class="whale"><?php echo $headline; ?></h1><?php endif; ?>
    			</div>

    			<div class="block-container features">

                    <?php if( have_rows('list-repeater') ):
                        while ( have_rows('list-repeater') ) : the_row();
                        $headline = get_sub_field('list-headline');
                        $text = get_sub_field('list-text'); ?>

                        <div class="block">
        					<?php if( $headline ) : ?><strong><?php echo $headline; ?></strong><?php endif; ?>
        					<?php if( $text ) : ?><p><?php echo $text; ?></p><?php endif; ?>
        				</div>

                        <?php endwhile; ?>
                    <?php endif; ?>

    			</div>

    			<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--green"><?php echo $button; ?></a><?php endif; ?>

    		</section>

		<?php elseif( get_row_layout() == 'flex-branch' ):
			$headline = get_sub_field('branch-headline');
			$content = get_sub_field('branch-content');
			$visual = get_sub_field('branch-visual');
			$image = get_sub_field('branch-image'); ?>

			<section class="section section--features section--branch <?php if( $visual ) : ?>section--visual<?php endif; ?> section--empire">
				<div class="container">
					<?php if( $headline ) : ?><h1 class="whale whale--green"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>
				</div>

				<div class="block-container features">

					<?php if( have_rows('branch-repeater') ):
						while ( have_rows('branch-repeater') ) : the_row();
						$headline = get_sub_field('branch-headline');
						$text = get_sub_field('branch-text');
						$button = get_sub_field('branch-button');
						$link = get_sub_field('branch-button-link'); ?>

						<div class="block">
							<?php if( $headline ) : ?><strong><?php echo $headline; ?></strong><?php endif; ?>
							<?php if( $text ) : ?><p><?php echo $text; ?></p><?php endif; ?>
							<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--green"><?php echo $button; ?></a><?php endif; ?>
						</div>

						<?php endwhile; ?>
					<?php endif; ?>

				</div>

				<?php if( $visual ) : ?>
					<img src="<?php echo $image['url']; ?>" alt="<?php echo $image['url']; ?>">
				<?php endif; ?>

			</section>

		<?php elseif( get_row_layout() == 'flex-products' ):  ?>
			<?php
			$color = get_sub_field('products-color'); ?>

			<section class="section section--products section--products__<?php echo $color; ?>">

				<?php if( have_rows('products-repeater') ):
					while ( have_rows('products-repeater') ) : the_row();
					$color = get_sub_field('product-color');
					$headline = get_sub_field('product-headline');
					$text = get_sub_field('product-text');
					$image = get_sub_field('product-image');
					$button = get_sub_field('product-button');
					$link = get_sub_field('product-button-link');
					?>

					<div class="block block--product <?php if( $color ): echo $color; endif;?>">
						<h1 class="whale"><?php echo $headline; ?></h1>
						<p class="wheat"><?php echo $text; ?></p>
						<?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
						<?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--white"><?php echo $button; ?></a><?php endif; ?>
					</div>

					<?php endwhile;
				endif; ?>

			</section>

        <?php elseif( get_row_layout() == 'flex-case' ):  ?>
            <?php
            $color = get_sub_field('case-color');
            $quote = get_sub_field('case-quote');
            $cite = get_sub_field('case-cite');
            $button = get_sub_field('case-button-text');
            $link = get_sub_field('case-button-link');
            $image = get_sub_field('case-image');
            $logo = get_sub_field('case-logo'); ?>


            <section class="section section--case" style="background-image: url('<?php echo $image['url']; ?>');">
                <div class="block block--center block--quote block--<?php echo $color; ?> block--<?php echo $color; ?>-transparent">
                    <span class="wheat">Case story</span>
                    <div class="quote">
                        <blockquote>
                            <?php echo $quote; ?>
                            <cite>– <?php echo $cite; ?></cite>
                        </blockquote>
                    </div>
                    <?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--white"><?php echo $button; ?></a><?php endif; ?>
                </div>

                <div class="block block--image">
                    <?php if( $logo ): ?><img src="<?php echo $logo['url']; ?>" alt="<?php echo $logo['alt']; ?>"><?php endif; ?>
                </div>

            </section>

        <?php elseif( get_row_layout() == 'flex-model' ):
			$one_title = get_field('model-one-title', 'option');
            $one_subtitle = get_field('model-one-subtitle', 'option');
            $one_content = get_field('model-one-content', 'option');

            $two_title = get_field('model-two-title', 'option');
            $two_subtitle = get_field('model-two-subtitle', 'option');
            $two_content = get_field('model-two-content', 'option');

            $three_title = get_field('model-three-title', 'option');
            $three_subtitle = get_field('model-three-subtitle', 'option');
            $three_content = get_field('model-three-content', 'option');

			$four_title = get_field('model-four-title', 'option');
            $four_subtitle = get_field('model-four-subtitle', 'option');
            $four_content = get_field('model-four-content', 'option');

			$five_title = get_field('model-five-title', 'option');
            $five_subtitle = get_field('model-five-subtitle', 'option');
            $five_content = get_field('model-five-content', 'option'); ?>

            <section class="section section--model section--burj">
                <div class="model__overlay">
                    <div class="overlay__header">
                        <div class="overlay__navigation">
                            <a href="#" class="prev">‹</a>
                            <a href="#" class="next">›</a>
                        </div>
                    </div>
                    <div class="overlay__content">
                        <ul id="model-slider-content">
                            <li id="modelOne">
                                <h1 class="whale"><?php echo $one_title; ?></h1>
                                <strong><?php echo $one_subtitle; ?></strong>
                                <p><?php echo $one_content; ?></p>
                            </li>
                            <li id="modelTwo">
								<h1 class="whale"><?php echo $two_title; ?></h1>
                                <strong><?php echo $two_subtitle; ?></strong>
                                <p><?php echo $two_content; ?></p>
                            </li>
                            <li id="modelThree">
								<h1 class="whale"><?php echo $three_title; ?></h1>
                                <strong><?php echo $three_subtitle; ?></strong>
                                <p><?php echo $three_content; ?></p>
                            </li>
                            <li id="modelFour">
								<h1 class="whale"><?php echo $four_title; ?></h1>
                                <strong><?php echo $four_subtitle; ?></strong>
                                <p><?php echo $four_content; ?></p>
                            </li>
                            <li id="modelFive">
								<h1 class="whale"><?php echo $five_title; ?></h1>
                                <strong><?php echo $five_subtitle; ?></strong>
                                <p><?php echo $five_content; ?></p>
                            </li>
                        </ul>
                    </div>

                    <div class="overlay__footer">
                        <ol class="steps js-step-toggle">
                    		<li class="is-active"><a href="#" data-link="modelOne"><?php _e('Brand'); ?></a></li>
                    		<li><a href="#" data-link="modelTwo"><?php _e('Attract'); ?></a></li>
                    		<li><a href="#" data-link="modelThree"><?php _e('Analyze'); ?></a></li>
                    		<li><a href="#" data-link="modelFour"><?php _e('Optimize'); ?></a></li>
                    		<li><a href="#" data-link="modelFive"><?php _e('Repeat'); ?></a></li>
                    	</ol>
                    </div>

                    <div class="overlay__close">
                        <div class="close">
                            <div class="hamburger lines">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="container">

                    <?php
                    $headline = get_sub_field('model-headline');
                    $content = get_sub_field('model-content');
                    $button = get_sub_field('model-button');
					$button_two = get_sub_field('model-button-two');
					$link_two = get_sub_field('model-button-two-link'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><?php echo $content; ?><?php endif; ?>

					<?php if( $button && !$button_two ) : ?><a href="#" class="button button--blue js-model-toggle"><?php echo $button; ?></a><?php endif; ?>
                    <?php if( $button && $button_two ) : ?>
                        <div class="button-group">
                        	<a href="#" class="button button--blue js-model-toggle"><?php echo $button; ?></a>
                            <a href="<?php echo $link_two; ?>" class="button button--green"><?php echo $button_two; ?></a>
                        </div>
                    <?php endif; ?>

                </div>

				<svg version="1.1" id="Layer_2" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
					 viewBox="0 0 657.1 262.7" style="enable-background:new 0 0 657.1 262.7;" xml:space="preserve">
				<style type="text/css">
					.st0{fill:#0DA653;}
					.st1{fill:#263D7F;}
					.st2{fill:#9C9B9B;}
					.st3{fill:#FFFFFF;}
					.st4{fill:#9D9D9C;}
					.st5{fill:none;}
					.st6{fill:#CCCCCC;}
				</style>
				<path class="st0" d="M517.9,97.3c-0.8,0-1.6,0-2.4,0.1c0,0-0.1,0-0.1,0c-7.5,0.6-14.4,3.6-19.7,8.3c-12.6,10-19.5,25.2-19.5,25.2
					h8.1c0,18.6,15.1,33.7,33.7,33.7c18.6,0,33.7-15.1,33.7-33.7C551.6,112.3,536.5,97.3,517.9,97.3z M503.1,130.9
					c-2.7,0-4.9-2.2-4.9-4.9s2.2-4.9,4.9-4.9c2.7,0,4.9,2.2,4.9,4.9S505.9,130.9,503.1,130.9z"/>
				<path class="st1" d="M301.1,89.5c-0.2-0.2-0.4-0.3-0.6-0.5c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1
					c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0
					c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0
					c0,0-0.1,0-0.1-0.1l0,0c0,0-0.1-0.1-0.1-0.1c0,0,0,0,0,0c-1.5-1.3-3-2.5-4.6-3.8l-2.4,2.9c2.1,1.7,4.2,3.4,6.2,5.1L301.1,89.5z"/>
				<path class="st1" d="M294.9,174.3l2.4,2.9c2.1-1.7,4.2-3.5,6.2-5.2l-2.5-2.9C299,170.8,297,172.6,294.9,174.3z"/>
				<path class="st1" d="M288.5,79.3c-1.3-1-2.6-2-3.9-3.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0
					c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1,0c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0
					c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c-0.6-0.5-1.2-0.9-1.8-1.4l-2.3,3c2.1,1.6,4.2,3.3,6.4,5L288.5,79.3z"/>
				<path class="st1" d="M282.3,184.5l2.3,3c0.8-0.7,1.7-1.3,2.5-2c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1,0
					c0,0,0,0,0,0c0,0,0,0,0.1,0c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0
					c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1l0,0c0,0,0.1,0,0.1-0.1l0,0
					c0.9-0.7,1.8-1.5,2.8-2.2l-2.4-3C286.5,181.1,284.4,182.8,282.3,184.5z"/>
				<path class="st1" d="M313.4,100.1c-0.5-0.4-1-0.9-1.5-1.3c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0
					c0,0-0.1,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0c0,0,0,0-0.1-0.1c0,0,0,0,0,0
					c0,0,0,0-0.1,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0-0.1-0.1-0.1-0.1l0,0c-1.3-1.1-2.5-2.2-3.8-3.3l-2.5,2.9c2.1,1.8,4.1,3.5,6.1,5.3
					L313.4,100.1z"/>
				<path class="st1" d="M337,136.4c-1.9,1.9-3.9,3.7-5.8,5.6l2.6,2.8c2-1.9,4-3.8,5.9-5.6L337,136.4z"/>
				<path class="st1" d="M307.2,163.8l2.5,2.9c2.1-1.8,4.1-3.6,6.1-5.4l-2.5-2.8C311.3,160.3,309.3,162.1,307.2,163.8z"/>
				<path class="st1" d="M337.4,122.1c-0.6-0.5-1.2-1.1-1.7-1.7c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c-1-1-2.1-2-3.2-3
					c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c-0.3-0.3-0.5-0.5-0.8-0.8l-2.6,2.8c2,1.9,4,3.7,5.9,5.6L337.4,122.1z"/>
				<path class="st1" d="M319.3,153.1l2.6,2.8c0.9-0.8,1.8-1.7,2.7-2.5l0,0c0,0,0.1-0.1,0.1-0.1l0,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0
					c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0c0,0,0.1-0.1,0.1-0.1l0,0c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0
					c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0
					c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0.1-0.1c0,0,0,0,0,0c0,0,0.1,0,0.1-0.1c0,0,0,0,0,0
					c0,0,0.1-0.1,0.1-0.1c0,0,0,0,0,0c0.6-0.6,1.2-1.1,1.8-1.7l-2.6-2.8C323.3,149.4,321.3,151.2,319.3,153.1z"/>
				<path class="st1" d="M325.6,111c-0.4-0.3-0.7-0.7-1.1-1c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0c0,0,0,0,0,0
					c0,0,0,0,0,0c0,0,0,0,0,0c-1.6-1.4-3.1-2.9-4.7-4.3l-2.5,2.8c2,1.8,4,3.6,6,5.4L325.6,111z"/>
				<path class="st2" d="M341.4,135.1c-1-1-2-2-3-2.9l-1.2-1.2l1.2-1.2c1-1,2-2,3-2.9l2.5,2.5c-0.6,0.6-1.1,1.1-1.7,1.7
					c0.6,0.6,1.1,1.1,1.7,1.7L341.4,135.1z"/>
				<path class="st2" d="M525.2,243.6c-2.1,0-4.2-0.1-6.3-0.2l0.2-3.5c2.8,0.2,5.6,0.3,8.2,0.2l0.1,3.5
					C526.6,243.6,525.9,243.6,525.2,243.6z"/>
				<path class="st2" d="M535.9,243.1l-0.3-3.5c2.7-0.3,5.5-0.6,8.2-1.1l0.6,3.4C541.6,242.5,538.7,242.9,535.9,243.1z"/>
				<path class="st2" d="M510.3,242.4c-2.7-0.4-5.5-1-8.4-1.6l0.8-3.4c2.7,0.6,5.5,1.2,8.1,1.6L510.3,242.4z"/>
				<path class="st2" d="M552.7,240.2l-0.9-3.4c2.7-0.7,5.3-1.4,7.9-2.3l1.1,3.3C558.2,238.7,555.4,239.5,552.7,240.2z"/>
				<path class="st2" d="M493.7,238.6c-2.6-0.8-5.4-1.7-8.1-2.6l1.2-3.3c2.7,0.9,5.3,1.8,7.9,2.6L493.7,238.6z"/>
				<path class="st2" d="M568.9,234.8l-1.4-3.2c2.5-1.1,5-2.2,7.5-3.5l1.6,3.1C574.1,232.5,571.5,233.7,568.9,234.8z"/>
				<path class="st2" d="M477.7,233c-2.5-1-5.2-2.2-7.8-3.3l1.4-3.2c2.6,1.2,5.2,2.3,7.7,3.3L477.7,233z"/>
				<path class="st2" d="M584,227.1l-1.8-3c2.3-1.4,4.7-3,6.9-4.6l2,2.8C588.8,224,586.4,225.6,584,227.1z"/>
				<path class="st2" d="M462.3,226c-2.5-1.2-5-2.5-7.5-3.9l1.6-3.1c2.5,1.3,5,2.6,7.4,3.8L462.3,226z"/>
				<path class="st2" d="M447.4,218.1c-2.4-1.4-4.9-2.8-7.3-4.3l1.8-3c2.4,1.5,4.8,2.9,7.2,4.2L447.4,218.1z"/>
				<path class="st2" d="M597.8,217.1l-2.3-2.7c2.1-1.8,4.2-3.6,6.1-5.6l2.5,2.5C602.1,213.3,600,215.3,597.8,217.1z"/>
				<path class="st2" d="M432.9,209.4c-2.3-1.5-4.7-3-7.1-4.6l1.9-2.9c2.4,1.6,4.7,3.1,7,4.6L432.9,209.4z"/>
				<path class="st2" d="M610,205.1l-2.6-2.3c1.8-2.1,3.6-4.2,5.2-6.4l2.8,2.1C613.7,200.8,611.9,203,610,205.1z"/>
				<path class="st2" d="M418.8,200c-2.3-1.6-4.6-3.2-6.9-4.9l2-2.8c2.3,1.6,4.6,3.3,6.8,4.8L418.8,200z"/>
				<path class="st2" d="M620.2,191.5l-2.9-1.9c1.5-2.3,2.9-4.7,4.2-7.1l3.1,1.7C623.2,186.6,621.7,189.1,620.2,191.5z"/>
				<path class="st2" d="M405.1,190.1c-2.3-1.7-4.5-3.4-6.7-5.1l2.1-2.8c2.2,1.7,4.4,3.4,6.7,5.1L405.1,190.1z"/>
				<path class="st2" d="M391.8,179.8c-2.2-1.8-4.4-3.5-6.6-5.3l2.2-2.7c2.1,1.8,4.3,3.5,6.5,5.3L391.8,179.8z"/>
				<path class="st2" d="M628.3,176.5l-3.2-1.4c1.1-2.5,2.1-5.1,3.1-7.7l3.3,1.2C630.5,171.2,629.4,173.9,628.3,176.5z"/>
				<path class="st2" d="M378.7,169.2c-2.2-1.8-4.3-3.7-6.4-5.5l2.3-2.6c2.1,1.8,4.2,3.6,6.4,5.4L378.7,169.2z"/>
				<path class="st2" d="M634,160.4l-3.4-0.9c0.7-2.7,1.3-5.4,1.8-8.1l3.4,0.7C635.4,154.8,634.7,157.6,634,160.4z"/>
				<path class="st2" d="M366,158.1c-2.1-1.9-4.2-3.8-6.3-5.6l2.4-2.6c2,1.9,4.1,3.7,6.2,5.6L366,158.1z"/>
				<path class="st2" d="M353.5,146.8c-2.1-2-4.1-3.9-6.1-5.8l2.4-2.5c2,1.9,4,3.8,6.1,5.8L353.5,146.8z"/>
				<path class="st2" d="M637.2,143.6l-3.5-0.4c0.3-2.7,0.5-5.5,0.6-8.2l3.5,0.1C637.7,138,637.5,140.8,637.2,143.6z"/>
				<path class="st2" d="M634.3,126.7c-0.1-2.7-0.3-5.5-0.6-8.2l3.5-0.4c0.3,2.8,0.5,5.7,0.6,8.5L634.3,126.7z"/>
				<path class="st2" d="M349.8,123.4l-2.4-2.5c2-1.9,4-3.9,6.1-5.8l2.4,2.5C353.8,119.5,351.8,121.5,349.8,123.4z"/>
				<path class="st2" d="M362,111.9l-2.4-2.6c2-1.9,4.1-3.8,6.2-5.7l2.3,2.6C366.1,108.1,364.1,110,362,111.9z"/>
				<path class="st2" d="M632.4,110.3c-0.5-2.7-1.1-5.4-1.9-8.1l3.4-0.9c0.7,2.7,1.4,5.5,1.9,8.3L632.4,110.3z"/>
				<path class="st2" d="M374.5,100.7l-2.3-2.6c2.1-1.8,4.2-3.7,6.4-5.5l2.3,2.7C378.7,97.1,376.6,98.9,374.5,100.7z"/>
				<path class="st2" d="M628.1,94.4c-0.9-2.6-1.9-5.2-3.1-7.7l3.2-1.4c1.1,2.6,2.2,5.3,3.2,7.9L628.1,94.4z"/>
				<path class="st2" d="M387.3,89.9l-2.2-2.7c2.2-1.8,4.3-3.6,6.5-5.3l2.2,2.7C391.6,86.3,389.5,88.1,387.3,89.9z"/>
				<path class="st2" d="M400.4,79.4l-2.1-2.8c2.2-1.7,4.5-3.5,6.7-5.1l2.1,2.8C404.8,75.9,402.6,77.7,400.4,79.4z"/>
				<path class="st2" d="M621.4,79.3c-1.3-2.4-2.7-4.8-4.2-7.1l2.9-1.9c1.5,2.4,3,4.9,4.3,7.4L621.4,79.3z"/>
				<path class="st2" d="M413.8,69.3l-2.1-2.8c2.3-1.7,4.6-3.3,6.9-4.9l2,2.9C418.4,66,416.1,67.7,413.8,69.3z"/>
				<path class="st2" d="M612.5,65.4c-1.6-2.2-3.4-4.3-5.2-6.4l2.6-2.3c1.9,2.1,3.7,4.4,5.4,6.6L612.5,65.4z"/>
				<path class="st2" d="M427.5,59.7l-1.9-2.9c2.4-1.6,4.7-3.1,7.1-4.6l1.9,3C432.2,56.6,429.9,58.2,427.5,59.7z"/>
				<path class="st2" d="M601.6,53c-2-1.9-4-3.8-6.1-5.6l2.3-2.7c2.2,1.8,4.3,3.8,6.3,5.7L601.6,53z"/>
				<path class="st2" d="M441.7,50.8l-1.8-3c2.5-1.5,4.9-2.9,7.3-4.3l1.7,3C446.5,47.9,444.1,49.3,441.7,50.8z"/>
				<path class="st2" d="M456.2,42.5l-1.6-3.1c2.5-1.3,5.1-2.6,7.5-3.9l1.5,3.1C461.2,39.9,458.7,41.2,456.2,42.5z"/>
				<path class="st2" d="M589,42.3c-2.2-1.6-4.5-3.1-6.9-4.6l1.8-3c2.4,1.5,4.8,3.1,7.1,4.7L589,42.3z"/>
				<path class="st2" d="M471.2,35.2l-1.4-3.2c2.6-1.2,5.2-2.3,7.8-3.3l1.3,3.2C476.3,32.9,473.8,34,471.2,35.2z"/>
				<path class="st2" d="M574.9,33.7c-2.4-1.3-5-2.4-7.5-3.5l1.4-3.2c2.6,1.1,5.2,2.3,7.7,3.6L574.9,33.7z"/>
				<path class="st2" d="M486.7,29l-1.1-3.3c2.7-0.9,5.4-1.8,8.1-2.6l1,3.4C492,27.2,489.3,28.1,486.7,29z"/>
				<path class="st2" d="M559.6,27.3c-2.6-0.9-5.3-1.6-7.9-2.3l0.8-3.4c2.8,0.7,5.5,1.5,8.2,2.4L559.6,27.3z"/>
				<path class="st2" d="M502.6,24.4l-0.8-3.4c2.8-0.6,5.6-1.2,8.4-1.6l0.5,3.5C508.1,23.3,505.3,23.8,502.6,24.4z"/>
				<path class="st2" d="M543.6,23.3c-2.7-0.5-5.5-0.8-8.2-1.1l0.3-3.5c2.8,0.3,5.7,0.6,8.5,1.1L543.6,23.3z"/>
				<path class="st2" d="M518.9,22l-0.2-3.5c2.2-0.2,4.3-0.2,6.5-0.2c0.7,0,1.4,0,2.1,0l-0.1,3.5c-0.7,0-1.3,0-2,0c0,0,0,0,0,0
					C523.1,21.7,521,21.8,518.9,22z"/>
				<g>
					<path class="st1" d="M650.2,109.7l-0.3-1.6l-3.2,0.5l-0.2-1.5l8.4-1.3l0.5,3c0.2,1,0.1,1.8-0.3,2.4c-0.4,0.6-0.9,1-1.8,1.1
						c-0.6,0.1-1.1,0-1.5-0.2c-0.4-0.2-0.8-0.5-1.1-1l-3.2,2.4l-0.1,0l-0.2-1.6L650.2,109.7z M651.2,107.9l0.2,1.5
						c0.1,0.5,0.3,0.9,0.6,1.1c0.3,0.2,0.7,0.3,1.1,0.3c0.5-0.1,0.8-0.3,1-0.5c0.2-0.3,0.3-0.7,0.2-1.2l-0.2-1.5L651.2,107.9z"/>
					<path class="st1" d="M652.1,120.4l-0.3-3.5l-2.6,0.2l0.4,4.1l-1.2,0.1l-0.5-5.6l8.5-0.8l0.5,5.5l-1.2,0.1l-0.4-4l-2.3,0.2l0.3,3.5
						L652.1,120.4z"/>
					<path class="st1" d="M651.7,125.3l-3.2,0.1l0-1.5l8.5-0.2l0.1,3.3c0,1-0.2,1.7-0.7,2.3c-0.5,0.6-1.1,0.9-2,0.9
						c-0.8,0-1.5-0.2-2-0.8c-0.5-0.5-0.7-1.3-0.7-2.3L651.7,125.3z M652.9,125.3l0,1.8c0,0.5,0.1,0.9,0.4,1.2c0.3,0.3,0.6,0.4,1.1,0.4
						c0.5,0,0.8-0.2,1.1-0.4c0.3-0.3,0.4-0.7,0.4-1.2l0-1.8L652.9,125.3z"/>
					<path class="st1" d="M652,138l0.2-3.5l-2.6-0.1l-0.2,4.1l-1.2-0.1l0.3-5.6l8.5,0.5l-0.3,5.5l-1.2-0.1l0.2-4l-2.4-0.1l-0.2,3.5
						L652,138z"/>
					<path class="st1" d="M649.3,145.8l0.4-3.3l-1.9-0.9l0.2-1.5l8,4.3l-0.2,1.3l-8.9,2.1l0.2-1.5L649.3,145.8z M650.9,143.1l-0.3,2.5
						l3.7-0.8L650.9,143.1z"/>
					<path class="st1" d="M652.7,156.8l0.5-2.6l-7.2-1.5l0.3-1.4l7.2,1.5l0.5-2.6l1.2,0.2l-1.4,6.6L652.7,156.8z"/>
				</g>
				<ellipse class="st3" cx="523.5" cy="20.2" rx="7.9" ry="4.9"/>
				<g>
					<g>
						<polygon class="st4" points="516.2,27 523.7,20.1 516.2,13.1 518.4,10.8 528.4,20.1 518.4,29.4 		"/>
					</g>
				</g>
				<ellipse class="st3" cx="522.1" cy="240.6" rx="7.9" ry="7.6"/>
				<g>
					<g>
						<polygon class="st4" points="530.1,234.5 522.6,241.5 530.1,248.4 527.9,250.8 517.9,241.5 527.9,232.2 		"/>
					</g>
				</g>
				<g>
					<path class="st1" d="M237.9,202.2l-5.4-7.5l2.6-1.8c0.9-0.6,1.6-0.9,2.3-0.9c0.7,0,1.3,0.4,1.8,1c0.2,0.3,0.4,0.7,0.4,1.1
						c0,0.4-0.1,0.8-0.4,1.2c0.5-0.2,0.9-0.2,1.4,0c0.4,0.1,0.8,0.4,1.1,0.9c0.5,0.7,0.7,1.4,0.5,2.1c-0.2,0.7-0.7,1.4-1.5,2
						L237.9,202.2z M236.1,196.9l1.3-0.9c0.4-0.3,0.7-0.6,0.8-1c0.1-0.3,0-0.7-0.2-1c-0.3-0.4-0.6-0.6-0.9-0.6c-0.3,0-0.7,0.1-1.2,0.5
						l-1.3,0.9L236.1,196.9z M236.8,197.9l1.7,2.4l1.5-1c0.4-0.3,0.7-0.6,0.7-1c0.1-0.4,0-0.7-0.3-1.1c-0.6-0.8-1.2-0.9-2.1-0.3
						L236.8,197.9z"/>
					<path class="st1" d="M245.8,192.2l-1.5,1l2.1,2.9l-1.3,0.9l-5.4-7.5l2.6-1.9c0.9-0.6,1.7-0.9,2.4-0.8c0.8,0.1,1.4,0.4,1.9,1.2
						c0.4,0.5,0.5,1,0.5,1.5c0,0.5-0.2,1-0.5,1.5l3.9,1.9l0,0.1l-1.4,1L245.8,192.2z M243.6,192.2l1.3-1c0.4-0.3,0.7-0.7,0.8-1.1
						c0.1-0.4,0-0.8-0.3-1.2c-0.3-0.4-0.6-0.6-1-0.7c-0.4-0.1-0.8,0.1-1.3,0.4l-1.4,1L243.6,192.2z"/>
					<path class="st1" d="M255.2,187.2l-2.9,2.1l0.6,2.2l-1.4,1l-2.5-9.6l1.2-0.8l8.2,5.5l-1.4,1L255.2,187.2z M251.9,188l2.2-1.6
						l-3.3-2.3L251.9,188z"/>
					<path class="st1" d="M265.8,182.3l-1.3,0.9l-7.2-2.9l3.8,5.3l-1.3,0.9l-5.4-7.5l1.3-0.9l7.2,3l-3.8-5.4l1.3-0.9L265.8,182.3z"/>
					<path class="st1" d="M267.9,180.8l-5.4-7.5l2.2-1.6c0.7-0.5,1.4-0.7,2.1-0.8c0.7-0.1,1.4,0.1,2.1,0.4c0.7,0.3,1.3,0.9,1.8,1.6
						l0.3,0.4c0.5,0.7,0.8,1.4,0.9,2.2c0.1,0.7,0,1.4-0.3,2.1c-0.3,0.7-0.8,1.2-1.5,1.7L267.9,180.8z M264.6,173.4l3.9,5.4l0.9-0.6
						c0.7-0.5,1.1-1.1,1.1-1.8c0.1-0.7-0.2-1.4-0.8-2.2l-0.3-0.4c-0.6-0.8-1.2-1.3-1.9-1.5c-0.7-0.2-1.3,0-2,0.5L264.6,173.4z"/>
				</g>
				<g>
					<g>
						<path class="st1" d="M100,236.2c-1.5-0.4-2.2-0.6-3.7-1c-0.5,0.7-0.8,1.1-1.4,1.9c-0.7-0.2-1-0.3-1.7-0.5c2.5-3.1,3.7-4.7,6.1-7.9
							c0.6,0.2,0.8,0.2,1.4,0.4c0.4,3.9,0.7,5.9,1.4,9.8c-0.7-0.2-1.1-0.2-1.8-0.4C100.2,237.6,100.1,237.1,100,236.2z M97.1,234.1
							c1.1,0.3,1.6,0.4,2.7,0.7c-0.2-1.6-0.3-2.4-0.4-4.1C98.6,232.1,98.1,232.8,97.1,234.1z"/>
						<path class="st1" d="M111.5,232.7c-1.2-0.2-1.7-0.3-2.9-0.5c-0.6,3.1-0.9,4.7-1.5,7.8c-0.7-0.1-1-0.2-1.7-0.3
							c0.6-3.1,0.9-4.7,1.6-7.8c-1.1-0.2-1.7-0.4-2.9-0.6c0.1-0.5,0.2-0.8,0.3-1.3c2.9,0.7,4.3,0.9,7.3,1.4
							C111.6,231.9,111.6,232.2,111.5,232.7z"/>
						<path class="st1" d="M120.2,233.8c-1.2-0.1-1.8-0.2-2.9-0.3c-0.4,3.2-0.6,4.7-1,7.9c-0.7-0.1-1-0.1-1.7-0.2
							c0.4-3.2,0.6-4.7,1.1-7.9c-1.2-0.2-1.7-0.2-2.9-0.4c0.1-0.5,0.1-0.8,0.2-1.3c2.9,0.5,4.4,0.6,7.3,0.9
							C120.3,233,120.2,233.3,120.2,233.8z"/>
						<path class="st1" d="M125.3,238.6c-0.8,0-1.1-0.1-1.9-0.1c-0.1,1.4-0.2,2.1-0.3,3.5c-0.7,0-1-0.1-1.7-0.1c0.3-3.7,0.5-5.5,0.8-9.2
							c1.3,0.1,2,0.2,3.3,0.2c1.1,0.1,1.9,0.3,2.5,0.8c0.6,0.5,0.8,1.2,0.8,2.1c0,0.6-0.2,1.1-0.5,1.5c-0.3,0.4-0.8,0.7-1.3,0.9
							c0.8,1.6,1.2,2.4,2.1,3.9c0,0,0,0,0,0.1c-0.7,0-1.1,0-1.9-0.1C126.3,240.8,126,240.1,125.3,238.6z M123.5,237.2
							c0.7,0,1,0.1,1.7,0.1c0.6,0,1-0.1,1.3-0.3c0.3-0.3,0.5-0.6,0.5-1.1c0-0.5-0.1-0.9-0.4-1.2c-0.3-0.3-0.7-0.4-1.3-0.5
							c-0.7,0-1-0.1-1.7-0.1C123.6,235.3,123.6,236,123.5,237.2z"/>
						<path class="st1" d="M136.4,240.2c-1.5,0-2.3,0-3.8,0c-0.3,0.9-0.5,1.3-0.8,2.1c-0.7,0-1.1,0-1.8,0c1.6-3.7,2.3-5.5,3.7-9.2
							c0.6,0,0.9,0,1.5,0c1.5,3.7,2.3,5.5,3.9,9.1c-0.7,0-1.1,0-1.8,0.1C136.9,241.5,136.8,241,136.4,240.2z M133.1,238.9
							c1.1,0,1.7,0,2.8,0c-0.6-1.5-0.9-2.3-1.5-3.8C133.9,236.6,133.6,237.4,133.1,238.9z"/>
						<path class="st1" d="M148.2,238.5c0,1-0.3,1.8-0.9,2.4c-0.6,0.6-1.5,1-2.6,1.1c-0.8,0.1-1.5-0.1-2.1-0.4c-0.6-0.3-1.1-0.8-1.5-1.4
							c-0.4-0.6-0.6-1.4-0.6-2.2c0-0.3,0-0.5,0-0.9c0-0.9,0.1-1.6,0.3-2.3c0.3-0.7,0.7-1.2,1.3-1.6c0.6-0.4,1.2-0.6,2-0.7
							c1-0.1,1.9,0.1,2.6,0.6c0.7,0.5,1.1,1.2,1.4,2.2c-0.7,0.1-1,0.1-1.6,0.2c-0.1-0.7-0.4-1.1-0.7-1.4c-0.3-0.3-0.8-0.4-1.4-0.3
							c-0.7,0.1-1.2,0.4-1.6,0.9c-0.3,0.5-0.5,1.3-0.4,2.3c0,0.3,0,0.5,0.1,0.8c0.1,1,0.3,1.7,0.7,2.2c0.4,0.5,1,0.7,1.7,0.7
							c0.7-0.1,1.2-0.2,1.5-0.6c0.3-0.3,0.5-0.8,0.5-1.5C147.2,238.6,147.5,238.6,148.2,238.5z"/>
						<path class="st1" d="M156.3,232.3c-1.2,0.2-1.7,0.3-2.9,0.5c0.5,3.1,0.7,4.7,1.2,7.8c-0.7,0.1-1,0.2-1.7,0.3
							c-0.5-3.1-0.7-4.7-1.2-7.9c-1.2,0.2-1.7,0.2-2.9,0.4c-0.1-0.5-0.1-0.8-0.2-1.3c2.9-0.4,4.4-0.6,7.3-1.1
							C156.2,231.6,156.2,231.8,156.3,232.3z"/>
					</g>
				</g>
				<g>
					<g>
						<path class="st1" d="M34.9,80.3c0.6-1.4,0.9-2.1,1.5-3.5c-0.6-0.7-1-1-1.6-1.6c0.3-0.7,0.5-1,0.8-1.6c2.7,3,4,4.4,6.8,7.2
							c-0.2,0.5-0.4,0.8-0.6,1.3c-4-0.2-5.9-0.2-9.9-0.2c0.3-0.7,0.4-1,0.7-1.7C33.6,80.2,34,80.2,34.9,80.3z M37.5,77.7
							c-0.5,1-0.7,1.6-1.1,2.6c1.6,0.1,2.4,0.1,4.1,0.2C39.2,79.4,38.6,78.9,37.5,77.7z"/>
						<path class="st1" d="M28.7,91.1c0.2-0.7,0.3-1,0.5-1.7c3.1-0.9,4.6-1.3,7.6-1.9c-2.5-0.9-3.7-1.4-6.1-2.3c0.2-0.7,0.4-1,0.6-1.6
							c3.5,1.3,5.2,2,8.6,3.3c-0.2,0.6-0.3,0.9-0.6,1.5c-3,0.7-4.6,1-7.6,1.9c2.5,0.8,3.7,1.2,6.2,2.1c-0.2,0.6-0.3,0.9-0.5,1.5
							C33.9,92.7,32.2,92.2,28.7,91.1z"/>
						<path class="st1" d="M28.5,99.6c0.4-1.5,0.6-2.2,1-3.7c-0.7-0.5-1.1-0.8-1.8-1.4c0.2-0.7,0.3-1,0.5-1.7c3.1,2.5,4.7,3.7,7.9,6.1
							c-0.2,0.6-0.2,0.8-0.4,1.4c-3.9,0.4-5.9,0.7-9.8,1.3c0.2-0.7,0.2-1.1,0.4-1.8C27.1,99.8,27.5,99.7,28.5,99.6z M30.6,96.8
							c-0.3,1.1-0.4,1.6-0.7,2.7c1.6-0.2,2.4-0.2,4.1-0.4C32.6,98.2,31.9,97.7,30.6,96.8z"/>
						<path class="st1" d="M26.3,105.4c-0.4,1.8-0.5,2.6-0.8,4.4c-0.5-0.1-0.8-0.1-1.3-0.2c0.4-2.5,0.7-3.7,1.2-6.2c3.6,0.8,5.4,1.2,9,2
							c-0.1,0.6-0.2,0.9-0.3,1.6C30.9,106.3,29.4,106,26.3,105.4z"/>
						<path class="st1" d="M28.5,113.6c1.6,1.1,2.4,1.7,4.1,2.7c-0.1,0.7-0.1,1.1-0.2,1.8c-2.2-1.5-3.3-2.3-5.4-3.9
							c-1.3-0.2-2-0.3-3.4-0.5c0.1-0.7,0.1-1,0.2-1.7c1.3,0.2,2,0.3,3.4,0.5c2.5-1,3.8-1.4,6.3-2.2c-0.1,0.7-0.2,1.1-0.3,1.8
							C31.3,112.7,30.3,113,28.5,113.6z"/>
						<path class="st1" d="M24.1,120.7c-0.2,2.1-0.2,3.2-0.3,5.3c-0.5,0-0.8,0-1.3-0.1c0.1-3,0.2-4.5,0.5-7.4c0.4,0,0.6,0.1,1,0.1
							c2.5,2.3,3.8,3.4,6.5,5.5c0.1-1.9,0.2-2.9,0.4-4.8c0.5,0.1,0.8,0.1,1.3,0.1c-0.3,2.7-0.4,4-0.5,6.7c-0.4,0-0.6,0-1,0
							C28,124,26.7,122.9,24.1,120.7z"/>
						<path class="st1" d="M26.5,133.9c0-1.6,0-2.4,0-4c-1.1,0-1.7,0-2.8,0c0,1.9,0,2.9,0,4.8c-0.5,0-0.8,0-1.3,0
							c-0.1-2.6-0.1-3.9,0-6.6c3.7,0.1,5.5,0.2,9.2,0.3c-0.1,2.4-0.1,3.6,0,6.1c-0.5,0-0.8,0-1.3,0c0-1.8,0-2.7,0-4.5c-1,0-1.5,0-2.6,0
							c0,1.6,0,2.4,0,4C27.2,133.9,27,133.9,26.5,133.9z"/>
					</g>
				</g>
				<g>
					<g>
						<path class="st1" d="M173,33.3c-0.3,0.9-0.7,1.5-1.2,2.1c-0.5,0.5-1.1,0.9-1.8,1c-0.7,0.2-1.4,0.1-2.1-0.1
							c-0.7-0.2-1.3-0.6-1.7-1.2c-0.4-0.5-0.7-1.2-0.8-1.9c-0.1-0.7,0-1.5,0.3-2.4c0.1-0.2,0.1-0.3,0.2-0.5c0.3-0.9,0.7-1.6,1.2-2.1
							c0.5-0.5,1.1-0.9,1.8-1.1c0.7-0.2,1.4-0.1,2.1,0.1c0.7,0.3,1.3,0.7,1.8,1.2c0.4,0.5,0.7,1.2,0.8,1.9c0.1,0.7,0,1.5-0.3,2.4
							C173.1,33,173.1,33.1,173,33.3z M171.7,32.3c0.3-1,0.4-1.8,0.2-2.4c-0.2-0.6-0.6-1.1-1.3-1.3c-0.7-0.2-1.3-0.2-1.8,0.2
							c-0.6,0.4-1,1-1.3,2c-0.1,0.2-0.1,0.3-0.2,0.5c-0.3,1-0.4,1.8-0.2,2.4c0.2,0.7,0.6,1.1,1.3,1.3c0.7,0.2,1.3,0.2,1.8-0.2
							c0.5-0.4,1-1.1,1.3-2C171.6,32.5,171.6,32.4,171.7,32.3z"/>
						<path class="st1" d="M176.4,35.5c-0.5,1.3-0.7,1.9-1.2,3.2c-0.6-0.2-0.9-0.3-1.5-0.6c1.3-3.5,1.9-5.2,3.2-8.7
							c1.4,0.5,2,0.7,3.4,1.3c1,0.4,1.7,0.9,2.1,1.6c0.4,0.7,0.4,1.5,0.1,2.3c-0.3,0.8-0.9,1.4-1.6,1.7c-0.7,0.3-1.6,0.2-2.6-0.2
							C177.5,35.9,177.1,35.8,176.4,35.5z M176.8,34.3c0.7,0.3,1.1,0.4,1.8,0.7c0.5,0.2,1,0.2,1.4,0.1c0.4-0.1,0.7-0.5,0.8-0.9
							c0.2-0.5,0.2-0.9,0-1.3c-0.2-0.4-0.5-0.7-1-0.9c-0.8-0.3-1.1-0.4-1.9-0.7C177.5,32.5,177.3,33.1,176.8,34.3z"/>
						<path class="st1" d="M191.3,36.4c-1.1-0.4-1.6-0.7-2.7-1.1c-1.2,3-1.8,4.4-3,7.4c-0.6-0.2-0.9-0.4-1.5-0.6c1.2-3,1.8-4.4,2.9-7.4
							c-1.1-0.4-1.6-0.6-2.7-1.1c0.2-0.5,0.3-0.7,0.5-1.2c2.8,1.1,4.2,1.6,7,2.8C191.6,35.7,191.5,36,191.3,36.4z"/>
						<path class="st1" d="M191.6,45.2c-0.6-0.2-0.9-0.4-1.5-0.6c1.4-3.4,2.1-5.1,3.5-8.5c0.6,0.3,0.9,0.4,1.5,0.6
							C193.7,40.1,193,41.8,191.6,45.2z"/>
						<path class="st1" d="M199.6,38.5c-0.1,3-0.2,4.5-0.4,7.6c2.1-2.2,3.2-3.2,5.4-5.4c0.8,0.3,1.2,0.5,1.9,0.9c-1.5,3.4-2.3,5-3.8,8.4
							c-0.6-0.3-0.9-0.4-1.5-0.7c0.5-1.1,0.8-1.7,1.3-2.8c0.7-1.5,1.1-2.2,1.8-3.6c-2.2,2.1-3.3,3.2-5.4,5.4c-0.4-0.2-0.6-0.3-1.1-0.5
							c0.1-3,0.2-4.6,0.3-7.6c-0.6,1.5-0.9,2.3-1.5,3.8c-0.5,1.1-0.7,1.7-1.2,2.8c-0.6-0.3-0.9-0.4-1.5-0.6c1.5-3.4,2.2-5.1,3.6-8.5
							C198.4,38,198.8,38.2,199.6,38.5z"/>
						<path class="st1" d="M206.5,51.8c-0.6-0.3-0.9-0.4-1.5-0.7c1.6-3.4,2.3-5,3.9-8.4c0.6,0.3,0.9,0.4,1.5,0.7
							C208.9,46.8,208.1,48.5,206.5,51.8z"/>
						<path class="st1" d="M210.8,52.4c1.8,0.9,2.7,1.3,4.5,2.2c-0.2,0.5-0.3,0.7-0.6,1.1c-2.5-1.2-3.7-1.8-6.2-3
							c0.2-0.4,0.3-0.6,0.4-0.9c2.9-1.7,4.4-2.5,7.4-4.1c-1.7-0.9-2.6-1.3-4.4-2.1c0.2-0.5,0.3-0.7,0.6-1.2c2.5,1.2,3.7,1.8,6.2,3
							c-0.2,0.4-0.3,0.5-0.5,0.9C215.2,49.9,213.8,50.8,210.8,52.4z"/>
						<path class="st1" d="M223.2,55.5c-1.4-0.7-2-1.1-3.4-1.8c-0.5,1-0.8,1.5-1.3,2.5c1.6,0.8,2.4,1.2,4,2c-0.2,0.5-0.4,0.7-0.6,1.1
							c-2.1-1.1-3.2-1.7-5.4-2.8c1.7-3.3,2.5-5,4.2-8.3c2.2,1.1,3.3,1.7,5.5,2.8c-0.2,0.5-0.4,0.7-0.6,1.1c-1.6-0.8-2.4-1.2-4-2.1
							c-0.5,0.9-0.7,1.4-1.2,2.3c1.4,0.7,2.1,1.1,3.4,1.8C223.6,54.8,223.5,55,223.2,55.5z"/>
					</g>
				</g>
				<g>
					<polygon class="st5" points="174.4,250.3 174.4,250.3 174.4,250.3 	"/>
				</g>
				<g>
					<polygon class="st5" points="9.9,151.8 9.9,151.8 9.9,151.8 	"/>
					<path class="st6" d="M0,159.5L0,159.5C0,159.5,0,159.5,0,159.5z"/>
				</g>
				<g>
					<polygon class="st5" points="156.7,8.1 156.7,8.1 156.7,8.1 	"/>
				</g>
				<path class="st1" d="M271.4,195c0.3-2.7,0.6-5.3,0.9-8c-2,1.6-4,3.1-6,4.7c-2,1.5-4,3-6,4.5c-2.3,1.7-4.6,3.4-6.9,5
					c-13.2,9.4-26.8,18.2-41,26c-8,4.4-16.3,8.4-24.7,11.9c-2,0.8-4,1.6-6,2.4c-1,0.4-2.1,0.6-3.1,1.1c-0.4,0.2-0.3,0.1-0.5,0.5
					c-1.1,1.8-2,3.8-3,5.7c-0.3,0.5-0.5,1-0.8,1.6c1.6,0.6,3.2,1.1,4.9,1.7c0.9,0.3,1.8,0.6,2.8,1c1,0.4,1.9-0.3,2.9-0.6
					c8.2-3.1,16.1-6.6,23.9-10.6c16.2-8.1,31.6-17.7,46.4-28.1c4.2-2.9,8.3-5.9,12.3-8.9c2-1.5,3.9-2.9,5.9-4.4c1-0.7,1.9-1.5,2.9-2.2
					c0.5-0.4,1.1-0.8,1.6-1.2c0.3-0.2,0.9-0.6,1-0.9C276.5,195.6,273.9,195.3,271.4,195z"/>
				<path class="st1" d="M158.1,248.8c0-0.5-0.5-0.2-0.8-0.1c-0.5,0.1-1,0.2-1.6,0.3c-1.3,0.3-2.6,0.5-3.9,0.7c-2.3,0.4-4.6,0.7-6.9,1
					c-2.3,0.2-4.6,0.4-7,0.5c-0.8,0-1.6,0.1-2.4,0.1c-1.3,0-2.7,0-4,0c-1.2,0-2.4-0.1-3.5-0.1c-1.3-0.1-2.7-0.2-4-0.3
					c-3.4-0.3-6.7-0.7-10-1.2c-16-2.7-31.5-8.7-45.1-17.5c-1.1-0.7-2.2-1.5-3.3-2.2c-6.4-4.5-12.4-9.6-17.9-15.2
					c-6.2-6.4-11.7-13.6-16.4-21.2c-4.2-7-7.8-14.4-10.5-22.1c-1.4-3.9-2.6-7.9-3.5-12c-0.1-0.6-0.2-1.9-0.6-2.3
					c-0.1-0.2-0.4-0.3-0.6-0.4c-0.8-0.6-1.6-1.2-2.4-1.8c-1.3-1-2.6-2-3.9-3c-0.8,1.3-1.6,2.6-2.5,3.9c-0.5,0.8-1,1.5-1.5,2.3
					c-0.1,0.1-0.3,0.4-0.3,0.5c-0.1,0.5,0.2,1.3,0.3,1.8c1.6,6.9,3.7,13.7,6.4,20.3c5.3,13.1,12.7,25.3,21.9,36
					c9.4,11,20.6,20.4,33,27.8c12.6,7.4,26.4,12.7,40.8,15.7c15.1,3.1,30.6,3.4,45.8,0.9c2.1-0.4,4.2-0.8,6.3-1.2
					c-1.1-0.7-2.1-1.5-3.2-2.2c-0.7-0.5-1.5-1-2.2-1.5c-0.1-0.1-0.8-0.4-0.8-0.6c0-0.2,0.6-0.9,0.7-1c0.5-0.8,1-1.5,1.5-2.3
					C156.7,251,157.4,249.9,158.1,248.8z"/>
				<path class="st1" d="M14.1,135.6c-0.3-7.1,0.1-14.3,1.1-21.4c1.3-9.3,3.8-18.5,7.2-27.2c3.4-8.6,7.8-16.7,13-24.3
					c5.2-7.5,11.3-14.4,18.1-20.5c6.8-6.1,14.3-11.5,22.3-15.9c8.1-4.5,16.7-8.1,25.6-10.6c9.2-2.6,18.8-4.1,28.4-4.4
					c2.2-0.1,4.3-0.1,6.5,0c0.9,0,1.9,0.1,2.8,0.1c2,0.1,4,0.3,6,0.5c0.8,0.1,1.7,0.2,2.5,0.3c0.3,0,0.7,0.2,1.1,0.1
					c0.4-0.1,0.9-0.5,1.2-0.7c1.4-0.8,2.8-1.5,4.2-2.3c0.8-0.4,1.6-0.9,2.5-1.3c-1.3-1.7-2.6-3.4-4-5.1c-0.3-0.4-0.6-0.7-0.9-1.1
					c-0.4-0.5-0.4-0.4-1.1-0.6c-2.7-0.4-5.4-0.7-8.1-0.9C133.9-0.4,125,0,116.3,1.2c-15.5,2.1-30.6,7-44.4,14.4
					c-13.4,7.2-25.6,16.8-35.7,28.2C26,55.3,17.7,68.5,12,82.8c-5.9,14.7-9,30.5-9.3,46.3c0,2.4,0,4.8,0.1,7.2c0.3,0,0.6-0.5,0.8-0.7
					c0.6-0.6,1.2-1.3,1.8-1.9c0.6-0.6,1.2-1.3,1.8-1.9c0.2-0.2,0.8-1.1,1.1-1.1c0.2,0,0.6,0.5,0.8,0.6c0.6,0.5,1.3,1.1,1.9,1.6
					C12,133.9,13.1,134.8,14.1,135.6z"/>
				<path class="st1" d="M200.7,29.9c3.4,1.7,6.7,3.4,10,5.2c1.8,1,3.6,2,5.4,3c2,1.1,4,2.3,6,3.5c7.3,4.3,14.5,8.9,21.5,13.7
					c6.7,4.5,13.2,9.2,19.7,14c0.8,0.6,1.5,1.2,2.3,1.7c0.5,0.4,1.3,1.3,1.9,1.4c0.4,0.1,1.1-0.2,1.6-0.2c1.9-0.3,3.8-0.5,5.7-0.8
					c0.4-0.1,0.8-0.1,1.2-0.2c-0.5-1.7-1-3.4-1.5-5.1c-0.3-1-0.6-1.9-0.9-2.9c-0.3-1.1-1.3-1.5-2.2-2.2c-7.3-5.5-14.7-10.8-22.3-15.9
					c-15.3-10.3-31.2-19.8-47.8-27.6c-8.9-4.2-18-7.9-27.4-10.8c0.6,1.2,1.2,2.4,1.8,3.6c0.4,0.8,0.7,1.5,1.1,2.3c0.1,0.2,0.6,0.8,0.5,1
					c-0.1,0.2-1,0.6-1.2,0.7c-0.7,0.4-1.5,0.8-2.2,1.3c-1.1,0.6-2.3,1.3-3.4,1.9C180.7,20.8,190.9,25,200.7,29.9z"/>
				</svg>


            </section>

        <?php elseif( get_row_layout() == 'flex-blog' ):  ?>

            <section class="section section--grid section--posts">

                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 4
                );

                $the_query = new WP_Query( $args );

                if ( $the_query->have_posts() ) :
                    while ( $the_query->have_posts() ) :
                        $the_query->the_post(); ?>

                        <?php
                        $thumb_id = get_post_thumbnail_id();
                        $thumb_url_array = wp_get_attachment_image_src($thumb_id, 'thumbnail-size', true);
                        $thumb_url = $thumb_url_array[0];
                        ?>

                        <article class="block block--bg-image" id="post-<?php the_ID(); ?>" style="background-image: url('<?php echo $thumb_url; ?>');">
                            <a href="<?php echo the_permalink(); ?>">

                                <h1 class="wheat"><?php the_title(); ?></h1>
                                <p class="wheat"><?php the_date(); ?></p>

                            </a>
                        </article>

                    <?php endwhile;
                endif;

                wp_reset_postdata(); ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-health' ):  ?>

            <section class="section section--health section--empire section--red">

				<div class="health__overlay">

					<div class="overlay__content">

						<?php
						$overlay_title = get_sub_field('health-section-title');
						$overlay_one = get_sub_field('health-section-one');
						$overlay_two = get_sub_field('health-section-two');
						$overlay_three = get_sub_field('health-section-three');
						$button = get_sub_field('health-button'); ?>

						<?php if( $overlay_title ) : ?><h1 class="whale whale--white"><?php echo $overlay_title; ?></h1><?php endif; ?>

						<div class="health-container" id="healthOverlay">
							<form class="button-container" action="" method="">
								<div class="button-group is-inactive">
									<input type="text" class="input input--first" placeholder="website.dk">
									<input type="text" class="input input--second" placeholder="Navn">
									<span class="tel-prefix">+45</span><input type="tel" class="input input--third" placeholder="Telefonnummer" required="required">
									<button type="submit" class="button--<?php echo $color; ?>" id="healthOverlayButton"><span><?php echo $button; ?></span></button>
									<p><?php echo $confirmation; ?></p>
								</div>
							</form>
						</div>

						<div class="health-columns">
							<div class="health-column"><?php if( $overlay_one ) : ?><?php echo $overlay_one; ?><?php endif; ?></div>
							<div class="health-column"><?php if( $overlay_two ) : ?><?php echo $overlay_two; ?><?php endif; ?></div>
							<div class="health-column">
								<?php if( $overlay_three ) : ?><?php echo $overlay_three; ?><?php endif; ?>

								<div class="premium">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/premier.png" alt="Google Premium Partner">
								</div>
							</div>
						</div>

						<!-- <svg class="health-overlay-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="923.7 -90.3 397.5 227.2" style="enable-background:new 923.7 -90.3 397.5 227.2;" xml:space="preserve">
							<style type="text/css">
								.st0{fill:#E8443A;stroke:#A52218;stroke-width:6.4849;stroke-miterlimit:10;}
								.st1{fill:#E8443A;stroke:#A52218;stroke-width:5.7685;stroke-miterlimit:10;}
								.st2{fill:none;stroke:#A52218;stroke-width:6.4849;stroke-miterlimit:10;}
							</style>
							<path class="st0" d="M975.6-59.4h127.6v163.5H975.6L975.6-59.4z"/>
							<path class="st0" d="M1021.6-87h140v220.8h-140V-87z"/>
							<path class="st0" d="M1109.7-33.1h152.5V73.7h-152.5V-33.1z"/>
							<g>
								<path class="st0" d="M1192.4-18.7l17.9,18.4l-18.4,17.9 M949.7-0.5h260.6"/>
							</g>
							<line class="st0" x1="923.7" y1="20.9" x2="1109.7" y2="20.9"/>
							<line class="st0" x1="1021.6" y1="-72.2" x2="1161.6" y2="-72.2"/>
							<circle class="st1" cx="1280.8" cy="-33.1" r="35.4"/>
							<g>
								<path class="st2" d="M1319-62.1l-38.4,37.9l-17.9-18.4"/>
							</g>
						</svg> -->

					</div>

					<div class="overlay__close">
						<div class="close js-close-health">
							<div class="hamburger lines is-active">
								<span></span>
							</div>
						</div>
					</div>
				</div>

                <div class="container">
                    <?php
                    $headline = get_sub_field('health-headline');
                    $content = get_sub_field('health-content');
                    $button = get_sub_field('health-button');
                    $confirmation = get_sub_field('health-confirmation'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--white"><?php echo $headline; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

					<a href="#" class="button button--health js-open-health"><?php echo $button; ?></a>
                </div>

				<svg class="health-svg" version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="923.7 -90.3 397.5 227.2" style="enable-background:new 923.7 -90.3 397.5 227.2;" xml:space="preserve">
					<style type="text/css">
						.st0{fill:#E8443A;stroke:#A52218;stroke-width:6.4849;stroke-miterlimit:10;}
						.st1{fill:#E8443A;stroke:#A52218;stroke-width:5.7685;stroke-miterlimit:10;}
						.st2{fill:none;stroke:#A52218;stroke-width:6.4849;stroke-miterlimit:10;}
					</style>
					<path class="st0" d="M975.6-59.4h127.6v163.5H975.6L975.6-59.4z"/>
					<path class="st0" d="M1021.6-87h140v220.8h-140V-87z"/>
					<path class="st0" d="M1109.7-33.1h152.5V73.7h-152.5V-33.1z"/>
					<g>
						<path class="st0" d="M1192.4-18.7l17.9,18.4l-18.4,17.9 M949.7-0.5h260.6"/>
					</g>
					<line class="st0" x1="923.7" y1="20.9" x2="1109.7" y2="20.9"/>
					<line class="st0" x1="1021.6" y1="-72.2" x2="1161.6" y2="-72.2"/>
					<circle class="st1" cx="1280.8" cy="-33.1" r="35.4"/>
					<g>
						<path class="st2" d="M1319-62.1l-38.4,37.9l-17.9-18.4"/>
					</g>
				</svg>

            </section>

        <?php elseif( get_row_layout() == 'flex-packages' ):  ?>

            <?php
            $one_title = get_sub_field('one-title');
            $one_price = get_sub_field('one-price');
            $one_period = get_sub_field('one-period');
            $one_content = get_sub_field('one-content');

            $two_title = get_sub_field('two-title');
            $two_price = get_sub_field('two-price');
            $two_period = get_sub_field('two-period');
            $two_content = get_sub_field('two-content');

            $three_title = get_sub_field('three-title');
            $three_price = get_sub_field('three-price');
            $three_period = get_sub_field('three-period');
            $three_content = get_sub_field('three-content');

            $text = get_sub_field('packages-text');

			$buttonOverlay = get_sub_field('packagesoverlay-button-text');
			$confirmationOverlay = get_sub_field('packagesoverlay-button-confirmation');

            $design = get_sub_field('packages-design'); ?>

            <?php if ( $design == "normal" ) : ?>
            <section class="section section--packages section--burj">
                <div class="packages__overlay">

                    <div class="overlay__header js-overlay-toggle hidden-md-up">
                        <a href="#packageLite" data-link="packageLite"><?php echo $one_title; ?></a>
                        <a href="#packageComplete" data-link="packageComplete"><?php echo $two_title; ?></a>
                        <a href="#packagePremium" data-link="packagePremium"><?php echo $three_title; ?></a>
                    </div>

                    <div class="overlay__header hidden-sm-down">
                        <div class="overlay__package">
                            <div class="package__price"><?php echo $one_price; ?></div>
                            <div class="package__title"><p class="oat"><?php echo $one_title; ?></p></div>
                        </div>
                        <div class="overlay__package">
                            <div class="package__price"><?php echo $two_price; ?></div>
                            <div class="package__title"><p class="oat"><?php echo $two_title; ?></p></div>
                        </div>
                        <div class="overlay__package">
                            <div class="package__price"><?php echo $three_price; ?></div>
                            <div class="package__title"><p class="oat"><?php echo $three_title; ?></p></div>
                        </div>
                    </div>

                    <div class="overlay__content">
                        <div id="packageLite" class="overlay__lite">
                            <?php echo $one_content; ?>
                        </div>
                        <div id="packageComplete" class="overlay__complete">
                            <?php echo $two_content; ?>
                        </div>
                        <div id="packagePremium" class="overlay__premium">
                            <?php echo $three_content; ?>
                        </div>
                    </div>

                    <div class="contact overlay__contact hidden-sm-down" id="packagesOverlayContact">
                        <form class="button-container" action="" method="">
                    		<div class="button-group is-inactive">
                    			<input type="text" class="input input--first" placeholder="Name">
                    			<input type="email" class="input input--second" placeholder="E-mail" required>
                    			<button type="submit" class="button--<?php echo $color; ?> contact__button" id="packagesOverlayButton"><span><?php echo $buttonOverlay; ?></span></button>
                    			<p><?php echo $confirmationOverlay; ?></p>
                    		</div>
                    	</form>
                    </div>

                    <div class="overlay__close">
                        <div class="close">
                            <div class="hamburger lines">
                                <span></span>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="container">
                    <?php
                    $headline = get_sub_field('packages-headline');
                    $content = get_sub_field('packages-content'); ?>

                    <?php if( $headline ) : ?><h1 class="whale"><?php echo $headline; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>
                </div>

                <div class="packages">
                    <div class="packages__header">
                        <div class="package">
                            <a href="#packageLite" class="package__inner js-package-toggle">
                                <div class="package__header">
                                    <div class="package__title">
                                        <?php echo $one_title; ?>
                                    </div>
                                </div>
                                <div class="package__body">
                                    <div class="package__price">
                                        <?php echo $one_price; ?>
                                    </div>
                                    <div class="package__period">
                                        <?php echo $one_period; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="package">
                            <a href="#packageComplete" class="package__inner js-package-toggle">
                                <div class="package__header">
                                    <div class="package__title">
                                        <?php echo $two_title; ?>
                                    </div>
                                </div>
                                <div class="package__body">
                                    <div class="package__price">
                                        <?php echo $two_price; ?>
                                    </div>
                                    <div class="package__period">
                                        <?php echo $two_period; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                        <div class="package">
                            <a href="#packagePremium" class="package__inner js-package-toggle">
                                <div class="package__header">
                                    <div class="package__title">
                                        <?php echo $three_title; ?>
                                    </div>
                                </div>
                                <div class="package__body">
                                    <div class="package__price">
                                        <?php echo $three_price; ?>
                                    </div>
                                    <div class="package__period">
                                        <?php echo $three_period; ?>
                                    </div>
                                </div>
                            </a>
                        </div>
                    </div>

                    <div class="packages__footer">
                        <?php
                        $text = get_sub_field('packages-text');
                        $button = get_sub_field('packages-button-text');
                        $link = get_sub_field('packages-button-link'); ?>

                        <?php if( $text ) : ?><a href="#packageLite" class="oat js-package-toggle"><?php echo $text; ?></a><?php endif; ?>

                        <?php if( $button && $link ) : ?><a href="<?php echo $link; ?>" class="button button--green"><?php echo $button; ?></a><?php endif; ?>
                    </div>
                </div>
            </section>

            <?php elseif( $design == "seo" ) : ?>

                <section class="section section--packages-seo section--burj">
                    <div class="packages__overlay">

                        <div class="overlay__header js-overlay-toggle hidden-md-up">
                            <a href="#packageLite" data-link="packageLite"><?php echo $one_title; ?></a>
                            <a href="#packageComplete" data-link="packageComplete"><?php echo $two_title; ?></a>
                            <a href="#packagePremium" data-link="packagePremium"><?php echo $three_title; ?></a>
                        </div>

                        <div class="overlay__header hidden-sm-down">
                            <div class="overlay__package">
                                <div class="package__price"><span class="label">OP<br/>TIL</span><?php echo $one_price; ?></div>
                                <div class="package__title"><p class="oat"><?php echo $one_title; ?></p></div>
                            </div>
                            <div class="overlay__package">
                                <div class="package__price"><span class="label">OP<br/>TIL</span><?php echo $two_price; ?></div>
                                <div class="package__title"><p class="oat"><?php echo $two_title; ?></p></div>
                            </div>
                            <div class="overlay__package">
                                <div class="package__price"><span class="label">OP<br/>TIL</span><?php echo $three_price; ?></div>
                                <div class="package__title"><p class="oat"><?php echo $three_title; ?></p></div>
                            </div>
                        </div>

                        <div class="overlay__content">
                            <div id="packageLite" class="overlay__lite">
                                <?php echo $one_content; ?>
                            </div>
                            <div id="packageComplete" class="overlay__complete">
                                <?php echo $two_content; ?>
                            </div>
                            <div id="packagePremium" class="overlay__premium">
                                <?php echo $three_content; ?>
                            </div>
                        </div>

                        <div class="contact overlay__contact hidden-sm-down" id="packagesOverlayContact">
                            <form class="button-container" action="" method="">
                        		<div class="button-group is-inactive">
                        			<input type="text" class="input input--first" placeholder="Name">
                        			<input type="email" class="input input--second" placeholder="E-mail" required>
                        			<button type="submit" class="button--<?php echo $color; ?> contact__button" id="packagesOverlayButton"><span><?php echo $buttonOverlay; ?></span></button>
                        			<p><?php echo $confirmationOverlay; ?></p>
                        		</div>
                        	</form>
                        </div>

                        <div class="overlay__close">
                            <div class="close">
                                <div class="hamburger lines">
                                    <span></span>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="container">
                        <?php
                        $headline = get_sub_field('packages-headline');
                        $content = get_sub_field('packages-content'); ?>

                        <?php if( $headline ) : ?><h1 class="whale"><?php echo $headline; ?></h1><?php endif; ?>
                        <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>
                    </div>

                    <div class="packages">
                        <div class="packages__header">
                            <div class="package">
                                <a href="#packageLite" class="package__inner js-package-toggle">
                                    <div class="package__body">
                                        <div class="package__content">
                                            <div class="package__title">
                                                <?php echo $one_title; ?>
                                            </div>
                                            <div class="package__price">
                                                <span class="label">op<br/>til</span>
                                                <?php echo $one_price; ?>
                                            </div>
                                            <div class="package__unit">sider</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="package">
                                <a href="#packageComplete" class="package__inner js-package-toggle">
                                    <div class="package__body">
                                        <div class="package__content">
                                            <div class="package__title">
                                                <?php echo $two_title; ?>
                                            </div>
                                            <div class="package__price">
                                                <span class="label">op<br/>til</span>
                                                <?php echo $two_price; ?>
                                            </div>
                                            <div class="package__unit">sider</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                            <div class="package">
                                <a href="#packagePremium" class="package__inner js-package-toggle">
                                    <div class="package__body">
                                        <div class="package__content">
                                            <div class="package__title">
                                                <?php echo $three_title; ?>
                                            </div>
                                            <div class="package__price">
                                                <span class="label">op<br/>til</span>
                                                <?php echo $three_price; ?>
                                            </div>
                                            <div class="package__unit">sider</div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>

                        <div class="packages__body">
                            <!--  <img src="<?php echo get_stylesheet_directory_uri(); ?>/build/assets/images/process.svg"> -->

                            <div class="process">
                                <div class="process__left">
                                    <div class="process__header">seo optimering</div>
                                    <div class="process__bar"></div>
                                    <div class="process__footer">3 mdr.</div>
                                </div>
                                <div class="process__right">
                                    <div class="process__header">vedligeholdelse</div>
                                    <div class="process__bar"></div>
                                    <div class="process__footer">9 mdr.</div>
                                </div>
                            </div>
                        </div>

                        <div class="packages__footer">
                            <?php
                            $text = get_sub_field('packages-text');
                            $button = get_sub_field('packages-button-text');
                            $link = get_sub_field('packages-button-link'); ?>

                            <?php if( $text ) : ?><a href="#packageLite" class="oat js-package-toggle"><?php echo $text; ?></a><?php endif; ?>

                            <?php if( $button && $link ) : ?><a href="#packageMain" class="button button--red js-package-toggle"><?php echo $button; ?></a><?php endif; ?>
                        </div>
                    </div>
                    <?php
                    // TODO Add premium content description section
                    ?>
                </section>
                <section class="section section--premium section--grey-alt section--burj">
                    <div class="container">
                        <div class="section--arrow">
                            <svg id="All_glyphs" data-name="All glyphs" fill="#E9453A" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 86 46"><title>Vector Smart Object</title><path d="M-2156.41,3141.73a3.48,3.48,0,0,0-4.89,0,3.4,3.4,0,0,0,0,4.84l39.54,39.15a3.49,3.49,0,0,0,4.89,0l39.54-39.15a3.4,3.4,0,0,0,0-4.84,3.48,3.48,0,0,0-4.89,0l-37.09,35.7Z" transform="translate(2162.31 -3140.72)"/></svg>
                        </div>
                        <h1 class="whale">Premium Rådgivning</h1>
                        <p>Med PREMIUM rådgivning føjet til din månedlige vedligeholdelsesaftale har du mulighed for at opnå flere fordele og et bedre resultat af din SEO. Du får tildelt en SEO-manager der giver dig personlig rådgivning og svarer på dine SEO-spørgsmål for at hjælpe dig med at tackle dine udfordringer og nå dine mål. Med vores Premium Rådgivning får du adgang til en SEO-manager, som kan guide dig i de beslutninger, som vedrører SEO på din hjemmeside.</p>
                    </div>
                </section>

            <?php endif; ?>

        <?php elseif( get_row_layout() == 'flex-facts' ):  ?>

            <section class="section section--grid section--facts">

            <?php
                if( have_rows('facts-repeater', 'option') ):
                    while ( have_rows('facts-repeater', 'option') ) : the_row();

                    $color = get_sub_field('fact-color');
                    $icon = get_sub_field('fact-icon');
                    $headline = get_sub_field('fact-headline');
                    $text = get_sub_field('fact-text');
                    $button = get_sub_field('fact-button');
                    $link = get_sub_field('fact-link'); ?>

                    <div class="block block--<?php echo $color; ?>">
                        <?php if( $icon == 'bullseye' || 'id' || 'house' ) : ?><span class="icon icon-<?php echo $icon; ?>"></span><?php endif; ?>
                        <?php if( $text ) : ?><p><?php if( $headline ) :?><span><?php echo $headline; ?></span><?php endif; ?><?php echo $text; ?></p><?php endif; ?>

                        <?php if( $button ) : ?><a href="<?php echo $link; ?>" class="button button--white"><?php echo $button; ?></a><?php endif; ?>
                    </div>

                    <?php endwhile;
                endif; ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-results' ):  ?>

            <section class="section section--results section--grey-alt section--empire">

                <div class="container">
                    <?php
                    $headline = get_sub_field('results-headline');
                    $content = get_sub_field('results-content'); ?>

                    <?php if( $headline ) : ?><h1 class="whale whale--green"><?php echo $headline; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>
                </div>

                <div class="results">

                <?php
                if( have_rows('results-repeater', 'option') ):
                    while ( have_rows('results-repeater', 'option') ) : the_row();
                    $image = get_sub_field('result-image');
                    $link = get_sub_field('result-link'); ?>

                    <div class="result">
                        <div class="result__content" style="background-image: url('<?php echo $image['url']; ?>');">
                            <?php if( $link ) : ?>
                            <div class="result__overlay">
                                <a href="<?php echo $link; ?>" class="button button--white">Læs case story</a>
                            </div>
                            <?php endif; ?>
                        </div>
                    </div>

                    <?php endwhile;
                endif; ?>

                </div>

            </section>

        <?php elseif( get_row_layout() == 'flex-certifications' ):
            $bg = get_sub_field('certifications-bg'); ?>

            <section class="section section--references <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?>">
                <?php $headline = get_field('certifications-headline', 'option'); ?>
                <span class="wheat"><?php echo $headline; ?></span>

                <?php
                if( have_rows('certifications-repeater', 'option') ):
                    while ( have_rows('certifications-repeater', 'option') ) : the_row();
                    $image = get_sub_field('certification-image'); ?>

                    <div class="block">
                        <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
                    </div>

                    <?php endwhile;
                endif; ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-references' ):
            $bg = get_sub_field('references-bg'); ?>

            <section class="section section--references <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?>">
                <?php $headline = get_field('references-headline', 'option'); ?>
                <span class="wheat"><?php echo $headline; ?></span>

                <?php
                if( have_rows('references-repeater', 'option') ):
                    while ( have_rows('references-repeater', 'option') ) : the_row();
                    $image = get_sub_field('reference-image'); ?>

                    <div class="block">
                        <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
                    </div>

                    <?php endwhile;
                endif; ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-references-manual' ):
			$bg = get_sub_field('references-bg'); ?>

            <section class="section section--references <?php if( $bg ) : ?>section--<?php echo $bg; ?><?php endif ?>">
                <?php $headline = get_sub_field('references-manual-headline'); ?>
                <span class="wheat"><?php echo $headline; ?></span>

                <?php
                if( have_rows('references-manual-repeater') ):
                    while ( have_rows('references-manual-repeater') ) : the_row();
                    $image = get_sub_field('reference-image'); ?>

                    <div class="block">
                        <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
                    </div>

                    <?php endwhile;
                endif; ?>

            </section>

        <?php elseif( get_row_layout() == 'flex-more_references' ):  ?>

            <section class="section section--more-references section--empire">

                <?php $headline = get_sub_field('more_references-headline'); ?>

                <?php if ( $headline ) : ?><span><?php echo $headline; ?></span><?php endif; ?>

                <div class="references">
                    <div class="border-override"></div>

                    <?php
                    if( have_rows('more-references-repeater', 'option') ):
                        while ( have_rows('more-references-repeater', 'option') ) : the_row();
                        $image = get_sub_field('reference-image'); ?>

                        <div class="reference">
                            <?php if( $image ): ?><img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>"><?php endif; ?>
                        </div>

                        <?php endwhile;
                    endif; ?>

                </div>

            </section>

        <?php elseif( get_row_layout() == 'flex-landing' ): ?>

            <section class="section section--landing-form section--burj">

                <div class="container">

                    <?php
                    $headline = get_sub_field('landing-headline');
                    $subtitle = get_sub_field('landing-subtitle');
                    $content = get_sub_field('landing-content');?>

                    <?php if( $headline ) : ?><h1 class="whale whale--<?php echo $color; ?>"><?php echo $headline; ?></h1><?php endif; ?>
					<?php if( $subtitle ) : ?><p class="oat subtitle subtitle--<?php echo $color; ?>"><?php echo $subtitle; ?></h1><?php endif; ?>
                    <?php if( $content ) : ?><p class="wheat"><?php echo $content; ?></p><?php endif; ?>

                        <div class="landing-form" id="landingContact">
                            <form class="landing-contact">
                                <h3 class="form__header">Få gratis Sundhedstjek</h3>
                                <div class="form__body">
                                    <div class="button-group">
                                        <input type="text" class="input" name="name" placeholder="Navn">
                                    </div>
                                    <div class="button-group">
                                        <input type="text" class="input" name="website" placeholder="Webadresse">
                                    </div>
                                    <div class="button-group">
                                        <input type="tel" class="input" name="tlf" placeholder="Tlf.">
                                    </div>
                                    <button id="landingContactButton" class="button button--red">Tag et sundhedstjek</button>
                                </div>
                            </form>
                        </div>
                </div>

            </section>

        <?php endif;

    endwhile;

endif; ?>
