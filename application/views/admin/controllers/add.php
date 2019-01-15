<div class="panel panel-light">
    <div class="panel-heading">
        Tambah Controllers
    </div>
    <div class="panel-body">
      <div id="the-message"></div>
        <form role="form" method="POST" action="<?= base_url('controllers_crud/add');?>" id="form_controllers">
            <div class="form-group">
                <label for="exampleInputEmail1">Controller</label>
                <input type="text" class="form-control" id="controller" name="controller" placeholder="Nama controller" style="width:335px;">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Role Akses</label>
                <select class="form-control select2-demo" id="akses" name="akses" style="width:335px;">
                  <?php foreach ($role_user as $k) {?>
                    <option value="<?php echo $k->id?>"><?= $k->nama_akses?></option>
                  <?php }?>
                </select>
            </div>
            <button type="submit" class="btn btn-info btn-pretty">Add</button>
        </form>
    </div>
</div>
<?php $this->load->view($script_apps);?>
<script type="text/javascript">
   $('#form_controllers').submit(function(e){
    e.preventDefault();

    var me = $(this);

    $.ajax({
        url: me.attr('action'),
        type: 'POST',
        data: me.serialize(),
        dataType: 'JSON',
        success: function(response){
          console.log(response);
          if (response.success == true) {
                    window.location.href = response.redirect_url;
                }
                else {
                    $.each(response.messages, function(key, value) {
                        var element = $('#' + key);

                        element.closest('div.form-group')
                        .removeClass('has-error')
                        .addClass(value.length > 0 ? 'has-error' : 'has-success')
                        .find('.text-danger')
                        .remove();

                        element.after(value);
                    });
                }
        }
    });
</script>