<footer class="mrg-top">
	<div class="container">

		 <nav class="navbar navbar-default">
	        <div class="container-fluid">
	          <div class="navbar-header">
	            <a class="navbar-brand" href="<?=base_url()?>">WebSite Name</a>
	          </div>
	          <ul class="nav navbar-nav" >



	          <?php $cats = $this->blog_model->getBlogCatData();
                    foreach ($cats as $cat) {

 							if ($this->uri->segment(1) == 'cat' &&  $this->uri->segment(2) == 'index' && $this->uri->segment(3) == $cat->ID) {

                                $active = 'class=" active"';
                            } else {
                                $active = '';
                            } 

                 ?>
                <li <?=$active?>>

                <a href="<?=base_url()?>cat/index/<?=$cat->ID?>"><?=$cat->title?></a>


                </li>
              <?php
                  }
              ?>

	          </ul>
	        </div>
	      </nav>
	      
	      <div class="container-fluid">
		      <div class="soc-icons">
		      	<ul class="nav navbar-nav" >
		            <li class="active"><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
		            <li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
		          </ul>
		      </div>
	      </div>
	</div>
</footer>