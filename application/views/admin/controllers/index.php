<!-- table -->
<div class="row">
    <h1 class="page-header">Data
      <small>Controllers</small>
      <div class="pull-right">
        <a href="#controllers_crud/add" class="btn btn-sm btn-success">
          <span class="fa fa-plus"></span> Tambah Controllers
        </a>
      </div>
    </h1>
  </div>
</div>

<div class="panel panel-light" id="pendaftar">
  <div class="panel-heading">
      <div class="panel-title">
          <h4>Table</h4>
      </div>
  </div>
  <div class="panel-body">
    <table id="data-table-example1" class="display table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>Controller</th>
                <th>Aksess</th>
                <th style="width: 150px">Action</th>
            </tr>
        </thead>

        <?php $no = 1 ;foreach ($table as $k) {?>
        <tbody>
            <td><?= $no++;?></td>
            <td><?= $k->controller;?></td>
            <td><?= $k->akses;?></td>
            <td>
              <a href             ="javascript:;" 
                 data-id          ="<?php echo $k->id ?>"
                 data-controller  ="<?php echo $k->controller ?>"
                 data-akses       ="<?php echo $k->akses ?>"
                 data-toggle      ="modal" 
                 data-target      ="#edit-data"
                 class="edit-modal btn btn-warning btn-sm">
                  <i class="glyphicon glyphicon-pencil"></i> 
              </a>
              <a href             ="javascript:;" 
                 data-id          ="<?php echo $k->id ?>"
                 data-toggle      ="modal" 
                 data-target      ="#delete-data"
                 class="edit-modal btn btn-danger btn-sm">
                  <i class="fa fa-trash"></i> 
              </a> 
            </td>        
        </tbody>
        <?php }?>
    </table>
  </div>
</div>
  
<?php $this->load->view($script_apps);?>
