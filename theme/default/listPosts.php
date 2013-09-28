<?php $posts = posts::get_posts(10, 1);

            foreach($posts as $post) : ?>

            <h1><a href="<?php echo($post->url); ?>"><?php echo($post->title); ?></a></h1>
            <span><?php echo($post->date); ?></span>
            <?php echo($post->content); ?>
            <hr />
<?php endforeach;?>