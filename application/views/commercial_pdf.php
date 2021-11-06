<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Report</title>
</head>
<body>
<style type="text/css">
body
{ 
  font-family: helvetica ;
}
table {
    width: 100%;
    border-collapse: collapse;
    border-style: hidden;
}
.table th {
 font-weight: bold;
}
.table td, .table th {
    border: 1px solid black;
    font-size: 10px;
    padding: 2px;
}


.row {
  width: 100%;
}
  
.column {
  float: left;
  width: 48.7%;
  padding: 5px;
}
.td-1
{
  width: 40%;
}

</style>
<div class="container">
  <h2 style="text-decoration: underline;text-align: center;">COMMERCIAL VEHICLES PRE-INSPECTION REPORT</h2>
  <table width="100%" style="width: 100%; margin-left:5px;margin-right: 5px ;">
        <tr>
            <td width="50%" style="font-size:12px;">Request No: <?=$request_num?></td>
            <td width="50%" align="right" style="font-size:12px;">Ref. No. : <?=$reference_num?></td>
        </tr>
  </table>
  <div class="table-responsive-sm">   
    <table class="table " style="width: 100%; margin-left:5px;margin-right: 5px;margin-top: 10px;"> 
      <tbody>
        <tr>
          <td style="width:35%;">Proposer/Customer Name: <?=$customer_name?></td>
          <td style="width:35%;"></td>
          <td style="width:35%;">Address: <?=$address?></td>
        </tr>
        <tr>
          <td style="width:35%;">Requested Date: <?=$request_date?></td>
          <td style="width:35%;">Requested Time: <?=$request_time?></td>
          <td style="width:35%;">Inspected Date & Time: <?=$isp_date_time?></td>
        </tr>
      </tbody>
    </table>    
    <div class="row">
      <div class="column">
        <table class="table table-left">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">CABIN ASSLY-STEEL</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($cabin_condition_desc!='Good') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">CABIN CONDITION</td>
            <td <?=$style?>><?=$cabin_condition_desc?></td>
            <td <?=$style?>><?=$cabin_condition_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_panel_hood_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FR PANEL/HOOD</td>
            <td <?=$style?>><?=$fr_panel_hood_desc?></td>
            <td <?=$style?>><?=$fr_panel_hood_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rh_fender_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH FENDER</td>
            <td <?=$style?>><?=$rh_fender_desc?></td>
            <td <?=$style?>><?=$rh_fender_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_pillar_front_a_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH PILLAR FRONT-A</td>
            <td <?=$style?>><?=$rh_pillar_front_a_desc?></td>
            <td <?=$style?>><?=$rh_pillar_front_a_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_door_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH DOOR PANEL</td>
            <td <?=$style?>><?=$rh_door_panel_desc?></td>
            <td <?=$style?>><?=$rh_door_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_door_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH DOOR PANEL</td>
            <td <?=$style?>><?=$lh_door_panel_desc?></td>
            <td <?=$style?>><?=$lh_door_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_wheel_arc_footboard_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH WHEEL ARC/FOOTBOARD</td>
            <td <?=$style?>><?=$rh_wheel_arc_footboard_desc?></td>
            <td <?=$style?>><?=$rh_wheel_arc_footboard_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rr_pillar_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH RR PILLAR</td>
            <td <?=$style?>><?=$rh_rr_pillar_desc?></td>
            <td <?=$style?>><?=$rh_rr_pillar_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($cabin_back_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">CABIN BACK PANEL</td>
            <td <?=$style?>><?=$cabin_back_panel_desc?></td>
            <td <?=$style?>><?=$cabin_back_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_rr_pillar_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH RR PILLAR</td>
            <td <?=$style?>><?=$lh_rr_pillar_desc?></td>
            <td <?=$style?>><?=$lh_rr_pillar_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_rr_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH RR PANEL</td>
            <td <?=$style?>><?=$lh_rr_panel_desc?></td>
            <td <?=$style?>><?=$lh_rr_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_wheel_arc_footboard_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH WHEEL ARC/FOOTBOARD</td>
            <td <?=$style?>><?=$lh_wheel_arc_footboard_desc?></td>
            <td <?=$style?>><?=$lh_wheel_arc_footboard_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_fender_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH FENDER</td>
            <td <?=$style?>><?=$lh_fender_desc?></td>
            <td <?=$style?>><?=$lh_fender_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($cabin_roof_sheet_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">CABIN ROOF/SHEET</td>
            <td <?=$style?>><?=$cabin_roof_sheet_desc?></td>
            <td <?=$style?>><?=$cabin_roof_sheet_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($front_bumper_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FRONT BUMPER</td>
            <td <?=$style?>><?=$front_bumper_desc?></td>
            <td <?=$style?>><?=$front_bumper_rem?></td>
          </tr>
      </table>
       <table class="table mt-2 table-left">
        <tr style="background-color: #ffe600;">
          <th style="text-align:left">BODY FITTINGS</th>
          <th style="text-align:left">DESCRIPTION</th>
          <th style="text-align:left">REMARKS</th>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($fr_show_grill_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">FR SHOW GRILL</td>
          <td <?=$style?>><?=$fr_show_grill_desc?></td>
          <td <?=$style?>><?=$fr_show_grill_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($rh_head_lamp_bazel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RH HEAD LAMP BAZEL</td>
          <td <?=$style?>><?=$rh_head_lamp_bazel_desc?></td>
          <td <?=$style?>><?=$rh_head_lamp_bazel_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($rh_head_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RH HEAD LAMP</td>
          <td <?=$style?>><?=$rh_head_lamp_desc?></td>
          <td <?=$style?>><?=$rh_head_lamp_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($lh_head_lamp_bazel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">LH HEAD LAMP BAZEL</td>
          <td <?=$style?>><?=$lh_head_lamp_bazel_desc?></td>
          <td <?=$style?>><?=$lh_head_lamp_bazel_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($lh_head_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">LH HEAD LAMP</td>
          <td <?=$style?>><?=$lh_head_lamp_desc?></td>
          <td <?=$style?>><?=$lh_head_lamp_rem?></td>
        </tr>
      </table>
       <table class="table mt-2 table-left">
        <tr style="background-color: #ffe600;">
          <th style="text-align:left">LOAD BODY</th>
          <th style="text-align:left">DESCRIPTION</th>
          <th style="text-align:left">REMARKS</th>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($body_style_desc!='Open') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">BODY STYLE</td>
          <td <?=$style?>><?=$body_style_desc?></td>
          <td <?=$style?>><?=$body_style_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($body_condition_desc!='Good') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">BODY CONDITION</td>
          <td <?=$style?>><?=$body_condition_desc?></td>
          <td <?=$style?>><?=$body_condition_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($rh_body_wing_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RH BODY WING</td>
          <td <?=$style?>><?=$rh_body_wing_desc?></td>
          <td <?=$style?>><?=$rh_body_wing_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($lh_body_wing_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">LH BODY WING</td>
          <td <?=$style?>><?=$lh_body_wing_desc?></td>
          <td <?=$style?>><?=$lh_body_wing_rem?></td>
        </tr>
      </table>
       <table class="table mt-2 table-left">
        <tr style="background-color: #ffe600;">
          <th style="text-align:left">COOLING SYSTEM</th>
          <th style="text-align:left">DESCRIPTION</th>
          <th style="text-align:left">REMARKS</th>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($radiator_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RADIATOR</td>
          <td <?=$style?>><?=$radiator_desc?></td>
          <td <?=$style?>><?=$radiator_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($intercooler_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">INTERCOOLER</td>
          <td <?=$style?>><?=$intercooler_desc?></td>
          <td <?=$style?>><?=$intercooler_rem?></td>
        </tr>
      </table>
       <table class="table mt-2 table-left">
        <tr style="background-color: #ffe600;">
          <th style="text-align:left">OTHERS</th>
          <th style="text-align:left">DESCRIPTION</th>
          <th style="text-align:left">REMARKS</th>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($instrument_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">INSTRUMENT PANEL</td>
          <td <?=$style?>><?=$instrument_panel_desc?></td>
          <td <?=$style?>><?=$instrument_panel_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($engine_hood_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">ENGINE HOOD</td>
          <td <?=$style?>><?=$engine_hood_desc?></td>
          <td <?=$style?>><?=$engine_hood_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($diesel_tank_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">DESEL TANK</td>
          <td <?=$style?>><?=$diesel_tank_desc?></td>
          <td <?=$style?>><?=$diesel_tank_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($silensor_assly_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">SILENSOR ASSLY</td>
          <td <?=$style?>><?=$silensor_assly_desc?></td>
          <td <?=$style?>><?=$silensor_assly_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($wheel_rims_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">WHEEL RIMS</td>
          <td <?=$style?>><?=$wheel_rims_desc?></td>
          <td <?=$style?>><?=$wheel_rims_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($battery_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">BATTERY</td>
          <td <?=$style?>><?=$battery_desc?></td>
          <td <?=$style?>><?=$battery_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($rh_fender_cliding_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RH FENDER CLIDING</td>
          <td <?=$style?>><?=$rh_fender_cliding_desc?></td>
          <td <?=$style?>><?=$rh_fender_cliding_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($lh_fender_cliding_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">LH FENDER CLIDING</td>
          <td <?=$style?>><?=$lh_fender_cliding_desc?></td>
          <td <?=$style?>><?=$lh_fender_cliding_rem?></td>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($lh_rear_view_mirror_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">LH REAR VIEW MIRROR</td>
          <td <?=$style?>><?=$lh_rear_view_mirror_desc?></td>
          <td <?=$style?>><?=$lh_rear_view_mirror_rem?></td>
        </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rear_view_mirror_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">RH REAR VIEW MIRROR</td>
          <td <?=$style?>><?=$rh_rear_view_mirror_desc?></td>
          <td <?=$style?>><?=$rh_rear_view_mirror_rem?></td>
        </tr>
      </table>
    </div>
    <div class="column">
      <table class="table">
        <tr style="background-color:#ffe600;">
          <th colspan="2">INSURER DETAILS</th>
        </tr>
        <tr>
          <td class="td-1">INSURER</td>
          <td><?=$insurer_qc?></td>
        </tr>
        <tr>
          <td class="td-1">AGENT BRANCH</td>
          <td><?=$agent_branch_qc?></td>
        </tr>
        <tr>
          <td class="td-1">AGENT CODE/NAME</td>
          <td><?=$agent_code_qc?></td>
        </tr>
      </table> 
      <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th colspan="2">VEHICLE DETAILS</th>
        </tr>
        <tr>
          <td class="td-1">VEHICLE NO</td>
          <td><?=$vehicle_num_qc?></td>
        </tr>
        <tr>
          <td class="td-1">CHASSIS NO</td>
          <td><?=$chassis_num_qc?></td>
        </tr>
        <tr>
          <td class="td-1">ENGINE NO</td>
          <td><?=$engine_num_qc?></td>
        </tr>
        <tr>
          <td class="td-1">MAKE</td>
          <td><?=$make_qc?></td>
        </tr>
        <tr>
          <td class="td-1">MODEL</td>
          <td><?=$model_qc?></td>
        </tr>
        <tr>
          <td class="td-1">DATE OF REGISTRATION</td>
          <td><?=$date_of_reg_qc?></td>
        </tr>
        <tr>
          <td class="td-1">YEAR OF MANUFACTURE</td>
          <td><?=$year_of_manufacture_qc?></td>
        </tr>
        <tr>
          <td class="td-1">COLOR</td>
          <td><?=$color_qc?></td>
        </tr>
        <tr>
          <td class="td-1">ODOMETER</td>
          <td><?=$odometer_qc?></td>
        </tr>
        <tr>
          <td class="td-1">FUEL MODE</td>
          <td><?=$fuel_mode_qc?></td>
        </tr>
        <tr>
          <td class="td-1">R.C VERIFIED</td>
          <td><?=$rc_verified_qc?></td>
        </tr>
      </table>
       <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th style="text-align:left">GLASSES</th>
          <th style="text-align:left">DESCRIPTION</th>
          <th style="text-align:left">REMARKS</th>
        </tr>
        <tr>
          <?php
            $style = "";
            if ($fr_windshield_glass_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
          <td <?=$style?> class="td-1">FR WINDSHIELD GLASS</td>
          <td <?=$style?>><?=$fr_windshield_glass_desc?></td>
          <td <?=$style?>><?=$fr_windshield_glass_rem?></td>
        </tr>
      </table>
      <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th colspan="2">CHASSIS IMPRESSION</th>
        </tr>
        <tr>
           <td colspan="2"> <img src="<?=base_url()?>upload/images/<?=$chasis_pic?>" height="250" width="1100"/></td>
        </tr>
      </table>
       <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th colspan="2">RECOMMENDATION FOR INSURANCE</th>
        </tr>
        <tr>
           <td colspan="2"><?=$recomm?></td>
        </tr>
      </table>
      <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th colspan="2">QC REMARKS</th>
        </tr>
        <tr>
           <td colspan="2"><?=$qc_remarks?></td>
        </tr>
      </table>
    </div>
  </div>
  <div style="margin-left:5px">
    <span style="font-size: 12px;"><u>DECLARATION OF OWNERS:</u></span>
    <p style="margin-top:0px;font-size: 6px;">I hearby confirm & declare that the above mentioned identification details of my vehicles no <?=$vehicle_num_qc?> as well as that of damage to this vehicle as noted by the inspecting offical are correct. Nothing has been hidden/Undisclosed.
   <br>I further confirm & declare that the Vehicle proposed for insurance after a break in cover has not met with any accident giving rise to any claim by a third party for injury or death caused to any person or damage to any property/insured vehicle during the period following the expiry of a previous insurance, till the moment it is proposed for insurance.<br>
    I also agree that damage is mentioned above shall be excluded in the event of any claim being lodged.</p>
  </div>
  <div style="margin-left:5px" align="right">
    <p style="font-size: 12px;margin:0px" align="right">For Auto Scan Technical Services</p>
    <img src="assets/img/signature.jpeg" width="100" height="55" style="margin:0px">
    <p align="right" style="margin:0px;font-size: 12px;">Authorized Signature</p>
     <p style="margin-top:0px;font-size: 6px;">Note: Damages mentioned in this report and/or seen in the photographs are not to be correct for insurance any correction in report will be informed to concerned authorised person within 24 hours.</p>
  </div>
  </div>
</div>

</body>
</html>