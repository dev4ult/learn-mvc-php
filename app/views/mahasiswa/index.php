<div class="overflow-x-auto w-full max-w-6xl mx-auto">
    <?= Flasher::flash() ?>
    <div class="flex gap-4">
        <label for="modal-tambah" class="btn btn-sm btn-primary mb-5">tambah mahasiswa +</label>
        <form class="form-control" action="<?= BASEURL ?>/mahasiswa/cari" method="post">
            <div class="input-group input-group-sm">
                <input type="text" placeholder="Search…" id="keyword-input" class="input input-sm input-bordered"
                    name="keyword" />
                <button type="submit" class="btn btn-square btn-sm">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                    </svg>
                </button>
            </div>
        </form>
    </div>
    <table class="table w-full max-w-6xl mx-auto">
        <thead>
            <tr>
                <th>Nama</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($data['list-mahasiswa'] as $mhs) : ?>
            <tr>
                <td>
                    <p class="font-bold"><?= $mhs['nama'] ?></p>
                </td>
                <th>
                    <a href="<?= BASEURL ?>/mahasiswa/detail/<?= $mhs['id'] ?>" class="btn btn-ghost btn-xs">details</a>
                </th>
            </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>

<input type="checkbox" id="modal-tambah" class="modal-toggle" />
<div class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="font-bold text-lg mb-4">Form Tambah Mahasiswa</h3>
        <form action="<?= BASEURL ?>/mahasiswa/tambah" class="flex flex-col gap-4" action="" method="post"
            enctype="multipart/form-data">
            <div class="form-control grid grid-cols-2 w-full gap-4">
                <label class="input-group input-group-sm">
                    <input type="text" placeholder="Nama" class="input input-bordered input-md w-full" name="nama"
                        required />
                </label>
                <label class="input-group input-group-sm">
                    <input type="email" placeholder="Email" class="input input-bordered input-md w-full" name="email"
                        required />
                </label>
            </div>
            <div class="form-control">
                <select class="select focus:outline-none w-full pl-4 border-2 border-gray-200 font-normal"
                    name="jurusan" required>
                    <option disabled selected>Pilih Jurusan</option>
                    <option value="Teknik Informatika dan Komputer">Teknik Informatika dan Komputer</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Administrasi Niaga">Administrasi Niaga</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Teknik Grafika dan Penerbitan">Teknik Grafika dan Penerbitan</option>
                </select>
            </div>
            <div class="form-control grid grid-cols-2 w-full gap-4">
                <label class="input-group input-group-sm">
                    <input type="number" placeholder="NIM" class="input input-bordered input-md w-full" name="nim"
                        required />
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
            <label for="modal-tambah" class="btn btn-square btn-sm">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                    stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </label>
        </div>
    </div>
</div>