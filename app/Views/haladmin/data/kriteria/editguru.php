<div class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1 class="m-0">Data</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard v1</li>
                </ol>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </div><!-- /.container-fluid -->
</div>
<div class="container">

    <form action="/admin/dataguru/edit/<?= $guru['no'] ?>" method="post">
        <div class="container mt-3">
            <div class="row">
                <div class="mb-3 col">
                    <label for="namaguru">Nama Guru</label>
                    <input type="text" value="<?= $guru["namaguru"] ?>" class="form-control" id="namaguru" placeholder="Masukan Nama" name="namaguru">
                </div>
                <div class="mb-3 col">
                    <label for="nip">NIP</label>
                    <input type="number" value="<?= $guru["nip"] ?>" class="form-control" id="nip" placeholder="Masukan NIP" name="nip">
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="jekel">Jenis Kelamin</label>
                    <select class="form-select" aria-label="Default select example" id="jekel" name="jekel">
                        <option selected value="<?= $guru["jekel"] ?>"><?= $guru["jekel"] ?></option>
                        <option value="laki-laki">Laki-laki</option>
                        <option value="perempuan">Perempuan</option>
                    </select>
                </div>
                <div class="mb-3 col">
                    <label for="kelas_mengajar">Kelas</label>
                    <select class="form-select" aria-label="Default select example" id="kelas_mengajar" name="kelas_mengajar">
                        <option selected value="<?= $guru["kelas_mengajar"] ?>"><?= $guru["kelas_mengajar"] ?></option>
                        <option value="Kelas 1">Kelas 1</option>
                        <option value="Kelas 2">Kelas 2</option>
                        <option value="Kelas 3">Kelas 3</option>
                    </select>
                </div>
            </div>
            <div class="row">
                <div class="mb-3 col">
                    <label for="alamat">Alamat</label>
                    <input type="text" value="<?= $guru["alamat"] ?>" class="form-control" id="alamat" placeholder="Masukan Alamat" name="alamat">
                </div>
                <div class="mb-3 col">
                    <label for="nohp">No. Hp</label>
                    <input type="text" value="<?= $guru["nohp"] ?>" class="form-control" id="nohp" placeholder="Masukan No. Hp" name="nohp">
                </div>
            </div>

            <a href="/admin/dataguru" type="button" class="btn btn-secondary">Close</a>
            <button type="submit" class="btn btn-success"><i class='far fa-clipboard'></i> Perbaharui Data</button>
        </div>
    </form>
</div>