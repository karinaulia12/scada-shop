<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- Dark table -->
            <!-- <div class="container-fluid"> -->
            <div class="row mt-5">
                <div class="col">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1>Order Saya</h1>
                        </div>

                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                                <li class="breadcrumb-item active">Order</li>
                            </ol>
                        </div>
                    </div>
                    <div class="card bg-default shadow <?php echo (count($orders) > 0) ? ' p-0' : ''; ?>">
                        <!-- <div class="card-header bg-transparent border-0">
                <h3 class="text-white mb-0">Order Saya</h3>
            </div> -->
                        <?php if (count($orders) > 0) : ?>
                            <div class="table-responsive">
                                <table class="table align-items-center table-dark table-flush">
                                    <thead class="thead-dark">
                                        <tr>
                                            <th scope="col">No.</th>
                                            <th scope="col">ID</th>
                                            <th scope="col">Tanggal</th>
                                            <th scope="col">Jumlah Pesanan</th>
                                            <th scope="col">Total Pesanan</th>
                                            <th scope="col">Pembayaran</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($orders as $order) : ?>
                                            <tr>
                                                <td><?php echo $order->id; ?></td>
                                                <td><?php echo anchor('customer/orders/view/' . $order->id, '#' . $order->order_number); ?></td>
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
                                <div class="col">
                                    <div class="alert alert-info">
                                        Belum ada data order. <a href="http://localhost:8080/scada-shop/"><strong>ORDER SEKARANG!</strong></a>
                                    </div>
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
            <!-- </div> -->
        </div>
    </div>
</div>