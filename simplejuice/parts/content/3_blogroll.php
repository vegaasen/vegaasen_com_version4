<section id="blogroll" class="section blogroll scrollto animated bounceInUp">
    <article class="box fancy white">
        <nav>
            <h2><a href="http://blog.vegaasen.com" target="_blank">Bulletin Avenue</a></h2>
            <span class="small italic blockquote">Quite steaming hot articles sold on the <a href="http://blog.vegaasen.com" target="_blank">Bulletin Avenue</a></span>
        </nav>
        <section id="slides">
            <article class="container">
                <?php
                    $args = array( 'numberposts' => 8, 'post_status'=>"publish",'post_type'=>"post",'orderby'=>"post_date");
                    $posts = get_posts( $args );
                    foreach ($posts as $post) {
                        $featuredImage = wp_get_attachment_url( get_post_thumbnail_id($post->ID));
                ?>
                        <div class="slide">
                            <div class="wrapper">
                                <?php if(!empty($featuredImage)) {?>
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
                                        <img class="slider-image" src="<?php echo $featuredImage;?>" alt="n"/>
                                    </a>
                                <?php } ?>
                                <section class="caption<?php if(empty($featuredImage)) {echo " full-width";}?>">
                                    <h2><?php the_title(); ?></h2>
                                    <p>
                                        <?php
                                            $strippedContent = strip_tags($post->post_content);
                                            $stringLength = strlen($strippedContent);
                                            if($stringLength >= 115) {
                                                printf(substr($strippedContent,0,115) . "...");
                                            }else {
                                                printf($strippedContent . "...");
                                            }
                                        ?>
                                    </p>
                                    <p><a href="<?php the_permalink(); ?>">Read more</a></p>
                                </section>
                            </div>
                        </div>
                <?php
                    }
                ?>
            </article>
        </section>
    </article>
</section>