<?php require 'top.php'; ?>

      
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      
      <!-- code here --> 
   
      
<table class="table">
<form method="post" action="bus_insert_code.php" enctype="multipart/form-Data">
<div class="form-group">
<tr><td>Bus Id:</td><td><input type="text" name="txtid" required  class="form-control" /> </td></tr>
<tr><td>Name:</td><td><input type="text" name="txtnm" required  class="form-control" /> </td></tr>
<tr><td>Driver Id:</td><td><input type="text" name="txtdrid" required  class="form-control" /> </td></tr>
<tr><td>Bus Fees:</td><td><input type="text" name="txtfees" required  class="form-control" /> </td></tr>
<tr><td>Bus Route :</td><td><textarea name="txtroute" rows="5" cols="5" class="form-control"/></textarea> </td></tr>


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