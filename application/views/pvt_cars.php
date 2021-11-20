<?php
  $request_num = "";
  $reference_num = "";
  $customer_name = "";
  $address = "";
  $request_date = "";
  $request_time = "";
  $isp_date_time = "";
  $fr_panel_desc = "";
  $fr_panel_rem = "";
  $rh_fender_desc = "";
  $rh_fender_rem = "";
  $rh_apron_desc = "";
  $rh_apron_rem = "";
  $rh_pillar_front_desc = "";
  $rh_pillar_front_rem = "";
  $rh_fr_door_desc = "";
  $rh_fr_door_rem = "";
  $rh_pillar_center_desc = "";
  $rh_pillar_center_rem = "";
  $rh_rr_door_desc = "";
  $rh_rr_door_rem = "";
  $rh_running_board_desc = "";
  $rh_running_board_rem = "";
  $rh_qtr_panel_desc = "";
  $rh_qtr_panel_rem = "";
  $dicky_back_door_desc = "";
  $dicky_back_door_rem = "";
  $lh_qtr_panel_desc = "";
  $lh_qtr_panel_rem = "";
  $lh_running_board_desc = "";
  $lh_running_board_rem = "";
  $lh_rr_door_panel_desc = "";
  $lh_rr_door_panel_rem = "";
  $lh_pillar_center_desc = "";
  $lh_pillar_center_rem = "";
  $lh_fr_door_panel_desc = "";
  $lh_fr_door_panel_rem = "";
  $lh_pillar_front_desc = "";
  $lh_pillar_front_rem = "";
  $lh_fender_panel_desc = "";
  $lh_fender_panel_rem = "";
  $lh_apron_panel_desc = "";
  $lh_apron_panel_rem = "";
  $roof_panel_desc = "";
  $roof_panel_rem = "";
  $floor_panel_desc = "";
  $floor_panel_rem = "";
  $front_bumper_desc = "";
  $front_bumper_rem = "";
  $fr_grill_desc = "";
  $fr_grill_rem = "";
  $rh_rear_view_desc = "";
  $rh_rear_view_rem = "";
  $lh_rear_view_desc = "";
  $lh_rear_view_rem = "";
  $rr_bumper_desc = "";
  $rr_bumper_rem = "";
  $rh_head_lamp_desc = "";
  $rh_head_lamp_rem = "";
  $lh_head_lamp_desc = "";
  $lh_head_lamp_rem = "";
  $rh_fog_lamp_desc = "";
  $rh_fog_lamp_rem = "";
  $lh_fog_lamp_desc = "";
  $lh_fog_lamp_rem = "";
  $rh_tail_lamp_desc = "";
  $rh_tail_lamp_rem = "";
  $lh_tail_lamp_desc = "";
  $lh_tail_lamp_rem = "";
  $condensor_desc = "";
  $condensor_rem = "";
  $radiator_desc = "";
  $radiator_rem = "";
  $instrument_panel_desc = "";
  $instrument_panel_rem = "";
  $battery_desc = "";
  $battery_rem = "";
  $tyre_desc = "";
  $tyre_rem = "";
  $insurer = "";
  $agent_branch = "";
  $agent_code = "";
  $vehicle_number = "";
  $chassis_num_qc = "";
  $engine_num_qc = "";
  $vehicle_make = "";
  $vehicle_model = "";
  $date_of_reg_qc = "";
  $year_of_manufacture_qc = "";
  $color_qc = "";
  $odomoter_qc = "";
  $fuel_model_qc = "";
  $rc_verified_qc = "";
  $stereo_qc = "";
  $center_lock_qc = "";
  $fr_ws_glass_desc = "";
  $fr_ws_glass_rem = "";
  $rr_ws_glass_desc = "";
  $rr_ws_glass_rem = "";
  $recomm = "";
  $qc_remarks = "DAMAGE MARKED AS PER PHOTOGRAPHS";

