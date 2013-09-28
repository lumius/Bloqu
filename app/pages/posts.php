<?php
require_once('../config.php');
require_once('../posts.php');
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8" />
        <title><?php echo(config::settings('blog.title')); ?></title>
        <meta name="description" content="<?php echo config::settings('blog.description')?>" />
        <style>html{display:block;font:normal normal 400 12.96px/normal Arial, Helvetica, sans-serif;word-wrap:break-word;overflow-x:hidden;text-align:center;margin:0;}body{background-color:#fafafa;overflow-wrap:break-word;-o-tab-size:2;text-align:left;width:700px;display:inline-block;margin:0 auto;}a{color:#000;text-decoration:none;}a:hover{text-decoration:none;}header,footer{text-align:center;padding:1em;}footer{font-weight:700;}</style>
    </head>
    <body>
        <header><a href="<?php echo(config::settings('blog.url') . "/index"); ?>">HOME</a> - <a href="<?php echo(config::settings('blog.url') . "/posts"); ?>">BLOG</a> - <a href="<?php echo(config::settings('blog.url') . "/showcase"); ?>">SHOWCASE</a> - <a href="<?php echo(config::settings('blog.url') . "/about"); ?>">ABOUT</a></header>
        
        <?php 
        if(array_key_exists('title', $_GET))
        {
            $post = posts::get_post($_GET['title']);
            ?>
        
            <h1><?php echo($post->title);?></h1>
            <span><?php echo($post->date); ?></span>
            <?php echo($post->content); ?>
            <hr />
        
            <?php
        }
        else
        {
            $posts = posts::get_posts(10, 1);

            foreach($posts as $post) : ?>

            <h1><a href="<?php echo($post->url); ?>"><?php echo($post->title); ?></a></h1>
            <span><?php echo($post->date); ?></span>
            <?php echo($post->content); ?>
            <hr />

        <?php endforeach; }?>
        <footer>Copyright &copy; by Corstian Boerman</footer>
    </body>
</html>
