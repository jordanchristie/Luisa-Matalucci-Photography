<section id="gallery">
    <h1>Gallery</h1>

   

    <article class="gallery-wrap">
    <?php $loop = new WP_Query( array(
                    'post_type' => 'gallery',
                    'orderby' => 'post_id',
                    'order' => 'ASC'
                )); 
    ?>

    <?php if ($loop->have_posts() ) : while($loop->have_posts() ): $loop->the_post(); ?>
       
        <div class="gallery-img">
          <?php if( has_post_thumbnail() ) : the_post_thumbnail('medium'); endif; ?>
          <?php the_content(); ?>
          
            <div class="img-overlay">
              <?php echo(get_the_category_list('', 'multiple')); ?>
            </div>

        </div>      
      <?php endwhile; endif; wp_reset_postdata(); ?>
    </article>
    
  </section>