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
                            <a href="/admin-data-controller/tambah"style="float:right" class="btn btn-primary border">Tambah Data</a>
                        </div>
                    </div>
                </div>
                <div class="card-content">
                <div class="card-body">
                    <table class='table table-striped' id="table1">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama</th>
                                <th>Controller</th>
                                <th>Url</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                $no = 1;
                                foreach($controller as $r ): 
                            ?>
                            <tr>
                                <td><?php echo $no ?></td>
                                <td><?php echo $r['nama']; ?></td>
                                <td><?php echo $r['nama_controller']; ?></td>
                                <td><?php echo base_url($r['url']); ?></td>
                                <td>
                                    <a href="admin-data-controller/edit/<?php echo $r['rand'] ?>" class="btn btn-success" >Edit</a>
                                </td>
                            </tr>
                            <?php 
                                $no++;
                                endforeach; 
                            ?>
                           
                        </tbody>
                    </table>
                </div>
            </div>
    </section>

    

<?= $this->endSection() ?>