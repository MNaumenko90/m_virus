	<?php /* Template Name: Home Page */ ?>
	<?php get_header(); ?>
	<section class="banner">
		<img src="<?php the_field('content4')?>">
	</section>
	<section class="grey-block" id="our-company">
		
			<div class="a-head">
			<h2>
				<?php the_title(); ?>
			</h2>
			<p>
				<?php
			    $post = get_post();
			    $content = $post->post_content;
			    $date = $post->post_date;
			    echo $content;
			    ?>
			</p>
			</div>
		<article class="our-company">
			<h3><?php the_field('content1'); ?></h3>
			<p><?php the_field('content2'); ?></p>
			<div class="row">
				<div class="col">
					<h3>
						<i class="fa fa-desktop color"></i>
					  	<?php the_field('content5'); ?>
					</h3>
					<p>
						<?php the_field('content6'); ?>
					</p>
				</div>
				<div class="col">
					<h3>
						<i class="fa fa-cloud color"></i>
					  	<?php the_field('content7'); ?>
					</h3>
					<p><?php the_field('content8'); ?></p>
				</div>
				<div class="col">
					<h3>
						<i class="fa fa-home color"></i>
					  	<?php the_field('content9'); ?>
					</h3>
					<p><?php the_field('content10'); ?></p>
				</div>
			</div>
		</article>
	</section>
	<section class="services" id="services">
		<div class="a-head">
			<h2><?php the_field('content11'); ?></h2>
			<p><?php the_field('content12'); ?></p>
		</div>
		<div class="row">
				<?php

				// check if the repeater field has rows of data
				if( have_rows('content13') ):

				 	// loop through the rows of data
				    while ( have_rows('content13') ) : the_row();
				    	?><div class="col"><?
				        // display a sub field value
				        the_sub_field('img');
				        the_sub_field('sub-head');
				        the_sub_field('text');
				        ?></div><?
				    endwhile;

				else :

				    // no rows found

				endif;

				?>
		</div>
	</section>
	<section class="our-client" id="our-client">
		<div class="a-head">
			<h2><?php the_field('content11'); ?></h2>
			<p><?php the_field('content12'); ?></p>
		</div>
		<div class="row">
			<div class="pagination">
				<a href="#">
					<i class="fa fa-chevron-circle-left"></i>
				</a>
				<a href="#">
					<i class="fa fa-chevron-circle-right"></i>
				</a>
			</div>
		</div>
		<div class="row">
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/clients/client-1.png">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/clients/client-2.png">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/clients/client-3.png">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/clients/client-4.png">
			</div>
		</div>
	</section>
	<section class="grey-block" id="portfolio">
		<div class="a-head">
			<h2>Portfolio</h2>
			<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
		</div>
		<div class="row">
			<ul class="nav">
				<li>
					<a href="#">All</a>
				</li>
				<li>
					<a href="#">Web Design</a>
				</li>
				<li>
					<a href="#">Photography</a>
				</li>
				<li>
					<a href="#">Print</a>
				</li>
			</ul>
		</div>
		<div class="row">
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img1.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img2.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img3.jpg" class="item">
			</div>
			<div class="row">
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img4.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img5.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img6.jpg" class="item">
			</div>
			</div>
			<div class="row">
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img7.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img8.jpg" class="item">
			</div>
			<div class="col">
				<img src="<?php bloginfo('template_url') ?>/images/portfolio/img9.jpg" class="item">
			</div>
			</div>
		</div>
	</section>
	<section class="team" id="team">
		<div class="a-head">
			<h2>Our Team</h2>
			<p>At lorem Ipsum available, but the majority have suffered alteration in some form by injected humour.</p>
		</div>
		<div class="row">
			<div class="col">
				<div class="member">
					<img src="<?php bloginfo('template_url') ?>/images/photo-1.jpg">
				<h3>John Doe</h3>
				<span class="weight">CEO</span>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			    </div>
			</div>
			<div class="col">
				<div class="member">
					<img src="<?php bloginfo('template_url') ?>/images/photo-2.jpg">
				<h3>Larry Doe</h3>
				<span class="weight">Art Director</span>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			    </div>
			</div>
			<div class="col">
				<div class="member">
					<img src="<?php bloginfo('template_url') ?>/images/photo-3.jpg">
				<h3>Ranith Kays</h3>
				<span class="weight">Manager</span>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			    </div>
			</div>
			<div class="col">
				<div class="member">
					<img src="<?php bloginfo('template_url') ?>/images/photo-4.jpg">
				<h3>Joan Ray</h3>
				<span class="weight">Creative</span>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
				</div>
			    </div>
			</div>
		</div>
	</section>
	<section class="contacts" id="contacts">
		<div class="a-head">
			<h2>Contact Us</h2>
			<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
		</div>
		<form>
		<div class="row">
			<div class="col">
				<div class="form-group marg">
					<label for="name">Name</label>
					<input type="text" class="" name="name" placeholder="Enter name">
				</div>
				<div class="form-group">
					<label for="email">Email</label>
					<input type="text" class="" name="email" placeholder="Enter email">
				</div>
				</div>
				<div class="col">
					<label for="comments">Comments</label>
					<textarea name="comment" class="" cols="3" rows="6" placeholder="Enter your message…"></textarea>
					<button name="submit" type="submit" class="btn">Submit</button>
				</div>
				<div class="col">
					<h4>Address:</h4>
					<address>
                        WebThemez Company<br>
                        134 Stilla. Tae., 414515<br>
                        Leorislon, SA 02434-34534 USA
                        <br>
                    </address>
                    <h4>Phone:</h4>
                    <address>
                        12345-49589-2<br>
                    </address>
				</div>
			</div>
			</form>
	</section>
	</div>
	<?php get_footer(); ?>