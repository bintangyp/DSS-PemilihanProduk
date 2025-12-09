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
    <h2>Produk</h2>
    <p>Suplier per Jenis Produk </p>
    <!-- Button trigger modal -->
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
      <i class='fas fa-pen-alt'></i> Tambahkan Suplier
    </button>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">
            <h1 class="modal-title fs-5" id="exampleModalLabel">Input Data Produk</h1>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <form action="/admin/dataguru" method="post">
            <div class="modal-body">
              <div class="container mt-3">

                <div class="row">
                  <div class="mb-3 col">
                    <label for="model_produk">Model Produk</label>
                    <input list="daftar-model" type="text" class="form-control" id="model_produk" placeholder="" name="model_produk">
                    <datalist id="daftar-model">
                      <?php foreach ($jenisProduk as $jp): ?>
                        <option value="<?= $jp['jenis_produk'] ?>">
                        <?php endforeach ?>
                    </datalist>
                  </div>
                  <div class="mb-3 col">
                    <label for="jenis_produk">Jenis Produk</label>
                    <select class="form-select" aria-label="Default select example" id="jenis_produk" name="jenis_produk">
                      <option value="">-- Pilih Jenis Produk --</option>
                      <option value="HDD">Harddisk</option>
                      <option value="SSD">SSD</option>
                      <option value="RAM">RAM</option>
                      <option value="Processor">Processor</option>
                      <option value="Motherboard">Motherboard</option>
                      <option value="Power"></option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col">
                    <label for="suplier">Suplier</label>
                    <select class="form-select" aria-label="Default select example" id="suplier" name="suplier">
                      <option selected disabled>Pilih Suplier</option>
                      <?php foreach ($suplier as $jp): ?>
                        <option value="<?= $jp['kode_suplier'] ?>">
                          <?= strtoupper($jp['nama_suplier']) ?>
                        </option>
                      <?php endforeach ?>
                    </select>
                  </div>

                  <div class="mb-3 col">
                    <label for="harga">Harga</label>
                    <input type="number" class="form-control" id="harga" placeholder="Masukan Harga" name="harga">
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col">
                    <label for="waktu_pengiriman">Waktu Pengiriman</label>
                    <select class="form-select" aria-label="Default select example" id="waktu_pengiriman" name="waktu_pengiriman">
                      <option selected disabled>Lama Waktu Pengiriman</option>
                      <option value="1-2 hari">1-2 hari</option>
                      <option value="3-4 hari">3-4 hari</option>
                      <option value="5-7 hari">5-7 hari
                      </option>
                      <option value="1-2 minggu">1-2 minggu</option>
                      <option value="lebih dari 2 minggu">lebih dari 2 minggu</option>
                    </select>
                  </div>
                  <div class="mb-3 col">
                    <label for="kualitas">Kualitas</label>
                    <select class="form-select" aria-label="Default select example" id="kualitas" name="kualitas">
                      <option selected disabled>Kualitas Produk</option>
                      <option value="5">Sangat Baik</option>
                      <option value="4">Baik</option>
                      <option value="3">Cukup</option>
                      <option value="2">Kurang</option>
                      <option value="1">Sangat Kurang</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="mb-3 col">
                    <label for="garansi">Garansi</label>
                    <select class="form-select" aria-label="Default select example" id="garansi" name="garansi">
                      <option selected disabled>Lama Garansi</option>
                      <option value="5">36 Bulan / Lebih</option>
                      <option value="4">24 Bulan</option>
                      <option value="3">12 Bulan</option>
                      <option value="2">6 Bulan</option>
                      <option value="1">Tidak Ada</option>
                    </select>
                  </div>
                  <div class="mb-3 col">
                    <label for="konsistensi_stok">Konsistensi Stok</label>
                    <select class="form-select" aria-label="Default select example" id="konsistensi_stok" name="konsistensi_stok">
                      <option selected disabled>Konsistensi Stok Produk</option>
                      <option value="5">Selalu Tersedia</option>
                      <option value="4">Sering Tersedia</option>
                      <option value="3">Kadang Tersedia</option>
                      <option value="2">Jarang Tersedia</option>
                      <option value="1">Tidak Pernah Tersedia</option>
                    </select>
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

    <table class="table">
      <thead class="table-dark">
        <tr>
          <th>No</th>
          <th>Kode</th>
          <th>Nama Suplier</th>
          <th>Kontak</th>
          <th>Alamat</th>
          <th>Jenis Produk</th>
          <th colspan="2">Opsi</th>
        </tr>
      </thead>
      <tbody>
        <?php
        $no = 0;
        foreach ($suplier as $kr) :
          $no++
        ?>
          <tr>
            <td><?= $no; ?></td>
            <td><?= $kr['kode_suplier'] ?></td>
            <td><?= $kr['nama_suplier'] ?></td>
            <td><?= $kr['kontak_suplier'] ?></td>
            <td><?= $kr['alamat_suplier'] ?></td>
            <td><?= $kr['jenis_produk'] ?></td>
            <td><a href="#" class="btn btn-info text-white"><i class='fas fa-edit text-white'></i> Edit</a></td>
            <td><a href="" class="btn btn-danger text-white"><i class='fas fa-trash-alt'></i> Hapus</a></td>
          </tr>

        <?php endforeach; ?>

      </tbody>
    </table>
  </div>

</body>

</html>