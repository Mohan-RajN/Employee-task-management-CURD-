<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add User Details</h1>
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

        <!-- Default box -->
        <div class="card">
            <div class="card-header">

                <div class="container">
                    <?php
                    $i = 1;
                    foreach ($data as $row) {
                    ?>
                        <form method="post" action="">
                        <!-- <div class="row">
                                <div class="col-25">
                                    <label for="fname">User Id</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="user_id" placeholder="Enter your ID.." value="<?php echo $row->user_id; ?>">
                                </div>
                            </div> -->
                            <div class="row">
                                <div class="col-25">
                                    <label for="fname">Name</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="fname" name="name" placeholder="Enter your Name.." value="<?php echo $row->name; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="lname">Email</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="lname" name="email" placeholder="Enter your Email" value="<?php echo $row->email; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="number">Number</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="number" name="number" placeholder="Enter your Number" value="<?php echo $row->number; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="address">Address</label>
                                </div>
                                <div class="col-75">
                                    <input type="text" id="address" name="address" placeholder="Enter your Address" value="<?php echo $row->address; ?>">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="role_id">Role Id</label>
                                </div>
                                <div class="col-75">
                                    <select name="role_id" id="role_id">
                                        <option value="0"></option>
                                        <option value="1">Admin</option>
                                        <option value="2">Manager</option>
                                        <option value="3">Employee</option>
                                    </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                <label for="department">Department</label>
                                </div>
                                <div class="col-75">
                                <select name="department" id="department">
                                <option value="company">company</option>
                                    <option value="IT team">IT team</option>
                                    <option value="Development">Development</option>
                                    <option value="Operation">Operation</option>
                                    <option value="HR dept">HR dept</option>
                                    <option value="Sale Marketing">Sale Marketing</option>
                                    <option value="Finance">Finance</option>
                                </select>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="text">Is Active status</label>
                                </div>
                                <div class="col-75">
                                    <input type="radio" id="is_active_status" name="is_active_status" value="1">
                                    <label for="Active">Active</label><br>
                                    <input type="radio" id="is_active_status" name="is_active_status" value="0">
                                    <label for="InActive">InActive</label><br>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-25">
                                    <label for="password">Password</label>
                                </div>
                                <div class="col-75">
                                    <input type="password" id="password" name="password" placeholder="Enter your Password">
                                </div>
                            </div>

                            <div class="row">
                            <input type="reset" name="Reset" value="Reset">
                                <input type="submit" value="Submit">
                            </div>
                        </form>

                    <?php

                    }
                    ?>
                </div>

            </div>
        </div>
    </section>
</div>


</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php $this->load->view('include/footer'); ?>