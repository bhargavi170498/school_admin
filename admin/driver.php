<?php require 'top.php'; ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
      <form action="driver_delete.php" name="faculty_form" method="post">
     <table class="table">
      <tr><td>
      <h3 class='page-header'>Manage Driver </h3>
      </td>
      <td>
      <div align="right" >
      <a href="driver_insert.php">
            <button type="button" right class="btn btn-primary">New</button>
          </a> 
      </div>
      </td></tr>
      </table>
     

      <div class="dataTables_wrapper">
      <h4><table class="table table-hover table-striped" id="tableData" >
      <?php 
require '..\shared\driver_db.php';
$obj=new driver_db();
$result=$obj->getDriver();
?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Name</th>
   <th>Mobile No.</th> 
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
      $id=$row["driver_id"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$id.'"> </td>';
      
      echo '<td>'.$row['d_name']. '</td>';
      echo '<td>'.$row['d_contactno']. '</td>';
      
     
      echo '<td> <a href="driver_update.php?id='.  $row["driver_id"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="driver_delete_one.php?id='.  $row["driver_id"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
           echo '</td>';
           
           echo '</tr>';
     
           
           
         }
     
    ?>

    
      </tbody> 
      </table></h4>
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