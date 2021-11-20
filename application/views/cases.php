<style type="text/css">
table th,td{
  border: 1px solid black !important;
  text-align: center !important;
}
th{
  background-color: #ea680f;
  color: white;
  font-size:small!important;
  text-align: center !important;
}
</style>

   <section class="content mt-4">
   
        <div class="container-fluid">
            
            <div class="app-main__outer">
                <div class="app-main__inner">
                   
                    <div class="tabs-animation">
                        <div class="mb-3 card">
                            <div class="card-header-tab ">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon lnr-charts icon-gradient bg-happy-green"> </i>
                                  <ul class="list-unstyled m-0 ca_menu">
                                     <li class="<?php
                                     if($this->uri->segment(1)=="new-cases")echo "active";
                                     ?>"><a href="<?=base_url('new-cases')?>">NEW</a></li>
                                     <li class="<?php
                                     if($this->uri->segment(1)=="executive-assigned-cases")echo "active";
                                     ?>"><a href="<?=base_url('executive-assigned-cases')?>">EXECTIVE ASSIGNED</a></li>
                                     <li class="<?php
                                     if($this->uri->segment(1)=="closed-cases")echo "active";
                                     ?>"><a href="<?=base_url('closed-cases')?>">CLOSED</a></li>
                                     <li class="<?php
                                     if($this->uri->segment(1)=="report")echo "active";
                                     ?>"><a href="<?=base_url('report')?>">REPORT</a></li>
                                     <li class="<?php
                                     if($this->uri->segment(1)=="on-hold")echo "active";
                                     ?>"><a href="<?=base_url('on-hold')?>">ON HOLD</a></li>
                                     <li class=""><a href="">REJECTED</a></li>
                                  </ul>
                                </div> 
                            </div>
                            
                            <div class="no-gutters p-1">
                              <div class="table-responsive">
                              <form name="">
                                <table class="table table-striped ">
                                  <thead class="">
                                    <tr>
                                      <th>Date</th>
                                      <th>Request No.</th>
                                      <th>City</th>
                                      <th>Vehicle Class</th>
                                      <th>Location</th>
                                      <th>Purpose</th>
                                      <th>Proposer Name</th>
                                      <th>Payment Mode</th>
                                      <th>Appointment Date & Time</th>
                                      <th>Remarks</th>
                                      <th>Insurer</th>
                                      <th>Source Branch</th>
                                      <th>Destination Branch</th>
                                      <th>Action</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    foreach ($cases as $case) {
                                    ?>
                                    <tr>
                                      <td><?=$case['request_date']?></td>
                                      <td><?=$case['ref_no']?></td>
                                      <td><?=$case['c_city']?></td>
                                      <td><?=$case['vehicle_class']?></td>
                                      <td><?=$case['location']?></td>
                                      <td><?=$case['reason']?></td>
                                      <td><?=$case['agent_name']?></td>
                                      <td><?=$case['payment_method']?></td>
                                      <td><?=$case['appoint_date']?> <?=$case['appoint_time']?></td>
                                      <td><?=$case['remarks']?></td>
                                      <td><?=$case['insurer']?></td>
                                      <td><?=$case['source_name']?></td>
                                       <td><?=$case['destination_name']?></td>
                                      <td>
                                        <span class="pointer p-1 quality_check" case_id="<?=$case['case_id']?>" veh_class="<?=$case['vehicle_class']?>"  data-toggle="tooltip" data-placement="top" title="Quality Check"><img src="https://www.autoscan.co.in/assets/images/notepad.png"></span>
                                        <?php
                                        if ($case['destination_branch']==0 || $case['destination_branch']==$_SESSION['user_data'][0]['admin_id']) {
                                        ?>
                                        <span class="pointer p-1 assign_fe" data-toggle="tooltip" data-placement="top" case_id="<?=$case['case_id']?>" title="Assign FE" fe_id="<?=$case['assigned_fe']?>"><img src="https://www.autoscan.co.in/assets/images/team.png"></span>
                                        <?php
                                        }

                                        if($this->uri->segment(1)=="report" || $this->uri->segment(1)=="on-hold"){
                                        ?>

                                        <span class="pointer p-1 v_pdf" case_id="<?=$case['case_id']?>" data-toggle="tooltip" data-placement="top" title="VIEW/DOWNLOAD PDF" ><img src="https://www.autoscan.co.in/assets/images/team.png"></span>

                                      <?php }else{ ?>

                                        <span class="pointer p-1 assign_branch" case_id="<?=$case['case_id']?>" data-toggle="tooltip" data-placement="top" title="Assign to Another Branch" ><img src="https://www.autoscan.co.in/assets/images/team.png"></span>
                                        <span class="pointer p-1 edit_form" data-toggle="tooltip" data-placement="top" title="View/Edit CASE" case_id="<?=$case['case_id']?>"><img src="https://www.autoscan.co.in/assets/images/document.png"></span>

                                      <?php } ?>

                                        <span class="pointer p-1" data-toggle="tooltip" data-placement="top" title="Delete Permanently"><img src="https://www.autoscan.co.in/assets/images/trash.png"></span>
                                      </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                  </tbody>
                                </table>
                                <div class="pagination_links"> 
                                  <?php echo $links; ?>  
                                </div> 
                                  </form>
                              </div>
                            </div>
                       
                        </div>
                    </div>
                </div>
              
                 </div>
    </div>
</div>

</div>
</section>

  <div class="modal fade" id="PDFModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body" id="show_pdf">
          
        </div>
      </div>
    </div>
  </div>

<div class="modal fade" id="CoordinatorModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign To Other Branch</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id = "assign_coordinator_submit">
          <div class="form-group">
            <label for="exampleInputEmail1">Branch Coordinator List</label>
            <select class="form-control" name="coordinator_id" id="coordinator_id">
            </select>
            <input type="hidden" name="case_id" value="" id="coordinator_case_id">
          </div>
          <button type="submit" class="btn btn-warning mt-2">ASSIGN DESTINATION BRANCH</button>
        </form>
      </div>
    </div>
  </div>
</div>

<div class="modal fade" id="FEModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Assign Field Executive</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id = "assign_fe_submit">
          <div class="form-group">
            <label for="exampleInputEmail1">FE LIST</label>
            <select class="form-control" name="fe_id" id="fe_form">
            </select>
            <input type="hidden" name="case_id" value="" id="fe_case_id">
          </div>
          <button type="submit" class="btn btn-warning mt-2">ASSIGN FE</button>
        </form>
      </div>
    </div>
  </div>
</div>
<script type="text/javascript">
$(document).on('click','.edit_form',function(){
  var case_id = btoa($(this).attr('case_id'));
  var url = '<?=base_url()?>view-edit-case/'+case_id;
  window.location.href=url;

})

$(document).on('submit','#assign_coordinator_submit',function(e){
  e.preventDefault();
  var form = $(this);
  var formData = new FormData(form[0]);
  $.ajax({
    type:'POST',
    data:formData,
    url:'<?=base_url()?>assign-coordinator-submit',
    processData:false,
    contentType:false,
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        swal('Success',response.msg,'success');
        location.reload();
      }
      else{
        swal('Error',response.msg,'error');
      }
    }
  })
})

