<?php /* Template Name: Makes It! */ ?>

<?php get_header();?>

<div id="red_wrapper">

	<div id="white_wrapper">
		
		<div id="blue_wrapper">
			<header>
				<h1><span class="nyssa_jayne">Nyssa Jayne</span> <span class="makes_it">Makes It!</span> <span class="on_shoesandblues">on shoesandblues.com</span></h1>
			</header>

			<div id="content">

				<div id="blog_entries">
					<?php query_posts('category_name=sewing'); ?>

					<?php if ( have_posts() ) : while ( have_posts() ) : the_post() ?>

					<article class="blog_entry">
						<h2><?php echo get_the_title(); ?></h2>

						<?php the_content(); ?>

						<h3><?php echo get_the_date( 'F jS, Y' ); echo " | "; comments_popup_link( 'No Comments', '1 Comment', '% Comments' ); ?><br />
						<?php the_tags( 'Tagged with ', ', ' ); ?></h3>

						<span class="divider">
							<img src="<?php echo get_stylesheet_directory_uri(); ?>/images/button.png" class="sewing_button" />
						</span>
					</article>

				<?php endwhile; endif;?>
				</div>

				<div id="sidebar">
					<div id="about">
						<h2>About Me</h2>
						<p>My name is Nyssa Jayne, I'm from Melbourne, Australia, I live in Brooklyn, NY, and this is a blog about the things I make.</p>
					</div>

					<div id="contact">
						<h2>Contact Me</h2>
						<ul>
							<li>Email</li>
							<li>Twitter</li>
							<li>Instagram</li>
							<li>Bloglovin'</li>
							<li>RSS</li>
							<li>Ravelry</li>
						</ul>
					</div>
				</div>

			</div>
		</div>

	</div>

</div>

<?php get_footer(); ?>
