<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>View list User Details</h1>
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
                        <th>User Id</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Mobile Number</th>
                        <th>Address</th>
                        <th>Role Id</th>
                        <th>Department</th>
                        <th>IS Active Status</th>
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
                    echo "<td>".$row->name."</td>";
                    echo "<td>".$row->email."</td>";
                    echo "<td>".$row->number."</td>";
                    echo "<td>".$row->address."</td>";
                    echo "<td>".$row->role_id."</td>";
                    echo "<td>".$row->department."</td>";
                    echo "<td>".$row->is_active_status."</td>";
                    echo "<td><a href='updatedata?id=".$row->id."'>Update</a></td>";
                    echo "<td><a href='deletedata?id=".$row->id."'>Delete</a></td>";
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



