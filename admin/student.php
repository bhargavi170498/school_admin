<?php require 'top.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
 <form action="student_delete.php" name="student_form" method="post">
 <table class="table">
 <tr><td>
 <h3 class='page-header'>Manage Student</h3>
 </td>
 <td>
 <div align="right" >
 <a href="student_insert.php">
       <button type="button" right class="btn btn-primary">New</button>
     </a> 
 </div>
 </td></tr>
 </table>
 
 <div class="dataTables_wrapper">
 <h4><table class="table table-hover table-striped" id="tableData" >
      <?php 
//require '..\shared\student_db.php';
$obj=new student_db();
$result=$obj->getAllStudent();

?>
   <thead bgcolor="silver">
  <th><input type="checkbox" name="select-all" id="select-all" /> Select-All</th>
   <th>Roll Number</th>
   <th>Name</th> 
   <th>Gender</th> 
   <th>Standard</th>
   <th>Class</th> 
   <th>Picture</th>
   
   <th>Action</th> 
  
   </thead>
   <tbody>  
    <?php
    $modal_cnt=1;
    while($row=$result->fetch_assoc())
    {
    
     
      $rno=$row["roll_no"];
      echo '<tr>';
      echo '<td> <input type="checkbox" name="chkdel[]" value="'.$rno.'"> </td>';
      echo '<td>'.$row['roll_no']. '</td>';
      echo '<td>'.$row['stu_name']. '</td>';
      echo '<td>'.$row['gender']. '</td>';
      echo '<td>'.$row['stu_std']. '</td>';
      echo '<td>'.$row['stu_class'].'</td>';
      echo '<td><img src="../resources/'.$row['stu_pic'].'" alt="User Image" height="100" width="100"></td>';
      echo '<td>';
    // if($_SESSION["login_type"]==1){
      echo ' <a href="student_update.php?id='.  $row["roll_no"] .'"><span class="glyphicon glyphicon-pencil btn btn-lg"></span></a>
           <a href="student_delete_one.php?id='.  $row["roll_no"] .'"><span class="glyphicon glyphicon-trash btn btn-lg"></span></a>';
           echo '<a type="button" class="btn" data-toggle="modal" data-target=".bd-example-modal-md'.$modal_cnt.'"><span class="glyphicon glyphicon-chevron-right btn-lg" aria-hidden="true"></span></a>
           </td>';
           
           echo '</tr>';
     
           
     echo '
     <div class="modal  fade bd-example-modal-md'.$modal_cnt.'" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
       <div class="modal-dialog modal-md">
       
         <div class="modal-content btn-info" >
         <div class="modal-header ">
             <h3 class="modal-title" id="exampleModalLongTitle">'.$row['stu_name']. '
             <button type="button" class="close" data-dismiss="modal" aria-label="Close">
             <span aria-hidden="true">&times;</span>
             </button></h3>
           </div>
         <!-- thumbnail-->
         <div class="row" >
         <div class="col-md-12">
           <div class="thumbnail">
            
             <div class="caption">
             <div> <h4>Studing in : '.$row['stu_std']. ' Standard </h4> </div>
               <h5>'.$row['gender']. '</h5>
               <div align="right"> <h4>Contact : <a >'.$row['parent_emailid']. '</a>
                    <br> '.$row['contact_no']. '</h4>
                </div>
             
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