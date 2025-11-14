




<?php include('templates/header.php');?>

 
            <div class="content">
                <div class="container-fluid">
                   
                   
                    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          
          <div class="card-body">
            <div >
            <?php $typ=$this->category->listtypes();?>
  <p style="color:green"><?= $this->session->flashdata('Successs');?></p>
  <form action="" method="post" enctype="multipart/form-data">
              <div class="row">
                <div class="form-group col-md-4">
                  <label >Sub Category Name</label>
                  <input type="text" name="name" class="form-control" id="inputEmail4">
                </div>
                <div class="form-group col-md-4">
                  <label for="inputPassword4">Parent Category</label>
                  <select class="form-control" name="parentcategory" aria-label="Default select example">
                    <?php
                             foreach($listcategory as $val){?>
  <option value="<?=$val->id?>"><?=$val->name?></option>
  <?php }?>

</select>
                </div>


                <div class="form-group col-md-4">
                  <label for="inputPassword4">Status</label>
                  <select class="form-control" name="status" aria-label="Default select example">

  <option value="Active">Active</option>
  <option value="Inactive">Inactive</option>

</select>
                </div>

              </div>
              <button type="submit" name="addsubcategory" class="btn btn-primary">ADD</button>
            </form>



            </div>
          </div>
        </div>
      </div>




</div>
                   
                   
                   
                   
                </div>
            </div>
       

<?php include('templates/footer.php');?>



