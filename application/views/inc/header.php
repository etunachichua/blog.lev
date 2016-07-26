<header>
<div class="body-wrap">
  <div class="container">
    <nav class="navbar navbar-inverse" role="navigation">
      <div class="container-fluid">


        <div class="navbar-header">
          <h1>
             <a class="navbar-brand" href="<?=base_url()?>">WebSite Name</a>
          </h1>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="active"><a href="<?=base_url()?>">Home</a></li>
           
            <li class="dropdown">
             blog <b class="caret"></b>
              <ul class="dropdown-menu">

                <?php $cats = $this->blog_model->getBlogCatData();
                    foreach ($cats as $cat) {


                 ?>
                <li ><a href="<?=base_url()?>cat/index/<?=$cat->ID?>"><?=$cat->title?></a></li>
              <?php
                  }
              ?>
              </ul>
            </li>

          </ul>

         
        </div>
        <!-- /.navbar-collapse -->
      </div>
      <!-- /.container-fluid -->
    </nav>
  </div>
</div>
</header>



