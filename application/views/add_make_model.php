
    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix mt-4">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="card">
                        <div class="header">
                            <h2>
                               <strong>
                                Insurance Companies
                               </strong> 
                            </h2>
                        </div>
                        <div class="body">
                            <form id="add_make_model_ajax">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <div class="">
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">Type Of Vehicle <sup class="text-danger">*</sup></label>
                                                    <div class="col-md-7">
                                                        <select type="text" name="TYPE_OF_VEHICLE" class="form-control" required="">
                                                        <option value="" disabled="">--Select Type Of Vehicle--</option>
                                                          <option value="COMMERCIAL">COMMERCIAL</option>
                                                          <option value="PRIVATE VEHICLE">PRIVATE VEHICLE</option>
                                                          <option value="TWO WHEELERS">TWO WHEELERS</option>
                                                        </select>
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">Manufacturer<sup class="text-danger">*</sup> </label>
                                                    <div class="col-md-7">
                                                       <input type="text" name="MANUFACTURE" placeholder="Enter Manufacture" class="form-control" required="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">Model </label>
                                                    <div class="col-md-7">
                                                       <input type="text" name="MODEL" placeholder="Enter Model" class="form-control" required="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">Variant </label>
                                                    <div class="col-md-7">
                                                       <input type="text" name="VARINAT" placeholder="Enter Variant" class="form-control" required="">
                                                    </div>
                                               </div>
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">CC</label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="CC" placeholder="Enter CC" class="form-control" required="">
                                                    </div>
                                               </div>
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-5">S CAP</label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="S_CAP" placeholder="Enter S CAP" class="form-control " required="">
                                                    </div>
                                               </div>
                                               
                                                <div class="row mx-0 form-group">
                                                    <label class="col-md-5">Fuel</label>
                                                    <div class="col-md-7">
                                                        <input type="text" name="FUEL" placeholder="Enter Fuel Type" class="form-control " required="">
                                                    </div>
                                               </div>
                                               
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">GVW</label>
                                                    <div class="col-md-7">
                                                        <input type="number" name="GVW" placeholder="Enter GVW" class="form-control " required="">
                                                    </div>
                                               </div>
                                               
                                               <div class="row mx-0 form-group">
                                                    <label class="col-md-5">EX PRICE</label>
                                                    <div class="col-md-7">
                                                        <input type="number" name="EX_PRICE" placeholder="Enter EX Price" class="form-control " required="">
                                                    </div>
                                               </div>



                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="text-center">
                                        <button class="btn btn-success" type="submit">Submit</button>
                                    </div>
                                    
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<script type="text/javascript">
$(document).on('submit','#add_make_model_ajax',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>add-make-model-ajax',
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
</script>