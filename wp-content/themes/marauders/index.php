<?php get_header(); 
	/* Template Name: Home */
?>

<section id="cover-home">
	<?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 5
    );
    $post_query = new WP_Query( $args );
  ?>
  <?php if ( $post_query->have_posts() ): ?>
  	<?php while ( $post_query->have_posts() ): $post_query->the_post(); ?>
			<a href='<?php echo get_permalink(); ?>' class='title' style='background-image: url(<?php echo get_field( 'cover_image' ); ?>)'><h2><?php echo get_field( 'title' ); ?>
				<span>Ler</span>
			</h2></a>
		<?php endwhile; ?>
	<?php wp_reset_postdata(); ?>
	<?php endif; ?>
</section>
<section id='content'>
	<div id='about'>
		<img src='<?php echo IMG; ?>founders.png' class='section-image' />
		<div class='section-title'>
			Sobre o Projeto
		</div>
		<div class='text'>
			<?php echo get_field( 'about' ); ?>
		</div>
		<img src='<?php echo get_field( 'about_image' ); ?>' class='big-image' />
	</div>
	<?php if(get_field('founders')) : ?>
		<div id='founders'>
			<div class='section-title'>
				As Fundadoras
			</div>
			<?php while ( have_rows( 'founders' ) ) : the_row(); ?>
				<div class='person'>
					<div class='text'>
						<span><?php echo get_sub_field( 'name' ); ?> - </span><?php echo get_sub_field( 'text' ); ?>
					</div>
					<img src='<?php echo get_sub_field( 'photo' ); ?>' />
				</div>
			<?php endwhile;?>
		</div>
	<?php endif; ?>
	<?php if( get_field( 'team' ) ) : ?>
		<div id='team'>
			<img src='<?php echo IMG; ?>team.png' class='section-image' />
			<div class='section-title'>
				O Time
			</div>
			<div class='container'>
				<?php while ( have_rows( 'team' ) ) : the_row(); ?>
					<div class='team-mate'>
						<?php echo get_sub_field( 'person' ); ?>
					</div>
				<?php endwhile; ?>
			</div>
			<img src='<?php echo get_field( 'team_image' ) ?>' class='big-image' />
		</div>
	<?php endif; ?>
	<div id='characters-home'>
		<img src='<?php echo IMG; ?>champions.png' class='section-image' />
		<div class='section-title'>
			Os Campeões
		</div>
		<div class='characters'>
			<?php if( get_field( 'champions_main' ) ): ?>
				<div class='marotos'>
					<?php while ( have_rows( 'champions_main' ) ) : the_row(); ?>
						<a href='<?php echo get_permalink( get_sub_field( 'champion' ) ); ?>' class='person'>
							<img src='<?php echo get_sub_field('photo'); ?>' class='photo' />
							<?php echo get_sub_field('name'); ?>
						</a>
					<?php endwhile; ?>
				</div>
			<?php endif; ?>
			<?php if( get_field( 'champions' ) ): ?>
				<div class='carrossel-container'>
					<button class='before'><</button>
					<div class='carrossel'>
						<?php while ( have_rows( 'champions' ) ) : the_row(); ?>
							<a href='<?php echo get_permalink( get_sub_field( 'champion' ) ); ?>' class='person'>
								<img src='<?php echo get_sub_field('photo'); ?>' class='photo' />
								<?php echo get_sub_field('name'); ?>
							</a>
						<?php endwhile; ?>
					</div>
					<button class='after'>></button>
				</div>
			<?php endif; ?>
		</div>
	<a href='<?php echo site_url( 'champions' ); ?>' class='more'>Mais</a> 
	</div>
	<?php
    $args = array(
      'post_type' => 'post',
      'posts_per_page' => 9999
    );
    $post_query = new WP_Query( $args );
  ?>

  <?php if ( $post_query->have_posts() ): ?>
		<div id='penas-home'>
			<img src='<?php echo IMG; ?>pep.png' class='section-image' />
			<div class='section-title'>
				Penas e Pergaminhos
			</div>
			<div class='carrossel-container'>
				<button class='before'><</button>
				<div class='post-carrossel'>
					<?php while ( $post_query->have_posts() ): $post_query->the_post(); ?>
          	<?php if ( in_category( 'textos', $post ) ): ?>
							<a href='<?php echo get_permalink(); ?>' class='text-post'>
								<img src='<?php echo get_field( 'cover_image' ); ?>' class='photo' />
								<?php echo get_field( 'title' ); ?>
							</a>
						<?php endif; ?>
					<?php endwhile; ?>
				</div>
				<button class='next'>></button>
			</div>
			<a href='<?php echo site_url( 'penas-pergaminhos' ); ?>' class='more'>Mais</a>
		</div>
		<?php wp_reset_postdata(); ?>
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


<?php get_footer(); ?>