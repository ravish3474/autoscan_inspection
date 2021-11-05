<style type="text/css">
table th,td{
  border: 1px solid black !important;
  text-align: center !important;
}
th{
  background-color: #ea680f;
  color: white;
  font-size:small!important;
  text-align: center !important;
}
</style>

   <section class="content mt-4">
   
        <div class="container-fluid">
            
            <div class="app-main__outer">
                <div class="app-main__inner">
                   
                    <div class="tabs-animation">
                        <div class="mb-3 card">                         
                            <div class="no-gutters p-1">
                              <div class="table-responsive">
                              <form name="">
                                <table class="table table-striped ">
                                  <thead class="">
                                    <tr>
                                      <th>Type Of Vehicle</th>
                                      <th>Manufacture</th>
                                      <th>Model</th>
                                      <th>Variant</th>
                                      <th>CC</th>
                                      <th>S CAP</th>
                                      <th>GVW</th>
                                      <th>EX PRICE</th>
                                    </tr>
                                  </thead>
                                  <tbody>
                                    <?php
                                    foreach ($models as $model) {
                                    ?>
                                    <tr>
                                      <td><?=$model['TYPE_OF_VEHICLE']?></td>
                                      <td><?=$model['MANUFACTURE']?></td>
                                      <td><?=$model['MODEL']?></td>
                                      <td><?=$model['VARINAT']?></td>
                                      <td><?=$model['CC']?></td>
                                      <td><?=$model['S_CAP']?></td>
                                      <td><?=$model['GVW']?></td>
                                      <td><?=$model['EX_PRICE']?></td>
                                    </tr>
                                    <?php 
                                    }
                                    ?>
                                  </tbody>
                                </table>
                                <div class="pagination_links"> 
                                  <?php echo $links; ?>  
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
</section>






