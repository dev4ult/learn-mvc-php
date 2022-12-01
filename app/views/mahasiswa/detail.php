<?php
$mhs = $data['mahasiswa'];
?>
<div class="overflow-x-auto w-full mx-auto max-w-6xl">
    <table class="table w-full">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>
                    <div class="font-bold"><?= $mhs['nama'] ?></div>
                    <div class="text-sm opacity-50"><?= $mhs['email'] ?></div>
                </td>
                <td>
                    <?= $mhs['nim'] ?>
                </td>
                <td>
                    <?= $mhs['jurusan'] ?>
                </td>
                <th>
                    <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" class="btn btn-sm">delete</a>
                </th>
            </tr>
        </tbody>
    </table>
</div>