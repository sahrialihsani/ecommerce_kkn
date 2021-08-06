<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
    <!-- Header -->
    <div class="header bg-gradient-primary pb-6">
      <div class="container-fluid">
        <div class="header-body">
          <div class="row align-items-center py-4">
            <div class="col-lg-6 col-7">
              <h6 class="h2 text-white d-inline-block mb-0">Kelola Order Customer</h6>
            </div>
            <div class="col-lg-6 col-5 text-right">
              <nav aria-label="breadcrumb" class="d-none d-md-inline-block ml-md-4">
                <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                  <li class="breadcrumb-item"><a href="#"><i class="fas fa-home"></i></a></li>
                  <li class="breadcrumb-item active" aria-current="page">Order</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Page content -->
    <div class="container-fluid mt--6">
      <div class="row">
        <div class="col">
          <div class="card">
            <!-- Card header -->
            <div class="card-header">
              <h3 class="mb-0">Kelola Order</h3>
            </div>

            <?php if ( count($orders) > 0) : ?>
            <div class="card-body p-0">
                <div class="table-responsive">
              <!-- Projects table -->
              <table class="table align-items-center table-flush" id='orderList'>
                <thead class="thead-light">
                  <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Customer</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Jumlah Item</th>
                    <th scope="col">Jumlah Harga</th>
                    <th scope="col">Metode</th>
                    <th scope="col">Status</th>
                  </tr>
                </thead>
                <tbody>
               
                </tbody>
              </table>
            </div>
                </div>
            
            
            <?php else : ?>
             <div class="card-body">
                <div class="row">
                    <div class="col-md-8">
                        <div class="alert alert-primary">
                            Belum ada data produk yang ditambahkan. Silahkan menambahkan baru.
                        </div>
                    </div>
                    <div class="col-md-4">
                        <a href="<?php echo site_url('admin/products/add_new_product'); ?>"><i class="fa fa-plus"></i> Tambah produk baru</a>
                        <br>
                        <a href="<?php echo site_url('admin/products/category'); ?>"><i class="fa fa-list"></i> Kelola kategori</a>
                    </div>
                </div>
            </div>
            <?php endif; ?>
            
          </div>
        </div>
      </div>

	  
      <link href="<?php echo get_theme_uri('vendor/datatables.net-bs4/css/dataTables.bootstrap4.min.css', 'argon'); ?>" rel="stylesheet">

<script src="<?php echo get_theme_uri('vendor/datatables.net/js/jquery.dataTables.min.js', 'argon'); ?>"></script>
<script src="<?php echo get_theme_uri('vendor/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'argon'); ?>"></script>
<script src="<?php echo base_url('assets/plugins/datatables.lang.js'); ?>"></script>
<script src="http://cdn.datatables.net/plug-ins/1.10.24/dataRender/datetime.js"></script>

<script>
$(document).ready(function() {


    var table = $('#orderList').DataTable({
    // Register date formats to allow DataTables sorting of the dates

      "ajax" : "<?php echo site_url('admin/orders/api/orders'); ?>",
      "columns" : [
        {"data": function (data, type, row) {
            var url = window.location.href.split('?')[0].replace('#', '');
            url = url + '/view/'+ data.id;

            return '<a href="'+ url +'">'+ data.order_number +'</a>';
        }
        },
        {"data": "customer"},
        {"data": "order_date"},
        {"data": "total_items"},
        {"data": "total_price"},
        {"data": "payment_method"},
        {"data": "status"}
       
      ],
      "columnDefs": [
            {
                "render": function ( data, type, row ) {
                    return '#' + data;
                },
                "targets": 0
            },
            {
                "render": function ( data, type, row ) {
                      var date = new Date(data);
                      var month = date.getMonth() + 1;
                      return  (date.getDate()>= 10 ? date.getDate() : "0" + date.getDate()) + "/" + (month.toString().length > 1 ? month : "0" + month) + "/" + date.getFullYear();
                },
                "targets": 2

                
            },
            {
                "render": function ( data, type, row ) {
                    return 'Rp' + data;
                },
                "targets": 4
            },
            {
                "render": function ( data, type, row ) {
                    if(data==1){                    
                       return "Transfer Bank";
                    }else if(data==2){
                       return "Bayar Di tempat";
                    }
                },
                "targets": 5
            },
            {
                "render": function ( data, type, row ) {                  
                        if(data==11){
                          return "Order menunggu pembayaran";
                        }else if(data==12){
                          return "Order dalam proses";
                        }else if(data==13){
                          return "Order dalam pengiriman";
                        }else if(data==14){
                          return "Order selesai ";
                        }else if(data==15){
                          return "Order dibatalkan";
                        }else if(data==21){
                          return "Order menunggu pembayaran";
                        }else if(data==22){
                          return "Order dalam proses";
                        }else if(data==23){
                          return "Order dalam pengiriman";
                        }else if(data==24){
                          return "Order dibatalkan";
                        }
                 },
                "targets": 6
            }
      ],
    
      "language" : {
        "search" : "Cari:",
        "lengthMenu" : "Menampilkan _MENU_ data",
        "info" : "Menampilkan _START_ sampai _END_ data dari _TOTAL_ data",
        "infoEmpty" : "Tidak ada data yang ditampilkan",
        "infoFiltered" : "(dari total _MAX_ data)",
        "zeroRecords" : "Tidak ada hasil pencarian ditemukan",
        "paginate": {
          "first":"&laquo;",
          "last":"&raquo;",
          "next":       "&rsaquo;",
          "previous":   "&lsaquo;"
        },
      }
    });
});
</script>