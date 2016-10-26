<?php
/*
Template Name: Page Rank Checker
*/
?>
<?php get_header(); ?>

 <div class="top-description clearfix">
 <div class="container">
 <div class="row">
 	
<?php 
$tree = get_page_tree(get_the_ID());
$tree = $tree[2];
?>

<?php if (have_posts()) : ?>
<?php while (have_posts()) : the_post(); ?>
<div class="col-md-7">
<p class="b10m t20m topheader"><?php the_field( "header_overskrift", $tree); ?></p>
<p><?php the_field( "header_manchet", $tree ); ?></p>
</div>
<div class="col-md-5">
	<img src="<?php the_field( "header_illustration", $tree ); ?>" class="img-responsive">
</div>
<?php endwhile; ?>
<?php else : ?>
<?php endif; ?>
<?php wp_reset_query(); ?>

 </div>
 </div>
 </div>
 
 <div class="clear"></div>
 

	<?php the_post( get_the_ID() ); ?>
	
	<!-- header end - content -->
   <div class="inner-content t60p">
   <div class="container">
   <div class="row clearfix">
   	<div class="col-md-12">
   	<h1>Tjek Google PageRank her</h1>
   	<p class="b40m">Se hvilken karakter Google giver din hjemmeside ved at indtaste din hjemmeside i feltet herunder.</p>
   	
   		<form action="<?php echo the_permalink(); ?>" method="post" class="pagerank-form">
   			<label>Indtast webadresse (URL):</label><br/>
   			<input type="text" name="url"/><br/>
   			<input type="submit" value="Tjek Page Rank &rarr;" class="btn btn-success t20m" />
   		</form>
   		
   		
   		<?php 
   			if($_POST['url'])
			{
				$pagerank = @get_google_pagerank($_POST['url']);
				if($pagerank){ ?>
					</div>
					</div>
					</div>
					<hr/>
					<div class="container">
					<div class="row clearfix">
					<div class="col-md-12">
					<h3>Resultat for domænet: <?php echo $_POST['url']; ?></h3>
					<p class="result">Google PageRank = <?php echo $pagerank; ?></p>
					<?php if($pagerank > 3 && $pagerank !== null){ ?>
						<p class="t20m nomargin-bottom result-desc">Lad Green Click Media ApS, hjælpe dig med at få maksimalt udbytte af din gode PageRank!<br/>Kontakt os nu på 70 230 540 eller læs mere under <a href="<?php echo get_site_url() . '/adwords/'; ?>">AdWords</a></p>
					<?php }else{ ?>
						<p class="t20m nomargin-bottom result-desc">Lad Green Click Media ApS, hjælpe dig med at få en højere PageRank!<br/>Kontakt os nu på 70 230 540 eller læs mere under <a href="<?php echo get_site_url() . '/seo/'; ?>">SEO</a></p>
					<?php }; ?>
					<?php }else{ ?>
					</div>
					</div>
					</div>
					<hr/>
					<div class="container">
					<div class="row clearfix">
					<div class="col-md-12">
					<h3>Resultat for domænet: <?php echo $_POST['url']; ?></h3>
					<p class="result">Google PageRank = Ukendt</p>
					<p class="t20m nomargin-bottom result-desc">Lad Green Click Media ApS, hjælpe dig med at få en højere PageRank!<br/>Kontakt os nu på 70 230 540 eller læs mere under <a href="<?php echo get_site_url() . '/seo/'; ?>">SEO</a></p>
				<?php };
			};
   		?>
   		
   </div>
   </div>
   </div>
   <hr/>
   <div class="container">
   <div class="row clearfix">
   	<div class="col-md-12">
   	<h3>Hvad er PageRank?</h3>
   	<p>PageRank er en numerisk værdi, som repræsenterer hvor betydningsfuld din hjemmeside er på internettet. Du får tildelt PageRank efter en kompliceret algoritme og får en karakter på en 0-10 skala. Karakteren gives ved at analysere indholdet og gennemsigtigheden af din hjemmeside, samt antal og kvalitet af indgående og udgående links til din hjemmeside.</p>
   </div>
   </div>
   </div>
   <div class="container"> 
  
  <?php
 footer_cta(); 
 ?>
  
  </div>
   
   </div>
   </div>
   
    <div class="clear"></div>
	<!-- content end - footer-->

<?php get_footer(); ?>