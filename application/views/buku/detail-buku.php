<div class="x_panel text-center">
    <div class="x_content">
        <div class="row">
            <div class="col-12 col-sm-6 col-md-3">
                <div class="thumbnail" style="height: auto; width: 100%;">
                    <img src="<?php echo base_url(); ?>assets/img/upload/<?= $gambar; ?>" class="img-fluid" style="height: 150px; width: auto;">
                    <div class="caption">
                        <h5 style="min-height:40px;" class="text-center"><?= $pengarang ?></h5>
                        <table class="table">
                            <tr>
                                <th nowrap>Judul Buku:</th>
                                <td nowrap><?= $judul; ?></td>
                                <th>Kategori:</th>
                                <td><?= $kategori ?></td>
                            </tr>
                            <tr>
                                <th nowrap>Penerbit:</th>
                                <td><?= $penerbit ?></td>
                                <th>Dipinjam:</th>
                                <td><?= $dipinjam ?></td>
                            </tr>
                            <tr>
                                <th nowrap>Tahun Terbit:</th>
                                <td><?= substr($tahun, 0, 4) ?></td>
                                <th>Dibooking:</th>
                                <td><?= $dibooking ?></td>
                            </tr>
                            <tr>
                                <th>ISBN:</th>
                                <td><?= $isbn ?></td>
                                <th>Tersedia:</th>
                                <td><?= $stok ?></td>
                            </tr>
                        </table>
                        <p>
                            <a class="btn btn-outline-primary fas fw fa-shopping-cart" href="<?= base_url('booking/tambahBooking/' . $id); ?>">Booking</a>
                            <button class="btn btn-outline-secondary fas fw fa-reply" onclick="window.history.go(-1)">Kembali</button>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>