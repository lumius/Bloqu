<?php

/*
 * Written on 12-09-13 by Corstian Boerman
 * 
 * Copyright (C) by Corstian Boerman (http://corstianboerman.com)
 */

include_once($_SERVER['DOCUMENT_ROOT'] . '\lib\parsedown\parsedown.php');

class posts
{
    static function list_posts ()
    {
		$postsPath = config::settings('posts.path');
        $filelist = glob($_SERVER['DOCUMENT_ROOT'] . $postsPath . '*.md');
        $excludelist = glob($_SERVER['DOCUMENT_ROOT'] . $postsPath . '_*.md');
        
        $blogfiles = array_diff($filelist, $excludelist);
        
        return array_reverse($blogfiles);
    }
    
    static function count_posts()
    {
		$postsPath = config::settings('posts.path');
        return count(glob($_SERVER['DOCUMENT_ROOT'] . $postsPath . '*.md'));
    }
    
    static function get_posts($count = 0, $page = 1)
    {
	$postsPath = config::settings('posts.path');
        if ($count == 0)
            $count = 10;
        
//        if ($page * $count > posts::count_posts())
//            return;
        
        $postslist = array_slice(posts::list_posts(), ($page-1) * $count, $count);
        
        $posts = array();
        
        foreach ($postslist as $key => $filename)
        {
            $handle = fopen($filename, 'r');
            $filecontent = fread($handle, filesize($filename));
            fclose($handle);
            
            $post = new stdClass();
            
            $arr = explode('_', $filename);
                        
            $post->date = str_replace($_SERVER['DOCUMENT_ROOT'] . $postsPath, '', $arr[0]);
            $post->url = config::settings('blog.url') . '/posts/' . str_replace('.md', '', $arr[1]);
            
            $content = Parsedown::instance()->parse($filecontent);
            
            $arr = explode('</h1>', $content);
            $post->title = str_replace('<h1>', '', $arr[0]);
            $post->content = $arr[1];
            
            $posts[] = $post;
        }
        
        return $posts;
    }
    
    static function get_post($name)
    {
		$postsPath = config::settings('posts.path');
        $file = glob($_SERVER['DOCUMENT_ROOT'] . $postsPath . '*_' . $name . '.md');
		
		if ($file == null) : 
			return null;
		endif;
        
        $handle = fopen($file[0], 'r');
        $filecontent = fread($handle, filesize($file[0]));
        fclose($handle);
        
        $post = new stdClass();
        
        $arr = explode('_', $file[0]);
        
        $post->date = str_replace($_SERVER['DOCUMENT_ROOT'] . $postsPath, '', $arr[0]);
        $post->url = config::settings('blog.url') . '/posts/' . str_replace('.md', '', $arr[1]);
            
        $content = Parsedown::instance()->parse($filecontent);

        $arr = explode('</h1>', $content);
        $post->title = str_replace('<h1>', '', $arr[0]);
        $post->content = $arr[1];
        
        return $post;
    }
}

?>