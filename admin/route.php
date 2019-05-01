<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
     <form action="route_delete.php" name="album_form" method="post">
   
      <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Routes </h3>
      </td>
      <td>
      <div align="right" >
      <a href="album_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
      
      <div class="dataTables_wrapper">
   <h4> <table class="table table-hover table-striped" id="tableData" >
      <?php 
require '..\shared\route_db.php';
$obj=new route_db();
$result=$obj->getAllRoutes();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Route Id</th>
   <th>Route Station1</th>
   <th>Route Station2</th>
   <th>Route Station3</th>
   <th>Route Station4</th>
   <th>Route Station5</th>
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    //$modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["route_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      echo '<td>'.$row['route_id']. '</td>';
      echo '<td>'.$row['r_station1']. '</td>';
      echo '<td>'.$row['r_station2']. '</td>';
      echo '<td>'.$row['r_station3']. '</td>';
      echo '<td>'.$row['r_station4']. '</td>';
      echo '<td>'.$row['r_station5']. '</td>';

      echo '<td> <a href="route_update.php?id='.  $row["route_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="route_delete_one.php?id='.  $row["route_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a> </td>';
       
      echo '</tr>';
      
    }

    ?>

    
      </tbody> 
      </table>
  </h4>
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