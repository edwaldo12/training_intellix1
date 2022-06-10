<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Tambah User Ecentrix</h1>
            </div>
        </div>
    </div>
</div>

<section class="content">
    <div class="container-fluid">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Tambah User</h3>
                </div>
                <form method="POST" action="<?php echo base_url('user/storeUser') ?>">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="username">Username</label>
                                    <input type="text" class="form-control" id="username" placeholder="Masukkan Username" name="username">
                                    <div style="color:red">
                                        <?php echo form_error('username'); ?>
                                    </div>
                                </div>
                            </div>
                            <div class=" col-md-12">
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" class="form-control" id="password" placeholder="Masukkan password" name="password">
                                    <div style="color:red">
                                        <?php echo form_error('password'); ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=" card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>