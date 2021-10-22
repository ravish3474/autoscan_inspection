<script src="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.js"></script>
<link href="https://cdn.jsdelivr.net/timepicker.js/latest/timepicker.min.css" rel="stylesheet"/>
<style type="text/css">
._jw-tpk-container{
  height: 200px !important;
}
</style>
    <section class="content">
        <div class="container-fluid">
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header text-center">
                        <h2 style="color: #e46920;"><strong>View/Edit Initimation Form</strong></h2>
                    </div>
                        <div class="body">
                            <form id="intimation_form" method="POST">
                                <div class="row">
                                  <div class="col-md-6">
                                  <div class="row mx-0 form-group">
                                    <label class="col-md-5">Request Date </label>
                                        <div class="col-md-7">
                                          <div class="form-group">
                                                <div class="form-line">
                                                    <input type="date" value="<?=$c_nator[0]['request_date']?>" class="datepicker form-control" name="request_date" >
                                                    <input type="hidden" value="<?=$c_nator[0]['case_id']?>" name="case_id">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                  </div>
                                  <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                            <label class="col-md-6">Request Time</label>
                                            <div class="col-md-6 d-flex">                                            
                                                <div class="form-line">
                                                    <input type="text" id="time" name="request_time" readonly="" value="<?=$c_nator[0]['request_time']?>" class="timepicker form-control" >
                                                </div> <span> ( 24Hr Format )</span>
                                            </div>
                                     </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Select Insurer <sup class="text-danger">*</sup></label>
                                                <div class="col-md-7">
                                                    <input type="text" name="insurer" value="<?=$c_nator[0]['insurer']?>" class="form-control" >
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">PreInspection ID</label>
                                                <div class="col-md-6">
                                                   <input type="text"  class="form-control" value="<?=$c_nator[0]['ref_no']?>" readonly="">
                                                </div>
                                     </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Vehicle No<sup class="text-danger">*</sup> </label>
                                                <div class="col-md-7">
                                                   <input placeholder="Input Vehicle Number" name="vehicle_number" type="text" class="form-control" value="<?=$c_nator[0]['vehicle_number']?>">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Vehicle Classification</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="veh_class" required="" name="vehicle_class">
                                                        <option <?php
                                                        if ($c_nator[0]['vehicle_class']=="PRIVATE VEHICLE") {
                                                          echo "selected";
                                                        }
                                                        ?> value="PRIVATE VEHICLE">PRIVATE VEHICLE</option>
                                                        <option <?php
                                                        if ($c_nator[0]['vehicle_class']=="COMMERCIAL") {
                                                          echo "selected";
                                                        }
                                                        ?> value="COMMERCIAL">COMMERCIAL</option>
                                                        <option <?php
                                                        if ($c_nator[0]['vehicle_class']=="TWO WHEELERS") {
                                                          echo "selected";
                                                        }
                                                        ?> value="TWO WHEELERS">TWO WHEELERS</option>
                                                </select>
                                              </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Make </label>
                                                <div class="col-md-7">
                                                    <input placeholder="Input Vehicle Number" name="vehicle_make" type="text" class="form-control" value="<?=$c_nator[0]['vehicle_make']?>">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Model</label>
                                                <div class="col-md-6">
                                                <input placeholder="Input Vehicle Number" name="vehicle_model" type="text" class="form-control" value="<?=$c_nator[0]['vehicle_model']?>">
                                              </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Variant </label>
                                                <div class="col-md-7">
                                                    <input placeholder="Input Vehicle Number" name="vehicle_variant" type="text" class="form-control" value="<?=$c_nator[0]['vehicle_variant']?>">
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Branch</label>
                                                <div class="col-md-6">
                                                <input placeholder="Input Vehicle Number" name="agent_branch" type="text" class="form-control" value="<?=$c_nator[0]['agent_branch']?>">
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Proposer/Agent Name</label>
                                                <div class="col-md-7">
                                                  <input placeholder="Input Vehicle Number" name="agent_name" type="text" class="form-control" value="<?=$c_nator[0]['agent_name']?>">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Code</label>
                                                <div class="col-md-6">
                                                   <input type="text" id="agent_code" name="agent_code"  class="form-control " value="<?=$c_nator[0]['agent_code']?>" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Agent Contact No </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="agent_contact" name="agent_phone" class="form-control " value="<?=$c_nator[0]['agent_phone']?>" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Email ID</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="agent_email" name="agent_email" value="<?=$c_nator[0]['agent_email']?>"  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Insurer Ref No</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="insurer_ref_no" placeholder="Input Insurance Ref No" value="<?=$c_nator[0]['insurer_ref_no']?>"  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Payment Method <sup class="text-danger">*</sup></label>
                                                <div class="col-md-6">
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="CASH" <?php
                                                        if ($c_nator[0]['payment_method']=="CASH") {
                                                          echo "checked";
                                                        }
                                                        ?>>CASH</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="CREDIT CARD" <?php
                                                        if ($c_nator[0]['payment_method']=="CREDIT CARD") {
                                                          echo "checked";
                                                        }
                                                        ?>>CREDIT CARD</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="COMPLIMENTARY" <?php
                                                        if ($c_nator[0]['payment_method']=="COMPLIMENTARY") {
                                                          echo "checked";
                                                        }
                                                        ?>>COMPLIMENTARY</label>
                                                     </div>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Insured Name</label>
                                                <div class="col-md-7">
                                                   <input type="text" name="insured_name" value="<?=$c_nator[0]['insured_name']?>" class="form-control" placeholder="Inpur Insurer Name" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Contact Number </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="contact_number" value="<?=$c_nator[0]['contact_number']?>" placeholder="Input Contact Number" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Address</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="address" class="form-control" value="<?=$c_nator[0]['address']?>" placeholder="Input Address Here" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Land Marks</label>
                                                <div class="col-md-6">
                                                     <input type="text" name="landmark" value="<?=$c_nator[0]['landmark']?>" class="form-control" placeholder="Input Landmark Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Location</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="location" class="form-control" value="<?=$c_nator[0]['location']?>" placeholder="Enter Location Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Country</label>
                                                <div class="col-md-6">
                                                <input type="text" name="c_country" class="form-control" value="<?=$c_nator[0]['c_country']?>" placeholder="Enter Location Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">State</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="c_state" class="form-control" value="<?=$c_nator[0]['c_state']?>" placeholder="Enter Location Here">
                                                </div>
                                    </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">City</label>
                                                <div class="col-md-6">
                                                   <input type="text" name="c_city" class="form-control" value="<?=$c_nator[0]['c_city']?>" placeholder="Enter Location Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Appoint Date</label>
                                                <div class="col-md-7">
                                                    <input type="date" name="appoint_date" class="form-control " value="<?=$c_nator[0]['appoint_date']?>" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                            <label class="col-md-6">Appoint Time</label>
                                            <div class="col-md-6 d-flex">                                            
                                                <div class="form-line">
                                                    <input type="text" readonly="" name="appoint_time" class="form-control " value="<?=$c_nator[0]['appoint_time']?>" required="">
                                                </div> <span> ( 24Hr Format )</span>
                                            </div>
                                           </div>
                                   </div>
                                  <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Reason</label>
                                                  <div class="col-md-7">
                                                    <div class="radio">
                                                        <label><input type="radio" name="reason" value="Breaking Case < 90 Days" <?php
                                                        if ($c_nator[0]['reason']=="Breaking Case < 90 Days") {
                                                          echo "checked";
                                                        }
                                                        ?>>Breaking Case < 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="reason" value="Breaking Case > 90 Days" <?php
                                                        if ($c_nator[0]['reason']=="Breaking Case > 90 Days") {
                                                          echo "checked";
                                                        }
                                                        ?>>Breaking Case > 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" value="RollOver" name="reason" <?php
                                                        if ($c_nator[0]['reason']=="RollOver") {
                                                          echo "checked";
                                                        }
                                                        ?>>RollOver</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" value="Renewal" name="reason" <?php
                                                        if ($c_nator[0]['reason']=="Renewal") {
                                                          echo "checked";
                                                        }
                                                        ?>>Renewal</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" name="reason" value="Transfer Case" <?php
                                                        if ($c_nator[0]['reason']=="Transfer Case") {
                                                          echo "checked";
                                                        }
                                                        ?>>Transfer Case</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input value="CNG Endorsment" type="radio" name="reason" <?php
                                                        if ($c_nator[0]['reason']=="CNG Endorsment") {
                                                          echo "checked";
                                                        }
                                                        ?>>CNG Endorsment</label>
                                                     </div>
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Remarks</label>
                                                <div class="col-md-6">
                                                    <textarea name="remarks" class="w-100" rows="5" cols="30" required=""><?=$c_nator[0]['remarks']?></textarea>
                                                </div>
                                     </div>
                                   </div>
                                </div>
                                <div class="text-center">
                                    <button class="btn btn-success m-t-15 waves-effect" type="submit">Submit</button>
                                </div>
                                
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- #END# Select -->
        </div>
    </section>

