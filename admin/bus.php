<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="bus_delete.php" name="video_form" method="post">
     <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Bus </h3>
      </td>
      <td>
      <div align="right" >
      <a href="bus_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\bus_db.php';
$obj=new bus_db();
$result=$obj->getBusDetails();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All
  </th>
   <th>Bus Name</th>
   <th>Bus Fees</th> 
   <th>Bus Route</th> 
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["bus_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td> '.$row['bus_name']. '</td>';
      echo '<td> '.$row['bus_fees']. '</td>';
      echo '<td> '.$row['bus_route']. '</td>';

     
     // echo '<td> <div class="embed-responsive embed-responsive-16by9"> <iframe  class="embed-responsive-item" width="150" height="150" src="'.$row['url'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> </div></td>';
      echo '<td> <a href="bus_update.php?id='.  $row["bus_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="bus_delete_one.php?id='.  $row["bus_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
           echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
           </td>';
           
           echo '</tr>';
     
           
     echo '
     <div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-md">
       
         <div class="modal-content btn-info" >
         <div class="modal-header ">
             <h3 class="modal-title" id="exampleModalLongTitle">'.$row['bus_name']. '
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button></h3>
           </div>
         <!-- thumbnail-->
         <div class="row" >
          <div class="col-md-12">
           <div class="thumbnail">
                  <div class="embed-responsive embed-responsive-16by9">
                     <iframe class="embed-responsive-item" width="560" height="315" src="'.$row['bus_route'].'" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe> 
                  </div>
                     <div class="caption">
               <h5>'.$row['bus_fees']. '</h5>
             
              </div>
           </div>
         </div>
       </div>
        
         </div>
       </div>
     </div>
         
         ';
           $modal_cnt++;
           
         }
     
         ?>

    
      </tbody> 
      </table>
      </div>
  
      <div align="left">
<input type="submit" class="btn btn-primary" value="DELETE ALL">
</div>  
    
           
  </form>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
        
<?php require 'bottom.php'; ?>