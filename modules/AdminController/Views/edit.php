<?= $this->extend('Modules\AdminLayout\Views\layout') ?>

<?= $this->section('content') ?>
    <section class="section">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        <div class="col-sm-9 col-8 my-auto">
                            <h4 class="card-title"><?php echo $title_sub ?></h4>
                        </div>
                        <div class="col-sm-3 col-4 my-auto">
                            <a href="/admin-data-controller"style="float:right" class="btn btn-primary border">Kembali</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <form action="/admin-data-controller/save" method="post"  class="form form-horizontal" enctype="multipart/form-data" >
                    <?= csrf_field() ?>
                    <div class="form-body">
                        <div class="row">
                        <div class="col-md-3">
                            <label>Nama Controller</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="text" class="form-control" name="cname" autofocus placeholder="Nama Controllers" required="">
                        </div>
                        <div class="col-md-3">
                            <label>Url Controller</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="text" class="form-control" name="url" placeholder="Url Controllers" required="">
                        </div>
                        <div class="col-md-3">
                            <label>Lokasi Controller</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <input type="text" class="form-control" name="lokasi" placeholder="Lokasi File Controllers" required="">
                        </div>
                        <div class="col-md-3">
                            <label>Jenis Controller</label>
                        </div>
                        <div class="col-md-9 form-group">
                            <select class="choices form-select" name="jenis" required="">
                                <option value="1">Admin</option>
                                <option value="2">Front</option>
                            </select>
                        </div>
                        <div class="col-sm-12 d-flex justify-content-end">
                            <button type="submit" class="btn btn-secondary mr-1 mb-1">Tambah Data</button>
                            <button type="reset" class="btn border btn-light-secondary mr-1 mb-1">Reset</button>
                        </div>
                        </div>
                    </div>
                    </form>
                </div>
                </div>
            
    </section>
<?= $this->endSection() ?>