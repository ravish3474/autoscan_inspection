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
<?php
$customer_name="";
$request_num = "";
$reference_num = "";
$coordinator_id = "";
$address = "";
$request_date = "";
$request_time = "";
$isp_date_time = "";
$fr_fender_desc = "";
$fr_fender_rem = "";
$fr_wheel_desc = "";
$fr_wheel_rem = "";
$fr_fork_desc = "";
$fr_fork_rem = "";
$rh_fr_shocker_desc = "";
$rh_fr_shocker_rem = "";
$lh_fr_shocker_desc = "";
$lh_fr_shocker_rem = "";
$headlight_desc = "";
$headlight_rem = "";
$fr_center_cover_desc = "";
$fr_center_cover_rem = "";
$rh_fr_panel_desc = "";
$rh_fr_panel_rem = "";
$lh_fr_panel_desc = "";
$lh_fr_panel_rem = "";
$rh_fr_indicator_lt_desc = "";
$rh_fr_indicator_lt_rem = "";
$lh_fr_indicator_lt_desc = "";
$lh_fr_indicator_lt_rem = "";
$handle_bar_desc = "";
$handle_bar_rem = "";
$speedometer_assly_desc = "";
$speedometer_assly_rem = "";
$utility_box_desc = "";
$utility_box_rem = "";
$rr_body_rem = "";
$rr_body_desc = "";
$rh_rr_cowl_panel_desc = "";
$rh_rr_cowl_panel_rem = "";
$lh_rr_cowl_panel_desc = "";
$lh_rr_cowl_panel_rem = "";
$rh_rr_indicator_lt_desc = "";
$rh_rr_indicator_lt_rem = "";
$lh_rr_indicator_lt_desc = "";
$lh_rr_indicator_lt_rem = "";
$tail_light_assly_desc = "";
$tail_light_assly_rem = "";
$lh_footrest_assly_desc = "";
$lh_footrest_assly_rem = "";
$seat_desc = "";
$seat_rem = "";
$silensor_assly_desc = "";
$silensor_assly_rem = "";
$chasis_frame_desc = "";
$chasis_frame_rem = "";
$fr_footboard_panel_desc = "";
$fr_footboard_panel_rem = "";
$fr_wheel_rim_desc = "";
$fr_wheel_rim_rem = "";
$spare_wheel_rim_desc = "";
$spare_wheel_rim_rem = "";
$rh_rear_view_mirror_desc = "";
$rh_rear_view_mirror_rem = "";
$lh_rear_view_mirror_desc = "";
$lh_rear_view_mirror_rem = "";
$battery_desc = "";
$battery_rem = "";
$engine_chamber_desc = "";
$engine_chamber_rem = "";
$fuel_tank_desc = "";
$fuel_tank_rem = "";
$insurer_qc = "";
$agent_branch_qc = "";
$agent_code_qc = "";
$vehicle_num_qc = "";
$chassis_num_qc = "";
$engine_num_qc = "";
$make_qc = "";
$model_qc = "";
$model_qc = "";
$date_of_reg_qc = "";
$color_qc = "";
$odometer_qc = "";
$fuel_mode_qc = "";
$rc_verified_qc = "";
$recomm = "";
$qc_remarks = "";
?>
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
                                           <td>
                                                <strong>Proposer/Customer Name </strong>
                                                <input type="text" value="<?=$customer_name?>" name="customer_name">
                                            </td>
                                           <td>
                                                <strong>Address: </strong>
                                                <span>
                                                    <input type="text" name="address" value="<?=$address?>">
                                                </span>
                                            </td>
                                         
                                        </tr>
                                        <tr>
                                            <td>
                                                <strong>Request Date: </strong>
                                                <span>
                                                    <input type="text" value="<?=$request_date?>" name="request_date">
                                                </span>
                                            </td>
                                           <td>
                                                <strong>Request Time: </strong>
                                                <span>
                                                    <input type="text" value="<?=$request_time?>" name="request_time">
                                                </span>
                                            </td>
                                            <td>
                                                <strong>Inspection Date & Time: </strong>
                                                <span>
                                                    <input type="text" value="<?=$isp_date_time?>" name="isp_date_time">
                                                </span>
                                            </td>
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
                                                <div class=" row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">BODY PARTS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FENDER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_fender_desc" class="form-control">
                                                            <option value="Intact" <?php 
                                                            if ($fr_fender_desc=="Intact") {
                                                              echo "selected";
                                                            }
                                                            ?>>Intact</option>
                                                            <option value="Scratch" <?php 
                                                            if ($fr_fender_desc=="Scratch") {
                                                              echo "selected";
                                                            }
                                                            ?> >Scratch</option>
                                                            <option value="Missing" <?php 
                                                            if ($fr_fender_desc=="Missing") {
                                                              echo "selected";
                                                            }
                                                            ?>>Missing</option>
                                                            <option value="Dented" <?php 
                                                            if ($fr_fender_desc=="Dented") {
                                                              echo "selected";
                                                            }
                                                            ?>>Dented</option>
                                                        </select>
                                                        <input type="hidden" name="case_id" value="<?=base64_decode($case_id)?>">
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="<?php 
                                                        if($fr_fender_rem==""){
                                                          echo "N/A";
                                                        }
                                                        else{
                                                          echo $fr_fender_rem;
                                                        }
                                                        ?>" class="form-control" name="fr_fender_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_wheel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_wheel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FORK ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_fork_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_fork_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR SHOCKER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fr_shocker_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Leak" >Leak</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_fr_shocker_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR SHOCKER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fr_shocker_desc" class="form-control">
                                                          <option value="Intact" selected="">Intact</option>
                                                            <option value="Leak" >Leak</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_fr_shocker_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">HEAD LIGHT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="headlight_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                           <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="headlight_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR CENTER COVER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_center_cover_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_center_cover_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fr_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_fr_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fr_panel_desc" class="form-control">
                                                           <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_fr_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fr_indicator_lt_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_fr_indicator_lt_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fr_indicator_lt_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_fr_indicator_lt_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">HANDLE BAR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="handle_bar_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Bend" >Bend</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="handle_bar_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">SPEEDOMETER ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="speedometer_assly_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="speedometer_assly_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">UTILITY BOX</label>
                                                    <div class="col-md-4 pr-0">
                                                       <input type="text" value="Intact" class="form-control" name="utility_box_desc">
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="utility_box_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RR BODY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rr_body_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rr_body_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH RR COWL PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rr_cowl_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_rr_cowl_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH RR COWL PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rr_cowl_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rr_cowl_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">RH RR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rr_indicator_lt_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_rr_indicator_lt_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">LH RR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rr_indicator_lt_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rr_indicator_lt_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">TAIL LIGHT ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="tail_light_assly_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="tail_light_assly_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">LH FOOTREST ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_footrest_assly_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_footrest_assly_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">SEAT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="seat_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Torn" >Torn</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="seat_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">SILENSOR ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="silensor_assly_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                            <option value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="silensor_assly_rem">
                                                    </div>
                                               </div>
                                             
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CHASSIS FRAME</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="chasis_frame_desc" class="form-control">
                                                              <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="chasis_frame_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FOOTBOARD PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_footboard_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_footboard_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_wheel_rim_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_wheel_rim_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">SPARE WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <input type="text" value="Intact" class="form-control" name="spare_wheel_rim_desc">
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="spare_wheel_rim_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rear_view_mirror_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_rear_view_mirror_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rear_view_mirror_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rear_view_mirror_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BATTERY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="battery_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                             <option value="Missing" >Not working</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="battery_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">ENGINE CHAMBER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="engine_chamber_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="engine_chamber_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FUEL TANK</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fuel_tank_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fuel_tank_rem">
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
                                                        <input type="text" value=""  name="insurer_qc" class="form-control"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT BRANCH</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch_qc" class="form-control" >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT CODE NAME</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_code_qc" class="form-control" >
                                                    </div>
                                               </div>
                                                 <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-6 p-2 bg-border">VEHICLE DETAILS</h6>
                                                   <h6 class="col-md-6 p-2 bg-border">DESCRIPTION</h6>
                                               </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">VEHICLE NO</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value="" class="form-control" name="vehicle_num_qc"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">CHASSIS NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="chassis_num_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ENGINE NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="engine_num_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MAKE </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="make_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MODEL </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="model_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">DATE OF REGISTRATION</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="date_of_reg_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">YEAR OF MANUFACTURE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="year_of_manufacture_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">COLOR</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="color_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ODOMETER</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="odometer_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">FUEL MODE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="fuel_mode_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">R.C. VERIFIED</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="rc_verified_qc" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="border-bottom mb-2">
                                                   <h6 class="p-2 bg-border">RECOMMENDATION FOR INSURANCE</h6>
                                               </div>
                                                  <div class="row mx-0 form-group d-flex">
                                                    <div class="form-check form-check-inline">
                                                      <input type="radio" id="radio1" value="Yes" name="recomm" checked="">
                                                      <label class="form-check-label pl-2" for="radio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input type="radio" id="radio2" value="No" name="recomm">
                                                      <label class="form-check-label pl-2" for="radio2">No</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input  type="radio" id="radio3" value="ON Hold" name="recomm">
                                                      <label class="form-check-label pl-2" for="radio3">On Hold</label>
                                                    </div>
                                               </div>
                                               <div class="border-bottom mb-2">
                                                   <h6 class="p-2 bg-border">QC Remarks</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <textarea  rows="4" cols="65" value=""  name="qc_remarks" class=""> 
                                                    </textarea>
                                               </div>
                                             
                                           </div>

                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-success" id="btn_submit" type="submit" style="padding:10px !important">Submit</button>
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
    if ($('#picture').length==0){
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

$(document).on('submit','#create_task',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>qc-two-wheeler',
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

</script> 
<script>
$('#select_all').change(function() {
    var checkboxes = $('input[name=all_pics]');
    checkboxes.prop('checked', $(this).is(':checked'));
  });
</script>