
<section class="content">
    <div class="container-fluid">
      
        <!-- Basic Examples -->
        <div class="row clearfix mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>
                            Insurance Company Branches
                            </strong> 
                        </h2>
                    </div>
                    <div class="body">
                        <div class="w-100 mb-4" >
                            <label class="btn btn-info" data-toggle="modal" data-target="#create_branch"><i class="fa fa-plus"></i> Create Branch</label> 
                        </div>
                        <div class="table-responsive">
                            <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-center">
                                <thead >
                                    <tr>
                                        <th  class="text-center">#</th>
                                        <th  class="text-center">Insurance Company Name</th>
                                        <th  class="text-center">Branch Name</th>
                                        <th  class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr>
                                        <th  class="text-center">#</th>
                                        <th  class="text-center">Insurance Company Name</th>
                                        <th  class="text-center">Branch Name</th>
                                        <th  class="text-center">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php
                                    $count = 1 ;
                                    foreach ($modal_data as $branch) {
                                    ?>
                                    <tr>
                                        <td><?=$count?></td>
                                        <td><?=$branch['company_name']?></td>
                                        <td><?=$branch['branch_name']?></td>
                                        <td>
                                           <span class="rounded p-2 editor" branch_id="<?=$branch['branch_id']?>">
                                                <i class="fa fa-edit"></i>
                                            </span>
                                            <i class="fa fa-trash"></i>
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
<div class="modal fade" id="create_branch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #f8f9fa;">
                <h5 class="modal-title" id="exampleModalLabel">Create Branch</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="">
                <form id="create_branch_ajax">
                    <label class="form-group">Select Insurance Company
                        <select name="company_id" class="form-control" required="">
                            <option value="" selected="" disabled="">--Select Insurance Company--</option> 
                            <?php
                            $count = 1;
                            foreach ($comp as $company_name) {
                            ?>                                          
                            <option value="<?=$company_name['company_id']?>"><?=$company_name['company_name']?></option>
                            <?php
                            }
                            ?>
                        </select>
                    </label>
                    <label class="form-group">
                        Branch Name
                        <input type="text" name="branch_name" placeholder="Enter Branch Name" class="form-control " required="">
                    </label>
                    </div>
                    <div class="text-center mt-4">
                        <button class="btn btn-success" type="submit">Submit</button>
                    </div>
                </form>
                </div>
            </div>
            <div class="modal-footer" style="background-color: #f8f9fa;">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="update_branch" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
     <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Branch Name</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="update_branch_ajax">                  
                    <label class="form-group">
                         Branch Name
                        <input type="text" name="branch_name" id="branch_name" class="form-control ">
                        <input type="hidden" name="branch_id" value="" id="branch_id">
                    </label>
                    <div class="text-center mt-4">
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
$(document).on("click",".editor",function(){
    var branch_id= $(this).attr('branch_id');
    $.ajax({
        type:'POST',
        data:{
            branch_id:branch_id
        },
        url:'<?=base_url()?>fetch-branch-data',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                $('#branch_name').val(response.data[0].branch_name);
                $('#branch_id').val(response.data[0].branch_id);
                $('#update_branch').modal('show');
            }
            else{
                alert('Something Went Wrong');
            }
        }
    })
})

$(document).on('submit','#update_branch_ajax',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>update-branch-ajax',
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

$(document).on('submit','#create_branch_ajax',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>create-branch-ajax',
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