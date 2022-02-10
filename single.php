<?php get_header(); ?>



<?php get_sidebar(); ?>
       
     
     
		<div id="singlepost">
     	        <?php if (have_posts()): while (have_posts()) : the_post();?>
		<div id="titulosinglepost"> 
            	<h1><?php the_title();?></h1>
		</div>

				<div id="infoposts"> 
			<p><div id="autor">Postado por <?php the_author() ?></div> <div id="data"><?php the_time('d/M/Y'); ?></div></p>
			</div>

		<div id="formatconteudo"> 
			<?php the_content(); ?>
                        </div>
		<?php endwhile; else:?>
		<?php endif;?>	   
				   
     </div>


<div id="propagandasinglepost"> 

<script type="text/javascript"><!--
google_ad_client = "ca-pub-4689005405551373";
/* singlepost_468x60 */
google_ad_slot = "1505305053";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>

</div>



<div id="comments">
<div class="fb-comments" data-href="http://www.quintodosinfernos.com.br/?p=<?php the_ID(); ?>" data-width="580" data-num-posts="44"></div>
</div>

<div id=divclear> </div>
</div>

<?php get_footer(); ?>