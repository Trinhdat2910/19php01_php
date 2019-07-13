
<h1>news</h1>

<div class="box-body table-responsive no-padding">
              <table class="table table-hover">
                <tr>
                  <th>ID</th>
                  <th>Title</th>
                  <th>Content</th>
                  <th>Image</th>
                  <th>Create At</th>
                  <th><a href="index.php?action=addnews"><button type="button" class="delbtn btn btn-block btn-secondary"  style="width: 100px;float: left; margin-top: 0; margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Add </button></a></th>
                </tr>
              <?php 
				if ($newList->num_rows > 0) {
 				while($dong = $newList->fetch_assoc()) {
 					$id = $dong['id'];
                 ?>
                <tr>
                	<td><?php echo $dong['id']; ?></td>
                  	<td><?php echo $dong['title']; ?></td>
                  	<td><?php echo $dong['content']; ?></td>
                  	<td><img style="width: 50px; height: 50px;" src="<?php echo $dong['image']; ?>" ></td>
                 
                  	<td><?php echo date_format(new DateTime($dong['createat']),'d-m-Y'); ?></td>
                	<td width="250px"><a href="index.php?action=update_news&id=<?php echo $id?>"><button type="button" class="updatebtn btn btn-block btn-warning" style="width: 100px; float: left; " >Update</button></a>
                    <a href="index.php?action=delete_news&id=<?php echo $id?>"><button type="button" class="delbtn btn btn-block btn-danger"  style="width: 100px;float: left; margin-top: 0; margin-left: 10px;" data-toggle="modal" data-target="#modal-delete">Delete</button></a>
                </td>
               
                </tr>
                <?php 
                
                } }?>
                
              </table>
            </div>

 