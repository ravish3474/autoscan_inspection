
<section class="content">
    <div class="container-fluid">
   
        <!-- Basic Examples -->
        <div class="row clearfix mt-2">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>
                                Create Agent
                            </strong> 
                        </h2>
                    </div>
                    <div class="body">
                        <div class="w-100 mb-4" >
                            <label class="btn btn-info" data-toggle="modal" data-target="#exampleModal"><i class="fa fa-plus"></i> Create Agent</label> 
                        </div>
                        <div class="table-responsive">
                        <table class="table table-bordered table-striped table-hover js-basic-example dataTable text-center">
                                    <thead >
                                        <tr>
                                            <th  class="text-center">#</th>
                                            <th  class="text-center">Agent Name</th>
                                            <th  class="text-center">Agent Email</th>
                                            <th  class="text-center">Agent Phone</th>
                                            <th  class="text-center">Insurance Name</th>
                                            <th  class="text-center">Branch Name</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </thead>
                                    <tfoot>
                                        <tr>
                                        <th  class="text-center">#</th>
                                            <th  class="text-center">Agent Name</th>
                                            <th  class="text-center">Agent Email</th>
                                            <th  class="text-center">Agent Phone</th>
                                            <th  class="text-center">Insurance Name</th>
                                            <th  class="text-center">Branch Name</th>
                                            <th  class="text-center">Action</th>
                                        </tr>
                                    </tfoot>
                                    <tbody>
                                        <?php
                                        $count = 1;
                                        foreach ($agents as $agent) {
                                        ?>
                                        <tr>
                                            <td><?=$count?></td>
                                            <td><?=$agent['agent_name']?></td>
                                            <td><?=$agent['agent_email']?></td>
                                            <td><?=$agent['agent_phone']?></td>
                                            <td><?=$agent['company_name']?></td>
                                            <td><?=$agent['branch_name']?></td>
                                            <td>
                                                  <span class="rounded p-2 editor" agent_id="<?=$agent['agent_id']?>">
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
                <h5 class="modal-title" id="exampleModalLabel">Create Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="create_agent">
                  <div class="form-group">
				    <label for="exampleFormControlSelect1">Select Insurance Company Name  : </label>
				    <select class="form-control bank_name_main" id="exampleFormControlSelect1" name="company_id">
				      <option value="" selected="" disabled="">--Select Insurance Company Name --</option> 
                        <?php
                        foreach ($companies as $company) {
                        ?>                                   
                          <option value="<?=$company['company_id']?>"><?=$company['company_name']?></option>
                          <?php
                          }
                          ?>
				    </select>
				  </div>
                    <label class="form-group">
                         Select Branch :
                        <select class="form-control" name="branch_id" id="branch_select" required="">
				      		
				      	</select>
                    </label>
                    <label class="form-group">
                    	Enter Agent Name :
                        <input type="text" name="agent_name" placeholder="Enter Name" class="form-control" required="">
                    </label>
                    <label class="form-group">
                    	Enter Agent Email :
                        <input type="email" name="agent_email" placeholder="Enter Email" class="form-control" required="">
                    </label>
                     <label class="form-group">
                     	Enter Agent Phone
                        <input type="number" name="agent_phone" placeholder="Enter Phone Number" maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                    <label class="form-group">
                    	Enter Code :
                        <input type="text" name="agent_code" placeholder="Enter Code" class="form-control" required="">
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
                <h5 class="modal-title" id="exampleModalLabel">Update Agent</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

               <div class="">
                <form id="update_agent">
                    <label class="form-group">
                        Enter Agent Name :
                        <input type="text" name="agent_name" id="agent_name_update" class="form-control" required="" >
                    </label>
                    <label class="form-group">
                        Enter Agent Email :
                        <input type="email" name="agent_email" id="agent_email_update" class="form-control" required="" >
                        <input type="hidden" name="agent_id" value="" id="agent_id_update">
                    </label>
                     <label class="form-group">
                        Enter Agent Phone
                        <input type="number" name="agent_phone" id="phone_update"  maxlength="10" minlength="9" class="form-control " required="">
                    </label>
                     <label class="form-group">
                        Enter Code:
                        <input type="text" name="agent_code" id="code_update" class="form-control" required="" >
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
    var agent_id = $(this).attr('agent_id');
    $.ajax({
        type:'POST',
        data:{
            agent_id:agent_id
        },
        url:'<?=base_url()?>fetch-agent-data',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                $('#agent_name_update').val(response.data[0].agent_name);
                $('#agent_email_update').val(response.data[0].agent_email);
                $('#phone_update').val(response.data[0].agent_phone);
                $('#code_update').val(response.data[0].agent_code);
                $('#agent_id_update').val(agent_id);
                $('#UpdateModal').modal('show');
            }
            else{
                alert('Something Went Wrong');
            }
        }
    })
})

$(document).on('change','#exampleFormControlSelect1',function(){
    var company_id = $(this).val();
    $.ajax({
        type:'POST',
        data:{
            company_id:company_id
        },
        url:'<?=base_url()?>fetch-company-branches',
        success:function(response){
            var response = JSON.parse(response);
            if (response.status==1) {
                var html="";
                html+='<option value="" selected disabled>--Select Branch--</option>';
                for(var i=0;i<response.data.length;i++){
                    html+='<option value="'+response.data[i].branch_id+'">'+response.data[i].branch_name+'</option>';
                }
                $('#branch_select').empty();
                $('#branch_select').append(html);
            }
        }
    })
})

$(document).on('submit','#update_agent',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        url:'<?=base_url()?>update-agent',
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

$(document).on('submit','#create_agent',function(e){
    e.preventDefault();
    var form = $(this);
    var formdata = new FormData(form[0]);
    $.ajax({
        type:'POST',
        data:formdata,
        url:'<?=base_url()?>add-agent',
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