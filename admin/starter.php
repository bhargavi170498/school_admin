<?php require 'top.php'; ?>
<?php
    /*  if($_SESSION["eid"]==""){
        echo '<div class=" btn-lg btn-danger" align="center">
        Please , Do login first
        </div>';
      }
     else{ */
     ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">


      

<section class="content-header">
      <h1>
        Dashboard
        <small>Control panel</small>
      </h1>
     
    </section>
      <div class="table-responsive">
<table class="table table-striped table-bordered" align="center">

      
      </div>
      </table>
    </section>
 <!-- Main content -->
 <section class="content">
     
          
<!--faculty -->

<div class="col-md-12">
              <!-- USERS LIST -->
              <?php
            //  require '../shared/login_db.php';
              $obj_approve=new student_db();
              $res_approve=$obj_approve->getAllStudent();

              echo '
              <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">STUDENTS</h3>

                  <div class="box-tools pull-right">
                    <span class="label label-danger">'.$res_approve->num_rows.' New Students</span>
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                    </button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                  </div>
                </div>
                <form name="starter_staff" action="approve.php" method="post" >
                <!-- /.box-header -->
                <div class="box-body no-padding">
                  <ul class="users-list clearfix">
                  
                  ';
                  
                  while($row=$res_approve->fetch_assoc()){
                    echo '
                    
                    <li> 
                  
                    &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                    <input type="checkbox" name="chkdel[]" value="'.$row["roll_no"]. '">
                      <img src="../resources/'.$row['stu_pic'].'" alt="User Image" height="128px" width="128px">
                      <a class="users-list-name"  >'.$row["stu_name"].'</a>
                      
                     
                    </li> ';
                  }
                   echo '
                  </ul>
                  <!-- /.users-list -->
                </div>
                <!-- /.box-body -->
                <div class="box-footer text-center">
                  <a href="student.php" class="uppercase">View All Students</a>
                </div>
                <!-- /.box-footer -->
              </div>
              '; ?>


      <div align="left">
</div> 
              <!--/.box -->
            </div>
        
        <!-- ./col -->
        </div>
        </form>
      <!-- /.row -->
      <!-- Main row -->
                  
</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->
              <?php //} ?>
   <?php require 'bottom.php'; ?>