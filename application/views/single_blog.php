



<!doctype html>
<!--[if lt IE 8]><html class="no-js lt-ie8"> <![endif]-->
<html class="no-js">
    <head>
        <meta charset="utf-8">
        <title> | Supr Admin Template</title>
        <meta property="fb:app_id" content="1737282559844911" />
        <meta property="fb:admins" content="100000712156780"/>
        <meta property="fb:admins" content="1313624427"/> 
        <meta property="og:locale" content="" />
        <meta property="og:type" content="article" />
        <meta property="og:title" content="<?=$blog->name?>" />
        <meta property="og:description" content="<?=$blog->descrip?>" />
        <meta property="og:url" content="<?=base_url()?>home/view/<?=$blog->ID?>" />
        <meta property="og:site_name" content="<?=base_url()?>" />
        <meta property="article:publisher" content="Hippo" />
        <meta property="og:image" content="<?=$blog->img?>" />
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
        <!-- Force IE9 to render in normal mode -->
        <!--[if IE]><meta http-equiv="x-ua-compatible" content="IE=9" /><![endif]-->
        <meta name="author" content="" />
        <meta name="description" content="" />
        <meta name="keywords" content="" />
        <meta name="application-name" content="" />
        <!-- Import google fonts - Heading first/ text second -->
        <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,700" rel="stylesheet" type="text/css">
        <link href="http://fonts.googleapis.com/css?family=Droid+Sans:400,700" rel="stylesheet" type="text/css">
        <!-- Css files -->
        <!-- Icons -->
        <link href="<?= base_url() ?>adm/css/icons.css" rel="stylesheet" />
        <!-- Bootstrap stylesheets (included template modifications) -->
        <link href="<?= base_url() ?>adm/css/bootstrap.css" rel="stylesheet" />
        <!-- Plugins stylesheets (all plugin custom css) -->
        <link href="<?= base_url() ?>adm/css/plugins.css" rel="stylesheet" />
        <!-- Main stylesheets (template main css file) -->
        <link href="<?= base_url() ?>blogg/css/main.css" rel="stylesheet" />
        <!-- Custom stylesheets ( Put your own changes here ) -->
        <link href="<?= base_url() ?>adm/css/custom.css" rel="stylesheet" />
        <!-- Fav and touch icons -->
        <link rel="icon" href="img/ico/favicon.ico" type="image/png">
        <!-- Windows8 touch icon ( http://www.buildmypinnedsite.com/ )-->
        <meta name="msapplication-TileColor" content="#3399cc" />
    </head>
    <body>
    <script>
      window.fbAsyncInit = function() {
        FB.init({
          appId      : '1737282559844911',
          xfbml      : true,
          version    : 'v2.7'
        });
      };

      (function(d, s, id){
         var js, fjs = d.getElementsByTagName(s)[0];
         if (d.getElementById(id)) {return;}
         js = d.createElement(s); js.id = id;
         js.src = "//connect.facebook.net/en_US/sdk.js";
         fjs.parentNode.insertBefore(js, fjs);
       }(document, 'script', 'facebook-jssdk'));
    </script>


<?php $this->load->view('inc/header');?>

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
	       <div class="fb-share-button" data-href="<?=base_url()?>home/view/<?=$blog->ID?>" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdevelopers.facebook.com%2Fdocs%2Fplugins%2F&amp;src=sdkpreparse">Share</a></div>

	       <div class="fb-comments" data-href="<?=current_url()?>" data-width="700" data-numposts="7"></div>
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
