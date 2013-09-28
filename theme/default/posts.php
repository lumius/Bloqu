<?php
require_once('../config.php');
require_once('../posts.php');
?>

<!DOCTYPE html>
<html>
    <?php require_once('head.php'); ?>
    <body>
        <?php
		require_once('menu.php');
		
        if(array_key_exists('title', $_GET))
        {
            $post = posts::get_post($_GET['title']);
         
            if ($post->title == null) :
				require_once('404.php');

            else :
				require_once('content.php');
            endif;
        }
        else
        {
            require_once('listPosts.php');
		}
		require_once('footer.php');
	?>
    </body>
</html>
