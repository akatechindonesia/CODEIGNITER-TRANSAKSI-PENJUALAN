<h2><?= $title ?></h2>

<form method="POST" action="<?= base_url('/transaksi/generateReport') ?>" class="form-inline">
    <?= csrf_field() ?>

    <div class="form-group mr-2">
        <label for="start_date">Start Date:</label>
        <input type="date" id="start_date" name="start_date" class="form-control">
    </div>

    <div class="form-group mr-2">
        <label for="end_date">End Date:</label>
        <input type="date" id="end_date" name="end_date" class="form-control">
    </div>

    <button type="submit" class="btn btn-primary">Generate Report</button>
</form>
<br>
<h2>Data Transaksi: <?= (!empty($startDate)) ? $startDate . " - " : '' ?><?= (!empty($endDate)) ? $endDate : '' ?></h2>
<table class="table">
    <thead>
        <tr>
            <th>No.</th>
            <th>User</th>
            <th>Barang</th>
            <th>Supplier</th>
            <th>Quantity</th>
            <th>Harga</th>
            <th>Tanggal Transaksi</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($transaksi)) : ?>
            <?php $i = 1; ?>
            <?php foreach ($transaksi as $transaksiItem) : ?>
                <tr>
                    <td><?= $i++ ?></td>
                    <td><?= $transaksiItem['nama_user'] ?></td>
                    <td><?= $transaksiItem['nama_barang'] ?></td>
                    <td><?= $transaksiItem['nama_supplier'] ?></td>
                    <td><?= $transaksiItem['quantity'] ?></td>
                    <td><?= $transaksiItem['harga'] ?></td>
                    <td><?= $transaksiItem['tanggal_transaksi'] ?></td>
                </tr>
            <?php endforeach; ?>
        <?php else : ?>
            <tr>
                <td colspan="7">No data available</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>