


<?php include('templates/header.php')?>












<div class="container-fluid py-4">
  <div class="row min-vh-80">
    <div class="col-12">
      <div class="card h-100">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
          <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
            <h5 class="text-white text-capitalize ps-3">Add Catering Menu</h5>
          </div>
        </div>
        <div class="card-body">
          





        <div class="row">
          <p style="color:green"><?= $this->session->flashdata('Success');?></p>
            <div class="col-md-6">
              <div class="card">
                <form class="form-horizontal" method="post">
                  <div class="card-body">
                    <div class="form-group row">
                     
                      <div class="col-sm-3">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="name"
                          placeholder="Name"
                        />
                      </div>
                      
                      
                      <div class="col-sm-3">
                        <input
                          type="number"
                          class="form-control"
                          id="fname" name="price"
                          placeholder="Price"
                        />
                      </div>
                      
                      
                      <div class="col-sm-3">
                        <input
                          type="number"
                          class="form-control"
                          id="fname" name="people"
                          placeholder="No.Of People"
                        />
                      </div>
                      
                      <div class="col-sm-3">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="items"
                          placeholder="No.Of Items"
                        />
                      </div>
                    </div>
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="rice[]"
                          placeholder="Rice"
                        />
                      </div>
                      
                      <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('rice[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="meatcurries[]"
                          placeholder="Meat Curries"
                        />
                      </div>
                                <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('meatcurries[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="vegcurries[]"
                          placeholder="Veg Curries"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('vegcurries[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>

                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="desserts[]"
                          placeholder="Desserts"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('desserts[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="naan[]"
                          placeholder="Naan"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('naan[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="salad[]"
                          placeholder="Salad"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('salad[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>



                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="raitha[]"
                          placeholder="Raitha"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('raitha[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                  
                   
                   
                   
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="bbq[]"
                          placeholder="BBQ"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('bbq[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="appetizer[]"
                          placeholder="Appetizer"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('appetizer[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="splcurry[]"
                          placeholder="Special Curries"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('splcurry[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    
                    
                    <div class="form-group row border-top">
                     
                      <div class="col-sm-9">
                        <input
                          type="text"
                          class="form-control"
                          id="fname" name="spldesserts[]"
                          placeholder="Special Desserts"
                        />
                      </div>
                                          <div class="col-sm-1">
        <button type="button" class="btn btn-primary btn-sm" onclick="duplicateField('spldesserts[]')">Add</button>
        <!--<button type="button" class="btn btn-danger" onclick="deleteField(this)">Delete</button>-->
      </div>
                    </div>
                    
                    
                    
                  <div class="border-top">
                    <div class="card-body">
                      <input  type="submit" name="addcategory" value="Save" class="btn btn-primary">
                        
                    </div>
                  </div>
                </form>
              </div>
             
             
            </div>







          </div>



        </div>
      </div>
    </div>
  </div>
 
 
 <script>
  function duplicateField(fieldName) {
    // Find the parent form group row for the clicked button
    const formGroup = event.target.closest('.form-group.row');

    // Clone the input field within the same form group row
    const inputField = formGroup.querySelector('input[name="' + fieldName + '"]');
    const clonedInput = inputField.cloneNode(true);

    // Clear the value in the cloned input
    clonedInput.value = '';

    // Append the cloned input after the original input
    formGroup.appendChild(clonedInput);
  }

  function deleteField(button) {
    // Find the parent form group row for the clicked button
    const formGroup = button.closest('.form-group.row');

    // Remove the entire form group row, including the input field and buttons
    formGroup.remove();
  }
</script>





 
 
<?php include('templates/footer.php');?>



