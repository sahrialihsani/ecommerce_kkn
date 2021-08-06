<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<div class="content-wrapper">
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Pembayaran Saya</h1>
                </div>
               
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                        <li class="breadcrumb-item active">Pembayaran</li>
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
            <?php if ( count($payments) > 0) : ?>
                <div class="table-responsive">
                    <table class="table align-items-center table-flush" id="paymentList" style="width: 100%">
                        <thead class="thead-light">
                            <tr>
                                <th scope="col">No.</th>
                                <th scope="col">Order</th>
                                <th scope="col">Tanggal</th>
                                <th scope="col">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($payments as $payment) : ?>
                            <tr>
                                <td><?php echo $payment->id; ?></td>
                                <td><?php echo anchor('customer/payments/view/'. $payment->id, '#'. $payment->order_number); ?></td>
                                <td><?php echo get_formatted_date($payment->payment_date); ?></td>
                                <td><?php echo get_payment_status($payment->payment_status); ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <?php else : ?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="alert alert-info">
                            Belum ada data pembayaran
                        </div>
                        <a href='<?php echo site_url("customer/payments/confirm"); ?>'><button class='btn btn-primary buttons-sm tombolTambah' id='tombolTambah' tabindex='0' aria-controls='example1' type='button'>Konfirmasi Pembayaran Baru</button></a>
                    </div>
                </div>
                <?php endif; ?>
            </div>

            <?php if ($pagination) : ?>
            <div class="card-footer">
                <?php echo $pagination; ?> 
            </div>
            <?php endif; ?>

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
   
        
    var table = $('#paymentList').DataTable({
        "dom": "<'row'<'col-sm-3'<'tombolTambah'>><'col-sm-3'B><'col-sm-6'f>>" +
                "<'row'<'col-sm-12'tr>>" +
                "<'row'<'col-sm-5'i><'col-sm-7'p>>",
        buttons: [
            {
                text: 'My button',
                action: function ( e, dt, node, config ) {
                    alert( 'Button activated' );
                }
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
    $("div.tombolTambah").html(" <a href='<?php echo site_url("customer/payments/confirm"); ?>'><button class='btn btn-primary buttons-sm tombolTambah' id='tombolTambah' tabindex='0' aria-controls='example1' type='button'>Tambah Pembayaran</button></a>");

    document.getElementsByClassName("tombolTambah")[0].style.textAlign = "left";

});
</script>