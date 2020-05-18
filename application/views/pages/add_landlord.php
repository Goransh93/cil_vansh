         <div class="col-md-12">
           <div class="box box-solid service_row bg-lightgray">
              <div class="box-header">
              <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool remove_service_row" style="background-color: burlywood;"><i class="fa fa-times fa-2x"></i></button>
              </div>
            </div> 
            <div class="radio-toolbar">
                   <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Name *</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="text" class="inputfield" name="landlord_name_<?php echo $row_index ?>" id="landlord_name_<?php echo $row_index ?>">
                      </div>
                    </div>  
                  </div>

                 <div class="form-group">
                    <div class="row">
                      <div class=" col-sm-3">
                        <p class="agrement-title">Gender*</p>
                      </div>
                      <div class="col-sm-9">
                        <input type="radio" name="landlord_gender_<?php echo $row_index ?>" id="male_landlord_<?php echo $row_index ?>" value="Male">
                        <label for="male_landlord_<?php echo $row_index ?>" class="label1">
                          <span>Male</span>
                        </label>
                        <input type="radio" name="landlord_gender_<?php echo $row_index ?>" id="female_landlord_<?php echo $row_index ?>" value="Female">
                        <label for="female_landlord_<?php echo $row_index ?>" class="label2">
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

<script type="text/javascript">
  
</script> 