<?php get_header()?>
<?php while(have_posts()) : the_post()?>
<section class="hero">
      <div class="container">
        <div class="hero__grid">
            <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
               }
            ?>
          <div class="hero__content">
            <small>Trending News</small>
            <h1>
              <?php the_title()?>
            </h1>
          </div>
        </div>
      </div>
</section>

<section class="blog py--2">
      <div class="container">
        <div class="blog__story">
          <div class="blog__grid">
            <article>
              <h3>
              <?php echo wp_trim_words(get_the_excerpt(),20)?>
              </h3>
              <p><?php the_content()?></p>
            </article>

            <div class="blog__info">
              <ul>
                <li>Published: <span><?php echo get_the_date('M j, Y')?></span></li>
                <li>Author: <span><?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?></span></li>
                <li>Category: <span><?php echo get_the_category()[0]->name ?></span></li>
                <li>Tag:<span><?php 
                        $post_tags = get_the_tags();
                        if ($post_tags){
                            foreach($post_tags as $tag) {
                                echo $tag->name . ', ';
                            }
                        }
                           
                        ?></span></li>
                <li>Time: <span><?php echo get_post_meta( get_the_ID() ,'reading', true) ?></span></li>
              </ul>
              <p>Share this Article</p>
              <ul class="icons d--flex">
                <li class="mr--1">
                  <a href="#"><i class="fab fa-facebook-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-twitter-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-instagram-square"></i></a>
                </li>
                <li class="mr--1">
                  <a href="#"><i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </div>
</section>

<?php endwhile; ?>



<?php get_footer()?>