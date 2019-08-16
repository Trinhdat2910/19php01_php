<div class="slide-one-item home-slider owl-carousel">
      
      <div class="site-blocks-cover overlay" style="background-image: url(<?php echo $getProduct['image'] ?>);" data-aos="fade" data-stellar-background-ratio="0.5">
        <div class="container">
          <div class="row align-items-center justify-content-center text-center">

            <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
              

              <h1 class="text-white font-weight-light"><?php echo $getProduct['name'] ?></h1>
              <p class=" text-white" ><?php echo number_format($getProduct['price'])  ?>VNĐ</p>
              <p><a  class="btn btn-primary py-3 px-5 text-white">MUA NGAY</a></p>

            </div>
          </div>
        </div>
    </div>   
</div>
<div class="site-section">
      
    
    <div class="row">
        <div class="row justify-content-center mb-5" style="width: 100%; margin-top: 50px;">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black">Description</h2>
            
          </div>
        </div>
    	<div  style="width: 80%;  border: 1px solid #666;  box-shadow: box-shadow: 5px 5px 5px #666; -moz-box-shadow: 5px 5px 5px #666;    -webkit-box-shadow: 5px 5px 5px #666;margin: 0 auto;">
    		<div  style="width: 90%;   margin: 0 auto; padding-top: 20px; ">
    			<?php echo $getProduct['description'] ?>
    		</div>
    	</div>
        </div>
    <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center">
            <h2 class="font-weight-light text-black" style="margin-top: 30px">Comment</h2>
            <p class="color-black-opacity-5"></p>
          </div>
        </div>
        <div class="row">
          	<div >
          		<form action="index.php?controller=comment&action=send_comment&id=<?php echo $id?>" method="POST">
          			<textarea cols="100" rows="4" placeholder="Mời bạn đề lại bình luận" style="float: left;" required name="content"></textarea> 
          			<input type="submit" name="send_comment" value="Gửi" class="btn btn-primary py-3 px-5 text-white" style="float: left;">
          		</form>
          	</div>
        	<div>
        		<h4><?php echo $getListComment->num_rows ?> Bình luận về sản phẩm</h4>
        		<div>
        			<?php 
						while($row = $getListComment->fetch_assoc()) {
							$id = $row['id'];
							$user = $model->getUserComment($row['user_id']);
					?>
    				<div style="width: 100%; float: left;">
	                  	<img src="<?php echo $user['avatar']?>" alt="profile image" style="width: 30px; height: 30px; float: left;" >
	                  	<div class="user-comment" style="margin-left: 10px; font-size: 25px; font-weight: bold; line-height: 30px;float: left;"><?php echo $user['name']?></div>
	                  	<div style="float: left;margin-left: 10px;line-height: 35px; "><?php 
		                  		date_default_timezone_set('Asia/Ho_Chi_Minh');
		                  		$created = $row['created'];
								echo $created;
								
	                  	?></div>
	                </div>
		            <div class="content-comment" style="width: 100%">
		                	<?php echo $row['content']?>
		            </div>    
	        		<?php 
	        			}
	        		?>
        		</div>
        		
        	</div> 

         
        </div>
    </div>
</div>
