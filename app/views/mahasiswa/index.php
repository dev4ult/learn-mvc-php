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
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list-mahasiswa'] as $mhs): ?>
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
                <th>
                    <a href="<?=BASEURL?>/mahasiswa/detail/<?=$mhs['id']?>" class="btn btn-ghost btn-xs">details</a>
                </th>
            </tr>
            <?php endforeach?>
        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th></th>
                <th>Name</th>
                <th>Job</th>
                <th>Favorite Color</th>
                <th></th>
            </tr>
        </tfoot>

    </table>
</div>