if(count($qc_data)==0){
  $customer_name = $case_data[0]['insured_name'];
  $address = $case_data[0]['address'];
  $request_date = $case_data[0]['request_date'];
  $request_time = $case_data[0]['request_time'];
  $isp_date_time = $case_data[0]['appoint_date']." ".$case_data[0]['appoint_time'];
  $insurer = $case_data[0]['insurer'];
  $agent_branch = $case_data[0]['agent_branch'];
  $agent_code = $case_data[0]['agent_code'];
  $vehicle_number = $case_data[0]['vehicle_number'];
  $vehicle_make = $case_data[0]['vehicle_make'];
  $vehicle_model = $case_data[0]['vehicle_model'];
  $qc_remarks = "DAMAGE MARKED AS PER PHOTOGRAPHS";
  $request_num = $case_data[0]['ref_no'];
  $reference_num = $case_data[0]['insurer_ref_no'];
}
else{
  $customer_name = $qc_data[0]['customer_name'];
  $address = $qc_data[0]['address'];
  $request_date = $qc_data[0]['request_date'];
  $request_time = $qc_data[0]['request_time'];
  $isp_date_time = $qc_data[0]['isp_date_time'];
  $fr_panel_desc = $qc_data[0]['fr_panel_desc'];
  $fr_panel_rem = $qc_data[0]['fr_panel_rem'];
  $rh_fender_desc = $qc_data[0]['rh_fender_desc'];
  $rh_fender_rem = $qc_data[0]['rh_fender_rem'];
  $rh_apron_desc = $qc_data[0]['rh_apron_desc'];
  $rh_apron_rem = $qc_data[0]['rh_apron_rem'];
  $rh_pillar_front_desc = $qc_data[0]['rh_pillar_front_desc'];
  $rh_pillar_front_rem = $qc_data[0]['rh_pillar_front_rem'];
  $rh_fr_door_desc = $qc_data[0]['rh_fr_door_desc'];
  $rh_fr_door_rem = $qc_data[0]['rh_fr_door_rem'];
  $rh_pillar_center_desc = $qc_data[0]['rh_pillar_center_desc'];
  $rh_pillar_center_rem = $qc_data[0]['rh_pillar_center_rem'];
  $rh_rr_door_desc = $qc_data[0]['rh_rr_door_desc'];
  $rh_rr_door_rem = $qc_data[0]['rh_rr_door_rem'];
  $rh_running_board_desc = $qc_data[0]['rh_running_board_desc'];
  $rh_running_board_rem = $qc_data[0]['rh_running_board_rem'];
  $rh_qtr_panel_desc = $qc_data[0]['rh_qtr_panel_desc'];
  $rh_qtr_panel_rem = $qc_data[0]['rh_qtr_panel_rem'];
  $dicky_back_door_desc = $qc_data[0]['dicky_back_door_desc'];
  $dicky_back_door_rem = $qc_data[0]['dicky_back_door_rem'];
  $lh_qtr_panel_desc = $qc_data[0]['lh_qtr_panel_desc'];
  $lh_qtr_panel_rem = $qc_data[0]['lh_qtr_panel_rem'];
  $lh_running_board_desc = $qc_data[0]['lh_running_board_desc'];
  $lh_running_board_rem = $qc_data[0]['lh_running_board_rem'];
  $lh_rr_door_panel_desc = $qc_data[0]['lh_rr_door_panel_desc'];
  $lh_rr_door_panel_rem = $qc_data[0]['lh_rr_door_panel_rem'];
  $lh_pillar_center_desc = $qc_data[0]['lh_pillar_center_desc'];
  $lh_pillar_center_rem = $qc_data[0]['lh_pillar_center_rem'];
  $lh_fr_door_panel_desc = $qc_data[0]['lh_fr_door_panel_desc'];
  $lh_fr_door_panel_rem = $qc_data[0]['lh_fr_door_panel_rem'];
  $lh_pillar_front_desc = $qc_data[0]['lh_pillar_front_desc'];
  $lh_pillar_front_rem = $qc_data[0]['lh_pillar_front_rem'];
  $lh_fender_panel_desc = $qc_data[0]['lh_fender_panel_desc'];
  $lh_fender_panel_rem = $qc_data[0]['lh_fender_panel_rem'];
  $lh_apron_panel_desc = $qc_data[0]['lh_apron_panel_desc'];
  $lh_apron_panel_rem = $qc_data[0]['lh_apron_panel_rem'];
  $roof_panel_desc = $qc_data[0]['roof_panel_desc'];
  $roof_panel_rem = $qc_data[0]['roof_panel_rem'];
  $floor_panel_desc = $qc_data[0]['floor_panel_desc'];
  $floor_panel_rem = $qc_data[0]['floor_panel_rem'];
  $front_bumper_desc = $qc_data[0]['front_bumper_desc'];
  $front_bumper_rem = $qc_data[0]['front_bumper_rem'];
  $fr_grill_desc = $qc_data[0]['fr_grill_desc'];
  $fr_grill_rem = $qc_data[0]['fr_grill_rem'];
  $rh_rear_view_desc = $qc_data[0]['rh_rear_view_desc'];
  $rh_rear_view_rem = $qc_data[0]['rh_rear_view_rem'];
  $lh_rear_view_desc = $qc_data[0]['lh_rear_view_desc'];
  $lh_rear_view_rem = $qc_data[0]['lh_rear_view_rem'];
  $rr_bumper_desc = $qc_data[0]['rr_bumper_desc'];
  $rr_bumper_rem = $qc_data[0]['rr_bumper_rem'];
  $rh_head_lamp_desc = $qc_data[0]['rh_head_lamp_desc'];
  $rh_head_lamp_rem = $qc_data[0]['rh_head_lamp_rem'];
  $lh_head_lamp_desc = $qc_data[0]['lh_head_lamp_desc'];
  $lh_head_lamp_rem = $qc_data[0]['lh_head_lamp_rem'];
  $rh_fog_lamp_desc = $qc_data[0]['rh_fog_lamp_desc'];
  $rh_fog_lamp_rem = $qc_data[0]['rh_fog_lamp_rem'];
  $lh_fog_lamp_desc = $qc_data[0]['lh_fog_lamp_desc'];
  $lh_fog_lamp_rem = $qc_data[0]['lh_fog_lamp_rem'];
  $rh_tail_lamp_desc = $qc_data[0]['rh_tail_lamp_desc'];
  $rh_tail_lamp_rem = $qc_data[0]['rh_tail_lamp_rem'];
  $lh_tail_lamp_desc = $qc_data[0]['lh_tail_lamp_desc'];
  $lh_tail_lamp_rem = $qc_data[0]['lh_tail_lamp_rem'];
  $condensor_desc = $qc_data[0]['condensor_desc'];
  $condensor_rem = $qc_data[0]['condensor_rem'];
  $radiator_desc = $qc_data[0]['radiator_desc'];
  $radiator_rem = $qc_data[0]['radiator_rem'];
  $instrument_panel_desc = $qc_data[0]['instrument_panel_desc'];
  $instrument_panel_rem = $qc_data[0]['instrument_panel_rem'];
  $battery_desc = $qc_data[0]['battery_desc'];
  $battery_rem = $qc_data[0]['battery_rem'];
  $tyre_desc = $qc_data[0]['tyre_desc'];
  $tyre_rem = $qc_data[0]['tyre_rem'];
  $insurer = $qc_data[0]['insurer_qc'];
  $agent_branch = $qc_data[0]['agent_branch'];
  $agent_code = $qc_data[0]['agent_code_qc'];
  $vehicle_number = $qc_data[0]['vehicle_num_qc'];
  $chassis_num_qc = $qc_data[0]['chassis_num_qc'];
  $engine_num_qc = $qc_data[0]['engine_num_qc'];
  $vehicle_make = $qc_data[0]['make_qc'];
  $vehicle_model = $qc_data[0]['model_qc'];
  $date_of_reg_qc = $qc_data[0]['date_of_reg_qc'];
  $year_of_manufacture_qc = $qc_data[0]['year_of_manufacture_qc'];
  $color_qc = $qc_data[0]['color_qc'];
  $odomoter_qc = $qc_data[0]['odomoter_qc'];
  $fuel_model_qc = $qc_data[0]['fuel_model_qc'];
  $rc_verified_qc = $qc_data[0]['rc_verified_qc'];
  $stereo_qc = $qc_data[0]['stereo_qc'];
  $center_lock_qc = $qc_data[0]['center_lock_qc'];
  $fr_ws_glass_desc = $qc_data[0]['fr_ws_glass_desc'];
  $fr_ws_glass_rem = $qc_data[0]['fr_ws_glass_rem'];
  $rr_ws_glass_desc = $qc_data[0]['rr_ws_glass_desc'];
  $rr_ws_glass_rem = $qc_data[0]['rr_ws_glass_rem'];
  $recomm = $qc_data[0]['recomm'];
  $qc_remarks = $qc_data[0]['qc_remarks'];
  $request_num = $qc_data[0]['request_num'];
  $reference_num = $qc_data[0]['reference_num'];
}
?>

