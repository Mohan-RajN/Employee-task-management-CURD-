<?php $this->load->view('include/header'); ?>
<?php $this->load->view('include/sidemenu'); ?>
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
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Comment</h1>
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
                <form method="post" action="">
                    <div class="row">
                        <div class="col-25">
                            <label for="">Comment Status</label>
                        </div>
                        <div class="col-75">
                            <input type="text" name="comment_status">
                        </div>
                    </div>
                    <input type="reset" name="Reset" value="Reset">
                    <input type="submit" name="comment" value="comment">
                </form>
                </tr>
                </table>
                </form>


            </div>
        </div>
    </section>
</div>

</div>
</div>

<!-- /.card-body -->

<!-- /.card -->

</section>
<!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php $this->load->view('include/footer'); ?>