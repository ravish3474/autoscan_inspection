<style type="text/css">
table th,td{
  border: 1px solid black !important;
  text-align: center !important;
}
th{
  background-color: #ea680f;
  color: white;
  font-size:xx-small!important;
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
                                     <li class="active"><a href="<?=base_url('new-cases')?>">NEW</a></li>
                                     <li class=""><a href="">EXECTIVE ASSIGNED</a></li>
                                     <li class=""><a href="">CLOSED</a></li>
                                     <li class=""><a href="">REPORT</a></li>
                                     <li class=""><a href="">ON HOLD</a></li>
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
                                      <th>City</th>
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
                                      <td><?=$case['c_city']?></td>
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
                                        <span class="pointer p-1" data-toggle="tooltip" data-placement="top" title="Assign FE"><img src="https://www.autoscan.co.in/assets/images/team.png"></span>
                                        <span class="pointer p-1" data-toggle="tooltip" data-placement="top" title="Assign to Another Branch" ><img src="https://www.autoscan.co.in/assets/images/team.png"></span>
                                        <span class="pointer p-1" data-toggle="tooltip" data-placement="top" title="Edit CASE"><img src="https://www.autoscan.co.in/assets/images/document.png"></span>
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
<script type="text/javascript">
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
</script>
