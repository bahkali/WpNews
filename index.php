<?php get_header();?>
<form action="" class="ink-form">
    <div class="ink-grid">
        <div class="panel">
            <div class="control-group append-button">
                <div class="control all-100">
                    <input type="text" name="s" placeholder="Search news ...">
                </div>
            </div>
        </div>
    </div>
</form>

<div class="ink-grid vertical-space">
 <div class="panel black">
       <h2>Recent News</h2>
        <div id="car1" class="ink-carousel" data-space-after-last-slide="false" data-autoload="false">
            <ul class="stage column-group half-gutters">
               <?php $loop = new  WP_Query(array('orderby' => 'post_id', 'order' => 'ASC') ); ?>
               <?php while($loop->have_posts()) : $loop->the_post();?>
                <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
                   <?php the_post_thumbnail('news-thumb', array(
                            'class' => 'half-bottom-space'
                    ));?>
                    <div class="description">
                        <h4 class="no-margin"><?php the_title();?></h4>
                        <h5 class="slab"><?php the_time('F j, Y g:i a');?></h5>
<!--                        <div class="excerpt"><?php //the_excerpt();?></div>-->
                    </div>
                </li>
                <?php endwhile;?>
                
            </ul>

        </div>

        <nav id="p1" class="ink-navigation">
            <ul class="pagination black">
            </ul>
        </nav>

    </div>


   <div class="panel inkgrid">
       <div class="column-group">
           <div class="all-50">
               <h2>Featured Stories</h2>
                <div id="car3" class="ink-carousel" data-autoload="false">
                    <ul class="stage column-group half-gutters unstyled">
                       <?php $feature_query = new  WP_Query(array('category_name' => 'featured') ); ?>
                       <?php while($feature_query->have_posts()) : $feature_query->the_post();?>
                        <li class="slide xlarge-100 large-100 medium-100 small-100 tiny-100">
                            <?php the_post_thumbnail('news-large', array(
                            'class' => 'half-bottom-space'
                            ));?>
                            <h4 class="no-margin"><?php the_title();?></h4>
                            <h5 class="slab"><?php the_time('F j, Y g:i a');?></h5>
                            <div class="excerpt"><?php the_excerpt();?></div>
                        </li>
                        <?php endwhile;?> 
                    </ul>


                    <nav id="p3" class="ink-navigation" data-previous-label="" data-next-label="">
                        <ul class="pagination chevron">
                        </ul>
                    </nav>
                    <script>
                        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
                            new InkCarousel('#car3', { pagination: '#p3', nextLabel: '', previousLabel: ''});
                        });
                    </script>
                </div>
           </div>
           <div class="all-50">
               <h2>Popular</h2>
                <ul class="unstyled">
                       <?php $popular_query = new  WP_Query(array('category_name' => 'popular','orderby' => 'comment_count' , 'post_per_page' => '3') ); ?>
                       <?php while($popular_query->have_posts()) : $popular_query->the_post();?>
                        <li class="column-group half-gutters">
                            <div class="all-40 small-50 tiny-50">
                             <?php the_post_thumbnail('news-popular');?>
                            </div>
                            <div class="all-60 small-50 tiny-50">
                                <h4><a href="<?php the_permalink();?>"><?php the_title();?></a> <?php comments_number('No Response', '1 Response', '% Responses' );?></h4>
                                <div class="excerpt"><?php the_excerpt();?></div>
                            </div>
                        </li>
                        <?php endwhile;?>
                    </ul>
           </div>
       </div>
   </div>
   
    <script>
        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
            new InkCarousel('#car1', {pagination: '#p1'});
        });
    </script>



    <div class="panel vertical-space">
        <h2>New In Business</h2>
        <div id="car2" class="ink-carousel" data-autoload="false">

            <ul class="stage column-group half-gutters unstyled">
                <?php $business_query = new  WP_Query(array('category_name' => 'business') ); ?>
                <?php while($business_query->have_posts()) : $popular_query->the_post();?>
                
                <li class="slide xlarge-25 large-25 medium-33 small-50 tiny-100">
                    <?php the_post_thumbnail('news-thumb', array(
                            'class' => 'half-bottom-space'
                    ));?>
                    <h4 class="no-margin"><?php the_title();?></h4>
                    <h5 class="slab"><?php the_time('F j, Y g:i a');?></h5>
                    <div class="excerpt"><?php the_excerpt();?></div>
                </li>
                <?php endwhile;?>
            </ul>

            <nav id="p2" class="ink-navigation" data-next-label="" data-previous-label="">
                <ul class="pagination dotted">
                </ul>
            </nav>

        </div>

    </div>


    <script>
        Ink.requireModules(['Ink.UI.Carousel_1'], function(InkCarousel) {
            new InkCarousel('#car2', {pagination: '#p2'})
        });
    </script>


   

</div>
<?php get_footer();?>