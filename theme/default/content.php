<h1><?php echo($post->title);?></h1>
<span><?php echo($post->date); ?></span>
<?php echo($post->content); ?>

<hr />

<?php
    theming::includePHP('disqus',$post);
?>
<hr />    	