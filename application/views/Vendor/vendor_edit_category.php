<?php
$this->load->view('vendor/Layout/header');
?>  
<br><br><br>
 <section class="" id="contact" style="background-color: grey">
      <div class="container py-lg-5 py-md-5 py-sm-4 py-3">
        <h3 class="title clr text-center mb-lg-5 mb-md-4 mb-sm-4 mb-3">Update Category</h3>
        <div class="row">
         
          <div class="col-md-9 contact-form">
          	<?php
						foreach($cat_edit as $cat)
						?>
           <form action="<?php echo base_url('index.php/Vendorcontroller/vendor_category_update')?>" method="post" enctype="multipart/form-data">
             <input type="hidden" class="form-control" placeholder="Category Name"   value="<?php echo $cat->category_id?>" name="category_id" style="width: 1000px">
             <label><b style="color: white">Category Type</b></label>
              <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Category Name"   value="<?php echo $cat->category_type?>"  style="width: 1000px">
              </div>
               <div class="form-group contact-forms">
               <select name="category_type" class="form-control" style="width: 1000px">
								<option value="<?php echo $cat->category_type?>">Update Category Type</option>
								
								<option value="vehicle">vehicle</option>
								<option value="home">home</option>
								
								
							</select> 
              </div>
               <label><b style="color: white">Category Name</b></label>
               <div class="form-group contact-forms">
                <input type="text" class="form-control" placeholder="Category Name"   value="<?php echo $cat->category_name?>" name="category" style="width: 1000px">
              </div>
               <label><b style="color: white">Image</b></label><br>
              <img src="<?php echo base_url('Asset/Vendor/category/'.$cat->category_image)?>" style="height: 150px;width: 170px">
              <div class="form-group contact-forms">
                <input type="file" class="form-control" placeholder="PHONE NUMBER"  name="image" style="width: 1000px">
              </div>

              
             
              <div class="sent-butnn text-center">
                <button type="submit" class="" data-blast="" style="width: 1000px;background-color: white;color: black">Submit</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>
<br><br><br>

          <?php
$this->load->view('vendor/Layout/footer');
?>  