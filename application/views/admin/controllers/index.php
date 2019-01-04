 <!-- modal add -->
<div class="modal fade" id="ModalaAdd" tabindex="-1" role="dialog" aria-labelledby="largeModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
          <h3 class="modal-title" id="myModalLabel">Tambah Controller</h3>
      </div>
      <form class="form-horizontal" action="<?= base_url('controllers_crud/add');?>" method="POST" >
          <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Controller</label>
                <div class="col-xs-9">
                    <input name="controller" id="controller" class="form-control" type="text" placeholder="nama controller" style="width:335px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Role Akses</label>
                <div class="col-xs-9">
                    <select class="form-control select2-demo" id="akses" name="akses" style="width:335px;">
                      <?php foreach ($role_user as $k) {?>
                        <option value="<?php echo $k->id?>"><?= $k->nama_akses?></option>
                      <?php }?>
                    </select>
                </div>
            </div>

          </div>

          <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <input type="submit" name="submit" class="btn btn-info" value="simpan">
          </div>
      </form>
    </div>
  </div>
</div>

<!-- modal edit -->
<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="item_edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">×</button>
                <h4 class="modal-title">Edit</h4>
            </div>
           <form class="form-horizontal" action="<?= base_url('controllers_crud/add');?>" method="POST" >
          <div class="modal-body">

            <div class="form-group">
                <label class="control-label col-xs-3" >Controller</label>
                <div class="col-xs-9">
                    <input name="controller" id="controller" class="form-control" type="text" placeholder="nama controller" style="width:335px;" required>
                </div>
            </div>

            <div class="form-group">
                <label class="control-label col-xs-3" >Role Akses</label>
                <div class="col-xs-9">
                    <select class="form-control select2-demo" id="akses" name="akses" style="width:335px;">

                      <?php foreach ($role_user as $k) {?>
                        <option value="<?php echo $k->id?>"><?= $k->nama_akses?></option>
                      <?php }?>
                    </select>
                </div>
            </div>

          </div>

          <div class="modal-footer">
              <button class="btn" data-dismiss="modal" aria-hidden="true">Tutup</button>
              <input type="submit" name="submit" class="btn btn-info" value="simpan">
          </div>
      </form>
        </div>
    </div>
</div>
<!-- table -->
<div class="row">
    <h1 class="page-header">Data
      <small>Controllers</small>
      <div class="pull-right">
        <a href="#" class="btn btn-sm btn-success" data-toggle="modal" data-target="#ModalaAdd">
          <span class="fa fa-plus"></span> Tambah Controllers
        </a>
      </div>
    </h1>
  </div>
</div>
<div class="panel-body">
  <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
      <thead>
          <tr>
              <th>No</th>
              <th>Controller</th>
              <th>Aksess</th>
              <th>Action</th>
          </tr>
      </thead>

    <tbody id="show_data">
        
    </tbody>
  </table>
  
<?php $this->load->view($script_apps);?>
<script type="text/javascript">
  $(document).ready(function(){
    view(); 
    
    $('#mydata').dataTable();
     
    //fungsi tampil 
    function view(){
        $.ajax({
            type  : 'ajax',
            url   : '<?php echo base_url()?>controllers_crud/get_data',
            async : false,
            dataType : 'json',
            success : function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<tr>'+
                          '<td>'+data[i].id+'</td>'+
                            '<td>'+data[i].controller+'</td>'+
                            '<td>'+data[i].akses+'</td>'+
            
                            '<td style="text-align:right; width:150px;">'+
                                    '<a href="javascript:;" class="btn btn-info item_edit btn-sm" data-id="'+data[i].id+'" data-controller="'+data[i].controller+'" data-akses="'+data[i].akses+'" data-toggle="modal" data-target="#item_edit"><i class="fa fa-edit"></i>Edit</a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger item_hapus btn-sm" data-id="'+data[i].id+'"><i class="fa fa-trash"></i>Hapus</a>'+
                                '</td>'+
                            '</tr>';
                }
                $('#show_data').html(html);
            }

        });
    }

  });
</script>
<script>
    $(document).ready(function() {

        $('#item_edit').on('show.bs.modal', function (event) {
            var div = $(event.relatedTarget) 
            var modal          = $(this)
            modal.find('#controller').attr("value",div.data('controller'));
            modal.find('#akses').attr("value",div.data('akses'));
           
        });

         
    });
</script>