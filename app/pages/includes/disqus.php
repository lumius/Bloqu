<?php
    $disqus_shortname = config::settings('disqus.shortname');

    if ($disqus_shortname != '' && $post->date != null) :
?>
                
<div id="disqus_thread"></div>
<script type="text/javascript">
	var disqus_developer = 1; 
    var disqus_shortname = '<?php echo($disqus_shortname); ?>'; // required: replace example with your forum shortname

    /* * * DON'T EDIT BELOW THIS LINE * * */
    (function() {
        var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
    })();
</script>

<?php endif; ?>