
<div class="row" id = "table-holder">
  <div class="col-md-12">
    <div class="block-flat">
      <div class="header">              
        <h3>List of all Estates</h3>
        <div class = ''><button type="button" class="btn btn-success btn-flat"><i class="fa fa-th"></i> Switch to <span id = "view_type">Grid</span> View</button></div>
      </div>
      <div class="content">
        <div class="table-responsive">
          <table class="table table-bordered" id="datatable" >
            <thead>
              <th>No.</th>
              <th>Name</th>
              <th>Location</th>
              <th>Description</th>
              <th>Profile</th>
              <th>Delete</th>
            </thead>
            <tbody>
              <?php echo $estate_table; ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
$(document).ready(function(){
  $('#datatable').dataTable();
  $('.dataTables_filter input').addClass('form-control').attr('placeholder','Search');
  $('.dataTables_length select').addClass('form-control');
});
  
</script> 