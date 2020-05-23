<div class="col-md-12">
  <div class="box box-solid service_row bg-lightgray">
    <div class="radio-toolbar">
      <div class="form-group">
        <div class="row">
          <div class=" col-sm-3">
            <p class="agrement-title">Name *</p>
          </div>
          <div class="col-sm-9">
            <input type="text" class="inputfield" name="additional_landlord_name[]">
          </div>
        </div>  
      </div>
      <div class="form-group">
        <div class="row">
          <div class=" col-sm-3">
            <p class="agrement-title">Gender*</p>
          </div>
          <div class="col-sm-9">
            <input type="radio" name="additional_landlord_gender" id='additional_landlord_gender_male' value="Male">
            <label for="additional_landlord_gender_male" class="label1">
              <span>Male</span>
            </label>
            <input type="radio" name="additional_landlord_gender" id="additional_landlord_gender_female" value="Female">
            <label for="additional_landlord_gender_female" class="label2">
              <span>Female</span>
            </label>
          </div>
        </div>  
      </div>
      <div class="form-group">
        <div class="row">
          <div class=" col-sm-3">
            <p class="agrement-title">Father's Name</p>
          </div>
          <div class="col-sm-9">
            <input type="text" class="inputfield" name="landlord_father_name_<?php echo $row_index ?>" id="landlord_father_name_<?php echo $row_index ?>">
          </div>
        </div>  
      </div>
    </div> 
  </div>
</div>