<?php
$mhs = $data['mahasiswa'];
?>
<div class="overflow-x-auto w-full">
    <table class="table w-full">
        <thead>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <th>
                    <label>
                        <input type="checkbox" class="checkbox" />
                    </label>
                </th>
                <td>
                    <div>
                        <div class="font-bold"><?=$mhs['nama']?></div>
                        <div class="text-sm opacity-50"><?=$mhs['email']?></div>
                    </div>
                </td>
                <td>
                    <?=$mhs['nim']?>
                    <br />
                    <span class="badge badge-ghost badge-sm"><?=$mhs['kelas']?></span>
                </td>
                <td> <?=$mhs['jurusan']?>
                </td>

            </tr>
        </tbody>
        <tfoot>
            <tr>
                <th></th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
            </tr>
        </tfoot>

    </table>
</div>