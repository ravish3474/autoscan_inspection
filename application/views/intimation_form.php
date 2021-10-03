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
                                                    <select   class="form-control " required="" name="insurance_company">
                                                        <option selected="" disabled="" >Select Insurer</option>
                                                        <?php
                                                        foreach ($companies as $comp) {
                                                        ?>
                                                        <option value=""><?=$comp['company_name']?></option>
                                                      <?php } ?>
                                                    </select>
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
                                                <select class="form-control" id="agent_branch" required="" name="vehicle_model">
                                                </select>
                                                </div>
                                           </div>
                                   </div>
                                   <div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Proposer/Agent Name</label>
                                                <div class="col-md-7">
                                                  
                                                    <input  type="text" name="borrower" class="form-control" value="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Code</label>
                                                <div class="col-md-6">
                                                   <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Agent Contact No </label>
                                                <div class="col-md-6">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Agent Email ID</label>
                                                <div class="col-md-7">
                                                    <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Insurer Ref No</label>
                                                <div class="col-md-6">
                                                    <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Payment Method <sup class="text-danger">*</sup></label>
                                                <div class="col-md-7 ">
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio" checked>CASH</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio">CREDIT CARD</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio">COMPLIMENTARY</label>
                                                     </div>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Insurer Name</label>
                                                <div class="col-md-6">
                                                   <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Contact Number </label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Profession</label>
                                                <div class="col-md-6">
                                                    <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Address</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Land Marks</label>
                                                <div class="col-md-6">
                                                     <input type="text" name=""  class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Location</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Country</label>
                                                <div class="col-md-6">
                                                    <input  type="text" class="form-control" value="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">State</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">City</label>
                                                <div class="col-md-6">
                                                    <input  type="text" class="form-control" value="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Appoint Date</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                            <label class="col-md-6">Appointment Time</label>
                                            <div class="col-md-6 d-flex">                                            
                                                <div class="form-line">
                                                    <input type="text" class="timepicker form-control" >
                                                </div> <span> ( 24Hr Format )</span>
                                            </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">Select Vendor Operator</label>
                                                <div class="col-md-7">
                                                    <input type="text" name="" class="form-control " required="">
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-6">Remarks</label>
                                                <div class="col-md-6">
                                                    <textarea name="" class="w-100" rows="5" cols="30" required="">
                                                    </textarea>
                                                </div>
                                           </div>
                                   </div><div class="col-md-6">
                                    <div class="row mx-0 form-group">
                                                <label class="col-md-5">PreInspection Reason</label>
                                                  <div class="col-md-7 ">
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio" checked>Breaking Case < 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio">Breaking Case > 90 Days</label>
                                                    </div>
                                                    <div class="radio">
                                                        <label><input type="radio" name="optradio">RollOver</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" name="optradio">Renewak</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" name="optradio">Transfer Case</label>
                                                     </div>
                                                     <div class="radio">
                                                        <label><input type="radio" name="optradio">CNG Endorsment</label>
                                                     </div>
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
</script>