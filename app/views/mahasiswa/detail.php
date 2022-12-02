<?php
$mhs = $data['mahasiswa'];
?>
<div class="overflow-x-auto w-full mx-auto max-w-6xl">
    <?= Flasher::flash() ?>
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
                    <label for="modal-hapus" class="btn btn-outline btn-sm">delete</label>
                    <label for="modal-ubah" class="btn btn-sm">edit</label>
                </th>
            </tr>
        </tbody>
    </table>
</div>

<!-- Delete Modal -->
<input type="checkbox" id="modal-hapus" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg">Delete Confirmation!</h3>
        <p class="py-4">Are you sure you want to delete this data?</p>
        <div class="modal-action">
            <label for="modal-hapus" class="btn btn-sm btn-outline">Close</label>
            <a href="<?= BASEURL ?>/mahasiswa/delete/<?= $mhs['id'] ?>" class="btn btn-sm">delete</a>
        </div>
    </div>
</div>

<!-- Edit Modal -->
<input type="checkbox" id="modal-ubah" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-4">Form Ubah Data Mahasiswa</h3>
        <form action="<?= BASEURL ?>/mahasiswa/ubah/<?= $mhs['id'] ?>" class="flex flex-col gap-4" action=""
            method="post" enctype="multipart/form-data">
            <div class="form-control grid grid-cols-2 w-full gap-4">
                <label class="input-group input-group-sm">
                    <input type="text" placeholder="Nama" class="input input-bordered input-md w-full" name="nama"
                        value="<?= $mhs['nama'] ?>" required />
                </label>
                <label class="input-group input-group-sm">
                    <input type="email" placeholder="Email" class="input input-bordered input-md w-full" name="email"
                        value="<?= $mhs['email'] ?>" required />
                </label>
            </div>
            <div class="form-control">
                <select class="select focus:outline-none w-full pl-4 border-2 border-gray-200 font-normal"
                    name="jurusan" value="<?= $mhs['jurusan'] ?>" required>
                    <option disabled selected>Pilih Jurusan</option>
                    <?php
                    $list_jurusan = [
                        "Teknik Informatika dan Komputer",
                        "Teknik Elektro",
                        "Administrasi Niaga",
                        "Teknik Sipil",
                        "Teknik Mesin",
                        "Akuntansi",
                        "Teknik Grafika dan Penerbitan"
                    ];

                    foreach ($list_jurusan as $jurusan) :
                    ?>
                    <option value="<?= $jurusan ?>" <?php if ($jurusan == $mhs['jurusan']) echo 'selected' ?>>
                        <?= $jurusan ?></option>
                    <?php endforeach ?>

                </select>
            </div>
            <div class="form-control grid grid-cols-2 w-full gap-4">
                <label class="input-group input-group-sm">
                    <input type="number" placeholder="NIM" class="input input-bordered input-md w-full" name="nim"
                        value="<?= $mhs['nim'] ?>" required />
                </label>
                <label class="input-group input-group-sm">
                    <span class="w-full btn bg-black" id="file-name">Pilih Gambar</span>
                    <input type="file" id="file-img" class="w-full hidden" name="gambar" />
                </label>
            </div>
            <div class="modal-action mt-4">
                <input type="submit" value="Submit" class="btn btn-sm btn-success text-white" name="tambah-data">
            </div>
        </form>
        <div class="modal-action absolute top-0 right-0 m-6">
            <label for="modal-ubah" class="btn btn-square btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>
        </div>
    </div>
</div>