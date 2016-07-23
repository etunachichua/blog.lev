<div class="mrg-top container">
    <div class="row">

        <div class="col-md-9">
	       <div class="in-blog-post">
	       		<div class="in-blog-img">
	       			<img src="<?=$blog->img?>" class="img-responsive" >
	       		</div>
	       		<h1><?=$blog->name?></h1>
	       		<time><?=$blog->date?></time>
	       		<div class="blog-content mrg-top">
	       			<?=$blog->text?>
	       		</div>
	       		
	       </div>
        </div>

        <div class="col-md-3">
        	<div class="in-random-posts">
        		<?php 
        			foreach ($randBlog as $blogs ){
        				?>

						<div class="row">
							<div class="col-md-4">
								<a href="<?=base_url()?>home/view/<?=$blogs->ID?>"> 
									<img src="<?=$blogs->img?>" class="img-responsive">
								</a>
							</div>
							<div class="col-md-8">
								<h2>
									<a href="<?=base_url()?>home/view/<?=$blogs->ID?>"> 
									<?= character_limiter(strip_tags($blogs->name), 60);?>
									</a>
								</h2>
							</div>
						</div>
        			
        				
        		<?php 	}
        		?>
        	</div>
        </div>

    
         </div>
</div>
