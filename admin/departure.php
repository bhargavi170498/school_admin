<?php require 'top.php'; ?>

<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
     <!-- code here --> 
      <form action="departure_delete.php" name="gallary_form" method="post" enctype="multipart/form-Data">
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Departure Timings </h3>
      </td>
      <td>
      <div align="right" >
      <a href="departure_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
      <table class="table table-hover table-bordered table-striped" id="tableData" >
      <?php 
require '..\shared\departure_db.php';
$obj=new departure_db();
$result=$obj->getDepartureTimings();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Station1</th>
   <th>Station2</th>
   <th>Station3</th> 
   <th>Station4</th> 
   <th>Station5</th> 
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    while($row=$result->fetch_assoc())
    {
      $id=$row["departure_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['d_station1']. '</td>';
      echo '<td>'.$row['d_station2']. '</td>';
      echo '<td>'.$row['d_station3']. '</td>';
      echo '<td>'.$row['d_station4']. '</td>';
      echo '<td>'.$row['d_station5']. '</td>';

      echo '<td> <a href="departure_update.php?id='.  $row["departure_id"] .'"><span class="glyphicon glyphicon-pencil btn"></span></a>
           <a href="departure_delete_one.php?id='.  $row["departure_id"] .'"><span class="glyphicon glyphicon-trash btn"></span></a>';
      echo '<a   type="button" class="btn  btn-md" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span></a></td>';
      
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>

<!-- Trigger the modal with a button 
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">Open Modal</button>
-->
<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
        <?php // echo $_GET['id']; ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

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