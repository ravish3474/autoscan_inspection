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
  <h2 style="text-decoration: underline;text-align: center;">PVT. CARS PRE-INSPECTION REPORT</h2>
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
            if ($fr_panel_desc!='Good') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FR PANEL/HOOD</td>
            <td <?=$style?>><?=$fr_panel_desc?></td>
            <td <?=$style?>><?=$fr_panel_rem?></td>
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
            <td <?=$style?>><?=$fr_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_apron_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FR APRON PANEL</td>
            <td <?=$style?>><?=$rh_apron_desc?></td>
            <td <?=$style?>><?=$fr_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rh_pillar_front_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH PILLAR FRONT-A</td>
            <td <?=$style?>><?=$rh_pillar_front_desc?></td>
            <td <?=$style?>><?=$rh_pillar_front_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_fr_door_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH FR DOOR PANEL</td>
            <td <?=$style?>><?=$rh_fr_door_desc?></td>
            <td <?=$style?>><?=$rh_fr_door_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_pillar_center_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH PILLAR CENTER-B</td>
            <td <?=$style?>><?=$rh_pillar_center_desc?></td>
            <td <?=$style?>><?=$rh_pillar_center_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rh_rr_door_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH RR DOOR PANEL</td>
            <td <?=$style?>><?=$rh_rr_door_desc?></td>
            <td <?=$style?>><?=$rh_rr_door_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_running_board_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH RUNNING BOARD</td>
            <td <?=$style?>><?=$rh_running_board_desc?></td>
            <td <?=$style?>><?=$rh_running_board_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_qtr_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH QTR PANEL</td>
            <td <?=$style?>><?=$rh_qtr_panel_desc?></td>
            <td <?=$style?>><?=$rh_qtr_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($dicky_back_door_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">DICKY/BACK DOOR</td>
            <td <?=$style?>><?=$dicky_back_door_desc?></td>
            <td <?=$style?>><?=$dicky_back_door_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_qtr_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH QTR PANEL</td>
            <td <?=$style?>><?=$lh_qtr_panel_desc?></td>
            <td <?=$style?>><?=$lh_qtr_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_running_board_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH RUNNING BOARD</td>
            <td <?=$style?>><?=$lh_running_board_desc?></td>
            <td <?=$style?>><?=$lh_running_board_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_rr_door_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH RR DOOR PANEL</td>
            <td <?=$style?>><?=$lh_rr_door_panel_desc?></td>
            <td <?=$style?>><?=$lh_rr_door_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_pillar_center_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH PILLAR CENTER-B</td>
            <td <?=$style?>><?=$lh_pillar_center_desc?></td>
            <td <?=$style?>><?=$lh_pillar_center_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_fr_door_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH FR DOOR PANEL</td>
            <td <?=$style?>><?=$lh_fr_door_panel_desc?></td>
            <td <?=$style?>><?=$lh_fr_door_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_pillar_front_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH PILLAR FRONT-A</td>
            <td <?=$style?>><?=$lh_pillar_front_desc?></td>
            <td <?=$style?>><?=$lh_pillar_front_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_fender_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH FENDER PANEL</td>
            <td <?=$style?>><?=$lh_fender_panel_desc?></td>
            <td <?=$style?>><?=$lh_fender_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_apron_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH APRON PANEL</td>
            <td <?=$style?>><?=$lh_apron_panel_desc?></td>
            <td <?=$style?>><?=$lh_apron_panel_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($roof_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">ROOF PANEL</td>
            <td <?=$style?>><?=$roof_panel_desc?></td>
            <td <?=$style?>><?=$roof_panel_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($floor_panel_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FLOOR PANEL</td>
            <td <?=$style?>><?=$floor_panel_desc?></td>
            <td <?=$style?>><?=$floor_panel_rem?></td>
          </tr>
      </table>
       <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">BODY FITTINGS</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
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
          <tr>
            <?php
            $style = "";
            if ($fr_grill_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FR GRILL</td>
            <td <?=$style?>><?=$fr_grill_desc?></td>
            <td <?=$style?>><?=$fr_grill_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_rear_view_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH REAR VIEW MIRROR</td>
            <td <?=$style?>><?=$rh_rear_view_desc?></td>
            <td <?=$style?>><?=$rh_rear_view_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_rear_view_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH REAR VIEW MIRROR</td>
            <td <?=$style?>><?=$lh_rear_view_desc?></td>
            <td <?=$style?>><?=$lh_rear_view_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rr_bumper_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RR BUMPER</td>
            <td <?=$style?>><?=$rr_bumper_desc?></td>
            <td <?=$style?>><?=$rr_bumper_rem?></td>
          </tr>
        </table>
        <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">LIGHTS AND LAMPS</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_head_lamp_desc!='Open') {
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
            if ($lh_head_lamp_desc!='Good') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH HEAD LAMP</td>
            <td <?=$style?>><?=$lh_head_lamp_desc?></td>
            <td <?=$style?>><?=$lh_head_lamp_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_fog_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH FOG LAMP</td>
            <td <?=$style?>><?=$rh_fog_lamp_desc?></td>
            <td <?=$style?>><?=$rh_fog_lamp_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($lh_fog_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH FOG LAMP</td>
            <td <?=$style?>><?=$lh_fog_lamp_desc?></td>
            <td <?=$style?>><?=$lh_fog_lamp_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($rh_tail_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RH TAIL LAMP</td>
            <td <?=$style?>><?=$rh_tail_lamp_desc?></td>
            <td <?=$style?>><?=$rh_tail_lamp_rem?></td>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($lh_tail_lamp_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">LH TAIL LAMP</td>
            <td <?=$style?>><?=$lh_tail_lamp_desc?></td>
            <td <?=$style?>><?=$lh_tail_lamp_rem?></td>
          </tr>
      </table>
      <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">COOLING SYSTEM</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($condensor_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">CONDENSOR</td>
            <td <?=$style?>><?=$condensor_desc?></td>
            <td <?=$style?>><?=$condensor_rem?></td>
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
      </table>
       <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">INTERIORS</th>
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
      </table>
       <table class="table">
          <tr style="background-color:#ffe600;">
            <th style="text-align:left">OTHERS</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($battery_desc!='Working') {
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
            if ($tyre_desc!='Good') {
              $style = "style='color:red'";
            }
            ?>
            <td class="td-1">TYRE CONDITION</td>
            <td <?=$style?>><?=$tyre_desc?></td>
            <td <?=$style?>><?=$tyre_rem?></td>
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
          <td><?=$agent_branch?></td>
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
          <td>ODOMETER</td>
          <td><?=$odomoter_qc?></td>
        </tr>
        <tr>
          <td>FUEL MODE</td>
          <td><?=$fuel_model_qc?></td>
        </tr>
        <tr>
          <td>R.C VERIFIED</td>
          <td><?=$rc_verified_qc?></td>
        </tr>
        </table>
        <table class="table mt-2">
          <tr style="background-color: #ffe600;">
            <th style="text-align:left">ACCESSORIES</th>
            <th style="text-align:left">DESCRIPTION</th>
            <th style="text-align:left">REMARKS</th>
          </tr>
          <tr>
            <?php
            $style = "";
            if ($stereo_qc!='Intact') {
              //$style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">STEREO</td>
            <td <?=$style?>><?=$stereo_qc?></td>
            <td <?=$style?>><?=$stereo_qc?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($center_lock_qc!='Intact') {
              //$style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">CENTER LOCK</td>
            <td <?=$style?>><?=$center_lock_qc?></td>
            <td <?=$style?>><?=$center_lock_qc?></td>
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
            if ($fr_ws_glass_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">FR WS GLASS</td>
            <td <?=$style?>><?=$fr_ws_glass_desc?></td>
            <td <?=$style?>><?=$fr_ws_glass_rem?></td>
          </tr>
           <tr>
            <?php
            $style = "";
            if ($rr_ws_glass_desc!='Intact') {
              $style = "style='color:red'";
            }
            ?>
            <td <?=$style?> class="td-1">RR WS GLASS</td>
            <td <?=$style?>><?=$rr_ws_glass_desc?></td>
            <td <?=$style?>><?=$rr_ws_glass_rem?></td>
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