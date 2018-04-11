<?php get_header(); 
	/* Template Name: Champions */
?>

<?php
  $args = array(
    'post_type' => 'post',
    'posts_per_page' => 9999
  );
  $post_query = new WP_Query( $args );
?>
<section id='champions'>

	<section id="cover">
	  <?php if ( $post_query->have_posts() ): ?>
	  	<?php while ( $post_query->have_posts() ): $post_query->the_post(); ?>
	  		<?php if ( in_category( 'personagens', $post ) ): ?>
					<a href='<?php echo get_permalink(); ?>' class='title' style='background-image: url(<?php echo get_field( 'cover_image' ); ?>)'><h2><?php echo get_field( 'title' ); ?>
						<span>Ler</span>
					</h2></a>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php endif; ?>
	</section>
	<?php if ( $post_query->have_posts() ): ?>
		<div id='main'>
			<img src='<?php echo IMG; ?>champions.png' class='section-image' />
			<div class='section-title'>
				Os campeões
			</div>
			<div class='container'>
				<?php while ( $post_query->have_posts() ): $post_query->the_post(); ?>
        	<?php if ( in_category( 'personagens', $post ) ): ?>
						<a href='<?php echo get_permalink(); ?>' class='text-post'>
							<img src='<?php echo get_field( 'top_image' ); ?>' class='photo' />
							<?php echo get_field( 'title' ); ?>
						</a>
					<?php endif; ?>
				<?php endwhile; ?>
			</div>
		</div>
	<?php endif; ?>

	<div id='contact'>
		<img src='<?php echo IMG; ?>owl.png' class='section-image' />
		<div class='section-title'>
			Mande uma coruja
		</div>
		<div class='text'>
			Quer aparatar por aqui, ligar no Flu ou até mandar um berrador? Manda uma Coruja pra gente que assim que sairmos da detenção da McGonnagal a gente promete que responde!<br /><br/>
			<a href='mailto:osmarotoswebserie@gmail.com'>osmarotosvebserie@gmail.com</a><br /><br/>
			Levantem suas warinhas e nos ajudem com esse projeto! Em breve divulgaremos nosso link no Catarse!<br /><br/>
			<!-- <a href="">Link do catarse</a><br /><br/> -->
<!-- 			E nos seguir nas redes sociais desse mundo troxa pra ficar sabendo o que acontece aqui no mundo bruxo?
			<a href="">@nossoinsta</a> -->
		</div>
	</div>

</section>

	<?php wp_reset_postdata(); ?>


<?php get_footer(); ?>