$(document).on('click','.assign_branch',function(){
  var case_id = $(this).attr('case_id');
  $.ajax({
    type:'GET',
    url:'<?=base_url()?>fetch-all-coordinators',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option>--Select Coordinator--</option>';
        for(var i=0;i<response.data.length;i++){
          html+='<option value="'+response.data[0].admin_id+'">'+response.data[i].c_name+'</option>';
        }
        $('#coordinator_id').empty();
        $('#coordinator_id').append(html);
        $('#coordinator_case_id').val(case_id);
        $('#CoordinatorModal').modal('show');
      }
      else{
        swal('OOPS',response.msg,'error');
      }
    }
  })
})

$(document).on('submit','#assign_fe_submit',function(e){
  e.preventDefault();
  var form = $(this);
  var formData = new FormData(form[0]);
  $.ajax({
    type:'POST',
    data:formData,
    url:'<?=base_url()?>assign-fe-submit',
    processData:false,
    contentType:false,
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        swal('Success',response.msg,'success');
        var url = '<?=base_url()?>executive-assigned-cases';
        window.location.href=url;
      }
      else{
        swal('Error',response.msg,'error');
      }
    }
  })
})

$(document).on('click','.assign_fe',function(){
  var case_id = $(this).attr('case_id');
  var fe_id = $(this).attr('fe_id');
  $.ajax({
    type:'GET',
    url:'<?=base_url()?>fetch-all-fe',
    success:function(response){
      var response = JSON.parse(response);
      if (response.status==1) {
        var html = '';
        html+='<option value="disabled">--Select Field Executive--</option>';
        for (var i = 0; i < response.data.length; i++) {
            if (response.data[i].fe_id==fe_id) {
              var valer = "selected";
            }
            else{
              var valer = "";
            }
            html+='<option '+valer+' value="'+response.data[i].fe_id+'">'+response.data[i].fe_name+'</option>';
        }
        $('#fe_case_id').val(case_id);
        $('#fe_form').empty();
        $('#fe_form').append(html);
        $('#FEModal').modal('show');
      }
      else{
        $('#fe_form').empty();
        swal('error',response.msg,'error');
      }
    }
  })
})

$(document).on('click','.quality_check',function(){
  var case_id = btoa($(this).attr('case_id'));
  var veh_class = $(this).attr('veh_class');
  var url = "";
  if (veh_class=="PRIVATE VEHICLE") {
    url='<?=base_url()?>'+'quality-check-private-vehicle/'+case_id;
    window.location.href=url;
  }
  else if(veh_class=="COMMERCIAL"){
    url='<?=base_url()?>'+'quality-check-commercial-vehicle/'+case_id;
    window.location.href=url;
  }
  else{
    url='<?=base_url()?>'+'quality-check-two-wheeler/'+case_id;
    window.location.href=url;
  }
})

$(document).on("click", ".v_pdf", function () {
  var case_id = $(this).attr('case_id');
  
  $.ajax({  
    type: "POST",
    url:"<?=base_url()?>get-order-file" ,
    data: {
        case_id:case_id
    },
    success: function(data){  
      $("#show_pdf").html(data);  
      $("#PDFModal").modal('show');
    }  
  });
});
</script>

