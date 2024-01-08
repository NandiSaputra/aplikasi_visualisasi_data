<div class="container-fluid">

                    <!-- Page Heading -->
                    <h1 class="h3 mb-2 text-gray-800">Tabel Mahasiswa</h1>
                   
                     <!-- <form action="<?=base_url('MahasiswaAktif/import')?>" enctype="multipart/form-data" method="post">
                        <input type="file" name="upload_file" required>
                        <input type="submit" name="submit" value="submit" class="btn btn-primary mb-3">
                      

                     </form> -->
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tabel Poin 3 Mahasiswa</h6>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                
                                    <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                        <tr>
                                            <th rowspan="2">Tahun Akademik</th>
                                            <th rowspan="2">Daya Tampung</th>
                                            <th colspan="2">Jumlah Calon Mahasiswa</th>
                                           
                                        </tr>
                                        <tr>
                                            <th>Pendaftar</th>
                                            <th>Lulus seleksi</th>
                                           
                                        </tr>
                                  
                                         
                                    <tbody>
                                        <tr>
                                     

                                         <td></td>
                                             <td></td>
                                                 <td></td>
                                                     
                                                         <td></td>
                                         </tr>
                                                         
                                        
                                                         
                                                           
                                                          
                                        
                                        
                                         
                                              <tr>
                                            <th rowspan="2">Tahun Akademik</th>
                                          
                                            <th colspan="2">Jumlah Mahasiswa Baru</th>
                                            
                                        </tr>
                                        <tr>
                                            <th>Reguler </th>
                                            <th> Transfer <span>*</span></th>
                                        </tr>
                                        
                                        <tr>
                                             <?php
                                         foreach ($sum_ms_baru as $data): ?> 
                                         <td> <?php echo $data->first4Letters; ?></td>
                                         <td>  <?php echo $data->total; ?></td>
                                         <td></td>
                                        </tr>
                                          <?php endforeach ?>
                                          
                                           <tr>
                                            <th rowspan="2">Tahun Akademik</th>
                                          
                                            <th colspan="2">Jumlah Mahasiswa Baru</th>
                                            
                                        </tr>
                                        <tr>
                                            
                                            <th>Reguler </th>
                                            <th> Transfer <span>*</span></th>
                                        </tr>
                                        
                                        <tr>
                                             <?php foreach ($sum_ms_aktif as $data2): ?> 
                                         <td> <?php echo $data2->first4Letters; ?></td>
                                          <td>        <?php echo $data2->total; ?></td>
                                         <td></td>
                                        </tr>
                                          <?php endforeach ?>
                                       
                                              
                                    </tbody>
                                    
                                </table>
                                 <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                        <tr>
                                            <th rowspan="2">Tahun Akademik</th>
                                            <th rowspan="2">Prodi</th>
                                            <th colspan="2">Jumlah Mahasiswa</th>
                                        </tr>
                                      
                                  
                                         
                                    <tbody>
                                        <h4>Jumlah Mahasiswa Baru Per Prodi</h4>
                                        <tr>
                                     <?php foreach ($sum_ms_baru_perprodi as $item) : ?>
                                       
                                     
                                         <td> <?php echo $item->first4Letters; ?></td>
                                          <td> <?php echo $item->pro; ?></td>
                                          <td><?php echo $item->total; ?></td>
                                                           
                                         </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>   
                                 <table style="text-align: center;" class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                    
                                        <tr>
                                            <th rowspan="2">Tahun Akademik</th>
                                            <th rowspan="2">Prodi</th>
                                            <th colspan="2">Jumlah Mahasiswa</th>
                                        </tr>
                                      
                                  
                                         
                                    <tbody>
                                        <h4>Jumlah Mahasiswa Aktif Per Prodi</h4>
                                        <tr>
                                     <?php foreach ($sum_ms_baru_peraktif as $item) : ?>
                                       
                                     
                                         <td> <?php echo $item->thn; ?></td>
                                          <td> <?php echo $item->pro; ?></td>
                                          <td><?php echo $item->total; ?></td>
                                                           
                                         </tr>
                                    <?php endforeach ?>
                                    </tbody>
                                </table>   
                            </div>
                        </div>
                         <div class="col">
                                     
                                        
                                       
                                       
                                      
                                        
                                  
                                            
                                           
                                          
                                      
                                </div>
                    </div>