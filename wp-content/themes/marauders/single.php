<?php

  get_header();

?>
<section id="post">
  <div class='cover' style='background-image: url("<?php echo get_field( 'cover_image' ); ?>")'>
  </div>
  <div class='content'>
    <img src='<?php echo get_field( 'top_image' ); ?>' class='section-image' />
    <div class='section-title'>
      <h1><?php echo get_field( 'title' ); ?></h1>
    </div>
    <?php if( get_field( 'text' ) ): ?>
      <div class='text'>
        <?php echo get_field( 'text' ); ?>
      </div>
    <?php endif; ?>
    <?php if( get_field( 'post_image' ) ): ?>
      <img src='<?php echo get_field( 'post_image' ); ?>' class='big-image' />
    <?php endif; ?>
    <?php if ( get_field( 'writer_or_actor' ) ): ?>
      <?php while ( have_rows( 'champions_main' ) ) : the_row(); ?>
        <div class='actor-author'>
          <div class='text'>
            <span class='name'>
              <?php echo get_sub_field( 'name' ); ?> 
            </span>
            <?php echo get_sub_field( 'text' ); ?> 
            <ul class='social'>
              <?php if( get_sub_field( 'instagram' ) ): ?>
                <li><a href='<?php echo get_sub_field( 'instagram' ); ?> '></a>@instagram</li>
              <?php endif; ?>
              <?php if( get_sub_field( 'youtube' ) ): ?>
                <li><a href='<?php echo get_sub_field( 'youtube' ); ?> '></a>@youtube</li>
              <?php endif; ?>
              <?php if( get_sub_field( 'facebook' ) ): ?>
                <li><a href='<?php echo get_sub_field( 'facebook' ); ?> '></a>@twitter</li>
              <?php endif; ?>
            </ul>
          </div>
          <img src='<?php echo get_sub_field( 'photo' ); ?> ' class='profile-picture' />
        </div>
      <?php endwhile; ?>
    <?php endif; ?>
    <?php if( get_field( 'video' ) ): ?>
      <div class='videoWrapper'>
        <iframe src="<?php echo get_field( 'video>'); ?>" allowfullscreen class='video'></iframe>
      </div>
    <?php endif; ?>
    <!-- <div class='carrossel-container'>
      <button class='before'><</button>
      <div class='post-carrossel'>
        <a href='' class='text-post'>
          <img src='<?php echo IMG; ?>placeholder-carrossel.jpg' class='photo' />
          Título do Texto
        </a>
        <a href='' class='text-post'>
          <img src='<?php echo IMG; ?>placeholder-carrossel.jpg' class='photo' />
          Título do Texto
        </a>
        <a href='' class='text-post'>
          <img src='<?php echo IMG; ?>placeholder-carrossel.jpg' class='photo' />
          Título do Texto
        </a>
      </div>
      <button class='next'>></button>
    </div> -->
    <a href='' class='more'>Ver mais</a>
  </div>
</section>


<?php get_footer(); ?>