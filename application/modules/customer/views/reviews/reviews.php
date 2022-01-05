<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!-- Header -->
<div class="header bg-gradient-primary pb-6 pt-3 pt-md-6">
    <div class="container-fluid">
        <div class="header-body">
            <!-- <div class="content-wrapper">
                <section class="content-header"> -->
            <div class="container-fluid mt-5">
                <div class="row mb-2">
                    <div class="col-sm-4">
                        <h1>Review Saya</h1>
                    </div>
                    <div class="col-sm-2">
                        <a href="<?= site_url('customer/reviews/write'); ?>" class="btn btn-lg btn-default"><i class="fa fa-plus-circle" aria-hidden="true"></i> Review</a>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                            <li class="breadcrumb-item active">Review</li>
                        </ol>
                    </div>
                </div>
            </div>
            <!-- </section> -->

            <section class="content">
                <!-- <div class="card card-primary"> -->
                <div class="card bg-default shadow<?php echo (count($reviews) > 0) ? ' p-0' : ''; ?>">
                    <?php if (count($reviews) > 0) : ?>
                        <div class="table-responsive">
                            <table class="table align-items-center table-dark table-flush table-striped m-0">
                                <tr>
                                    <th scope="col">No.</th>
                                    <th scope="col">Order</th>
                                    <th scope="col">Tanggal</th>
                                    <th scope="col">Review</th>
                                </tr>
                                <?php foreach ($reviews as $review) : ?>
                                    <tr>
                                        <td><?php echo $review->id; ?></td>
                                        <td><?php echo anchor('customer/reviews/view/' . $review->id, '#' . $review->order_number); ?></td>
                                        <td><?php echo get_formatted_date($review->review_date); ?></td>
                                        <td><?php echo $review->review_text; ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    Belum ada review yang ditulis. Silahkan tulis review baru.
                                </div>

                                <a href="<?= site_url('customer/reviews/write'); ?>" class="btn btn-sm btn-default"><i class="fa fa-plus-circle" aria-hidden="true"></i> Review</a>
                            </div>
                        </div>
                    <?php endif; ?>
                    <!-- </div> -->

                    <?php if ($pagination) : ?>
                        <div class="card-footer">
                            <?php echo $pagination; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </section>

            <!-- </div> -->
        </div>
    </div>
</div>