<?php
require_once('../config.php');
require_once('../theming.php');
$themeUrl = $_SERVER['DOCUMENT_ROOT'] . '\\theme\\' . config::settings('blog.theme');
require_once('../posts.php');
require_once($themeUrl . '\config.php');
?>

<!DOCTYPE html>
<html>
    <?php require_once($themeUrl . '\head.php'); ?>
    <body>
        <?php
		require_once($themeUrl . '\menu.php');
		
        if(array_key_exists('title', $_GET))
        {
            $post = posts::get_post($_GET['title']);
         
            if ($post == null) :
				require_once($themeUrl . '\404.php');

            else :
				require_once($themeUrl . '\content.php');
            endif;
        }
        else
        {
            require_once($themeUrl . '\listPosts.php');
		}
		require_once($themeUrl . '\footer.php');
	?>
    </body>
</html>
