<script src="../templates/plugins/ckeditor/ckeditor.js"></script>
<script>
$(function(){
	document.title = 'Berita';
    CKEDITOR.replace('teks_isi');
	$('#data').DataTable({
		"ordering": false
	});
	$('#fberita').bootstrapValidator({
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
            gambar: {
                validators: {
                    file: {
                        extension: 'jpg',
                        type: 'image/jpeg',
                        message: 'Gambar harus jpg'
                    },
                }
            },            
        }
    });
});
</script>
<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Berita
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
                <div class="box-body" id="pesan_gagal"><?php echo $_COOKIE['berhasil']; ?></div>
              </div>
            <?php } ?>
              <div id="isi">
                <?php
                if(isset($_GET['id'])){
                    $a = mysql_query("select * from berita where id_berita='$_GET[id]'");
                    $b = mysql_fetch_array($a);
                }
                ?>
				<form action="berita_proses.php" method="post" id="fberita" class="form-horizontal" enctype="multipart/form-data"> 
				<input type="hidden" name="aksi" value="<?php echo isset($b)?'edit':'tambah'; ?>" />
				<input type="hidden" name="kode_lama" value="<?php echo isset($b)?$b['id_berita']:''; ?>" />
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Judul</label>
                                <div class="col-lg-5">
                                    <input type="text" name="judul" class="form-control" value="<?php echo isset($b)?$b['judul']:''; ?>" maxlength="50" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Gambar</label>
                                <div class="col-lg-5">
                                    <input type="file" name="gambar" />
                                    <?php echo isset($b)&&$b['gambar_berita']!=''?"<img src=\"../berita/".$b['gambar_berita']."\" width=\"100\" height=\"100\" />":''; ?>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="box-body pad">
                                    <textarea name="isi" id="teks_isi"><?php echo isset($b)?$b['isi_berita']:''; ?></textarea>
                                </div>
                            </div>

							<div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
									<input type="submit" value="Simpan" class="btn btn-primary" />
									<a href="?h=berita"><input type="button" value="Batal" class="btn btn-default" /></a>
                                </div>
                            </div>
				</form>
                
                <table id="data" class="table table-bordered table-hover" cellspacing="0" width="100%">
                	<thead>
                        <tr>
                            <th>Id Berita</th>
                            <th>Judul</th>
                            <th>Isi Berita</th>
                            <th>Gambar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                    	<?php 
                        $x = mysql_query("select * from berita order by id_berita desc");
                        while($y = mysql_fetch_array($x)){
                        ?>
                        <tr>
                            <td><?php echo $y['id_berita']; ?></td>
                            <td><?php echo $y['judul']; ?></td>
                            <td><?php echo substr(strip_tags($y['isi_berita']), 0, 100).'...'; ?></td>
                            <td><?php echo strlen($y['gambar_berita'])!=0?'<img src="../berita/'.$y['gambar_berita'].'" width="50" height="50" />':'tidak ada gambar'; ?></td>
                            <td align="center">
                            	<a href="?h=berita&id=<?php echo $y['id_berita']; ?>" title="edit"><img src="../templates/images/edit.png" width="20" height="20" /></a>
                                <a href="berita_proses.php?id=<?php echo $y['id_berita']; ?>" title="hapus" onclick="return confirm('yakin menghapus?')"><img src="../templates/images/remove.png" width="20" height="20" /></a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
              </div>          
        </section><!-- /.content -->