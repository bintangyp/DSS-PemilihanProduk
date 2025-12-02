<!DOCTYPE html>
<html lang="en">

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>

  <div class="container mt-3 fram">
    <h2>Alternatif</h2>
    <p>Alternatif / Produk </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class='fas fa-pen-alt'></i> Tambahkan Alternatif
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">From Data Guru</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/admin/dataguru" method="post">
            <div class="modal-body">
              <div class="container mt-3">
                <div class="row">
                  <div class="mb-3 col">
                    <label for="namaguru">Nama Guru</label>
                    <input type="text" class="form-control" id="namaguru" placeholder="Masukan Nama" name="namaguru">
                  </div>
                  <div class="mb-3 col">
                    <label for="nip">NIP</label>
                    <input type="number" class="form-control" id="nip" placeholder="Masukan NIP" name="nip">
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col">
                    <label for="jekel">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" id="jekel" name="jekel">
                      <option selected disabled>Pilih Jenis Kelamin</option>
                      <option value="laki-laki">Laki-laki</option>
                      <option value="perempuan">Perempuan</option>
                    </select>
                  </div>
                  <div class="mb-3 col">
                    <label for="kelas_mengajar">Kelas Mengajar</label>
                    <select class="form-select" aria-label="Default select example" id="kelas_mengajar" name="kelas_mengajar">
                      <option selected disabled>Pilih Kelas Mengajar</option>
                      <option value="Kelas 1">Kelas 1</option>
                      <option value="Kelas 2">Kelas 2</option>
                      <option value="Kelas 3">Kelas 3</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col">
                    <label for="alamat">Alamat</label>
                    <input type="text" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                  </div>
                  <div class="mb-3 col">
                    <label for="nohp">No. Hp</label>
                    <input type="text" class="form-control" id="nohp" placeholder="Masukan No. Hp" name="nohp">
                  </div>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-primary">Tambahkan Data</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <p>

    <table class="table ">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Alternatif</th>
          <th colspan="2">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 0;
        foreach ($alternatif as $kr) :
          $no++
        ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $kr['id_alternatif'] ?></td>
            <td><?= $kr['nama_alternatif'] ?></td>
            <td><a href="#" class="btn btn-info text-white"><i class='fas fa-edit text-white'></i> Edit</a></td>
            <td><a href="" class="btn btn-danger text-white"><i class='fas fa-trash-alt'></i> Hapus</a></td>
          </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
  </div>

</body>

</html>