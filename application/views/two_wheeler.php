<style>

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
.img_scrl {
    height: 445px;
    overflow-y: scroll;
    max-height: 700px;
}
.btn{
padding: unset !important;
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
                                           <td><strong>Proposer/Customer Name </strong><input type="text" value="ICICI" name="bank_name"></td>
                                           <td><strong>Address: </strong><span><input type="text" name="field_executive" value="null" name="bank_name"></span></td>
                                         
                                       </tr>
                                        <tr>
                                            <td><strong>Request Date: </strong><span><input type="text" value="" name="field_contact"></span></td>
                                           <td><strong>Request Time: </strong><span><input type="text" value="" name="agent_name"></span></td>
                                            <td><strong>Inspection Date & Time: </strong><span><input type="text" value="" name="field_contact"></span></td>
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
                          		   <Label>No Pictures Uploaded By FE</Label>
                          		   <div id="new_pictures">
									</div>
                                      </ul>
                                  </div>
                              </div>

                              <div class="col-md-9">
                                  <div class="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="">
                                                <div class=" border-bottom mb-2">
                                                    <h5 class="col-md-4 p-2 bg-border">BODY PARTS</h5>
                                                    <h5 class="col-md-4 p-2 bg-border">DESCRIPTION</h5>
                                                    <h5 class="col-md-4 p-2 bg-border">REMARKS</h5>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FENDER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FORK ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR SHOCKER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Leak" >Leak</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR SHOCKER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                          <option value="Intact" selected="">Intact</option>
                                                            <option value="Leak" >Leak</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">HEAD LIGHT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                           <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR CENTER COVER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                           <option value="Intact" selected="">Intact</option>
                                                            <option value="Scratch" >Scratch</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH FR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH FR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">HANDLE BAR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Bend" >Bend</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">SPEEDOMETER ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RR BODY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH RR COWL PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH RR COWL PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">RH RR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">LH RR INDICATOR LT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">TAIL LIGHT ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">LH FOOTREST ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Broken" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">SEAT</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Torn" >Torn</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                   <label class="col-md-4 pr-0">SILENSOR ASSLY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                            <option value="Missing" >Missing</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                             
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">CHASSIS FRAME</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                              <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR FOOTBOARD PANEL</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FR WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">SPARE WHEEL RIM</label>
                                                    <div class="col-md-4 pr-0">
                                                       <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">RH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">LH REAR VIEW MIRROR</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                            <option value="Missing" >Broken</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">BATTERY</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Missing" >Missing</option>
                                                             <option value="Missing" >Not working</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">ENGINE CHAMBER</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                            <option value="Intact" selected="">Intact</option>
                                                            <option value="Damage" >Damage</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-4 pr-0">FUEL TANK</label>
                                                    <div class="col-md-4 pr-0">
                                                       <select name="rh_front" class="form-control">
                                                             <option value="Intact" selected="">Intact</option>
                                                            <option value="Dented" >Dented</option>
                                                        </select>
                                                    </div>
                                                    <div class="col-md-4 pr-0">
                                                        <input type="text" value="N/A" class="form-control" name="">
                                                    </div>
                                               </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                           <div class="">
                                            <div class="border-bottom mb-2">
                                                   <h5 class="col-md-6 p-2 bg-border">INSURER DETAILS</h5>
                                                   <h5 class="col-md-6 p-2 bg-border">DESCRIPTION</h5>
                                               </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">INSURER</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value=""  name="insurer" class="form-control"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT BRANCH</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control" >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">AGENT CODE NAME</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_code" class="form-control" >
                                                    </div>
                                               </div>
                                                 <div class="border-bottom mb-2">
                                                    <h5 class="col-md-6 p-2 bg-border">VEHICLE DETAILS</h5>
                                                   <h5 class="col-md-6 p-2 bg-border">DESCRIPTION</h5>
                                               </div>
                                            <div class="row mx-0 form-group">
                                                    <label class="col-md-6">VEHICLE NO</label>
                                                    <div class="col-md-6 d-flex">
                                                        <input type="text" value="" class="form-control" name="insurer"> 
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-6">CHASSIS NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ENGINE NO</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MAKE </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">MODEL </label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">DATE OF REGISTRATION</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">YEAR OF MANUFACTURE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">COLOR</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">ODOMETER</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">FUEL MODE</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">R.C. VERIFIED</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-6">FITNESS VALID</label>
                                                    <div class="col-md-6">
                                                        <input type="text" value="" name="agent_branch" class="form-control " >
                                                    </div>
                                               </div>
                                                <div class="border-bottom mb-2">
                                                   <h5 class="p-2 bg-border">RECOMMENDATION FOR INSURANCE</h5>
                                               </div>
                                                <div class="row mx-0 form-group d-flex">
                                                    <div class="form-check-inline">
                                                      <input class="d-none" type="radio" id="radio1" value="option1" name="recomm" checked="">
                                                      <label class="form-check-label" for="radio1">Yes</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="d-none" type="radio" id="radio2" value="option2" name="recomm">
                                                      <label class="form-check-label" for="radio2">No</label>
                                                    </div>
                                                    <div class="form-check form-check-inline">
                                                      <input class="d-none" type="radio" id="radio3" value="option3" name="recomm">
                                                      <label class="form-check-label" for="radio3">On Hold</label>
                                                    </div>
                                               </div>
                                               <div class="border-bottom mb-2">
                                                   <h5 class="p-2 bg-border">QC Remarks</h5>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <textarea  rows="4" cols="54" value=""  name="qc_remarks" class=""> 
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