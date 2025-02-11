<div class="row">

   <div class="container white-container">

    <!-- Head title -->
    <div class="row">
        <div class="col-md-6">
            <h3 class="head-title"><span class="glyphicon glyphicon-play"></span> <?php echo $title; ?></h3>
        </div>

        <div class="col-md-6">
            <a href="<?php echo site_url().'/users'; ?>" class="pull-right"><i class="glyphicon glyphicon-arrow-left"></i> Kembali ke daftar pengguna</a>
        </div>
    </div>

    <hr class="hr-head-title">  

    <?php 
    echo $this->session->flashdata('action_status');
    ?>

    <?php echo form_open('create_user',array( "class" => "form-horizontal form-validasi" ) ); ?>

    <div class="form-group">
        <label for="nama depan" class="col-md-4 control-label required">Nama depan</label>
        <div class="col-md-4">
            <input type="text" name="first_name" value="<?php echo $this->form_validation->set_value('first_name');?>" class="form-control" id="nama_depan" autofocus="autofocus"/>
            <?php
                echo form_error('first_name', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="nama belakang" class="col-md-4 control-label">Nama belakang</label>
        <div class="col-md-4">
            <input type="text" name="last_name" value="<?php echo $this->form_validation->set_value('last_name');?>" class="form-control" id="nama_depan"/>
            <?php
                echo form_error('last_name', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="email" class="col-md-4 control-label required">Email</label>
        <div class="col-md-4">
            <input type="email" name="email" value="<?php echo $this->form_validation->set_value('email');?>" class="form-control" id="email"/>
            <?php
                echo form_error('email', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="telepon" class="col-md-4 control-label required">Telepon</label>
        <div class="col-md-4">
            <input type="text" name="phone" value="<?php echo $this->form_validation->set_value('phone');?>" class="form-control" id="telepon"/>
            <?php
                echo form_error('phone', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <?php echo form_hidden('company', ''); ?>

    <div class="form-group">
        <label for="password" class="col-md-4 control-label required">Password</label>
        <div class="col-md-4">
            <input type="password" name="password" class="form-control required" id="password" placeholder="minimal 8 karakter" />
            <?php
                echo form_error('password', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="password_confirm" class="col-md-4 control-label required">Konfirmasi password</label>
        <div class="col-md-4">
            <input type="password" name="password_confirm" class="form-control" id="password_confirm" placeholder="minimal 8 karakter" />
            <?php
                echo form_error('password_confirm', '<label for="emailaddress" class="error" style="display: block">', '</label>');
            ?>
        </div>
    </div>

    <div class="form-group">
        <label for="level user" class="col-md-4 control-label required">Level user</label>
        <div class="col-md-4">
            <?php  
            $daftar_level = get_daftar_groups();
            echo form_dropdown('level_user[]', $daftar_level, '', 'class="form-control"');
            ?>
            <small class="help-span">Level admin dapat mengakses semua fitur</small>
        </div>
    </div>

    <!-- Submit button -->
    <div class="row">
        <div class="col-md-12">
            <div class="save-cancel well text-right">
                <input type="submit" value="Submit" class="btn btn-success submit-btn btn-md"/>
                &nbsp;
                <a href="<?php echo site_url().'/users'; ?>" class="btn">Batal</a>
            </div>              
        </div>
    </div>

    <?php echo form_close(); ?>

</div>
</div>