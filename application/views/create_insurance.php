
    <section class="content">
        <div class="container-fluid">
            <!-- Basic Examples -->
            <div class="row clearfix">
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
                            <div class="w-100 mb-4" >
                                <label class="btn btn-info" data-toggle="modal" data-target="#create_insurance"><i class="fa fa-plus"></i> Create Insurance Company</label> 
                            </div>
                            <div class="table-responsive">
                                <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-center">
                                    <thead >
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">Insurance Company Name</th>
                                            <th  class="text-center">Insurance Company Code</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">Insurance Company Name</th>
                                            <th  class="text-center">Insurance Company Code</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach ($comp as $company_name) {
                                        ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><?=$company_name['company_name']?></td>
                                            <td><?=$company_name['company_code']?></td>
                                            <td>
                                                 <span class="rounded p-2 editor" comp_id="<?=$company_name['company_id']?>"><i class="fa fa-edit"></i></span>
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
        </div>
    </section>
    <div class="modal fade" id="create_insurance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #f8f9fa;">
                    <h5 class="modal-title" id="exampleModalLabel">Create Insurance Company</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="add_ins_comp">
                         <label class="form-group">
                            Insurance Company
                            <input type="text" name="company_name" placeholder="Enter Insurance Company Name" class="form-control " required="">
                        </label>

                        <label class="form-group">
                            Company Code
                            <input type="text" name="company_code" placeholder="Enter Insurance Company Code" class="form-control " required="">
                        </label>
                        <div class="text-center mt-4">
                            <button class="btn btn-success" type="submit">Submit</button>
                        </div>
                    </form>
                   </div>
                </div>
                <div class="modal-footer" style="background-color: #f8f9fa;">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <!--   <button type="button" class="btn btn-primary">Save changes</button> -->
                </div>
            </div>
        </div>
    </div>
<div class="modal fade" id="update_insurance" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Update Insurance Company</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="update_insurance_form">
                     <label class="form-group">
                            Insurance Company
                        <input type="text" name="company_name" placeholder="Enter Insurance Company Name" id="ins_company" class="form-control ">
                        <input type="hidden" name="company_id" value="" id="company_id">
                    </label>
                    <label class="form-group">
                            Company Code
                            <input type="text" name="company_code" placeholder="Enter Insurance Company Code" id="ins_code" class="form-control " required="">
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
$(document).on('submit','#update_insurance_form',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>update-insurance-company',
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

$(document).on("click",".editor",function(){
    var comp_id = $(this).attr('comp_id');
    $.ajax({
        type:'POST',
        data:{
            comp_id:comp_id
        },
        url:'<?=base_url()?>fetch-companies',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                $('#ins_code').val(response.data[0].company_code);
                $('#ins_company').val(response.data[0].company_name);
                $('#company_id').val(response.data[0].company_id);
                $('#update_insurance').modal('show');
            }
            else{
                swal('error',response.msg,'error');
            }
        }
    })
})

$(document).on('submit','#add_ins_comp',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        processData:false,
        contentType:false,
        url:'<?=base_url()?>add-insurance-company',
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