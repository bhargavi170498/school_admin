<?php require 'top.php'; ?>
<?php
     
     ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
       <!-- code here --> 
   
<table class="table">
<form method="post" action="student_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Roll Number :</td><td><input type="text" name="txtrno"  required class="form-control" /> </td></tr>
<tr><td>Name :</td><td><input type="text" name="txtnm"  required class="form-control" /> </td></tr>
<tr><td>Address :</td><td><input type="text" name="txtadd" required  class="form-control"/> </td></tr>
<tr><td>Parent Name:</td><td><input type="text" name="txtpnm"  required class="form-control"/> </td></tr>
<tr><td>Parent Email:</td><td><input type="email" name="txtpemail"  required class="form-control"/> </td></tr>
<tr><td>Parent Mobile_No:</td><td><input type="number" name="txtpmno"  required class="form-control"/> </td></tr>
<tr><td>Gender:</td><td>
                    <select class="form-control" name="selgen">
                    <option value="0">--Select Gender--</option>
                    <option value="male">Male</option>
                    <option value="female">Female</option>
                    
                    </select>

</td></tr>
<tr><td>Standard:</td><td><input type="text" name="txtstd"  required class="form-control"/> </td></tr>
 <tr><td>Class :</td><td>
                    <select class="form-control" name="selclass">
                    <option value="0">--Select Class--</option>
                    <option value="1">A</option>
                    <option value="2">B</option>
                    <option value="3">C</option>
                    </select>
 </td></tr>
 <tr><td>Date of Birth:</td><td><input type="text" name="txtdob"  required class="form-control"/> </td></tr>
<tr><td>Profile :</td><td><input type="file" name="txtpic"  class="form-control"/> </td></tr>

 <tr><td>Type:</td><td>
                    <select class="form-control" name="seltype">
                    <option value="0">--Select--</option>
                    <option value="student">Student</option>
                    <option value="staff">Staff</option>
                    
                    </select>
</td></tr>
<tr><td>Bus Id:</td><td><input type="number" name="txtbid"  required class="form-control"/> </td></tr>
<tr><td>Arrival Station:</td><td><input type="text" name="txtarr"  required class="form-control"/> </td></tr>

<tr><td colspan="2"><input type="submit" name="btninsert" value="INSERT" class="form-control btn btn-info "/></td></tr>
</div>
</form>
</table></div>
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Your Page Content Here -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
      
  <?php require 'bottom.php'; ?>