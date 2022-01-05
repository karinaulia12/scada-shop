<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
    <div class="container-fluid">
        <div class="header-body">
            <div class="content-wrapper">
                <section class="content-header">
                    <div class="container-fluid mt-5">
                        <div class="row mb-2">
                            <div class="col-sm-4">
                                <h1>Pembayaran Saya</h1>
                            </div>
                            <div class="col">
                                <a href="<?php echo site_url('customer/payments/confirm'); ?>" class="btn btn-success">
                                    <i class="fa fa-plus-circle mr-1" aria-hidden="true"></i> Pembayaran
                                </a>
                            </div>

                            <div class="col-sm-5">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                                    <li class="breadcrumb-item active">Pembayaran</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </section>

                <section class="content">
                    <!-- <div class="card card-primary"> -->
                    <div class="card bg-default shadow <?php echo (count($payments) > 0) ? ' p-0' : ''; ?>">
                        <?php if (count($payments) > 0) : ?>
                            <div class="table-responsive">
                                <table class="table align-items-center m-0 table-dark table-flush">
                                    <thead class="thead-dark">
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
                                                <td><?php echo anchor('customer/payments/view/' . $payment->id, '#' . $payment->order_number); ?></td>
                                                <td><?php echo get_formatted_date($payment->payment_date); ?></td>
                                                <td><?php echo get_payment_status($payment->payment_status); ?></td>
                                            </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        <?php else : ?>
                            <div class="row">
                                <div class="col">
                                    <div class="alert alert-info">
                                        Belum ada data pembayaran
                                    </div>

                                    <div class="btn btn-default"><?php echo anchor('customer/payments/confirm', 'Konfirmasi pembayaran baru'); ?></div>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($pagination) : ?>
                        <div class="card-footer">
                            <?php echo $pagination; ?>
                        </div>
                    <?php endif; ?>

                    <!-- </div> -->
                </section>

            </div>
        </div>
    </div>
</div>