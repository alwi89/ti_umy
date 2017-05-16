<script src="templates/plugins/ckeditor/ckeditor.js"></script>
<script>
$(function(){
    document.title = 'Upload / Download';
    CKEDITOR.replace('teks_isi');
    $('#data').DataTable({
        "ordering": false
    });
    $('#fupload').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            judul: {
                validators: {
                    notEmpty: {
                        message: 'Judul harus diisi'
                    },
                }
            },
            lokasi: {
                validators: {
                    notEmpty: {
                        message: 'Lokasi harus diisi'
                    },
                }
            }
        }
    });
});
</script>
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Upload / Download Hasil Penelitian
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
             <?php if(isset($_COOKIE['berhasil'])){ ?>
             <div class="box box-solid box-success" id="berhasil">
                <div class="box-header">
                  <h3 class="box-title" id="judul_berhasil">sukses</h3>
                </div>
                <div class="box-body" id="pesan_berhasil"><?php echo $_COOKIE['berhasil']; ?></div>
              </div>
            <?php } ?>
            <?php if(isset($_COOKIE['gagal'])){ ?>
              <div class="box box-solid box-danger" id="gagal">
                <div class="box-header">
                  <h3 class="box-title" id="judul_gagal">gagal</h3>
                </div>
                <div class="box-body" id="pesan_gagal"><?php echo $_COOKIE['gagal']; ?></div>
              </div>
            <?php } ?>
              <div id="isi">
                <form action="upload_proses.php" method="post" id="fupload" class="form-horizontal" enctype="multipart/form-data"> 
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Judul</label>
                                <div class="col-lg-5">
                                    <input type="text" name="judul" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="box-body pad">
                                    <textarea name="isi" id="teks_isi"><?php echo isset($b)?$b['isi_hasil_penelitian']:''; ?></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Lokasi</label>
                                <div class="col-lg-5">
                                    <input type="text" name="lokasi" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">File</label>
                                <div class="col-lg-5">
                                    <input type="file" name="file_hasil" />
                                    <?php echo isset($b)&&$b['file']!=''?"<a href=\"hasil_penelitian/".$b['file']."\">download</a>":''; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <input type="submit" value="Simpan" class="btn btn-primary" />
                                    <a href="?h=upload"><input type="button" value="Batal" class="btn btn-default" /></a>
                                </div>
                            </div>
                </form>
                <table id="data" class="table table-bordered table-hover" cellspacing="0" width="100%">
                    <thead>
                        <tr>
                            <th>Id Hasil</th>
                            <th>Judul</th>
                            <th>Lokasi</th>
                            <th>Dosen</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $x = mysql_query("select * from hasil_penelitian h join dosen d on h.nik=d.nik order by id_hasil_penelitian desc");
                        while($y = mysql_fetch_array($x)){
                        ?>
                        <tr>
                            <td><?php echo $y['id_hasil_penelitian']; ?></td>
                            <td><?php echo $y['judul']; ?></td>
                            <td><?php echo $y['lokasi']; ?></td>
                            <td><?php echo $y['nama'].' - '.$y['nik']; ?></td>
                            <td align="center">
                                <?php echo $y['file']!=''?"<a href=\"hasil_penelitian/".$y['file']."\">download</a> | ":''; ?>
                                <a href="?h=upload_detail&id=<?php echo $y['id_hasil_penelitian']; ?>" title="lihat hasil penelitian">lihat</a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
                    
              </div>
        </section><!-- /.content -->