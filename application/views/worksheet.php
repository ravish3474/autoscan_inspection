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
.clone thead, .clone tfoot{background:transparent;}
    </style>
<section class="content">
    <div class="container-fluid">
   
        <!-- Basic Examples -->
        <div class="row clearfix">
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
<div class="container position-relative">

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
                        <th class="fixed-side" scope="col">Names</th>
                        <?php
                            for($i = 9 ; $i <=23 ; $i++){
                                echo "<th  scope='col'>".$i."-".($i+1)."</th>";
                            }
                        ?>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                    <th class="fixed-side">Left Column</th>
                        <td>Cell content<br>
                            test</td>
                        <td><a href="#">Cell content longer</a></td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                    
                    </tr>
                                        <tr>
                    <th class="fixed-side">Left Column</th>
                        <td>Cell content<br>
                            test</td>
                        <td><a href="#">Cell content longer</a></td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                    
                    </tr>
                                        <tr>
                    <th class="fixed-side">Left Column</th>
                        <td>Cell content<br>
                            test</td>
                        <td><a href="#">Cell content longer</a></td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                    
                    </tr>
                                        <tr>
                    <th class="fixed-side">Left Column</th>
                        <td>Cell content<br>
                            test</td>
                        <td><a href="#">Cell content longer</a></td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                        <td>Cell content</td>
                    
                    </tr>
                   
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