    <style>
      .table-scroll {
    position:relative;
    max-width:100%;
    margin:auto;
    overflow:hidden;
    border:1px solid #000;
}
.table-wrap {
    width:100%;
    overflow:auto;
}
.table-scroll th {
    background: #b4b4b4 !important;
    color: white !important;
    padding: 12px 10px !important;
    text-align: center;
}
.table-scroll table {
    width:100%;
    margin:auto;
    border-collapse:separate;
    border-spacing:0;
}
.table-scroll th, .table-scroll td {
    padding:5px 10px;
    border:1px solid #000;
    background:#fff;
    white-space:nowrap;
    vertical-align:top;
}
.table-scroll thead, .table-scroll tfoot {
    background:#f9f9f9;
}
.clone {
    position:absolute;
    top:0;
    left:0;
    pointer-events:none;
}
.clone th, .clone td {
    visibility:hidden
}
.clone td, .clone th {
    border-color:transparent
}
.clone tbody th {
    visibility:visible;
    color:red;
}
.clone .fixed-side {
    border:1px solid #000;
    background:#eee;
    visibility:visible;
}
table {
  border-spacing: 5px !important;
}
th, td {
  padding: 15px !important;
}
.clone thead, .clone tfoot{background:transparent;}
    </style>
<section class="content">
    <div class="container-fluid">
   
        <!-- Basic Examples -->
        <div class="row clearfix mt-4">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                <div class="card">
                    <div class="header">
                        <h2>
                            <strong>
                                Worksheet
                            </strong> 
                        </h2>
                    </div>
                    <div class="body">
<div class="container-fluid position-relative">

<!--     <div class="row">
        <div class="col-md-5">
            <div class="d-flex">
                <input type="text" class="form-control" name="" />
                <button class="btn btn-success border-0 ml-3"><i class="fas fa-search"></i></button>
            </div>
        </div>
    </div> -->
    <div class=" mt-2">
       
        <div id="table-scroll" class="table-scroll">
            <div class="table-wrap">
                <table class="main-table">
                <thead>
                    <tr>
                        <th class="fixed-side" scope="col">FE Names</th>
                        <?php
                            for($i = 7 ; $i <=21 ; $i++){
                                echo "<th  scope='col'>".$i."-".($i+1)."</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($fields as $field) {
                    $assigned_fe = $field['fe_id'];
                    $sql ="SELECT * FROM cases WHERE assigned_fe='$assigned_fe'";
                    $query = $this->db->query($sql);
                    ?>
                    <tr>
                    <th class="fixed-side"><?=$field['fe_name']?></th>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('7:00');
                                $end = new DateTime('8:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('8:00');
                                $end = new DateTime('9:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('9:00');
                                $end = new DateTime('10:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('10:00');
                                $end = new DateTime('11:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('11:00');
                                $end = new DateTime('12:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('12:00');
                                $end = new DateTime('13:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('13:00');
                                $end = new DateTime('14:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('14:00');
                                $end = new DateTime('15:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('15:00');
                                $end = new DateTime('16:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('16:00');
                                $end = new DateTime('17:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('17:00');
                                $end = new DateTime('18:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('18:00');
                                $end = new DateTime('19:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('19:00');
                                $end = new DateTime('20:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('20:00');
                                $end = new DateTime('21:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                        <td>
                            <?php
                            foreach ($query->result() as $row){
                                $now = new DateTime($row->appoint_time);
                                $begin = new DateTime('21:00');
                                $end = new DateTime('22:00');
                                if ($now >= $begin && $now <= $end){
                            ?>
                            <?=$row->ref_no?><br>
                            <?=$row->insured_name?><br>
                            <?=$row->contact_number?><br><br>
                        <?php } }?>
                        </td>
                    
                    </tr>
                    <?php
                    }
                    ?>
                   
                </tbody>
                <!-- <tfoot>
                    <tr>
                    <th class="fixed-side">&nbsp;</th>
                    <td>Footer 2</td>
                    <td>Footer 3</td>
                    <td>Footer 4</td>
                    <td>Footer 5</td>
                    <td>Footer 6</td>
                    <td>Footer 7</td>
                    <td>Footer 8</td>
                    </tr>
                </tfoot> -->
                </table>
            </div>
        </div>

    </div>
</div>
                    </div>
                </div>
            </div>
        </div>
        <!-- #END# Basic Examples -->
    </div>
</section>
    
<script>
    jQuery(document).ready(function() {
        jQuery(".main-table").clone(true).appendTo('#table-scroll').addClass('clone');   
    });
</script>