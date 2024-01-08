<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Data Mahasiswa Baru</h1>
                   
                     <form action="<?=base_url('MahasiswaBaru/import')?>" enctype="multipart/form-data" method="post">
                        <input type="file" name="upload_file" required>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary mb-3">
                      

                     </form>
                    
                        <!-- <a href="<?= site_url('MahasiswaBaru/') ?>" class="btn btn-primary mb-3">Import</a> -->
                    <!-- DataTales Example -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>NIM</th>
                                            <th>Nama</th>
                                            <th>Prodi</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php $no=1?>
                                        <?php foreach ($mahasiswa as $mhs):?>
                                        <tr>
                                            <td><?=$no++?></td>
                                            <td><?=$mhs['nim']?></td>
                                            <td><?=$mhs['nama']?></td>
                                            <td><?=$mhs['prodi']?></td>
                                        </tr>
                                        <?php endforeach;?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>