<?php get_header(); ?>

<?php get_sidebar(); ?>
       
<div id="pagina">



     	        <?php if (have_posts()): while (have_posts()) : the_post();?>
                <div id="titulopagina">     
                <h1><?php the_title();?></h1>
                </div>          
		<div id="formatconteudo"> 
			<?php the_content(); ?>
                        </div>
		<?php endwhile; else:?>
		<?php endif;?>	   
		

	<?php wp_link_pages('pagelink=Página %'); ?>	   
</div>
<div id=divclear> </div>
</div>



<?php get_footer(); ?>