  @extends('layouts.adminMaster')
   @section('content')
<?php
/*  echo '<pre>';
      print_r($users);
echo '</pre>';
      die;*/
?>
   <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Members
        <small>All</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Tables</a></li>
        <li class="active">Members</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Data Table With Full Features</h3>
            </div>

        
         
            <!-- /.box-header -->
            <div class="box-body">
              <div id="filtered_append">
              <table id="example2" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>S.no</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Email</th>
                  <th>Action</th>
                  
                </tr>
                </thead>
                <tbody>

                  <?php foreach ($users['details'] as $key => $value) {
                    # code...
                  ?>
                <tr>
                  <td>{{ $key+1 }}</td>
                  <td>{{ $value['full_name'] }}</td>
                  <td>{{ $value['type'] }}</td>                
                  <td>{{ $value['email_id'] }}</td>
                  <td>
                    <a href="#" data-id="{{ $value['temp_id']  }}" onclick="get_followup(this)">Followup</a><br>
                    <a href="#" data-id="{{ $value['temp_id']  }}" onclick="get_sold(this)">Sold</a>
                  </td>

                </tr>
              <?php } ?>
                </tbody>
                <tfoot>
                <tr>
             <th>S.no</th>
                  <th>Fullname</th>
                  <th>Role</th>
                  <th>Date Joined</th>
                  <th>Email</th>
                  <th>Phone number</th>
                  <th>city</th>
                  <th>Action</th>
                </tr>
                </tfoot>
              </table>
            </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
  </div>

<div id="followup_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Follow up</h4>
      </div>
      
        <!-- Chat box -->
          <div class="box box-success">
               <div class="box-header">
              

              <h3 class="box-title"></h3>
            </div>
            
           <div id="follow_up_append_data">
          </div>
            <div class="box-footer">
              <div class="input-group">
                <input class="form-control" id="followup_text" placeholder="Type followup comment...">

                <div class="input-group-btn">
                  <button type="button" data-parent="" id="send_followup" onclick="send_followup(this)" class="btn btn-success"><i class="fa fa-plus"></i></button>
                </div>
              </div>
            </div>
        
          <!-- /.box (chat box) -->
    
    </div>

  </div>
</div>
</div>



<div id="sold_modal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Sold</h4>
      </div>
      <div class="modal-body">
 <div id="sold_append_data"></div>
      </div>
      <div class="modal-footer">
        <button type="button" data-parent="" class="btn btn-default" id="update_sold">Update</button>
      </div>
    </div>

  </div>
</div>

<script> 
$(document).ready(function(){
  $('#example2').DataTable();

});
</script>


  @stop