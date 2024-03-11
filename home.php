<?php
/*
Template Name: Wpisy
*/
get_header();
?>

<main>
     <div class="uk-container">
          <section>
               <h1>Wpisy</h1>
               <ul class="posts">
                    <?php
                    $args = array(
                         'post_type' => 'post',
                         'post_status' => 'publish',
                         'posts_per_page' => -1, // -1 retrieves all posts
                    );

                    $query = new WP_Query($args);

                    if ($query->have_posts()) {
                         while ($query->have_posts()) {
                              $query->the_post();
                              ?>
                              <li>
                                   <a href="<?php the_permalink(); ?>">
                                        <h2>
                                             <?php the_title(); ?>
                                        </h2>
                                        <div>
                                             <?php the_content(); ?>
                                        </div>

                                   </a>

                              </li>
                              <?php
                         }
                    } else {
                         echo 'No posts found';
                    }
                    wp_reset_postdata();
                    ?>

               </ul>
          </section>

     </div>

</main>

<?php get_footer(); ?>