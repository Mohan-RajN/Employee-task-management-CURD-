<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Task Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>user/home">Home</a></li>
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

                <form method="post" action="<?= base_url() ?>task/savedata">
                    <table colspan="2" align="center">
                        <tr>
                            <td>Project Name</td>
                            <td><input type="text" name="project_name"></td>
                        </tr>
                        <tr>
                            <td>Task Name</td>
                            <td><input type="text" name="task_name"> </td>
                        </tr>
                        <tr>
                            <td>Est Time</td>
                            <td><input type="time" name="est_time"> </td>
                        </tr>
                        <tr>
                            <td>Start Date</td>
                            <td><input type="date" name="start_date"> </td>
                        </tr>
                        <!-- <tr>
              <td>Task Status</td>
              <td><select name="task_status" id="task_status">
                  <option value="0"></option>
                  <option value="New Task">New Task</option>
                  <option value="Finish">Finish</option>
                  <option value="Pending">Pending</option>
                  <option value="Almost Completed">Almost Completed</option>
                </select>
              </td>
            </tr> -->
                        <tr>
                            <td>End Date</td>
                            <td><input type="date" name="end_date"> </td>
                        </tr>
                        <tr>
                            <td>Assign Task</td>
                            <td><input type="text" name="assign_task"> </td>
                        </tr>
                        <td colspan="1" align="center"><input type="submit" name="save" value="save"></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </section>
</div>

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