<?php $this->load->view('admin/theme/header');?>
<!-- Left side column. contains the logo and sidebar -->
<?php $this->load->view('admin/theme/sidebar');?>

<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <!-- Main content -->
  <section class="content">
    <section class="content-header">
      <h1>
      Category
      <small>add</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">Category</li>
      </ol>
    </section>
    
    <!-- /.row (main row) -->
    <div class="panel panel-info">
      <div class="panel-heading">Form  <a href="<?php echo base_url("admin/category/category_list"); ?>" class="pull-right"> Back</a> </div>
      <div class="panel-body">
        
        <div  class="row" >
          <div class="col-md-2"> </div>
          <div class="col-md-9">
            <form action="category/rec_save" method="post"  id="form_id" enctype="multipart/form-data">
              
              <table class="table responsive form-group">
                               <tr>
                  <td><b> Name<span class="star">*</span>:</b></td><td><input type="text" name="name" required  class="form-control" placeholder=" Enter Category Name" onkeyup ="alia(this.value)">
               

                   </td>
                </tr>

                  <tr>
                  <td><b>Alias<span class="star">*</span> :</b></td><td><input type="text" id="aliasname" name="alias" required  class="form-control">
               

                   </td>
                </tr>
                <tr> <td><b>Parent Name:</b></td><td> <select name="parent_name" class="form-control">
                  <option value="" > Seletct Parent Name </option>
                    <?php foreach ( $data as $key ){ ?>
                            
                    <option value="<?php echo $key['id'];?>">  <?php echo $key['name'];?>  </option>>
                
  <?php  } ?>
            
              </select> </td>
            </tr>
            <tr>
              <td><b>Description<span class="star">*</span>:</b></td><td><textarea  name="description" required   class="form-control ckeditor" placeholder="Enter Description "> </textarea>  </td>
            </tr>
            <tr> <td><b> Image<span class="star">*</span>: </b></td><td> <input type="file" name="image" id="password" class="form-control" required  > </td>
          </tr>
          <tr> <td><b>Alt<span class="star">*</span>:</b></td><td> <input type="text" name="alt" class="form-control"  required placeholder=" Enter Alt Attribute"> </td>
        </tr>
        <tr><td colspan="2"> <input type="submit" name="submit" class="pull-right  btn btn-success"></td></tr>
      </table>
    </form>
  </div>
</div>
</div></div>
</section>



<!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php $this->load->view('admin/theme/footer');?>
<!-- Add the sidebar's background. This div must be placed
immediately after the control sidebar -->
<div class="control-sidebar-bg"></div>
</div>
<!-- ./wrapper -->
<script type="text/javascript">
  function alia(str) {
         str = str.toLowerCase();
         str=str.split(" ");
        str =str.join("-");
      document.getElementById("aliasname").value = str;
  }
</script>