<script type="text/javascript">
var timepicker = new TimePicker('time', {
  lang: 'en',
  theme: 'dark'
});
timepicker.on('change', function(evt) {
  
  var value = (evt.hour || '00') + ':' + (evt.minute || '00');
  evt.element.value = value;

});

$(document).on('change','#isp_branch',function(){
  var coord_id = $(this).val();
  $.ajax({
    type:'POST',
    data:{
      coord_id:coord_id
    },
    url:'<?=base_url()?>fetch-isp-fe',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="">SELECT FE LATER</option>';
        for(var i=0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].fe_id+'">'+response.data[i].fe_name+'</option>';
        }
        $('#fe_id').empty();
        $('#fe_id').append(html);
      }
      else{
        var html = '';
        html+='<option value="">SELECT FE LATER</option>';
        $('#fe_id').empty();
        $('#fe_id').append(html);
      }
    }
  })
})

$(document).on('change','#veh_class',function(){
  var veh_class = $(this).val();
  $.ajax({
    type:'POST',
    data:{
      veh_class:veh_class,
    },
    url:'<?=base_url()?>fetch-make',
    success:function(response){
      var response= JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="" selected disabled>--Select Make--</option>';
        for(var i = 0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].MANUFACTURE+'">'+response.data[i].MANUFACTURE+'</option>'
        }
        $('#veh_make').empty();
        $('#veh_model').empty();
        $('#veh_variant').empty();
        $('#veh_make').append(html);
      }
    }
  })
})

