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
    padding: 3px;
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
  <h2 style="text-decoration: underline;text-align: center;">TWO WHEELER PRE-INSPECTION REPORT</h2>
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
        <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">BODY PARTS</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_fender_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FR FENDER</td>
            <td <?=$style?>><?=$fr_fender_desc?></td>
            <td <?=$style?>><?=$fr_fender_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_wheel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FR WHEEL RIM</td>
            <td <?=$style?>><?=$fr_wheel_desc?></td>
            <td <?=$style?>><?=$fr_wheel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_fork_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FR FORK ASSLY</td>
            <td <?=$style?>><?=$fr_fork_desc?></td>
            <td <?=$style?>><?=$fr_fork_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rh_fr_shocker_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH FR SHOCKER</td>
            <td <?=$style?>><?=$rh_fr_shocker_desc?></td>
            <td <?=$style?>><?=$rh_fr_shocker_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($headlight_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>HEAD LIGHT</td>
            <td <?=$style?>><?=$headlight_desc?></td>
            <td <?=$style?>><?=$headlight_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_center_cover_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FR CENTER COVER</td>
            <td <?=$style?>><?=$fr_center_cover_desc?></td>
            <td <?=$style?>><?=$fr_center_cover_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rh_fr_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH FR PANEL</td>
            <td <?=$style?>><?=$rh_fr_panel_desc?></td>
            <td <?=$style?>><?=$rh_fr_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_fr_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH FR PANEL</td>
            <td <?=$style?>><?=$lh_fr_panel_desc?></td>
            <td <?=$style?>><?=$lh_fr_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_fr_indicator_lt_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH FR INDICATOR LT</td>
            <td <?=$style?>><?=$rh_fr_indicator_lt_desc?></td>
            <td <?=$style?>><?=$rh_fr_indicator_lt_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_fr_indicator_lt_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH FR INDICATOR LT</td>
            <td <?=$style?>><?=$lh_fr_indicator_lt_desc?></td>
            <td <?=$style?>><?=$lh_fr_indicator_lt_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($handle_bar_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>HANDLE BAR</td>
            <td <?=$style?>><?=$handle_bar_desc?></td>
            <td <?=$style?>><?=$handle_bar_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($speedometer_assly_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>SPEEDOMETER ASSLY</td>
            <td <?=$style?>><?=$speedometer_assly_desc?></td>
            <td <?=$style?>><?=$speedometer_assly_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($utility_box_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>UTILITY BOX</td>
            <td <?=$style?>><?=$utility_box_desc?></td>
            <td <?=$style?>><?=$utility_box_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rr_body_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RR BODY</td>
            <td <?=$style?>><?=$rr_body_desc?></td>
            <td <?=$style?>><?=$rr_body_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rr_cowl_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH RR COWL PANEL</td>
            <td <?=$style?>><?=$rh_rr_cowl_panel_desc?></td>
            <td <?=$style?>><?=$rh_rr_cowl_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_rr_cowl_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH RR COWL PANEL</td>
            <td <?=$style?>><?=$lh_rr_cowl_panel_desc?></td>
            <td <?=$style?>><?=$lh_rr_cowl_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rr_indicator_lt_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH RR INDICATOR LT</td>
            <td <?=$style?>><?=$rh_rr_indicator_lt_desc?></td>
            <td <?=$style?>><?=$rh_rr_indicator_lt_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_rr_indicator_lt_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH RR INDICATOR LT</td>
            <td <?=$style?>><?=$lh_rr_indicator_lt_desc?></td>
            <td <?=$style?>><?=$lh_rr_indicator_lt_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($tail_light_assly_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>TAIL LIGHT ASSLY</td>
            <td <?=$style?>><?=$tail_light_assly_desc?></td>
            <td <?=$style?>><?=$tail_light_assly_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_footrest_assly_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH FOOTREST ASSLY</td>
            <td <?=$style?>><?=$lh_footrest_assly_desc?></td>
            <td <?=$style?>><?=$lh_footrest_assly_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($seat_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>SEAT</td>
            <td <?=$style?>><?=$seat_desc?></td>
            <td <?=$style?>><?=$seat_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($silensor_assly_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>SILENSOR ASSLY</td>
            <td <?=$style?>><?=$silensor_assly_desc?></td>
            <td <?=$style?>><?=$silensor_assly_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($chasis_frame_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>CHASSIS FRAME</td>
            <td <?=$style?>><?=$chasis_frame_desc?></td>
            <td <?=$style?>><?=$chasis_frame_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_footboard_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FR FOOTBOARD PANEL</td>
            <td <?=$style?>><?=$fr_footboard_panel_desc?></td>
            <td <?=$style?>><?=$fr_footboard_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fr_wheel_rim_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RR WHEEL RIM</td>
            <td <?=$style?>><?=$fr_wheel_rim_desc?></td>
            <td <?=$style?>><?=$fr_wheel_rim_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rear_view_mirror_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>RH RAER VIEW MIRROR</td>
            <td <?=$style?>><?=$rh_rear_view_mirror_desc?></td>
            <td <?=$style?>><?=$rh_rear_view_mirror_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_rear_view_mirror_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>LH REAR VIEW MIRROR</td>
            <td <?=$style?>><?=$lh_rear_view_mirror_desc?></td>
            <td <?=$style?>><?=$lh_rear_view_mirror_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($battery_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>BATTERY</td>
            <td <?=$style?>><?=$battery_desc?></td>
            <td <?=$style?>><?=$battery_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($engine_chamber_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>ENGINE CHAMBER</td>
            <td <?=$style?>><?=$engine_chamber_desc?></td>
            <td <?=$style?>><?=$engine_chamber_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($fuel_tank_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?>>FUEL TANK</td>
            <td <?=$style?>><?=$fuel_tank_desc?></td>
            <td <?=$style?>><?=$fuel_tank_rem?></td>
          </tr>
      </table>
    </div>
    <div class="column">
      <table class="table">
        <tr style="background-color:#ffe600;">
          <th colspan="2">INSURER DETAILS</th>
        </tr>
        <tr>
          <td>INSURER</td>
          <td><?=$insurer_qc?></td>
        </tr>
        <tr>
          <td>AGENT BRANCH</td>
          <td><?=$agent_branch_qc?></td>
        </tr>
        <tr>
          <td>AGENT CODENAME</td>
          <td><?=$agent_code_qc?></td>
        </tr>
      </table> 
      <table class="table mt-2">
        <tr style="background-color: #ffe600;">
          <th colspan="2">VEHICLE DETAILS</th>
        </tr>
        <tr>
          <td>VEHICLE NO</td>
          <td><?=$vehicle_num_qc?></td>
        </tr>
        <tr>
          <td>CHASSIS NO</td>
          <td><?=$chassis_num_qc?></td>
        </tr>
        <tr>
          <td>ENGINE NO</td>
          <td><?=$engine_num_qc?></td>
        </tr>
        <tr>
          <td>MAKE</td>
          <td><?=$make_qc?></td>
        </tr>
        <tr>
          <td>MODEL</td>
          <td><?=$model_qc?></td>
        </tr>
        <tr>
          <td>DATE OF REGISTRATION</td>
          <td><?=$date_of_reg_qc?></td>
        </tr>
        <tr>
          <td>YEAR OF MANUFACTURE</td>
          <td><?=$year_of_manufacture_qc?></td>
        </tr>
        <tr>
          <td>COLOR</td>
          <td><?=$color_qc?></td>
        </tr>
        <tr>
          <td>ODOMETER</td>
          <td><?=$odometer_qc?></td>
        </tr>
        <tr>
          <td>FUEL MODE</td>
          <td><?=$fuel_mode_qc?></td>
        </tr>
        <tr>
          <td>R.C VERIFIED</td>
          <td><?=$rc_verified_qc?></td>
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