<?php
$mhs = $data['mahasiswa'];
?>
<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <thead>
            <tr>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
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
                <td> <?= $mhs['jurusan'] ?>
                </td>
            </tr>
        </tbody>
    </table>
</div>