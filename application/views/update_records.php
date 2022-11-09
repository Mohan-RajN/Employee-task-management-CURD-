<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Update Employee Details</h1>
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
<!--      
        <div class="card-body">
            <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 150px;">
                    <input type="text" name="table_search" class="form-control float-right" placeholder="Search">

                    <div class="input-group-append">
                        <button type="submit" class="btn btn-default">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>
            </div>
        </div> -->
        <!-- /.card-header -->
       
        <?php
            $i=1;
            foreach($data as $row)
            {
            ?>
          <form method="post">
    <table colspan="2" align="center">
        <tr>
            <td >User Id</td>
            <td><input type="text" name="user_id" value="<?php echo $row->user_id; ?>"></td>
        </tr>
        <tr>
            <td >Task Details</td>
            <td ><input type="text" name="task_details" value="<?php echo $row->task_details; ?>"> </td>
        </tr>
        <tr>
            <td >Task Assigned To</td>
            <td  ><input type="text" name="task_assigned_to" value="<?php echo $row->task_assigned_to; ?>"> </td>
        </tr>
        <tr>
            <td >Task Assigned From</td>
            <td ><input type="text" name="task_assigned_from" value="<?php echo $row->task_assigned_from; ?>"> </td>
        </tr>
        <tr>
            <td >Task Status</td>
            <td ><select name="task_status" id="task_status" value="<?php echo $row->task_status; ?>">
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
            <td ><input type="date" name="task_started_date" value="<?php echo $row->task_started_date;?>"> </td>
        </tr>
        <tr>
            <td >Task Completed Date</td>
            <td ><input type="date" name="task_completed_date" value="<?php echo $row->task_completed_date;?>"> </td>
        </tr>
        <tr>
            <td >Time For The Hours</td>
            <td ><input type="time" name="time_for_the_hours" value="<?php echo $row->time_for_the_hours; ?>"> </td>
        </tr>
        <tr>
            <td >Spending Time With Task</td>
            <td ><input type="time" name="spending_time_with_task" value="<?php echo $row->spending_time_with_task; ?>"> </td>
        </tr>
        <tr>
          <td colspan="1" align="center">
          <input type="submit" name="update" value="Update_Records">
        </td>   
        </tr>
    </table>
    </form>
     
    <?php

            }
            ?>
        </div>
    </section>
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



