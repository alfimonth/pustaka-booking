<html>

<head>
    <title>Form Input Matakuliah</title>
    <link rel="stylesheet" href="<?= base_url('assets/css/mahasiswa.css') ?>">
</head>

<body>
    <div class="container">
        <h1>Digital Learning Management System </h1>
        <h1>(Di-Lemas)</h1>


        <form action="<?= base_url('mahasiswa/cetak'); ?>" method="post">
            <table>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td>Nama Mahasiswa</td>
                    <td>:</td>
                    <td><input type="text" name="nama" id="nama"></td>

                </tr>
                <tr>
                    <td>NIS</td>
                    <td>:</td>
                    <td><input type="text" name="nis" id="nis"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td>:</td>
                    <td><input type="text" name="kelas" id="kelas"></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tgl" id="tgl"></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tmpt" id="tmpt"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type="text" name="alamat" id="alamat"></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jk" id="laki" value="laki-laki"> Laki-laki
                        <input type="radio" name="jk" id="perempuan" value="perempuan"> Perempuan
                    </td>
                </tr>
                <tr>
                    <td>Agama</td>
                    <td>:</td>
                    <td>
                        <select name="agama" id="agama">
                            <option value="Islam">Islam</option>
                            <option value="Kristen">Kristen</option>
                            <option value="Katolik">Katolik</option>
                            <option value="Budha">Budha</option>
                            <option value="Hindu">Hindu</option>
                            <option value="Protestan">Protestan</option>
                            <option value="Khonghucu">Khonghucu</option>
                            <option value="" selected>Pilih</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        <hr>
                    </td>
                </tr>
                <tr>
                    <td><button type="reset">Kosongkan</button></td>
                    <td></td>
                    <td align="right"><button type="submit">Kirim</button></td>
                </tr>
            </table>
        </form>
    </div>

</body>

</html>