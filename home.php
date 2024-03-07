<?php
/*
Template Name: Wpisy
*/
get_header();
?>

<main >
     <div id="filters" class="" uk-offcanvas="flip: true">
          <div class="uk-offcanvas-bar">
               <button class="uk-offcanvas-close" type="button" uk-close></button>
               <div class="uk-margin-small-top uk-margin-medium-bottom">

                    <span class="uk-flex uk-text-large uk-margin-bottom">Kategorie :</span>
                    <?php
                    $categories = get_categories();
                    if (!empty($categories)):
                         ?>
                         <ul class="cat-list uk-flex uk-list">
                              <li><a class="cat-list_item active  uk-margin-remove"
                                        href="#!" data-slug="">Wszystkie</a></li>
                              <?php foreach ($categories as $category): ?>
                                   <li class="uk-margin-remove">
                                        <a class="cat-list_item" href="#!"
                                             data-slug="<?= $category->slug; ?>" data-type="projecten">
                                             <?= $category->name; ?>
                                        </a>
                                   </li>
                              <?php endforeach; ?>
                         </ul>
                    <?php endif; ?>
               </div>

               <div class="uk-margin-small-top uk-margin-small-bottom">
                    <span class="uk-flex  uk-text-large  uk-margin-bottom">Tagi :</span>
                    <?php
                    $tags = get_tags();
                    if (!empty($tags)):
                         ?>
                         <ul class="tag-list uk-flex uk-list">
                              <li><a class="tag-list_item active  uk-margin-remove"
                                        href="#!" data-slug="">Wszystkie</a></li>
                              <?php foreach ($tags as $tag): ?>
                                   <li class="uk-margin-remove">
                                        <a class="tag-list_item " href="#!"
                                             data-tag="<?= $tag->slug; ?>" data-type="tags">
                                             <?= $tag->name; ?>
                                        </a>
                                   </li>
                              <?php endforeach; ?>
                         </ul>
                    <?php endif; ?>
               </div>
          </div>
     </div>

     <div class="uk-container">
          <div class="uk-padding-small">
               <div class="site-title  uk-flex-between ">
               <h1 class="uk-margin-remove-top uk-margin-bottom">Filmy</h1>
                    <button class="uk-button primary-btn uk-border-rounded uk-flex uk-flex-middle" uk-toggle="target: #filters"
                         type="button">
                         <b>
                              Filtry

                         </b>
                         <span class="uk-margin-small-left" uk-icon="icon: settings"></span>
                    </button>

               </div>
               <div class="active-filters">

               </div>
             
               <div class="posts uk-child-width-1-1 uk-child-width-1-2@s uk-child-width-1-3@l uk-grid-small uk-grid-match"
                    uk-grid>
               
               </div>
               <!-- Button to load more posts -->
               <button id="load-more-btn"
                    class="uk-button primary-btn uk-border-rounded uk-margin uk-margin-bottom">Więcej</button>
          </div>
     </div>
</main>

<?php get_footer(); ?>
