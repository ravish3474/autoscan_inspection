<script src="//geodata.solutions/includes/countrystatecity.js"></script>   
    <section class="content">
        <div class="container-fluid">
            <!-- Select -->
            <div class="row clearfix">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                    <div class="header text-center">
                        <h2 style="color: #e46920;"><strong>Initimation Form</strong></h2>
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
                                                    <input type="date" value="<?php echo date('Y-m-d'); ?>" class="datepicker form-control" name="request_date" >
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
                                                    <input type="time" name="request_time" value="<?php $date = date("H:i", strtotime(date('Y-m-d H:i:s'))); echo "$date"; ?>" class="timepicker form-control" >
                                                </div> <span> ( 24Hr Format )</span>
                                            </div>
                                     </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Select Insurer <sup class="text-danger">*</sup></label>
                                                <div class="col-md-7">
                                                    <select id="change_insurance"  class="form-control " required="" name="insurer">
                                                        <option selected="" disabled="" >Select Insurer</option>
                                                        <?php
                                                        foreach ($companies as $comp) {
                                                        ?>
                                                        <option value="<?=$comp['company_name']?>" company_id="<?=$comp['company_id']?>" prefix_ins="<?=$comp['company_code']?>"><?=$comp['company_name']?></option>
                                                      <?php } ?>
                                                    </select>
                                                    <input type="hidden" name="prefix_ins" id="prefix_ins">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">PreInspection ID</label>
                                                <div class="col-md-6">
                                                   <input type="text"  class="form-control" readonly="" value="Auto Generated">
                                                </div>
                                     </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Vehicle No<sup class="text-danger">*</sup> </label>
                                                <div class="col-md-7">
                                                   <input placeholder="Input Vehicle Number" name="vehicle_number" type="text" class="form-control" value="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Vehicle Classification</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="veh_class" required="" name="vehicle_class">
                                                        <option selected="" disabled="" >Select Vehicle</option>
                                                        <option value="PRIVATE VEHICLE">PRIVATE VEHICLE</option>
                                                        <option value="COMMERCIAL">COMMERCIAL</option>
                                                        <option value="TWO WHEELERS">TWO WHEELERS</option>
                                                </select>
                                              </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Make </label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="veh_make" required="" name="vehicle_make">
                                                </select>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Model</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="veh_model" required="" name="vehicle_model">
                                                </select>
                                              </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Variant </label>
                                                <div class="col-md-7">
                                                    <select class="form-control" id="veh_variant" required="" name="vehicle_variant">
                                                </select>
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Branch</label>
                                                <div class="col-md-6">
                                                <select class="form-control" id="agent_branch" required="" name="agent_branch">
                                                </select>
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Proposer/Agent Name</label>
                                                <div class="col-md-7">
                                                  <select class="form-control" id="agent_name" required="" name="agent_name">
                                                </select>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Code</label>
                                                <div class="col-md-6">
                                                   <input type="text" id="agent_code" name="agent_code"  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Agent Contact No </label>
                                                <div class="col-md-7">
                                                    <input type="text" id="agent_contact" name="agent_phone" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Email ID</label>
                                                <div class="col-md-6">
                                                    <input type="text" id="agent_email" name="agent_email"  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Insurer Ref No</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="insurer_ref_no" placeholder="Input Insurance Ref No"  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Payment Method <sup class="text-danger">*</sup></label>
                                                <div class="col-md-6">
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="CASH" checked>CASH</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="CREDIT CARD">CREDIT CARD</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="payment_method" value="COMPLIMENTARY">COMPLIMENTARY</label>
                                                     </div>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Insured Name</label>
                                                <div class="col-md-7">
                                                   <input type="text" name="insured_name"  class="form-control" placeholder="Inpur Insurer Name" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Contact Number </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="contact_number" placeholder="Input Contact Number" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Address</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="address" class="form-control" placeholder="Input Address Here" required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Land Marks</label>
                                                <div class="col-md-6">
                                                     <input type="text" name="landmark"  class="form-control" placeholder="Input Landmark Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Location</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="location" class="form-control" placeholder="Enter Location Here">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Country</label>
                                                <div class="col-md-6">
                                                <select name="c_country" class="countries form-control" id="countryId" required="">
                                                    <option value="">Select Country</option>
                                                </select>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">State</label>
                                                <div class="col-md-7">
                                                    <select name="c_state" class="states form-control" id="stateId" required="">
                                                        <option value="">Select State</option>
                                                    </select>
                                                </div>
                                    </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">City</label>
                                                <div class="col-md-6">
                                                    <select name="c_city" class="cities form-control" id="cityId" required="">
                                                        <option value="">Select City</option>
                                                    </select>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Appoint Date</label>
                                                <div class="col-md-7">
                                                    <input type="date" name="appoint_date" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                            <label class="col-md-6">Appoint Time</label>
                                            <div class="col-md-6 d-flex">                                            
                                                <div class="form-line">
                                                    <input type="time" class="timepicker form-control" name="appoint_time" >
                                                </div> <span> ( 24Hr Format )</span>
                                            </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Select Inspection Branch</label>
                                                <div class="col-md-7">
                                                     <select name="isp_branch" class="form-control" id="isp_branch" required="">
                                                        <option value="" selected="" disabled="">Select ISP Branch</option>
                                                        <option check_home="1" value="<?=$_SESSION['user_data'][0]['admin_id']?>">Home Branch</option>
                                                        <?php
                                                        foreach ($c_nator as $cnator) {
                                                        ?>
                                                        <option check_home="0" value="<?=$cnator['admin_id']?>"><?=$cnator['c_name']?></option>
                                                        <?php
                                                        }
                                                        ?>
                                                    </select>
                                                </div>
                                           </div>
                                   </div>
                                                                     <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Select Vendor</label>
                                                  <div class="col-md-6">
                                                    <select name="assigned_fe" class="form-control" id="fe_id">
                                                    </select>
                                                </div>
                                           </div>
                                   </div>
                                  <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Reason</label>
                                                  <div class="col-md-7">
                                                    <div class="radio">
                                                        <label><input type="radio" name="reason" value="Breaking Case < 90 Days" checked>Breaking Case < 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="reason" value="Breaking Case > 90 Days">Breaking Case > 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" value="RollOver" name="reason">RollOver</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" value="Renewal" name="reason">Renewal</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" name="reason" value="Transfer Case">Transfer Case</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input value="CNG Endorsment" type="radio" name="reason">CNG Endorsment</label>
                                                     </div>
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Remarks</label>
                                                <div class="col-md-6">
                                                    <textarea name="remarks" class="w-100" rows="5" cols="30" required="">
                                                    </textarea>
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
  var prefix_ins = $('option:selected', this).attr('prefix_ins');
  $('#prefix_ins').val(prefix_ins);
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
        url:'<?=base_url()?>create-case',
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