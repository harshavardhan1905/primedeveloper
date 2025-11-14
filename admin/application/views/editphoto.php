









<?php include('templates/header.php');?>

 
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>



        <script type="text/javascript">

$(document).ready(function() {
  $('#country').change(function() {
    var country_id = $('#country').val();
    if (country_id != '') {
      $.ajax({
        url: "<?php echo base_url(); ?>index.php/homecontroller/fetchstate",
        method: "POST",
        data: {
          country_id: country_id
        },
        success: function(data) {
          $('#state').html(data);
          $('#city').html('<option value="">Select Sub Category</option>');
        }
      });
    } else {
      $('#state').html('<option value="">Select Category</option>');
      $('#city').html('<option value="">Select Sub Category</option>');
    }
  });

});






				</script>
            <div class="content">
                <div class="container-fluid">
                   
                   
      
    
    
    
    
    
    <div class="row">
      <div class="col-lg-12">
        <div class="card">
          <div class="card-header">
            <h4 class="card-title">Edit Product</h4>
          </div>
          <div class="card-body">
            <div >


              <p style="color:green"><?= $this->session->flashdata('success_msg');?></p>
              <p style="color:green"><?= $this->session->flashdata('error_msg');?></p>

              <?php

                       foreach($vals as $val){?>
                          <form action="" method="post" enctype="multipart/form-data">
                            <div class="row">
                              

                              <div class="form-group col-md-6">
                                <label >Product Category</label>
                                <select id="country" class="form-control" name="category" aria-label="Default select example">

                                <?php                 $catp=$val->category;
$dname=$this->category->selectdp($catp);


foreach($dname as $ui){
  $mine=$ui->name;
}?>
<option value="<?= $val->category?>"><?=$mine?></option>
                <?php

                         foreach($listcategory as $vald){
                echo '<option value="'.$vald->id.'">'.$vald->name.'</option>';
                }?>

                </select>
                              </div>

                              <div class="form-group col-md-6">
                                <label >Sub Category</label>
                                <select  id="state" class="form-control" name="subcategory" aria-label="Default select example">

                                <?php                 $catps=$val->subcategory;
$dnames=$this->category->selectdps($catps);

foreach($dnames as $uis){
  $mines=$uis->name;
}?>
<?php if($mines){?>
                                <option value="<?= $val->subcategory?>"><?=$mines?></option>
<?php } else{?>
  <option value="None">None</option>
  <?php } ?>

              </select>
                              </div>





                              
                              





                              <div class="form-group col-md-6">
                                <label >Product Image (1000px * 1000px)</label><br>
                                <?php $images=explode(',',$val->name); foreach($images as $image){  ?>
                                <img id="blah3" style="height:100px; width:100px; padding-bottom:6px" src="<?php echo base_url()?>/uploads/products/<?=$image?>"/>
              <?php }?>
                                <input type="file" accept="image/png, image/gif, image/jpeg" id="myfile" class="form-control" name="pimage[]" multiple="multiple" onchange="document.getElementById('blah3').src = window.URL.createObjectURL(this.files[0])">
                                <input type="hidden" name="pimage1p" value="<?=$val->name?>"/>
                              </div>

                              



                            </div>
                            <button type="submit" id="thatbutton" name="editproduct" class="btn btn-primary">SAVE</button>
                          </form>
              <?php } ?>




            </div>
          </div>
        </div>
      </div>





    </div>
      
      
      
      
                   
                   
                   
                </div>
            </div>
       

<?php include('templates/footer.php');?>

