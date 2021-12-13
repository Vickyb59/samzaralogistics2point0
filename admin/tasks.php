<?php include 'includes/session.php'; ?>
<?php include 'includes/header.php'; ?>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <?php include 'includes/navbar.php'; ?>
  <?php include 'includes/menubar.php'; ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        All Tasks
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li class="active">All Tasks</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <?php
        if(isset($_SESSION['error'])){
          echo "
            <div class='alert alert-danger alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-warning'></i> Error!</h4>
              ".$_SESSION['error']."
            </div>
          ";
          unset($_SESSION['error']);
        }
        if(isset($_SESSION['success'])){
          echo "
            <div class='alert alert-success alert-dismissible'>
              <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>&times;</button>
              <h4><i class='icon fa fa-check'></i> Success!</h4>
              ".$_SESSION['success']."
            </div>
          ";
          unset($_SESSION['success']);
        }
      ?>
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-body">
              <table id="example1" class="table table-bordered">
                <thead>
                  <th>Title</th>
                  <th>Assignee</th>
                  <th>Manager</th>
                  <th>Status</th>
                  <th>Date Delegated</th>
                  <th>Tools</th>
                </thead>
                <tbody>
                  <?php
                    $conn = $pdo->open();

                    try{
                      $stmt = $conn->prepare("SELECT * FROM task LEFT JOIN users ON task.user_id=users.id LEFT JOIN project_manager ON task.pm_id=project_manager.pm_id");
                      $stmt->execute();
                      foreach($stmt as $row){

                        echo "
                          <tr>
                            <td>".$row['task_title']."</td>
                            <td>".$row['full_name']."</td>
                            <td>".$row['pm_name']."</td>
                            <td>".$row['task_status']."</td>
                            <td>".date('M d, Y', strtotime($row['task_delegate_date']))."</td>
                            <td>
                              <a href='task_view.php?task_id=".$row["task_id"]."' class='btn btn-primary btn-sm btn-flat'><i class='fa fa-eye'></i> V-Task</a>
                              <button class='btn btn-info btn-sm edit btn-flat' data-id='".$row['task_id']."'><i class='fa fa-edit'></i> Edit</button>
                              <button class='btn btn-danger btn-sm delete btn-flat' data-id='".$row['task_id']."'><i class='fa fa-trash'></i> Delete</button>
                            </td>
                          </tr>
                        ";
                      }
                    }
                    catch(PDOException $e){
                      echo $e->getMessage();
                    }

                    $pdo->close();
                  ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </section>
     
  </div>
  	<?php include 'includes/footer.php'; ?>
    <?php include 'includes/task_modal.php'; ?>

</div>
<!-- ./wrapper -->

<?php include 'includes/scripts.php'; ?>
<script>
$(function(){

  $(document).on('click', '.edit', function(e){
    e.preventDefault();
    $('#edit').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $(document).on('click', '.delete', function(e){
    e.preventDefault();
    $('#delete').modal('show');
    var id = $(this).data('id');
    getRow(id);
  });

  $("#edit").on("hidden.bs.modal", function () {
      $('.append_items').remove();
  });

});

function getRow(id){
  $.ajax({
    type: 'POST',
    url: 'task_row.php',
    data: {id:id},
    dataType: 'json',
    success: function(response){
      $('.task_title').html(response.task_title);
      $('.task_id').val(response.task_id);
      $('.user_id').val(response.user_id);
      $('#pmselected').val(response.pm_id).html(response.pm_name);
      $('#edit_task_title').val(response.task_title);
      $('#edit_task_delegate_date').val(response.task_delegate_date);
      $('#edit_task_submit_date').val(response.task_submit_date);
      $('#edit_task_description_summary').val(response.task_description_summary);
      $('#edit_task_status').val(response.task_status);
      CKEDITOR.instances["editor2"].setData(response.task_description);
      getProjectManager();
    }
  });
}

function getProjectManager(){
  $.ajax({
    type: 'POST',
    url: 'manager_fetch.php',
    dataType: 'json',
    success:function(response){
      $('#manager').append(response);
      $('#edit_manager').append(response);
    }
  });
}
</script>
</body>
</html>
