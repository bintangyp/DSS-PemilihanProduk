<div class="container mt-3 fram">
  <h2>Kategori Produk</h2>
  <!-- <p>Suplier per Jenis Produk </p> -->
  <!-- Button trigger modal -->
  <form action="/admin/dataguru" method="post">
    <div class="row">
      <div class="mb-3 col">
        <input type="text" class="form-control" id="kategori_produk" placeholder="Kategori Produk" name="model_produk">
      </div>
      <div class="mb-3 col">
        <button type="submit" class="btn btn-primary">
          <i class='fas fa-pen-alt'></i> Tambahkan Kategori
        </button>
      </div>
      <div class="mb-3 col"></div>
    </div>
  </form>

  <table class="table">
    <thead class="table-dark">
      <tr>
        <th>No</th>
        <th>Kode</th>
        <th>Kategori Produk</th>
        <th colspan="2">Opsi</th>
      </tr>
    </thead>
    <tbody>
      <?php $no = 0;
      foreach ($kategori as $kr): $no++; ?>
        <tr>
          <td><?= $no ?></td>
          <td><?= $kr['kode_kategori'] ?></td>

          <!-- Kolom yang bisa diedit -->
          <td>
            <span id="text-<?= $kr['kode_kategori'] ?>">
              <?= $kr['kategori_produk'] ?>
            </span>

            <input type="text" autofocus
              id="input-<?= $kr['kode_kategori'] ?>"
              value="<?= $kr['kategori_produk'] ?>"
              class="form-control d-none">
          </td>

          <!-- Tombol Edit -->
          <td>
            <button class="btn btn-info"
              onclick="editRow('<?= $kr['kode_kategori'] ?>')">
              Edit
            </button>

            <button class="btn btn-success d-none"
              id="save-<?= $kr['kode_kategori'] ?>"
              onclick="saveRow('<?= $kr['kode_kategori'] ?>')">
              Simpan
            </button>

            <!-- Tombol Hapus -->
            <a href="/admin/hapusKategori/<?= $kr['kode_kategori'] ?>"
              class="btn btn-danger"
              onclick="return confirm('Hapus data ini?')">
              Hapus
            </a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>

  </table>


</div>

<script>
  function editRow(id) {
    document.getElementById('text-' + id).classList.add('d-none');
    document.getElementById('input-' + id).classList.remove('d-none');

    document.getElementById('save-' + id).classList.remove('d-none');
  }

  function saveRow(id) {
    let newValue = document.getElementById('input-' + id).value;

    // AJAX kirim ke server
    fetch('/admin/updateKategori', {
        method: 'POST',
        headers: {
          'Content-Type': 'application/x-www-form-urlencoded'
        },
        body: 'kode=' + id + '&kategori=' + newValue
      })
      .then(res => res.text())
      .then(res => {
        document.getElementById('text-' + id).innerHTML = newValue;
        document.getElementById('text-' + id).classList.remove('d-none');
        document.getElementById('input-' + id).classList.add('d-none');
        document.getElementById('save-' + id).classList.add('d-none');
      });
  }
</script>