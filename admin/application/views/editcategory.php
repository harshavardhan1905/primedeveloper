






<?php include('templates/header.php');?>

 
            <div class="content">
                <div class="container-fluid">
                   
                   
                  
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Category</h4>
          </div>
          <div class="card-body">
            <div >
            <?php $typ=$this->category->listtypes();
            
            ?>
  <p style="color:green"><?= $this->session->flashdata('Success');?></p>
  <?php

            foreach($vals as $val){?>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label >Category Name</label>
                    <input type="text" name="name" class="form-control" value="<?= $val->name?>" id="inputEmail4">
                  </div>
                  
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Status</label>
                    <select class="form-control" name="status" aria-label="Default select example">
  <?php if($val->status=='Active'){
  echo  '<option value="Active">Active</option>
    <option value="Inactive">Inactive</option>';
  }
  else if($val->status=='Inactive'){
  echo  '<option value="Inactive">Inactive</option>
  <option value="Active">Active</option>';
  }
  ?>
  </select>
                  </div>

                </div>
                <button type="submit" name="editcategory" class="btn btn-primary">SAVE</button>
  <?php } ?>
              </form>


            </div>
          </div>
        </div>
      </div>




</div>
                   
                   
                   
                   
                   
                </div>
            </div>
       

<?php include('templates/footer.php');?>


