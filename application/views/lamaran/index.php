      

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- Page Heading -->
                    <h1 class="h3 mb-4 text-gray-800"><?=$title ?></h1>
                </div>
                <!-- /.container-fluid -->

            <div class="container">
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalPendaftaran">
                Daftar Pekerjaan
            </button>
            </div>
            </div>

            
<!-- Modal -->
<div class="modal fade" id="modalPendaftaran" tabindex="-1" role="dialog" aria-labelledby="modalPendaftaranLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <!-- Header modal -->
            <div class="modal-header bg-primary">
                <h5 style="color:black;" class="modal-title" id="modalPendaftaranLabel">
                    Form Pendaftaran Pekerjaan
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
            </div>
            <!-- Body modal -->
            <div class="modal-body justify-content-center d-flex">
                <form action="<?=base_url('lamaran/index')?>" id="RegitrasiPekerjaan"  enctype="multipart/form-data" method="post">
                    <table border="0" cellpadding="5" cellspacing="0">
                        <tr>
                            <td colspan="2">
                                <label for="Nama_Lengkap"><b>Nama Lengkap *</b></label
                    ><br />
                    <input
                      name="nama"
                      type="text"
                      placeholder="Masukkan Nama Anda..."
                      maxlength="50"
                      style="width: 100%; max-width: 535px"
                    />
                    <?= form_error('nama',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>
                <tr>
                </tr>
                <tr>
                  <td colspan="2">
                    <label for="NIK"><b>NIK *</b></label
                    ><br />
                    <input
                      name="nik"
                      type="text"
                      placeholder="Masukkan Nomor NIK Anda..."
                      maxlength="100"
                      style="width: 100%; max-width: 535px"
                    />
                    <?= form_error('nik',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>

                <tr>
                  <td>
                    <label for="Tempat_Lahir"><b>Tempat Lahir</b></label
                    ><br />
                    <input
                      name="tempat_lahir"
                      placeholder="Masukkan Tempat Lahir Anda..."
                      type="text"
                      maxlength="50"
                      style="width: 100%; max-width: 200px"
                    />
                    <?= form_error('tempat_lahir',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                  <td>
                    <label for="Tanggal_Lahir"><b>Tanggal Lahir</b></label
                    ><br />
                    <input
                      name="tanggal_lahir"
                      type="date"
                      maxlength="50"
                      style="width: 100%; max-width: 260px"
                    /><?= form_error('tanggal_lahir',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>
                <tr>
                  <td>
                    <label for="JK"><b>Jenis Kelamin *</b></label
                    ><br />
                    <label>
                      <span>
                        <input
                          type="radio"
                          name="jenis_kelamin"
                          value="Laki-laki"
                        /><?= form_error('jenis_kelamin',' <small class="text-danger pl-3">', '</small>');?>
                        Laki-laki
                      </span> </label>
                      <br />
                    <label
                      ><input
                        type="radio"
                        name="jenis_kelamin"
                        value="Perempuan"
                      />
                      Perempuan</label>
                      <br />
                  </td>
                  <td>
                    <label for="Agama"><b>Agama</b></label
                    ><br />
                    <select
                      id="Agama"
                      name="agama"
                      maxlength="50"
                      style="width: 100%; max-width: 260px"
                    >
                      <option value="Islam">ISLAM</option>
                      <option value="Kristen">KRISTEN</option>
                      <option value="Katolik">KATOLIK</option>
                      <option value="Hindu">HINDU</option>
                      <option value="Budha">BUDHA</option>
                      <option value="Konghucu">KONGHUCU</option>
                    </select>
                  </td>
                </tr>
                <tr></tr>
                <tr>
                  <td style="width: 50%">
                    <label for="No_Handphone"><b>No Handphone *</b></label
                    ><br />
                    <input
                      name="no_handphone"
                      placeholder="Masukkan Nomor HP..."
                      type="text"
                      maxlength="50"
                      style="width: 100%; max-width: 200px"
                    /><?= form_error('no_handphone',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                  <td style="width: 50%">
                    <label for="Pendidikan_Terakhir"
                      ><b>Pendidikan Terakhir *</b></label
                    ><br />
                    <select id="pendidikan" name="pendidikan_terakhir">
                      <option value="Sekolah Dasar">Sekolah Dasar</option>
                      <option value="Sekolah Menengah Pertama">Sekolah Menengah Pertama</option>
                      <option value="Sekolah Menengah Atas">Sekolah Menengah Atas</option>
                      <option value="Diploma 3">Diploma3</option>
                      <option value="Strata 1">Strata 1</option>
                      <option value="Strata 2">Strata 2</option>
                      <option value="Strata 3">Strata 3</option>
                    </select>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <label for="Alamat"><b>Alamat Lengkap</b></label
                    ><br />
                    <input
                      type="text"
                      id="alamat"
                      name="alamat"
                      placeholder="Masukkan alamat Anda..."
                    /><?= form_error('alamat',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <label for="P_Kerja"><b>Pengalaman Kerja *</b></label
                    ><br />
                    <input
                      name="pengalaman_kerja"
                      type="text"
                      placeholder="Masukkan Pengalaman Anda Bekerja..."
                      maxlength="100"
                      style="width: 100%; max-width: 535px"
                    /><?= form_error('pengalaman_kerja',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>
                <tr>
                  <td colspan="2">
                    <label for="Nilai"><b>Nilai *</b></label
                    ><br />
                    <input
                      name="nilai"
                      type="text"
                      placeholder="Masukkan Nilai Anda..."
                      maxlength="100"
                      style="width: 100%; max-width: 535px"
                    /><?= form_error('nilai',' <small class="text-danger pl-3">', '</small>');?>
                  </td>
                </tr>

                <!-- Input File -->
                <tr>
                  <td colspan="2">
                    <label for="Foto"><b>Masukan File Pas Foto *</b></label
                    ><br />
                    <input type="file" id="Foto" name="pasfhoto" />
                    <?= form_error('pasfhoto',' <small class="text-danger pl-3">', '</small>');?>
                    <br />
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <label for="Ijazah"><b>Masukan File Ijazah *</b></label
                    ><br />
                    <input type="file" id="Ijazah" name="ijazah" />
                    <?= form_error('ijazah',' <small class="text-danger pl-3">', '</small>');?>
                    <br />
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <label for="KTP"><b>Masukan File KTP *</b></label
                    ><br />
                    <input type="file" id="KTP" name="ktp" />
                    <?= form_error('ktp',' <small class="text-danger pl-3">', '</small>');?>
                    <br />
                  </td>
                </tr>

                <tr>
                  <td colspan="2">
                    <label for="Sertifikat"
                      ><b>Masukan File Sertifikat *</b></label
                    ><br />
                    <input
                      type="file"
                      id="Sertifikat"
                      name="sertifikat"/>
                    
                    <?= form_error('sertifikat',' <small class="text-danger pl-3">', '</small>');?>
                    <br />
                  </td>
                </tr>
              </table>
              <button type="submit" class="btn btn-success">
              Kirim Pendaftaran
            </button>
            </form>
          </div>
          <!-- Footer modal -->
          <div class="modal-footer bg-primary">
            <button
              type="button"
              class="btn btn-secondary"
              data-dismiss="modal"
            >
              Tutup
            </button>
         
          </div>

        </div>
      </div>
    </div>
            </div>
            <!-- End of Main Content -->
