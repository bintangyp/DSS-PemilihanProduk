<!-- Main content -->
<section class="content">
  <div class="container-fluid my-4">
    <form action="<?= base_url('/') ?>" method="get" class="row g-3 mb-4 ">
      <div class="col-md-4">
        <label class="form-label h4">Pilih Jenis Produk</label>
        <select name="jenis_produk" class="form-select" required>
          <option value="">-- Pilih Produk --</option>
          <?php foreach ($jenisProduk as $jp): ?>
            <option value="<?= $jp['jenis_produk'] ?>"
              <?= ($jp['jenis_produk'] == $selectedProduk) ? 'selected' : '' ?>>
              <?= strtoupper($jp['jenis_produk']) ?>
            </option>
          <?php endforeach ?>
        </select>
      </div>

      <div class="col-md-2 align-self-end">
        <button type="submit" class="btn btn-primary">
          Analisis
        </button>
      </div>
    </form>


    <?php if (empty($alternatif)): ?>
      <div class="alert alert-warning">
        Silakan pilih jenis produk terlebih dahulu untuk melakukan analisis.
      </div>
    <?php else: ?>
      <h4 class="mt-3">Tabel Matrix (Nilai Alternatif per Kriteria)</h4>
      <table class="table ">
        <thead class="table-dark text-center">
          <tr>
            <th>Kode</th>
            <th>Alternatif</th>
            <?php foreach ($kriteria as $c): ?>
              <th><?= $c['kode_kriteria'] ?> - <?= $c['nama_kriteria'] ?> (<?= $c['bobot'] ?>)</th>
            <?php endforeach ?>
          </tr>
        </thead>
        <tbody class="text-center">

          <?php foreach ($alternatif as $alt): ?>
            <tr>
              <th><?= $alt['kode_suplier'] ?></th>
              <th><?= $alt['nama_suplier'] ?></th>
              <?php foreach ($kriteria as $c): ?>
                <td><?= $matrix[$alt['kode_suplier']][$c['kode_kriteria']] ?></td>
              <?php endforeach ?>
            </tr>
          <?php endforeach ?>
          <tr class="table-secondary">
            <th colspan="2">Nilai Maksimal</th>
            <?php foreach ($kriteria as $c): ?>
              <td><?= $maxValue[$c['kode_kriteria']] ?></td>
            <?php endforeach ?>
          </tr>
          <tr class="table-secondary">
            <th colspan="2">Nilai Minimal</th>
            <?php foreach ($kriteria as $c): ?>
              <td><?= $minValue[$c['kode_kriteria']] ?></td>
            <?php endforeach ?>
          </tr>
        </tbody>
      </table>

      <h4>Normalisasi SAW</h4>
      <table class="table ">
        <thead class="table-dark text-center">
          <tr>
            <th>Alternatif</th>
            <?php foreach ($kriteria as $c): ?>
              <th><?= $c['kode_kriteria'] ?></th>
            <?php endforeach ?>
          </tr>
        </thead>
        <tbody class="text-center">

          <?php foreach ($alternatif as $alt): ?>
            <tr>
              <th><?= $alt['kode_suplier'] ?></th>
              <?php foreach ($kriteria as $c): ?>
                <td><?= number_format($normalisasi[$alt['kode_suplier']][$c['kode_kriteria']], 4) ?></td>
              <?php endforeach ?>
            </tr>
          <?php endforeach ?>
        </tbody>
      </table>

      <h4>Nilai Preferensi & Ranking</h4>
      <table class="table ">
        <thead class="table-dark text-center">
          <tr>
            <th>Alternatif</th>
            <th>Nilai Preferensi</th>
            <th>Ranking</th>
          </tr>
        </thead>
        <tbody class="text-center">

          <?php
          // buat ranking
          $ranked = $nilai_preferensi;
          arsort($ranked);
          $pos = 1;
          $rankIndex = [];
          foreach ($ranked as $altId => $val) {
            $rankIndex[$altId] = $pos++;
          }
          ?>
          <?php
          $alternatif_terbaik = "";
          ?>

          <?php foreach ($alternatif as $alt): ?>
            <tr>
              <th><?= $alt['kode_suplier'] ?></th>
              <td><?= number_format($nilai_preferensi[$alt['kode_suplier']], 4) ?></td>
              <td><?= $rankIndex[$alt['kode_suplier']] ?></td>
            </tr>
          <?php
            if ($rankIndex[$alt['kode_suplier']] == 1) :
              $alternatif_terbaik = $alt['nama_suplier'];
            endif;
          endforeach ?>
        </tbody>
      </table>

      <h5 class="mb-5">Berdasarkan perhitungan menggunakan metode SAW, maka diperoleh alternatif terbaik : <b class="text-success"> <?= $alternatif_terbaik ?></b></h5>
    <?php endif; ?>
  </div>