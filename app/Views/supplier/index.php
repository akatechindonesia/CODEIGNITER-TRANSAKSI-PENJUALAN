<h2><?php echo $title; ?></h2>

<table class="table">
    <thead>
        <tr>
            <th>Nama Supplier</th>
            <th>Alamat</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($supplier as $item) : ?>
            <tr>
                <td><?= $item['nama_supplier']; ?></td>
                <td><?= $item['alamat']; ?></td>
                <td>
                    <a href="<?= base_url('/supplier/edit/' . $item['id']); ?>">Edit</a>
                    <a href="<?= base_url('/supplier/delete/' . $item['id']); ?>">Delete</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>