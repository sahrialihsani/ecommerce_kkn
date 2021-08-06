<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>

  <div class="content-wrapper">
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dasbor</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <?php if ($flash) : ?>
              <?php echo "<script>toastr.success('".$flash."')</script>"; ?>
              <?php else : ?>
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo  base_url();?>">Home</a></li>
              <li class="breadcrumb-item active">Dasbor</li>
            </ol>
              <?php endif; ?>
          </div>
        </div>
      </div>
    </div>
   
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-success">
              <div class="inner">
                <h3><?php echo $total_order; ?></h3>

                <p>Pesanan kumulatif</p>
              </div>
              <div class="icon">
                <i class="fas fa-shopping-cart"></i>
              </div>
              <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Order <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-primary">
              <div class="inner">
                <h3><?php echo $total_process_order; ?></h3>

                <p>Diproses</p>
              </div>
              <div class="icon">
                <i class="fas fa-concierge-bell"></i>
              </div>
              <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Order <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-warning">
              <div class="inner">
                <h3><?php echo $total_payment; ?></h3>

                <p>Pembayaran</p>
              </div>
              <div class="icon">
                <i class="fas fa-money-bill-wave-alt"></i>
              </div>
              <a href="<?php echo site_url('customer/payments'); ?>" class="small-box-footer">Lihat Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
         
          <div class="col-lg-3 col-6">
            <!-- small box -->
            <div class="small-box bg-gradient-info">
              <div class="inner">
                <h3><?php echo $total_review; ?></h3>

                <p>Feedback</p>
              </div>
              <div class="icon">
                <i class="fas fa-user-plus"></i>
              </div>
              <a href="<?php echo site_url('customer/reviews'); ?>" class="small-box-footer">Lihat Reviews <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
       
      </div>
    </section>
  </div>
