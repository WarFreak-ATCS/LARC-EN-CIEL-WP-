<?php get_header()?>

    <section class="latest ">
        <div class="container">
            <div class="latest__grid">
                <div class="latest__main">
                    <?php $bannermain = new WP_Query (array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key'=> 'grouping',
                        'meta_value' => 'banner-main'
                    ))?>
                    <?php if($bannermain->have_posts()) : while($bannermain->have_posts()) : $bannermain->the_post()   ?>
                    <article class="card card--md latest--md">
                    <?php 
                    if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    }
                    ?>
                    <ul class="card__info">
                            <li>
                                <span class="date"><?php echo get_the_date('M, j')?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                            </li>
                        </ul>
                        <h2><a href="<?php the_permalink()?>"><?php the_title()?></a></h2>
                        <p><?php echo wp_trim_words(get_the_excerpt(),20)?></p>
                    </article>
                    <?php endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
                <div class="latest__side">
                    <?php $bannerside = new WP_Query (array(
                            'post_type' => 'post',
                            'posts_per_page' => 2,
                            'meta_query' => array (
                                array (
                                    'key' => 'grouping',
                                    'value' => 'banner-side',
                                    'compare' => "="
                                )
                            )
                        ))?>
                    <?php if($bannerside->have_posts()) : while($bannerside->have_posts()) : $bannerside->the_post()   ?>
                    <article class="card card--sm latest--sm">
                        <?php 
                        if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        }
                        ?>                        
                        <ul class="card__info">
                            <li>
                                <span class="date"><?php echo get_the_date('M, j')?></span>
                                <span class="dot"></span> 
                                <span class="time">12 mins</span> 
                            </li>
                            <li>
                               By: <?php echo get_the_author_meta('first_name')?> <?php echo get_the_author_meta('last_name')?>
                            </li>
                        </ul>
                        <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                        <p><?php echo wp_trim_words(get_the_excerpt(),20)?></p>
                    </article>
                    <?php endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                    ?>
                </div>
            </div>
        </div>
    </section>

    <section class="trending py--10">
        <div class="container">
            <h2 class="block__header align--left">Hot Trending Arcticle</h2>
            <?php $trending = new WP_Query (array (
                'post_type' => 'post',
                'posts_per_page' => 3,
                'meta_key' => 'grouping',
                'meta_value' => 'trending'
            )) ?>
            <?php if($trending->have_posts()) : while($trending->have_posts()) :$trending->the_post() ?>
            <div class="trending__card card card--full">
                <ul class="card__info--full">
                    <li><small><?php the_category()?></small></li>
                    <li><span><?php echo get_the_date('M j, Y') ?></span> <span>by: <?php echo get_the_author_meta('first_name') ?><?php echo get_the_author_meta('last_name') ?></span></li>
                </ul>
                <h3><a href="<?php the_permalink()?>"><?php the_title()?></a></h3>
                <?php if(has_post_thumbnail()) {
                    the_post_thumbnail();
                } ?>
            </div>
            <?php 
                endwhile;
            else:
                echo "no more posts";
            endif;
                wp_reset_postdata();
            ?>
        </div>
    </section>

    <section class="story py--5">
        <div class="container">
            <h2 class="block__header align--center">The Latest Stories</h2>

            <div class="story__grid">
                    <?php  
                        $left = new WP_Query(array(
                            'post_type' => 'post',
                            'posts_per_page' => 1,
                            'meta_key' => 'grouping',
                            'meta_value' => 'latest-left'
                        ))
                    ?>
                    <?php if($left->have_posts()) : while($left->have_posts()) :$left->the_post() ?>
                <article class="card card--xs story-a">
                    <?php if(has_post_thumbnail()) {
                        the_post_thumbnail();
                    } ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y') ?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?><?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                </article>
                <?php 
                            endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                ?>






                <?php  
                    $center = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-center'
                    ))
                ?>
                <?php if($center->have_posts()) : while($center->have_posts()) :$center->the_post() ?>
                <article class="card card--xs story-b">
                    <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y') ?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?><?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                </article>
                <?php 
                            endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                ?>








                <?php  
                    $right = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-right'
                    ))
                ?>
                <?php if($right->have_posts()) : while($right->have_posts()) :$right->the_post() ?>
                <article class="card card--xs story-c">
                <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y') ?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?><?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                </article>
                <?php 
                            endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                ?>







                <?php  
                    $left2 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-left2'
                    ))
                ?>
                <?php if($left2->have_posts()) : while($left2->have_posts()) :$left2->the_post() ?>
                <article class="card card--xs story-d">
                <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y') ?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?><?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4>
                </article>
                <?php 
                            endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                 ?>




                <?php  
                    $right2 = new WP_Query(array(
                        'post_type' => 'post',
                        'posts_per_page' => 1,
                        'meta_key' => 'grouping',
                        'meta_value' => 'latest-right2'
                    ))
                ?>
                <?php if($right2->have_posts()) : while($right2->have_posts()) :$right2->the_post() ?>
                <article class="card card--xs story-e">
                <?php if(has_post_thumbnail()) {
                            the_post_thumbnail();
                        } ?>
                    <ul class="card__info">
                        <li>
                            <span class="date"><?php echo get_the_date('M j, Y') ?></span>
                            <span class="dot"></span> 
                            <span class="time">12 mins</span> 
                        </li>
                        <li>
                            By: <?php echo get_the_author_meta('first_name')?><?php echo get_the_author_meta('last_name')?>
                        </li>
                    </ul>
                    <h4><a href="<?php the_permalink()?>"><?php the_title()?></a></h4> 
                </article>
                <?php 
                            endwhile;
                        else:
                            echo "No post";
                        endif;
                        wp_reset_postdata();
                 ?>
            </div>
        </div>
    </section>

    <section class="subscribe">
        <div class="container">
            <div class="subscribe__wrapper">
                <h2>Subscribe to get more</h2>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Doloremque, tempore magni voluptate quam illum id ad temporibus itaque fuga necessitatibus</p>

                <ul class="d--flex justify--center">
                    <li class="mx--1"><a href="#" class="btn btn--light">Subscribe Now</a></li>
                    <li class="mx--1"><a href="#" class="btn btn--outline">Leader More</a></li>
                </ul>
            </div>
        </div>
    </section>

<?php get_footer()?>