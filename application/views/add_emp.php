
  <?php $this->load->view('include/header'); ?>
  <?php $this->load->view('include/sidemenu'); ?>
  
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Employee Details</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?= base_url()?>user/home">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
           
          <form method="post" action="<?= base_url()?>task/savedata">
    <table>
        <tr>
            <td >User Id</td>
            <td><input type="text" name="user_id"></td>
        </tr>
        <tr>
            <td >Task Details</td>
            <td ><input type="text" name="task_details"> </td>
        </tr>
        <tr>
            <td >Task Assigned To</td>
            <td  ><input type="text" name="task_assigned_to"> </td>
        </tr>
        <tr>
            <td >Task Assigned From</td>
            <td ><input type="text" name="task_assigned_from"> </td>
        </tr>
        <tr>
            <td >Task Status</td>
            <td ><select name="task_status" id="task_status">
                <option value="0"></option>
                <option value="6">New Task</option>
                <option value="7">Finish</option>
                <option value="8">Pending</option>
                <option value="9">Almost Completed</option>
                </select>
            </td>
        </tr>
        <tr>
            <td >Task Started Date</td>
            <td ><input type="date" name="task_started_date"> </td>
        </tr>
        <tr>
            <td >Task Completed Date</td>
            <td ><input type="date" name="task_completed_date"> </td>
        </tr>
        <tr>
            <td >Time For The Hours</td>
            <td ><input type="time" name="time_for_the_hours"> </td>
        </tr>
        <tr>
            <td >Spending Time With Task</td>
            <td ><input type="time" name="spending_time_with_task"> </td>
        </tr>
        <tr>
          <td><input type="submit" name="save" value="save"></td>   
        </tr>
    </table>
    </form>
        </div>
      </div>
        <div class="card-body">
        
        </div>
        <!-- /.card-body -->
        <div class="card-footer">
          Footer
        </div>
        <!-- /.card-footer-->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->


  <?php $this->load->view('include/footer'); ?>


 