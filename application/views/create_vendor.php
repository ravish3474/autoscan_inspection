
<section class="content">
    <div class="container-fluid">
   
        <!-- Basic Examples -->
        <div class="row clearfix mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>
                                Manage Field Executives
                            </strong> 
                        </h2>
                    </div>
                    <div class="body">
                        <div class="w-100 mb-4" >
                            <label class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Create FE</label> 
                        </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-center">
                                    <thead >
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">FE Name</th>
                                            <th  class="text-center">FE Email</th>
                                            <th  class="text-center">FE Phone</th>
                                            <th  class="text-center">FE Location</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">FE Name</th>
                                            <th  class="text-center">FE Email</th>
                                            <th  class="text-center">FE Phone</th>
                                            <th  class="text-center">FE Location</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach ($vendors as $vendor) {
                                        ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><?=$vendor['fe_name']?></td>
                                            <td><?=$vendor['fe_email']?></td>
                                            <td><?=$vendor['fe_phone']?></td>
                                            <td><?=$vendor['fe_location']?></td>
                                            <td>
                                                  <span class="rounded p-2 editor" fe_id="<?=$vendor['fe_id']?>">
                                                    <i class="fa fa-edit"></i>
                                                  </span>
                                            <a href="#">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>   
                                        <?php
                                        $count++;
                                        }
                                        ?> 
                                    </tbody>
                                </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
    <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Add Field Executive</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="create_fe">
                    <label class="form-group">
                    	Enter FE Name :
                        <input type="text" name="fe_name" placeholder="Enter Name" class="form-control" required="">
                    </label>
                    <label class="form-group">
                    	Enter FE Email :
                        <input type="email" name="fe_email" placeholder="Enter Email" class="form-control" required="">
                    </label>
                     <label class="form-group">
                     	Enter FE Phone
                        <input type="number" name="fe_phone" placeholder="Enter Phone Number" maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                    <label class="form-group">
                    	Enter FE Location :
                        <input type="text" name="fe_location" placeholder="Enter Location" class="form-control" required="">
                    </label>
                    <div class="text-center mt-4"><button class="btn btn-success" type="submit">Submit</button></div>
                </form>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update FE</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="update_fe">
                    <label class="form-group">
                        Enter FE Name :
                        <input type="text" name="fe_name" id="fe_name_update" class="form-control" required="" >
                    </label>
                    <label class="form-group">
                        Enter FE Email :
                        <input type="email" name="fe_email" id="fe_email_update" class="form-control" required="" >
                        <input type="hidden" name="fe_id" value="" id="fe_id_update">
                    </label>
                     <label class="form-group">
                        Enter FE Phone
                        <input type="number" name="fe_phone" id="fe_phone_update"  maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                     <label class="form-group">
                        Enter FE Location:
                        <input type="text" name="fe_location" id="fe_location_update" class="form-control" required="" >
                    </label>
                    <div class="text-center"><button class="btn btn-success" type="submit">Update</button></div>
                </form>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).on("click",".editor",function(){
    var fe_id = $(this).attr('fe_id');
    $.ajax({
        type:'POST',
        data:{
            fe_id:fe_id
        },
        url:'<?=base_url()?>fetch-fe-data',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                $('#fe_name_update').val(response.data[0].fe_name);
                $('#fe_email_update').val(response.data[0].fe_email);
                $('#fe_phone_update').val(response.data[0].fe_phone);
                $('#fe_location_update').val(response.data[0].fe_location);
                $('#fe_id_update').val(fe_id);
                $('#UpdateModal').modal('show');
            }
            else{
                alert('Something Went Wrong');
            }
        }
    })
})

$(document).on('submit','#update_fe',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        url:'<?=base_url()?>update-vendor',
        processData:false,
        contentType:false,
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                swal('Success',response.msg,'success');
                location.reload();
            }
            else{
                swal('Sorry!',response.msg,'error');
            }
        }
    })
})

$(document).on('submit','#create_fe',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        url:'<?=base_url()?>add-vendor',
        processData:false,
        contentType:false,
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                swal('Success',response.msg,'success');
                location.reload();
            }
            else{
                swal('Sorry!',response.msg,'error');
            }
        }
    })
})
</script>