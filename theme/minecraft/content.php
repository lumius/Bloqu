<!-- Main Content -->

<div class="sub_header">


<!-- Announcements Ribbon -->

<div class="announcement">
	<ul id="items">
		<?php foreach ($slider_items as $item) : ?>
			<li><?php echo($item); ?></li>
		<?php endforeach;?>
	</ul>

</div>

 <!-- Creates the ribbon feel -->
<div class="triangle-l"></div>
<div class="triangle-r"></div>

</div>

<!-- End of Header and Sub-Header -->


<!--
====================================
	Now The Main Content Begins
====================================
-->


<!-- Content Container -->

<div id="content_container">

		
<!-- Right Content -->

<div class="right_content">
<h1><?php echo($post->title);?></h1>
<span><?php echo($post->date); ?></span>
<?php echo($post->content); ?>

<hr />

<?php
    theming::includePHP('disqus',$post);
?>
<hr />    	


</div>
		

<!-- Sidebar. You can either have one long sidebar or multiple "widgets" -->

<div class="sidebar">

<h3 class="address">Server Address</h3>
<p class="address"><?php echo $server_address; ?></p>

</div>

<div class="sidebar">
	<h3>Server Status: </h3> <div class="<?php echo $server_status; ?>"></div>

</div>

</div>	
</div>	