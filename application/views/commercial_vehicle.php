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
                                           <td><strong>Insured/Customer Name </strong><input type="text" value="" name="customer_name"></td>
                                           <td><strong>Address: </strong><span><input type="text" value="" name="address"></span></td>
                                         
                                       </tr>
                                        <tr>
                                            <td><strong>Request Date: </strong><span><input type="text" value="" name="request_date"></span></td>
                                           <td><strong>Request Time: </strong><span><input type="text" value="" name="request_time"></span></td>
                                            <td><strong>Inspection Date & Time: </strong><span><input type="text" value="" name="isp_date_time"></span></td>
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
                                                    <h6 class="col-md-4 p-2 bg-border">CABIN ASSLY Y-STEEL</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CABIN CONDITION</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="cabin_condition_desc" class="form-control">
                                                            <option selected value="Good">Good</option>
                                                            <option value="Average">Average</option>
                                                            <option value="Poor" >Poor</option>
                                                        </select>
                                                        <input type="hidden" name="case_id" value="<?=base64_decode($case_id)?>">
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="cabin_condition_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR PANEL/HOOD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_panel_hood_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                            <option value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_panel_hood_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FENDER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fender_desc" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                             <option value="Dented" >Dented</option>
                                                             <option value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_fender_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH PILLAR FRONT-A</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_pillar_front_a_desc" class="form-control">
                                                          <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_pillar_front_a_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_door_panel_desc" class="form-control">
                                                           <option value="Intact" selected="">Intact</option>
                                                           <option value="Dented" >Dented</option>
                                                           <option value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_door_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH DOOR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_door_panel_desc" class="form-control">
                                                           <option value="Intact" selected="">Intact</option>
                                                           <option value="Dented" >Dented</option>
                                                           <option value="Scratch" >Scratch</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_door_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH WHEEL ARC/FOOTBOARD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_wheel_arc_footboard_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" selected="">Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_wheel_arc_footboard_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH RR PILLAR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rr_pillar_desc" class="form-control">
                                                           <option value="Intact" selected="">Intact</option>
                                                           <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_rr_pillar_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CABIN BACK PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="cabin_back_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="cabin_back_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH RR PILLAR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rr_pillar_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rr_pillar_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH RR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rr_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rr_panel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH WHEEL ARC/FOOTBOARD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_wheel_arc_footboard_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_wheel_arc_footboard_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FENDER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fender_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_fender_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CABIN ROOF/SHEET</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="cabin_roof_sheet_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="cabin_roof_sheet_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FRONT BUMPER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="front_bumper_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="front_bumper_rem">
                                                    </div>
                                               </div>
                                               <div class=" row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">BODY FITTINGS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR SHOW GRILL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_show_grill_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_show_grill_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH HEAD LAMP BAZEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_head_lamp_bazel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_head_lamp_bazel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH HEAD LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_head_lamp_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_head_lamp_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH HEAD LAMP BAZEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_head_lamp_bazel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_head_lamp_bazel_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH HEAD LAMP</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_head_lamp_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_head_lamp_rem">
                                                    </div>
                                               </div>
                                               <div class=" row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">LOAD BODY</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BODY STYLE</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="body_style_desc" class="form-control">
                                                            <option value="Open" selected="">Open</option>
                                                            <option value="Tipper" >Tipper</option>
                                                            <option value="Closed" >Closed</option>
                                                            <option value="Trailer" >Trailer</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="body_style_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BODY CONDITION</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="body_condition_desc" class="form-control">
                                                            <option value="Good" selected="">Good</option>
                                                            <option value="Average" >Average</option>
                                                            <option value="Poor" >Poor</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="body_condition_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH BODY WING</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_body_wing_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_body_wing_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH BODY WING</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_body_wing_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_body_wing_rem">
                                                    </div>
                                               </div>
                                               <div class=" row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">COOLING SYSTEM</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                               
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RADIATOR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="radiator_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="radiator_rem">
                                                    </div>
                                               </div>

                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">INTERCOOLER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="intercooler_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="intercooler_rem">
                                                    </div>
                                               </div>

                                               <div class=" row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">OTHERS</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">INSTRUMENT PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="instrument_panel_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="instrument_panel_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">ENGINE HOOD</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="engine_hood_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="engine_hood_rem">
                                                    </div>
                                               </div>
                                                 <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">DIESEL TANK</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="diesel_tank_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="diesel_tank_rem">
                                                    </div>
                                               </div>
                                                 <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">SILENSOR ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="silensor_assly_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="silensor_assly_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">WHEEL RIMS</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="wheel_rims_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="wheel_rims_rem">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BATTERY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="battery_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="battery_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FENDER CLIDING</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_fender_cliding_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_fender_cliding_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FENDER CLIDING</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_fender_cliding_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_fender_cliding_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="lh_rear_view_mirror_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="lh_rear_view_mirror_rem">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_rear_view_mirror_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="rh_rear_view_mirror_rem">
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
                                                <div class="row border-bottom mb-2">
                                                    <h6 class="col-md-4 p-2 bg-border">GLASSES</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">DESCRIPTION</h6>
                                                    <h6 class="col-md-4 p-2 bg-border">REMARKS</h6>
                                               </div>
                                                  <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WINDSHIELD GLASS</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="fr_windshield_glass_desc" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                            <option value="Scar" >Scar</option>
                                                            <option value="Crack" >Crack</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="fr_windshield_glass_rem">
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
                                                      <input  type="radio" id="radio3" value="On Hold" name="recomm">
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
        url:'<?=base_url()?>qc-commercial',
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
    var checkboxes = $('input[name=all_pics[]]');
    checkboxes.prop('checked', $(this).is(':checked'));
  });
</script>