<style>
label{
    font-weight: bold;
    display: block;
    font-size: 12px
}
.img_scrl {
    height: 445px;
    overflow-y: scroll;
    max-height: 700px;
}
</style>
<style>
#picture a.small, #picture a.small:visited { display:block; text-decoration:none; background:#ffffff; top:0; left:0; border:0;}
#picture a img {border:0;}
/* #picture a.small:hover {text-decoration:none; background-color:#000000; color:#000000;} */
#picture a .large {display:block; position:absolute; width:0; height:0; border:0; top:0; left:0;}
#picture a.small:hover .large {display:block; position:absolute; top: 90px; left:150px;
  width: 400px;
    height: 400px;
    z-index: 12; }
    .chk-box{
      width: 20px;
      height: 20px;
    }
.pointer{
    cursor: pointer;
}
.table thead th {
vertical-align: bottom;
border-bottom: 2px solid #e9ecef;
padding: 4px;
}
.table thead td{
 padding: 4px;
}
table{
    font-size: 12px !important;
}
.form-control{
font-size: 14px !important;
    height: 26px !important;
    padding: 2px 6px !important;
}

.tabl_back{
    background-color: rgba(0,0,0,0.03);
}
.form-group{
        margin-bottom: 5px !important;
}

label{
    font-weight: bold;
    display: block;
    font-size: 12px
}


