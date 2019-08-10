<div class="site-section">
      
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Sản Phẩm Của Chúng Tôi</h2>
            <p class="color-black-opacity-5"></p>
          </div>
        </div>
        <div class="row">
         <?php 
			while($row = $listProduct->fetch_assoc()) {
								 
		?>
          <div class="col-md-6 col-lg-4 mb-4 mb-lg-4">
            <a href="#" class="unit-1 text-center">
              <img src="<?php echo $row['image']?>" alt="Image" class="img-fluid" style="height: 400px;">
              <div class="unit-1-text">
                <strong class="text-primary mb-2 d-block"><?php echo $row['name']?></strong>
                <h3 class="unit-1-heading"><?php echo number_format($row['price'])?> VNĐ</h3>
                
              </div>
            </a>
          </div>
        <?php } ?>
       
         
        </div>
      </div>
    
    </div>