<h2><?php echo $title; ?></h2>

<table class="table">
    <thead>
        <tr>
            <th>Nama Barang</th>
            <th>Harga</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($barang as $item) : ?>
            <tr>
                <td><?= $item['nama_barang']; ?></td>
                <td><?= $item['harga']; ?></td>
                <td>
                    <a href="<?= base_url('/barang/edit/' . $item['id']); ?>">Edit</a>
                    <a href="<?= base_url('/barang/delete/' . $item['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>