.bg-border
{
    background-color:#337ab7 ;
    border: 1px solid;
    color: #FFF;
    text-align: center;
}

</style>

    <section class="content">
        <div class="container-fluid">
           
            <div class="app-main__outer">
                <div class="app-main__inner">
                    <div class="tabs-animation">
                        <div class="mb-3 card">
                         <form id="create_task">
                            <div class="card-header-tab ">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                   <table class="table  tabl_back">
                                       <tr>
                                           <td><strong>Proposer/Customer Name </strong><input type="text" value="<?=$customer_name?>" name="customer_name"></td>
                                           <td><strong>Address: </strong><span><input type="text" name="address" value="<?=$address?>"></span></td>
                                         
                                       </tr>
                                        <tr>
                                            <td><strong>Request Date: </strong><span><input type="text" value="<?=$request_date?>" name="request_date"></span></td>
                                           <td><strong>Request Time: </strong><span><input type="text" value="<?=$request_time?>" name="request_time"></span></td>
                                            <td><strong>Inspection Date & Time: </strong><span><input type="text" value="<?=$isp_date_time?>" name="isp_date_time"></span></td>
                                       </tr>
                                   </table>
                                </div>
                            </div>
                            <div class="container-fluid no-gutters p-1">
                                <div class="row">
                              <div class="col-md-3">
                                <div class="p-1 text-center bg-primary text-white mb-2"><h6 class="m-0 p-2 bg-border">IMAGES</h6></div>
                                  <div class="border-right img_scrl">
                                      <ul class="list-unstyled m-0 text-center">
                                        <?php
                                      if (count($vehicle_pics)>0) {
                                        ?>
                                        <li class="mb-2">
                                                   <input type="checkbox" id="select_all" class="chk-box checker_dude"><p>Select All</p>
                                        </li>
                                        <?php
                                        $pics = $vehicle_pics[0]['all_pics'];
                                        $exp_pics = explode(",",$pics);
                                        foreach ($exp_pics as $pic_tures) {
                                      ?>
                                      <li class="mb-2">
                                            <div id="picture">
                                                <a class="small" href="#nogo" title="small image">
                                                   <input type="checkbox" name="all_pics[]" value="<?=$pic_tures?>" class="chk-box checker_dude">
                                                    <img src="<?=base_url()?>upload/images/<?=$pic_tures?>"class="w_80" title="small image" />
                                                    <img class="large" src="<?=base_url()?>upload/images/<?=$pic_tures?>" title="large image" />
                                                </a>
                                            </div>
                                        </li>
                                      <?php
                                      }
                                      if ($vehicle_pics[0]['chasis_pic']) {
                                        ?>
                                    <h3>CHASIS</h3>
                                      <li class="mb-2">
                                            <div id="picture">
                                                <a class="small" href="#nogo" title="small image">
                                                   <input type="hidden" checked name="chasis_pic" value="<?=$vehicle_pics[0]['chasis_pic']?>" class="chk-box">
                                                    <img src="<?=base_url()?>upload/images/<?=$vehicle_pics[0]['chasis_pic']?>"class="w_80" title="small image" />
                                                    <img class="large" src="<?=base_url()?>upload/images/<?=$vehicle_pics[0]['chasis_pic']?>" title="large image" />
                                                </a>
                                            </div>
                                        </li>
                                      <?php   
                                      }
                                      }else{
                                      ?>
                                       <Label>No Pictures Uploaded By FE</Label>
                                       <div id="new_pictures">
                                       </div>
                                     <?php } ?>
                                      </ul>
                                  </div>
                              </div>

                              <div class="col-md-9">
                                  <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">BODY PARTS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR PANEL/HOOD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($fr_panel_desc=="" || $fr_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($fr_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($fr_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($fr_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $fr_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="fr_panel_rem">
                                                        <input type="hidden" name="case_id" value="<?=base64_decode($case_id)?>">
                                                        <input type="hidden" name="request_num" value="<?=$request_num?>">
                                                        <input type="hidden" name="reference_num" value="<?=$reference_num?>">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FENDER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fender_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_fender_desc=="" || $rh_fender_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_fender_desc=="Average") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($rh_fender_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_fender_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_fender_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_fender_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH APRON PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_apron_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_apron_desc=="" || $rh_apron_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_apron_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_apron_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_apron_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_apron_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH PILLAR FRONT-A</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_pillar_front_desc" class="form-control">
                                                          <option value="Intact" <?php
                                                            if ($rh_pillar_front_desc=="" || $rh_pillar_front_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_pillar_front_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($rh_pillar_front_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_pillar_front_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_pillar_front_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_pillar_front_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fr_door_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_fr_door_desc=="" || $rh_fr_door_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                           <option <?php 
                                                            if ($rh_fr_door_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($rh_fr_door_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_fr_door_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_fr_door_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_fr_door_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH PILLAR CENTER-B</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_pillar_center_desc" class="form-control">
                                                          <option value="Intact" <?php
                                                            if ($rh_pillar_center_desc=="" || $rh_pillar_center_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_pillar_center_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($rh_pillar_center_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_pillar_center_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_pillar_center_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_pillar_center_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH RR DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rr_door_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_rr_door_desc=="" || $rh_rr_door_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                           <option <?php 
                                                            if ($rh_rr_door_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($rh_rr_door_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_rr_door_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_rr_door_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_rr_door_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH RUNNING BOARD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_running_board_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_running_board_desc=="" || $rh_running_board_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_running_board_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($rh_running_board_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_running_board_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_running_board_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_running_board_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH QTR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_qtr_panel_desc" class="form-control">
                                                           <option value="Intact" <?php
                                                            if ($rh_qtr_panel_desc=="" || $rh_qtr_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_qtr_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($rh_qtr_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_qtr_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_qtr_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_qtr_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">DICKY/BACK DOOR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="dicky_back_door_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($dicky_back_door_desc=="" || $dicky_back_door_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($dicky_back_door_desc=="Missing") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Missing" >Missing</option>
                                                            <option <?php 
                                                            if ($dicky_back_door_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($dicky_back_door_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($dicky_back_door_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $dicky_back_door_rem;
                                                        }
                                                        ?>" class="form-control" name="dicky_back_door_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH QTR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_qtr_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_qtr_panel_desc=="" || $lh_qtr_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_qtr_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($lh_qtr_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_qtr_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_qtr_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_qtr_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                     <label class="col-md-4 pr-0">LH RUNNING BOARD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_running_board_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_running_board_desc=="" || $lh_running_board_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_running_board_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($lh_running_board_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_running_board_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_running_board_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_running_board_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH RR DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rr_door_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_rr_door_panel_desc=="" || $lh_rr_door_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_rr_door_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($lh_rr_door_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch">Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_rr_door_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_rr_door_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_rr_door_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH PILLAR CENTER-B</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_pillar_center_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_pillar_center_desc=="" || $lh_pillar_center_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_pillar_center_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($lh_pillar_center_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_pillar_center_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_pillar_center_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_pillar_center_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fr_door_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_fr_door_panel_desc=="" || $lh_fr_door_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_fr_door_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($lh_fr_door_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_fr_door_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_fr_door_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_fr_door_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH PILLAR FRONT-A</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_pillar_front_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_pillar_front_desc=="" || $lh_pillar_front_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_pillar_front_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($lh_pillar_front_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_pillar_front_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_pillar_front_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_pillar_front_rem">
                                                    </div>
                                               </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FENDER PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fender_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_fender_panel_desc=="" || $lh_fender_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_fender_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($lh_fender_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_fender_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_fender_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_fender_panel_rem">
                                                    </div>
                                               </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH APRON PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_apron_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_apron_panel_desc=="" || $lh_apron_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_apron_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($lh_apron_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                            <option <?php 
                                                            if ($lh_apron_panel_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_apron_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_apron_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_apron_panel_rem">
                                                    </div>
                                               </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">ROOF PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="roof_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($roof_panel_desc=="" || $roof_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($roof_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($roof_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($roof_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $roof_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="roof_panel_rem">
                                                    </div>
                                                </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FLOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="floor_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($floor_panel_desc=="" || $floor_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($floor_panel_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                            <option <?php 
                                                            if ($floor_panel_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($floor_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $floor_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="floor_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">BODY FITTINGS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FRONT BUMPER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="front_bumper_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($front_bumper_desc=="" || $front_bumper_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($front_bumper_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($front_bumper_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($front_bumper_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $front_bumper_rem;
                                                        }
                                                        ?>" class="form-control" name="front_bumper_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR GRILL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_grill_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($fr_grill_desc=="" || $fr_grill_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($fr_grill_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($fr_grill_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $fr_grill_rem;
                                                        }
                                                        ?>" class="form-control" name="fr_grill_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rear_view_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_rear_view_desc=="" || $rh_rear_view_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_rear_view_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_rear_view_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_rear_view_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_rear_view_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rear_view_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_rear_view_desc=="" || $lh_rear_view_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_rear_view_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_rear_view_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_rear_view_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_rear_view_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RR BUMPER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rr_bumper_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rr_bumper_desc=="" || $rr_bumper_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rr_bumper_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($rr_bumper_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rr_bumper_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rr_bumper_rem;
                                                        }
                                                        ?>" class="form-control" name="rr_bumper_rem">
                                                    </div>
                                               </div>
                                               <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">LIGHTS AND LAMPS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH HEAD LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_head_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_head_lamp_desc=="" || $rh_head_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_head_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($rh_head_lamp_desc=="Damage") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_head_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_head_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_head_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH HEAD LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_head_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_head_lamp_desc=="" || $lh_head_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_head_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($lh_head_lamp_desc=="Damage") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_head_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_head_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_head_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FOG LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fog_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_fog_lamp_desc=="" || $rh_fog_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_fog_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_fog_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_fog_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_fog_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FOG LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fog_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_fog_lamp_desc=="" || $lh_fog_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_fog_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_fog_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_fog_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_fog_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH TAIL LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_tail_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rh_tail_lamp_desc=="" || $rh_tail_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rh_tail_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rh_tail_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rh_tail_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="rh_tail_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH TAIL LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_tail_lamp_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($lh_tail_lamp_desc=="" || $lh_tail_lamp_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($lh_tail_lamp_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($lh_tail_lamp_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $lh_tail_lamp_rem;
                                                        }
                                                        ?>" class="form-control" name="lh_tail_lamp_rem">
                                                    </div>
                                               </div>
                                               <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">COOLING SYSTEM</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CONDENSOR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="condensor_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($condensor_desc=="" || $condensor_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($condensor_desc=="Damage") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($condensor_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $condensor_rem;
                                                        }
                                                        ?>" class="form-control" name="condensor_rem">
                                                    </div>
                                               </div>
                                              
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RADIATOR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="radiator_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($radiator_desc=="" || $radiator_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($radiator_desc=="Damage") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($radiator_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $radiator_rem;
                                                        }
                                                        ?>" class="form-control" name="radiator_rem">
                                                    </div>
                                               </div>
                                                <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">INTERIORS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                        
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">INSTRUMENT PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="instrument_panel_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($instrument_panel_desc=="" || $instrument_panel_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($instrument_panel_desc=="Missing") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Missing" >Missing</option>
                                                            <option <?php 
                                                            if ($instrument_panel_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($instrument_panel_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $instrument_panel_rem;
                                                        }
                                                        ?>" class="form-control" name="instrument_panel_rem">
                                                    </div>
                                               </div>
                                             
                                               <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">OTHERS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                        
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BATTERY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="battery_desc" class="form-control">
                                                            <option value="Working" <?php
                                                            if ($battery_desc=="" || $battery_desc=="Working") {
                                                             echo "selected";
                                                            }
                                                            ?>>Working</option>
                                                            <option <?php 
                                                            if ($battery_desc=="Missing") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($battery_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $battery_rem;
                                                        }
                                                        ?>" class="form-control" name="battery_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">TYRE CONDITION</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="tyre_desc" class="form-control">
                                                            <option value="Good" <?php
                                                            if ($tyre_desc=="" || $tyre_desc=="Good") {
                                                             echo "selected";
                                                            }
                                                            ?>>Good</option>
                                                            <option <?php 
                                                            if ($tyre_desc=="Average") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Average" >Average</option>
                                                            <option <?php 
                                                            if ($tyre_desc=="Poor") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Poor" >Poor</option>
                                                            <option <?php 
                                                            if ($tyre_desc=="Missing") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($tyre_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $tyre_rem;
                                                        }
                                                        ?>" class="form-control" name="tyre_rem">
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="">
                                            <div class="row border-bottom mb-2">
                                                <h6 class="col-md-6 p-2 bg-border">INSURER DETAILS</h6>
                                                <h6 class="col-md-6 p-2 bg-border">DESCRIPTION</h6>
                                            </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">INSURER</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value="<?=$insurer?>"  name="insurer_qc" class="form-control"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT BRANCH</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$agent_branch?>" name="agent_branch" class="form-control" >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT CODE NAME</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$agent_code?>" name="agent_code_qc" class="form-control" >
                                                    </div>
                                               </div>
                                                 <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-6 p-2 bg-border">VEHICLE DETAILS</h6>
                                                   <h6 class="col-md-6 p-2 bg-border">DESCRIPTION</h6>
                                               </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">VEHICLE NO</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value="<?=$vehicle_number?>" class="form-control" name="vehicle_num_qc"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">CHASSIS NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$chassis_num_qc?>" name="chassis_num_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ENGINE NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$engine_num_qc?>" name="engine_num_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MAKE </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$vehicle_make?>" name="make_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MODEL </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$vehicle_model?>" name="model_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">DATE OF REGISTRATION</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$date_of_reg_qc?>" name="date_of_reg_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">YEAR OF MANUFACTURE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$year_of_manufacture_qc?>" name="year_of_manufacture_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">COLOR</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$color_qc?>" name="color_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ODOMETER</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$odomoter_qc?>" name="odomoter_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">FUEL MODE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$fuel_model_qc?>" name="fuel_model_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">R.C. VERIFIED</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$rc_verified_qc?>" name="rc_verified_qc" class="form-control " >
                                                    </div>
                                               </div>
                                               <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-6 p-2 bg-border">ACCESSORIES</h6>
                                                   <h6 class="col-md-6 p-2 bg-border">DESCRIPTION</h6>
                                               </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">STEREO</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value="<?=$stereo_qc?>" class="form-control" name="stereo_qc"> 
                                                    </div>
                                               </div>
                                               
                                              
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">CENTER LOCK </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="<?=$center_lock_qc?>" name="center_lock_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                
                                                <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">GLASSES</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WS GLASS</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_ws_glass_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($fr_ws_glass_desc=="" || $fr_ws_glass_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($fr_ws_glass_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($fr_ws_glass_desc=="Scar") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scar" >Scar</option>
                                                            <option <?php 
                                                            if ($fr_ws_glass_desc=="Crack") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Crack" >Crack</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($fr_ws_glass_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $fr_ws_glass_rem;
                                                        }
                                                        ?>" class="form-control" name="fr_ws_glass_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RR WS GLASS</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rr_ws_glass_desc" class="form-control">
                                                            <option value="Intact" <?php
                                                            if ($rr_ws_glass_desc=="" || $rr_ws_glass_desc=="Intact") {
                                                             echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option <?php 
                                                            if ($rr_ws_glass_desc=="Broken") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Broken" >Broken</option>
                                                            <option <?php 
                                                            if ($rr_ws_glass_desc=="Scar") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Scar" >Scar</option>
                                                            <option <?php 
                                                            if ($rr_ws_glass_desc=="Crack") {
                                                              echo "selected";
                                                            }
                                                            ?> value="Crack" >Crack</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php
                                                        if($rr_ws_glass_rem==""){
                                                          echo "N/A";
                                                        }else{
                                                          echo $rr_ws_glass_rem;
                                                        }
                                                        ?>" class="form-control" name="rr_ws_glass_rem">
                                                    </div>
                                               </div>
                                                 <div class="border-bottom mb-2">
                                                   <h6 class="p-2 bg-border">RECOMMENDATION FOR INSURANCE</h6>
                                               </div>
                                                <div class="row mx-0 form-group d-flex">
                                                    <div class="form-check form-check-inline">
                                                      <input type="radio" id="radio1" value="Yes" name="recomm" <?php 
                                                            if ($recomm=="Yes" || $recomm=="") {
                                                              echo "checked";
                                                            }
                                                            ?>>
                                                      <label class="form-check-label pl-2" for="radio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input type="radio" id="radio2" <?php 
                                                            if ($recomm=="No") {
                                                              echo "checked";
                                                            }
                                                            ?> value="No" name="recomm">
                                                      <label class="form-check-label pl-2" for="radio2">No</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input  type="radio" <?php 
                                                            if ($recomm=="On Hold") {
                                                              echo "checked";
                                                            }
                                                            ?> id="radio3" value="On Hold" name="recomm">
                                                      <label class="form-check-label pl-2" for="radio3">On Hold</label>
                                                    </div>
                                               </div>
                                               <div class="border-bottom mb-2">
                                                   <h6 class="p-2 bg-border">QC Remarks</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <textarea  rows="4" cols="65" value=""  name="qc_remarks" class=""><?=$qc_remarks?>
                                                    </textarea>
                                               </div>
                                             
                                           </div>

                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-success mt-4" id="btn_submit" type="submit" style="padding:10px !important">Submit</button>
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
    </div>
</div>


</div>
</section>
   <script>
$(window).on('load',function(){
    //console.log("google");
    if ($('#picture').length==0)
    {
        $('#btn_submit').attr('disabled',true);
        $form = $('#create_task');
        $form.replaceWith($form.html());
        var html = '';
    html+='<form method="post" id="pic_form" action="" enctype="multipart/form-data">'+
              '<input type="hidden" name="task_id" value="<?=base64_decode($case_id)?>">'+
          '<div class="box">'+
          '<label>All Photos</label>'+
            '<input type="file" name="all_pics[]" required id="file-5" class="inputfile inputfile-4" data-multiple-caption="{count} files selected" multiple />'+
            '<label for="file-5"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">'+
            '<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>'+
            '</figure> <span style="font-size: 17px;">Choose a file&hellip;</span></label>'+
        '</div>'+
           '<div class="box">'+
          '<label>CHASIS</label>'+
            '<input type="file" name="chasis_pic[]" required id="file-6" class="inputfile inputfile-4" data-multiple-caption="{count} files selected"/>'+
            '<label for="file-6"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17">'+
            '<path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg>'+
            '</figure> <span style="font-size: 17px;">Choose a file&hellip;</span></label>'+
        '</div>'+
        '<br>'+
        '<button type="submit" class="btn btn-primary" >Submit</button>'+
        '</form>';
        $('#new_pictures').empty();
        $('#new_pictures').append(html);
    }

})

$(document).on('submit','#create_task',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>qc-pvt-cars',
        success:function(response){
            var response = JSON.parse(response);
            if(response.status==1){
                swal('Success',response.msg,'success');
                //location.reload();
            }
            else{
                swal('Error',response.msg,'error');
            }
        }
    })
})

$(document).on('submit','#pic_form',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>upload-pics',
        success:function(response){
            var response = JSON.parse(response);
            if(response.status==1){
                swal('Success',response.msg,'success');
                location.reload();
            }
            else{
                swal('Error',response.msg,'error');
            }
        }
    })
})

$('#select_all').change(function() {
    var checkboxes = $('input[name=all_pics]');
    checkboxes.prop('checked', $(this).is(':checked'));
  });
</script> 