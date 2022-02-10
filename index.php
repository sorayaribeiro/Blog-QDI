<?php get_header(); ?>

<?php get_sidebar(); ?>
    

<div id="posts">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
			<div id="tituloposts">      
			<h1><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h1>
			</div>           

			<div id="infoposts"> 
			<p><div id="autor">Postado por <?php the_author() ?></div> <div id="data"><?php the_time('d/M/Y'); ?></div></p>
			</div>
                

			<div id="formatconteudo">
			<?php the_content(); ?>
			</div>

		
			<?php endwhile; else: ?> 




	<h2>De cara na parede!</h2>

	<p>Dê meia volta e se manda! Não vê que não tem nada aqui...</p>


	<?php endif; ?>

    




</div>

<div id="paginacao">
<?php post_pagination();?>
</div>

<div id="divclear"></div>
</div>



<?php get_footer(); ?>