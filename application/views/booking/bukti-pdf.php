<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pustaka Booking</title>
    <style>
        /* Reset dan gaya dasar */
        body {
            font-family: 'Arial', sans-serif;
            margin: 20px;
            background-color: #f8f9fa;
            color: #343a40;
        }

        .header {
            text-align: center;
            font-size: 32px;
            font-weight: bold;
            margin-bottom: 30px;
            color: #007bff;
        }

        .subheader {
            text-align: center;
            font-size: 18px;
            margin-bottom: 20px;
            color: #6c757d;
        }

        .table-container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        table thead {
            background-color: #007bff;
            color: #ffffff;
        }

        table th, table td {
            padding: 12px 15px;
            text-align: left;
        }

        table tbody tr {
            border-bottom: 1px solid #dee2e6;
        }

        table tbody tr:nth-child(even) {
            background-color: #f8f9fa;
        }

        table tbody tr:hover {
            background-color: #e9ecef;
            transition: background-color 0.2s ease-in-out;
        }

        table th {
            text-transform: uppercase;
            font-size: 14px;
        }

        .footer {
            text-align: center;
            font-size: 14px;
            color: #6c757d;
            margin-top: 20px;
        }

        hr {
            border: 0;
            border-top: 1px solid #dee2e6;
        }
    </style>
</head>
<body>
    <div class="header">Pustaka Booking</div>
    <div class="subheader">Informasi Peminjaman Buku Terbaru</div>
    <div class="table-container">
        <table>
            <?php foreach ($useraktif as $u) { ?>
                <tr>
                    <th colspan="5">Nama Anggota: <?= $u->nama; ?></th>
                </tr>
                <tr>
                    <th colspan="5">Buku Yang Dibooking:</th>
                </tr>
            <?php } ?>
            <thead>
                <tr>
                    <th>No.</th>
                    <th>Buku</th>
                    <th>Penulis</th>
                    <th>Penerbit</th>
                    <th>Tahun</th>
                </tr>
            </thead>
            <tbody>
                <?php $no = 1;
                foreach ($items as $i) { ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $i['judul_buku']; ?></td>
                        <td><?= $i['pengarang']; ?></td>
                        <td><?= $i['penerbit']; ?></td>
                        <td><?= $i['tahun_terbit']; ?></td>
                    </tr>
                    <?php $no++;
                } ?>
            </tbody>
        </table>
        <hr>
        <div class="footer">Kode Unik: <?= md5(date('d M Y H:i:s')); ?></div>
    </div>
</body>
</html>
