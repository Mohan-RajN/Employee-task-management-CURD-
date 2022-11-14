<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Task Details</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?= base_url() ?>user/home">Home</a></li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>
    <style>
        .container {
            border-radius: 5px;
            background-color: #f2f2f2;
            padding: 20px;
        }

        .col-25 {
            float: left;
            width: 25%;
            margin-top: 6px;
        }

        .col-75 {
            float: left;
            width: 75%;
            margin-top: 6px;
        }
    </style>
    <!-- Main content -->
    <section class="content">
        <?php
        $i = 1;
        foreach ($data as $row) {
        ?>

            <div class="card-header">

                <div class="container">
                    <form method="post" action="">
                        <div class="row">
                            <div class="col-25">
                                <label for="fname">Project Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="project_name" value="<?php echo $row->project_name; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="lname">Task Name</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="task_name" value="<?php echo $row->task_name; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="number">Task Details</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="task_details" value="<?php echo $row->task_details; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="address">Task Assigned From</label>
                            </div>
                            <div class="col-75">
                                <input type="number" name="task_assigned_from" value="<?php echo $row->task_assigned_from; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="task_assigned_to">Task Assigned To</label>
                            </div>
                            <div class="col-75">
                                <input type="text" name="task_assigned_to" value="<?php echo $row->task_assigned_to; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="text">Time For the Hours</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="time_for_the_hours" value="<?php echo $row->time_for_the_hours; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Spending Time With Task</label>
                            </div>
                            <div class="col-75">
                                <input type="time" name="spending_time_with_task" value="<?php echo $row->spending_time_with_task; ?>">
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-25">
                                <label for="">Task Started date</label>
                            </div>
                            <div class="col-75">
                                <input type="date" name="task_started_date" value="<?php echo $row->task_started_date; ?>">
                            </div>
                        </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="">Task Complete date</label>
                                </div>
                                <div class="col-75">
                                    <input type="date" name="task_completed_date" value="<?php echo $row->task_completed_date; ?>">
                                </div>
                            </div>
                                <div class="row">
                                    <div class="col-25">
                                        <label for="">Task Status</label>
                                    </div>
                                    <div class="col-75">
                                        <select name="task_status" id="task_status">
                                            <option value="0"></option>
                                            <option value="On process">On process</option>
                                            <option value="Complete">Complete</option>
                                            <option value="Pending">Pending</option>
                                            <option value="Almost Completed">Almost Completed</option>
                                        </select>
                                    </div>
                                    <div class="row">
                                        <input type="reset" name="Reset" value="Reset">
                                        <input type="submit" name="task" value="update">
                                    </div>
                    </form>
                <?php
            }
                ?>
                </div>
            </div>
    </section>
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php $this->load->view('include/footer'); ?>