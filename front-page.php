<?php get_header(); ?>

    <div id="banner">
        <h1>Digital Diaries Of Vasavi</h1>
        <h3>Blogging Website</h3>
    </div>

    <main>
        <a href="<?php echo site_url('/blog');?>"> 
            <h2 class="section-heading"> All blogs</h2>
        </a>

        <section>

        <?php 
        
            $args=array(
                'post_type' => 'post',
                'posts_per_page' => 2,
            );
        
            $blogposts = new WP_Query($args);

            while($blogposts -> have_posts()){
                $blogposts->the_post();
    
        ?>

            <div class="card">
                <div class="card-image">
                    <a href="<?php echo the_permalink(); ?>">
                        <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>"    alt="Card-image">
                    </a>
                </div>

               <div class="card-description">
                   <a href="<?php the_permalink(); ?>">
                       <h3><?php the_title(); ?></h3>
                   </a>
                   <p><?php echo wp_trim_words(get_the_excerpt(),30); ?>
                   </p>
                   <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
               </div>
            </div>

        <?php
        }
             wp_reset_query(); 
        ?>

    </section>

        <h2 class="section-heading">All Projects</h2>

        <section>
        <?php 
        
        $args=array(
            'post_type' => 'project',
            'posts_per_page' => 2,
        );
    
        $projects = new WP_Query($args);

        while($projects -> have_posts()){
            $projects->the_post();

    ?>

        <div class="card">
            <div class="card-image">
                <a href="<?php echo the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url(get_the_ID());?>"    alt="Card-image">
                </a>
            </div>

           <div class="card-description">
               <a href="<?php the_permalink(); ?>">
                   <h3><?php the_title(); ?></h3>
               </a>
               <p><?php echo wp_trim_words(get_the_excerpt(),30); ?>
               </p>
               <a href="<?php the_permalink(); ?>" class="btn-readmore">Read more</a>
           </div>
        </div>

    <?php
    }
         wp_reset_query(); 
    ?>

        </section>

   

       <?php get_footer(); ?>