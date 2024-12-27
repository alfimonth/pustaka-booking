<div class="container">
    <center>
        <table class="table table-bordered table-striped table-hover" id="table-datatable">
            <tr>
                <th>No Pinjam</th>
                <th>Tanggal Pinjam</th>
                <th>ID User</th>
                <th>ID Buku</th>
                <th>Tanggal Kembali</th>
                <th>Tanggal Pengembalian</th>
                <th>Terlambat</th>
                <th>Denda</th>
                <th>Status</th>
                <th>Total Denda</th>
                <th>Pilihan</th>
            </tr>
            <?php
            foreach ($pinjam as $p) {
            ?>
                <tr>
                    <td><?= $p['no_pinjam']; ?></td>
                    <td><?= $p['tgl_pinjam']; ?></td>
                    <td><?= $p['id_user']; ?></td>
                    <td><?= $p['id_buku']; ?></td>

                    <td><?= $p['tgl_kembali']; ?></td>
                    <td>
                        <?= date('Y-m-d'); ?>
                        <input type="hidden" name="tgl_pengembalian" id="tgl_pengembalian" value="<?= date('Y-m-d'); ?>">
                    </td>
                    <td>
                        <?php
                        // Mendapatkan tanggal kembali dan tanggal pengembalian yang sebenarnya
                        $tgl_kembali = new DateTime($p['tgl_kembali']);
                        $tgl_pengembalian = new DateTime(date('Y-m-d'));

                        // Cek apakah sudah melewati tanggal pengembalian
                        if ($tgl_pengembalian > $tgl_kembali) {
                            $selisih = $tgl_pengembalian->diff($tgl_kembali)->format("%a");
                            echo $selisih . " Hari";
                        } else {
                            echo "-"; // Jika belum terlambat, tidak ada selisih
                            $selisih = 0; // Tidak ada denda jika belum terlambat
                        }
                        ?>
                    </td>
                    <td><?= $p['denda']; ?></td>
                    <?php
                    // Menentukan status warna berdasarkan status pinjam
                    if ($p['status'] == "Pinjam") {
                        $status = "warning";
                    } else {
                        $status = "secondary";
                    }
                    ?>
                    <td><i class="btn btn-outline-<?= $status; ?> btn-sm"><?= $p['status']; ?></i></td>

                    <?php
                    // Menghitung total denda berdasarkan selisih hari terlambat
                    if ($selisih > 0) {
                        $total_denda = $p['denda'] * $selisih;
                    } else {
                        $total_denda = 0;
                    }
                    ?>
                    <td><?= $total_denda; ?>
                        <input type="hidden" name="totaldenda" id="totaldenda" value="<?= $total_denda; ?>">
                    </td>
                    <td nowrap>
                        <?php if ($p['status'] == "Kembali") { ?>
                            <i class="btn btn-sm btn-outline-secondary"><i class="fas fa-fw fa-edit"></i>Ubah Status</i>
                        <?php } else { ?>
                            <a class="btn btn-sm btn-outline-info" href="<?= base_url('pinjam/ubahStatus/' . $p['id_buku'] . '/' . $p['no_pinjam']); ?>"><i class="fas fa-fw fa-edit"></i>Ubah Status</a>
                        <?php } ?>
                    </td>
                </tr>
            <?php
            } ?>
        </table>
    </center>
</div>