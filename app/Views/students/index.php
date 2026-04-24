<?= $this->extend('layouts/main') ?>

<?= $this->section('content') ?>
<div class="mt-2 row">
    <div class="col-md-10 mt-2 mb-2">
        <h2>Daftar Mahasiswa</h2>
    </div>
    <div class="col-md-2 text-end">
        <a href="<?= base_url('students/create') ?>" class="btn btn-primary">Tambah Mahasiswa</a>
    </div>
    <table class="table table-striped table-bordered">
        <thead>
            <tr class="table-primary">
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jenis Kelamin</th>
                <th>Tempat Lahir</th>
                <th>Tanggal Lahir</th>
                <th>Alamat</th>
                <th>No. HP</th>
                <th>Email</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($students as $no => $student): ?>
            <tr>
                <td><?= esc($no+1) ?></td>
                <td><?= esc($student['nim']) ?></td>
                <td><?= esc($student['name']) ?></td>
                <td><?= esc($student['gender']) ?></td>
                <td><?= esc($student['pob']) ?></td>
                <td><?= esc($student['dob']) ?></td>
                <td><?= esc($student['address']) ?></td>
                <td><?= esc($student['phone']) ?></td>
                <td><?= esc($student['email']) ?></td>
                <td>
                    <a href="<?= base_url('students/' . esc($student['id'])) ?>" class="btn btn-info btn-sm">Lihat</a>
                    <a href="<?= base_url('students/' . esc($student['id']) . '/edit') ?>" class="btn btn-warning btn-sm">Edit</a>
                    <form action="<?= base_url('students/' . esc($student['id'])) ?>" method="post" style="display:inline;">
                        <input type="hidden" name="_method" value="DELETE">
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin ingin menghapus mahasiswa ini?')">Hapus</button>
                    </form>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>
<?= $this->endSection() ?>