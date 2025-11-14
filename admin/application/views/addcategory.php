









<?php include('templates/header.php');?>

 
            <div class="content">
                <div class="container-fluid">
                   
                   
                  
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          
          <div class="card-body">
            <div >
            <?php $typ=$this->category->listtypes();?>
  <p style="color:green"><?= $this->session->flashdata('Success');?></p>
              <form action="" method="post" enctype="multipart/form-data">
                <div class="row">
                  <div class="form-group col-md-4">
                    <label >Category Name</label>
                    <input type="text" name="name" class="form-control" placeholder="Name" id="inputEmail4" required>
                  </div>
                 
                  <div class="form-group col-md-4">
                    <label for="inputPassword4">Status</label>
                    <select class="form-control" name="status" aria-label="Default select example">

    <option value="Active">Active</option>
    <option value="Inactive">Inactive</option>

  </select>
                  </div>

                </div>
                <button type="submit" name="addcategory" class="btn btn-primary" id="checkBtn">ADD</button>
              </form>


            </div>
          </div>
        </div>
      </div>




</div>
                   
                   
                   
                </div>
            </div>
       

<?php include('templates/footer.php');?>

