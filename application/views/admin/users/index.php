<div class="row">
    <div class="pull-right">
        <a href="<?= base_url('create_user');?>" class="btn btn-sm btn-success">
            <span class="fa fa-plus"></span> Tambah User
        </a>
    </div>
    <div class="col-sm-12">
        <h4 class="m-t-0 header-title">Data Users</h4>
        <div class="table-responsive m-b-20">
            <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                <thead>
                <tr>
                    <th>No</th>
                    <th>Username</th>
                    <th>Email</th>
                    <th>IP Address</th>
                    <th>Phone</th>
                    <th>Active</th>
                    <th>Aksi</th>
                </tr>
                </thead>
                <tbody id="show_data">
                </tbody>
            </table>
        </div>
    </div>
</div>
<script type="text/javascript">
    $(document).ready(function(){
        show_data(); 
        function show_data(){
            $.ajax({
                type    : 'ajax',
                url     : '<?php echo base_url()?>users/view',
                async   : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no  =1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no+++'</td>'+
                                '<td>'+data[i].username+'</td>'+
                                '<td>'+data[i].email+'</td>'+
                                '<td>'+data[i].ip_address+'</td>'+
                                '<td>'+data[i].phone+'</td>'+
                                '<td>'+data[i].active+'</td>'+
                               
                                '<td style="text-align:right;">'+
                                    '<a href="<?php echo base_url('edit_user/');?>'+data[i].id+'" class="btn btn-info" data="'+data[i].id+'"><i class="fa fa-edit"></i></a>'+' '+
                                    '<a href="javascript:;" class="btn btn-danger" data="'+data[i].id+'"><i fa class="fa fa-trash"></i></a>'+
                                '</td>'+
                                '</tr>';
                    }
                    $('#show_data').html(html);
                }
            });
        }
    });
</script>