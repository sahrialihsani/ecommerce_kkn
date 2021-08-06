<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper" >
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pesanan Saya</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                        <li class="breadcrumb-item active">Order</li>
                    </ol>
                </div>
            </div>
        </div>
    </section>

    <section class="content">
    <div class="container-fluid" >
    <div class="row">
    <div class="col-12">
        <div class="card card-primary">
        <div class="card-body dataTables_wrapper dt-bootstrap4">
            <?php if ( count($orders) > 0) : ?>
                <div class="card-body p-0">
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="orderList" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">ID</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Jumlah Pesanan</th>
                                <th scope="col">Total Pesanan</th>
                                <th scope="col">Metode Pembayaran</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($orders as $order) : ?>
                            <tr>
                                <td><?php echo $order->id; ?></td>
                                <td><?php echo anchor('customer/orders/view/'. $order->id, '#'. $order->order_number); ?></td>
                                <td><?php echo get_formatted_date($order->order_date); ?></td>
                                <td><?php echo $order->total_items; ?> barang</td>
                                <td>Rp <?php echo format_rupiah($order->total_price); ?></td>
                                <td><?php echo ($order->payment_method == 1) ? 'Transfer bank' : 'Bayar ditempat'; ?></td>
                                <td><?php echo get_order_status($order->order_status, $order->payment_method); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                      
                    </table>
                </div>
          

                
                <?php else : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Belum ada data order.
                        </div>
                    </div>
                </div>
                <?php endif; ?>
            </div>

        </div>
        </div>
    </div>
    </div>
    </div>
    </section>

</div>

<link href="https://cdn.datatables.net/1.10.24/css/dataTables.bootstrap4.min.css" rel="stylesheet">
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.24/js/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url('assets/plugins/datatables.lang.js'); ?>"></script>


<script>
$(document).ready(function() {

    var table = $('#orderList').DataTable({
     /* "ajax" : "<?php echo site_url('customer/orders/order_api/orders'); ?>",
      "columns" : [
        {"data": "id"},
        {"data": function (data, type, row) {
            var url = window.location.href.split('?')[0].replace('#', '');
            url = url + '/view/'+ data.id;

            return '<a href="'+ url +'">'+ data.order_number +'</a>';
        }
        },
        {"data": "order_date"},
        {"data": "total_items"},
        {"data": "total_price"},
        {"data": "payment_method"},
        {"data": "order_status"}
      ],
      */
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