 <? $this->load->view('header'); ?>
    <!-- Page Content -->
    <div class="container">

        <div class="row">

            <div class="col-md-3">
                <p class="lead">Shop Name</p>
                <div class="list-group">
				
				
				
											<?php 
 
							foreach ($all_categorys AS $all_category){ ?>
								 <a href="<?php echo base_url(); ?><?php echo $all_category->link; ?> " class="list-group-item"><?php echo $all_category->category_name; ?> </a>
                                    

	
						<?php
 
						} ?>
                   
 
                </div>
				<p class="lead">Basket</p>
				Total : <?php echo $cart_total; ?> $
				<br><a href="<?php echo base_url(); ?>cart">View Basket</a>

            </div>

            <div class="col-md-9">
			
			
                <div class="row carousel-holder">

                    <div class="col-md-12">
                        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                            <ol class="carousel-indicators">
							<?php 
							$slider_row = 0;
							foreach ($slider_products AS $slider_product){ ?>
                                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $slider_row; ?>" <?php if($slider_row == 0){ echo "class=' active'"; } ?>></li>
								 
  
						<?php
						$slider_row++;
						} ?>	
                            </ol>
                            <div class="carousel-inner">
							<?php 
							$i = 1;
							foreach ($slider_products AS $slider_product){ ?>
								<div class="item <?php if($i == 1){ echo "active"; } ?>">
                                    <img class="slide-image" src="<?php echo $slider_product->image; ?>" alt="">
                                </div>

	
						<?php
						$i++;
						} ?>	
                            </div>
                            <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
                                <span class="glyphicon glyphicon-chevron-left"></span>
                            </a>
                            <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
                                <span class="glyphicon glyphicon-chevron-right"></span>
                            </a>
                        </div>
                    </div>

                </div>

                <div class="row">
				<h4>The Best-Selling Products</h4>
                    	<?php foreach ($category_products AS $category_product){ ?>
 
 
 

                    <div class="col-sm-4 col-lg-4 col-md-4">
                        <div class="thumbnail">
                            <img src="<?php echo $category_product->image; ?>" alt="">
                            <div class="caption">
                     
                                <h4><a href="<?php echo base_url(); ?>product/<?php echo $category_product->id; ?>"><?php echo $category_product->name; ?></a> 
                                </h4>
								           <h4 class="pull-right"><?php echo $category_product->price; ?> $</h4>
                                <p><?php echo $category_product->details; ?></p>
								<p><a href="<?php echo base_url(); ?>basket/add/<?php echo $category_product->id; ?>">Add Basket</a>
                            </div>
                            <div class="ratings">
                                <p class="pull-right">15 reviews</p>
                                <p>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star"></span>
                                    <span class="glyphicon glyphicon-star-empty"></span>
                                </p>
                            </div>
                        </div>
                    </div>
	<?php } ?>
 

                </div>

            </div>

        </div>

    </div>
    <!-- /.container -->
 <? $this->load->view('footer'); ?>
   