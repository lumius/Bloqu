<h1><?php echo($post->title);?></h1>
<span><?php echo($post->date); ?></span>
<?php echo($post->content); ?>

<hr />

<?php
    $disqus_shortname = config::settings('disqus.shortname');

    if ($disqus_shortname != '' && $post->date != null) :
?>
                
<div id="disqus_thread"></div>
<script type="text/javascript">
    var disqus_shortname = '<?php echo($disqus_shortname); ?>'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>
<hr />    

<?php endif; ?>