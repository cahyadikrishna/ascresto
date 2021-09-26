<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>ASC Resto || Admin - Tables</title>

<?php $this->load->view('admin/_partials/head') ?>

 <body id="page-top">

  <?php $this->load->view('admin/_partials/nav') ?>

    <div id="wrapper">

      <!-- Sidebar -->
    <?php $this->load->view('admin/_partials/sidebar') ?>

<div id="content-wrapper">

        <div class="container-fluid">

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="#">Home</a>
            </li>
            <li class="breadcrumb-item active">Tables</li>
          </ol>

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Tables</div>
            <div class="card-body">
              <div class="card-header">
            <a href="<?php echo site_url('admin/room/add') ?>"><i class="fas fa-plus"></i> Add New</a>
          </div>
          <br>
              <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                    <tr>
                      <th>Room Image</th>
                      <th>Room ID</th>
                      <th>Room Name</th>
                      <th>Room No</th>
                      <th>Room Price</th>
                      <th>Available From</th>
                      <th>Available Until</th>
                      <th>Status</th>
                      <th>Action Button</th>
                    </tr>
                  </thead>
                  <tfoot>
                    <tr>
                      <th>Room Image</th>
                      <th>Room ID</th>
                      <th>Room Name</th>
                      <th>Room No</th>
                      <th>Room Price</th>
                      <th>Available From</th>
                      <th>Available Until</th>
                      <th>Status</th>
                      <th>Action Button</th>
                    </tr>
                  </tfoot>
                  <tbody>
                    
                    <?php foreach ($room as $room): ?>
                  <tr>
                    <td>
                      <img src="<?php echo base_url('upload/room/'.$room->room_img) ?>" width="170" />
                    </td>
                    <td width="100" style="text-align: center;">
                      <?php echo $room->room_id ?>
                    </td>
                    <td width="160">
                      <?php echo $room->room_name ?>
                    </td>
                    <td width="160">
                      <?php echo $room->room_no ?>
                    </td>
                    <td width="150" style="text-align: center;">
                      <?php echo $room->room_price ?>
                    </td>
                    <td width="150" style="text-align: center;">
                      <?php echo $room->available_from ?>
                    </td>
                    <td width="150" style="text-align: center;">
                      <?php echo $room->available_until ?>
                    </td>
                    <td width="150" style="text-align: center;">
                      <?php echo $room->status ?>
                    </td>
                    <td width="200">
                      <a href="<?php echo site_url('admin/food/edit/'.$room->room_id) ?>"
                       class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>

                  <a onclick="deleteConfirm('<?php echo site_url('admin/room/delete/'.$room->room_id) ?>')"
                       href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
                    </td>
                  </tr>
                  <?php endforeach; ?>

                  </tbody>
                </table>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>
          </div>

          <?php $this->load->view('admin/_partials/stickyfoot') ?>

           <?php $this->load->view('admin/_partials/footer') ?>

    <?php $this->load->view('admin/_partials/modal.php') ?>

     <script>
function deleteConfirm(url){
  $('#btn-delete').attr('href', url);
  $('#deleteModal').modal();
}
</script>
           
            </body>

</html>