$(document).on('change','#veh_make',function(){
  var veh_make = $(this).val();
  $.ajax({
    type:'POST',
    data:{
      veh_make:veh_make,
    },
    url:'<?=base_url()?>fetch-model',
    success:function(response){
      var response= JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="" selected disabled>--Select Model--</option>';
        for(var i = 0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].MODEL+'">'+response.data[i].MODEL+'</option>'
        }
        $('#veh_model').empty();
        $('#veh_variant').empty();
        $('#veh_model').append(html);
      }
    }
  })
})

$(document).on('change','#veh_model',function(){
  var veh_model = $(this).val();
  $.ajax({
    type:'POST',
    data:{
      veh_model:veh_model,
    },
    url:'<?=base_url()?>fetch-variant',
    success:function(response){
      var response= JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="" selected disabled>--Select Variant--</option>';
        for(var i = 0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].VARINAT+'">'+response.data[i].VARINAT+'</option>'
        }
        $('#veh_variant').empty();
        $('#veh_variant').append(html);
      }
    }
  })
})

$(document).on('change','#change_insurance',function(){
  var company_id = $('option:selected', this).attr('company_id');
  $.ajax({
    type:'POST',
    data:{
      company_id:company_id
    },
    url:'<?=base_url()?>fetch-company-branches',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="" selected disabled>--Select Agent Branch--</option>';
        for(var i = 0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].branch_name+'" branch_id="'+response.data[i].branch_id+'">'+response.data[i].branch_name+'</option>'
        }
        $('#agent_name').empty();
        $('#agent_code').val("");
        $('#agent_email').val("");
        $('#agent_contact').val("");
        $('#agent_branch').empty();
        $('#agent_branch').append(html);
      }
    }
  })
})

$(document).on('change','#agent_branch',function(){
  var branch_id = $('option:selected', this).attr('branch_id');
  $.ajax({
    type:'POST',
    data:{
      branch_id:branch_id
    },
    url:'<?=base_url()?>fetch-agent-by-branch',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="" selected disabled>--Select Agent Branch--</option>';
        for(var i = 0;i<response.data.length;i++){
          html+='<option value="'+response.data[i].agent_name+'" agent_id="'+response.data[i].agent_id+'">'+response.data[i].agent_name+'</option>'
        }
        $('#agent_name').empty();
        $('#agent_code').val("");
        $('#agent_email').val("");
        $('#agent_contact').val("");
        $('#agent_name').append(html);
      }
    }
  })
})

$(document).on('change','#agent_name',function(){
  var agent_id = $('option:selected', this).attr('agent_id');
  $.ajax({
    type:'POST',
    data:{
      agent_id:agent_id
    },
    url:'<?=base_url()?>fetch-agent-data',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        $('#agent_code').val(response.data[0].agent_code);
        $('#agent_email').val(response.data[0].agent_email);
        $('#agent_contact').val(response.data[0].agent_phone);
      }
    }
  })
})

$(document).on('submit','#intimation_form',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        url:'<?=base_url()?>update-case',
        processData:false,
        contentType:false,
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                swal('Success',response.msg,'success');
                location.reload();
            }
            else{
                swal('Sorry!',response.msg,'error');
            }
        }
    })
})
</script>