<script src="//geodata.solutions/includes/countrystatecity.js"></script>
<section class="content">
    <div class="container-fluid">
        <div class="block-header">
            
        </div>
        <!-- Basic Examples -->
        <div class="row clearfix">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>
                         Coordinators
                            </strong> 
                        </h2>
                    </div>
                    <div class="body">
                        <div class="w-100 mb-4" >
                            <label class="btn btn-info p-4" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Create Coordinator</label> 
                        </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-center">
                                    <thead >
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">Name</th>
                                            <th  class="text-center">Username</th>
                                            <th  class="text-center">Phone</th>
                                            <th  class="text-center">City</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th  class="text-center">#</th>
                                            <th  class="text-center">Name</th>
                                            <th  class="text-center">Username</th>
                                            <th  class="text-center">Phone</th>
                                            <th  class="text-center">City</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $count=1;
                                        foreach ($c_nator as $main_coord) {
                                        ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><?=$main_coord['c_name']?></td>
                                            <td><?=$main_coord['username']?></td>
                                            <td><?=$main_coord['c_phone']?></td>
                                            <td><?=$main_coord['c_city']?></td>
                                            <td>
                                                  <span class="rounded p-2 editor" admin_id="<?=$main_coord['admin_id']?>">
                                                    <i class="fa fa-edit"></i>
                                                  </span>
                                            <a href="#" class="deleter" admin_id="<?=$main_coord['admin_id']?>">
                                                <i class="fa fa-trash"></i>
                                            </a>
                                            </td>
                                        </tr>
                                        <?php
                                        $count++;
                                        }
                                        ?>
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
                <h5 class="modal-title" id="exampleModalLabel">Create Coordinator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="create_coordinator">
                    <label class="form-group">
                         Name :
                        <input type="text" name="c_name" placeholder="Enter Coordinator Name" class="form-control " required="">
                    </label>
                    <label class="form-group">
                    	Email :
                        <input type="email" name="username" placeholder="Enter Email" class="form-control" required="">
                    </label>
                    <label class="form-group">
                    	Password :
                        <input type="password" name="password" id="pass" placeholder="Enter Password" class="form-control" required="">
                    </label>
                    <label class="form-group">
                        Confirm Password :
                        <input type="password" placeholder="Confirm Password" id="c_pass" class="form-control" required="">
                    </label>
                     <label class="form-group">
                     	Enter Coordinator Phone
                        <input type="number" name="c_phone" placeholder="Enter Phone Number" maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                    <div class="row">
                        <div class="col-md-4">
                             <label class="form-group">Country
                                <select name="c_country" class="countries form-control" id="countryId" required="">
                                    <option value="">Select Country</option>
                                </select>
                            </label>
                        </div>
                        <div class="col-md-4">
                            <label class="form-group">State
                                <select name="c_state" class="states form-control" id="stateId" required="">
                                    <option value="">Select State</option>
                                </select>
                            </label>
                       </div>
                        <div class="col-md-4">
                             <label class="form-group">City
                                <select name="c_city" class="cities form-control" id="cityId" required="">
                                    <option value="">Select City</option>
                                </select>
                            </label>
                        </div>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="UpdateModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Coordinator</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
               <div class="">
                <form id="update_coordinator">
                    <label class="form-group">
                         Coordinator Email :
                        <input type="email" readonly id="c_email" class="form-control " required="">
                    </label>
                    <label class="form-group">
                        Coordinator Name :
                        <input type="text" name="c_name" id="c_name" class="form-control" required="" >
                        <input type="hidden" name="admin_id" value="" id="admin_id">
                    </label>
                    <label class="form-group">
                        Coordinator Password :
                        <input type="text" name="c_password" id="c_password" class="form-control" required="" >
                    </label>
                     <label class="form-group">
                        Coordinator Phone
                        <input type="number" name="c_phone" id="c_phone"  maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                     <label class="form-group">
                        Coordinator Country
                        <input type="text" name="c_country" id="c_country" class="form-control" required="" >
                    </label>
                    <label class="form-group">
                        Coordinator State
                        <input type="text" name="c_state" id="c_state" class="form-control" required="" >
                    </label>
                    <label class="form-group">
                        Coordinator City
                        <input type="text" name="c_city" id="c_city" class="form-control" required="" >
                    </label>
                    <div class="text-center">
                        <button class="btn btn-success" type="submit">Update</button>
                    </div>
                </form>
               </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">
$(document).on('submit','#update_coordinator',function(e){
    e.preventDefault();
    var form = $(this);
    var formData = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formData,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>update-coordinator',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                swal('success',response.msg,'success');
                location.reload();
            }
            else{
                swal('error',response.msg,'error');
            }
        }
    })
})

$(document).on("click",".editor",function(){
    var admin_id = $(this).attr('admin_id');
    $.ajax({
        type:'POST',
        data:{
            admin_id:admin_id
        },
        url:'<?=base_url()?>fetch-coordinator-details',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                $('#c_email').val(response.data[0].username);
                $('#c_password').val(response.data[0].password);
                $('#c_name').val(response.data[0].c_name);
                $('#c_phone').val(response.data[0].c_phone);
                $('#c_country').val(response.data[0].c_country);
                $('#c_state').val(response.data[0].c_state);
                $('#c_city').val(response.data[0].c_city);
                $('#admin_id').val(response.data[0].admin_id);
                $('#UpdateModal').modal('show');
            }
            else{
                swal('error','Something Went Wrong','error');
            }
        }
    })
})

$(document).on('submit','#create_coordinator',function(e){
    e.preventDefault();
    var form = $(this);
    var formData = new FormData(form[0]);
    var pass = $('#pass').val();
    var cpass = $('#c_pass').val();
    if (pass!=cpass) {
        swal('Password Mismatch','Please Check Password And Confim Password fields','warning');
    }else{
        $.ajax({
            type:'POST',
            url:'<?=base_url()?>createCoordinator',
            data:formData,
            contentType: false,
            processData:false,
            success:function(response){
                var response = JSON.parse(response);
                if (response.status==1) {
                    swal('Success',response.msg,'success');
                    location.reload();
                }
                else{
                    swal('Failed',response.msg,'error');
                }
            }

        })
    }
})
</script>