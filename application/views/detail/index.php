<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

    <div class="col-lg-8">

        <div class=" main-card card o-hidden border-0 shadow-lg my-5">
            <div style="background-color: #fcf1d5;" class="card-body p-0 ">
                <!-- Nested Row within Card Body -->

                <div class="row">
                    <div class="col-lg">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 style="font-weight:bold;" class="h4 text-gray-900 mb-4">Surat Lamaran</h1>
                            </div>
                           
                            <div>
                            <center>
                                <img  style='width: 150px;' src="<?php echo base_url('uploads/' . $lamaran['pasfhoto']); ?>" alt="">
                            </center>
                            </div>
                            <?php if(validation_errors()) :?>
                                <div style="font-size: 10px;" class="alert alert-danger" role="alert">
                                    <?php echo validation_errors();?>
                                </div>
                            <?php endif;?>
                            <form class="" method="post">
        
                               
                               <fieldset disabled="disabled">
                                
                               <div class="mb-3">
                                    <label for="no_pendaftaran">Nomor Pendaftaran</label>
                                    <input name="no_pendaftaran" value="<?= $lamaran['no_pendaftaran'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="nama">Nama Lengkap</label>
                                    <input name="nama" value="<?= $lamaran['nama'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="nik">NIK</label>
                                    <input name="nik" value="<?= $lamaran['nik'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="tempat_lahir">Tempat Lahir</label>
                                    <input name="nik" value="<?= $lamaran['tempat_lahir'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="tanggal_lahir">Tanggal Lahir</label>
                                    <input name="nik" value="<?= $lamaran['tanggal_lahir'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="jenis_kelamin">Jenis Kelamin</label>
                                    <input name="nik" value="<?= $lamaran['jenis_kelamin'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="agama">Agama</label>
                                    <input name="nik" value="<?= $lamaran['agama'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="no_handphone">No Handphone</label>
                                    <input name="nik" value="<?= $lamaran['no_handphone'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <input name="nik" value="<?= $lamaran['pendidikan_terakhir'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="nilai">Nilai</label>
                                    <input name="nik" value="<?= $lamaran['nilai'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="alamat">Alamat</label>
                                    <input name="nik" value="<?= $lamaran['alamat'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="pengalaman_kerja">Pengalaman Kerja</label>
                                    <input name="nik" value="<?= $lamaran['agama'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="jadwal">Jadwal Wawancara</label>
                                    <input name="jadwal" value="<?= $lamaran['jadwal'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                                <div class="mb-3">
                                <label for="lulus">Hasil</label>
                                    <input name="lulus" value="<?= $lamaran['lulus'];?>" id="disabledTextInput" class="form-control" placeholder="Disabled input">
                                </div>
                               </fieldset>
                               <div class="mb-3">
                                <label for="ktp">File KTP</label> <br>
                                    <a style=" background-color: #4CAF50; border: none; color: white; padding: 10px 20px;text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 2px 2px;  cursor: pointer;  " target="_blank" href="<?php echo base_url('uploads/' . $lamaran['ktp']); ?>">View/Download</a>
                                </div>
                               <div class="mb-3">
                                <label for="ijazah">File Ijazah</label> <br>
                                <a style=" background-color: #4CAF50; border: none; color: white; padding: 10px 20px;text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 2px 2px;  cursor: pointer;  " target="_blank" href="<?php echo base_url('uploads/' . $lamaran['ijazah']); ?>">View/Download</a>
                                </div>
                               <div class="mb-3">
                                <label for="sertifikat">File Sertifikat</label> <br>
                                <a style=" background-color: #4CAF50; border: none; color: white; padding: 10px 20px;text-align: center; text-decoration: none;  display: inline-block; font-size: 16px; margin: 2px 2px;  cursor: pointer;  " target="_blank" href="<?php echo base_url('uploads/' . $lamaran['sertifikat']); ?>">View/Download</a>
                                </div>
                               
                                <hr>
                            </form>

                            <p>Click the button below to generate a PDF report:</p>
                                <form action="<?php echo base_url('detail/create_pdf/'.$lamaran['no_pendaftaran']); ?>" method="post">
                                    <button type="submit" class="btn btn-primary">Generate PDF</button>
                                </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

</div>

</div>