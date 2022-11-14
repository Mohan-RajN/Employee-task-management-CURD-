<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View  Task Details</h1>
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
        <div class="card-body table-responsive p-0" style="height: 300px;">
            <table class="table table-head-fixed text-nowrap">
                <thead> 
                    <tr>
                        <th>S No.</th>
                        <th>Project Name</th>
                        <th>Task Name</th>
                        <th>Task Details</th>
                        <th>Task Assigned From</th>
                        <th>Task Assigned To</th>
                        <th>Time For The Hours</th>
                        <th>Spending Time With Task</th>
                        <th>Task Started Date</th>
                        <th>Task Completed Date</th>
                        <th>Task Status</th>
                        <th>Comment Status</th>
                        <th>Comment</th>
                        <th>update</th>
                        <th>Delete</th>
                    </tr>
                </thead>
                <?php
                $i=1;
                foreach($data as $row)
                {
                    echo "<tr>";
                    echo "<td>".$i."</td>";
                    echo "<td>".$row->project_name."</td>";
                    echo "<td>".$row->task_name."</td>";
                    echo "<td>".$row->task_details."</td>";
                    echo "<td>".$row->name."</td>";
                    echo "<td>".$row->task_assigned_to."</td>";
                    echo "<td>".$row->time_for_the_hours."</td>";
                    echo "<td>".$row->spending_time_with_task."</td>";
                    echo "<td>".$row->task_started_date."</td>";
                    echo "<td>".$row->task_completed_date."</td>";
                    echo "<td>".$row->task_status."</td>";
                    echo "<td>".$row->comment_status."</td>";
                    echo "<td><a href='comment?id=".$row->id."'>Comment</a></td>";
                    echo "<td><a href='updatetask?id=".$row->id."'>Update</a></td>";
                    echo "<td><a href='deletetask?id=".$row->id."'>Delete</a></td>";
                    echo "</tr>";
                    $i++;
                }

                ?>
                
            </table>
        </div>
    </section>
</div>
</div>
</div>


<?php $this->load->view('include/footer'); ?>



