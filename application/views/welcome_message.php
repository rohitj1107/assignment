<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Product</title>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<script type="text/javascript">
$(window).load(function(){
				 $('#onload').modal('show');
		 });
</script>
</head>

<body>

<div class="container">
  <div class="row justify-content-md-center p-5">
    <!-- <div class="col col-lg-2">
      1 of 3
    </div>
    <div class="col-md-auto">
      Variable width content
    </div>
    <div class="col col-lg-2">
      3 of 3
    </div> -->
		<?php if ($this->session->flashdata('message')) { ?>

			<div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true"  id="onload">
			    <div class="modal-dialog">
			      <!-- Modal content-->
			      <div class="modal-content">
			        <div class="modal-body">
			         The Product is added in your cart.
			        </div>
			        <div class="modal-footer">
			          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
			        </div>
			      </div>

			    </div>
			</div>
			<?php unset($_SESSION['message']); ?>
		<?php  } ?>
		<?php foreach ($data as $value) { ?>

		<div class="mb-3" style="max-width: 540px;">
			<div class="row no-gutters">

			<div class="col-md-4 p-1">
				<img src="<?php echo $value['p_image']; ?>" width="304" height="280" class="card-img" alt="...">
			</div>
			<div class="col-md-8">
				<div class="card-body">
					<h5 class="card-title"><?php echo $value['p_name']; ?></h5>

					<h6 class="card-text text-secondary"><?php echo $value['p_description']; ?></h6>
						<?php $size = explode('|',$value['p_size']); ?>


						<form method="post">
							<input type="hidden" name="id" value="<?php echo $value['p_id']; ?>">
							<button type="input" name="size" value="<?php echo $size[0]; ?>" class="btn btn-primary btn-sm"><?php echo $size[0]; ?></button>
								&nbsp;
							<button type="input" name="size" value="<?php echo $size[1]; ?>" class="btn btn-primary btn-sm"><?php echo $size[1]; ?></button>
								&nbsp;
							<button type="input" name="size" value="<?php echo $size[2]; ?>" class="btn btn-primary btn-sm"><?php echo $size[2]; ?></button>
							<br>
							<?php $price = explode('|',$value['p_price']); ?>
							<br>
						</form>
						<form action="<?php echo base_url(); ?>" method="post">

							<?php if(trim($this->input->post('size')) =='S' && $this->input->post('id') == $value['p_id'] ) { ?>
										<i class="fa fa-inr font-weight-bold " style="font-size:22px;color:red"><?php echo ' '.$price[0]; ?></i>
										<input type="hidden" name="c_size" value="<?php echo trim($this->input->post('size')); ?>">
										<input type="hidden" name="c_price" value="<?php echo trim($price[0]); ?>">

							<?php } elseif(trim($this->input->post('size')) =='M' && $this->input->post('id') == $value['p_id'] ) { ?>
										<i class="fa fa-inr font-weight-bold " style="font-size:22px;color:red"><?php echo $price[1]; ?></i>
										<input type="hidden" name="c_size" value="<?php echo trim($this->input->post('size')); ?>">
										<input type="hidden" name="c_price" value="<?php echo trim($price[1]); ?>">

							<?php } elseif(trim($this->input->post('size')) =='L' && $this->input->post('id') == $value['p_id'] ) { ?>
										<i class="fa fa-inr font-weight-bold " style="font-size:22px;color:red"><?php echo $price[2]; ?></i>
										<input type="hidden" name="c_size" value="<?php echo trim($this->input->post('size')); ?>">
										<input type="hidden" name="c_price" value="<?php echo trim($price[2]); ?>">

							<?php } else { ?>
										<i class="fa fa-inr font-weight-bold " style="font-size:22px;color:red"><?php echo $price[1]; ?></i>
										<input type="hidden" name="c_size" value="<?php echo trim($size[1]); ?>">
										<input type="hidden" name="c_price" value="<?php echo trim($price[1]); ?>">

							<?php } ?>
										<input type="hidden" name="c_id" value="<?php echo $value['p_id']; ?>">
										<input type="hidden" name="c_name" value="<?php echo $value['p_name']; ?>">
						<br><br>
						<div class="btn-group btn-group-toggle" data-toggle="buttons">
						<button type="button" class="btn btn-dark">&nbsp; Wishlist &nbsp;</button>
						<button type="submit" data-toggle="modal" href="#myModal" name="submit" value="submit" class="btn btn-light btn-outline-dark">&nbsp; Buy Now &nbsp;</button>

					</form>

					</div>
				</div>
			</div>
</div>
</div>
<?php } ?>

  </div>






</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
