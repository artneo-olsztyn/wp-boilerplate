<?php get_header() ?>
<main>
     <div class="uk-container">
          <div class="uk-animation-fade uk-padding-small">
               <a class="back-link uk-margin-top" href="/wpisy">
                    <span class="uk-margin" uk-icon="icon: arrow-left; ratio: 1.8"></span>
               </a>
               <div class="site-title ">
                    <h1>Single</h1>
               </div>
               
               <?php
               // Output Main Menu
               if (have_posts()) {
                    // Loop through the post(s)
                    while (have_posts()) {
                         the_post();
                         ?>
                         <article class="uk-card uk-card-default uk-border-rounded uk-padding" id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                              <h2 class="entry-title">
                                   <?php the_title(); ?>
                              </h2>
                              <div class="entry-content">
                                   <?php the_content(); ?>
                              </div>
                              <div class="entry-footer uk-flex uk-flex-column">
                                   <span class="author">Written by:
                                        <?php the_author(); ?>
                                   </span>
                                   <span class="categories">Categories:
                                        <?php
                                        $categories = get_the_category();
                                        if (!empty($categories)) {
                                             $category_names = array_map(function ($category) {
                                                  return $category->name;
                                             }, $categories);
                                             echo implode(', ', $category_names);
                                        }
                                        ?>
                                   </span>
                                   <span class="tags">Tags:
                                        <?php
                                        $tags = get_the_tags();
                                        if (!empty($tags)) {
                                             $tag_names = array_map(function ($tag) {
                                                  return $tag->name;
                                             }, $tags);
                                             echo implode(', ', $tag_names);
                                        }
                                        ?>
                                   </span>
                              </div>
                         </article>
                         <?php
                    }
               } else {
                    echo 'No post found';
               }
               ?>
          </div>
     </div>
</main>
<?php get_footer() ?>