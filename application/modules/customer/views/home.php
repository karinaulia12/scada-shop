<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
  <div class="container-fluid">
    <div class="header-body">
      <!-- Card stats -->
      <div class="row mt-5">
        <div class="col-xl-3 col-lg-6">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h3 class="card-title text-uppercase text-muted mb-0">Order</h3>
                  <span class="h1 font-weight-bold mb-0"><?php echo $total_order; ?></span>
                  <br><br>
                  <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-danger text-white rounded-circle shadow">
                    <i class="ni ni-cart"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4 mb-4">
          <div class="card card-stats mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="card-title text-uppercase text-muted mb-0">Order dalam Proses</h4>
                  <span class="h2 font-weight-bold mb-0"><?php echo $total_process_order; ?></span><br>
                  <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Order <i class="fas fa-arrow-circle-right"></i></a>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-warning text-white rounded-circle shadow">
                    <i class="fas fa-chart-pie"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-4">
          <div class="card card-stats mb-4 mb-xl-2">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h4 class="card-title text-uppercase text-muted mb-0">Pembayaran</h4>
                  <span class="h2 font-weight-bold mb-2"><?php echo $total_payment; ?></span>
                  <div class="row mt-4">
                    <div class="col-auto">
                      <a href="<?php echo site_url('customer/payments'); ?>" class="small-box-footer mt-2">Lihat Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-success text-white rounded-circle shadow">
                    <i class="ni ni-money-coins"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-xl-3 col-lg-6 mb-5">
          <div class="card card-stats mb-4 mb-xl-0">
            <div class="card-body">
              <div class="row">
                <div class="col">
                  <h3 class="card-title text-uppercase text-muted mb-0">Review</h3>
                  <span class="h2 font-weight-bold mb-0"><?php echo $total_review; ?></span>
                  <div class="row mt-4">
                    <div class="col-auto">
                      <a href="<?php echo site_url('customer/reviews'); ?>" class="small-box-footer">Lihat Reviews <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="icon icon-shape bg-info text-white rounded-circle shadow">
                    <i class="ni ni-send"></i>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <div class="container-fluid mt--7">
  <div class="row">
    <div class="col-xl-8 mb-5 mb-xl-0">

    </div>
  </div>
</div> -->