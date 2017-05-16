<script>
$(function(){
    document.title = 'Registrasi';
    $('#fregistrasi').bootstrapValidator({
//        live: 'disabled',
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            nik: {
                validators: {
                    notEmpty: {
                        message: 'NIK harus diisi'
                    },
                }
            },
            nama: {
                validators: {
                    notEmpty: {
                        message: 'Nama harus diisi'
                    },
                }
            },
            jabatan: {
                validators: {
                    notEmpty: {
                        message: 'Jabatan harus diisi'
                    },
                }
            },
            alamat: {
                validators: {
                    notEmpty: {
                        message: 'Alamat harus diisi'
                    },
                }
            },
            no_hp: {
                validators: {
                    notEmpty: {
                        message: 'No HP harus diisi'
                    },
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'Email harus diisi'
                    },
                }
            },
            username: {
                validators: {
                    notEmpty: {
                        message: 'Username harus diisi'
                    },
                }
            },
            password: {
                validators: {
                    notEmpty: {
                        message: 'Password harus diisi'
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
            Registrasi
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
                <form action="registrasi_proses.php" method="post" id="fregistrasi" class="form-horizontal"> 
                            <div class="form-group">
                                <label class="col-lg-3 control-label">NIK</label>
                                <div class="col-lg-5">
                                    <input type="text" name="nik" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Nama</label>
                                <div class="col-lg-5">
                                    <input type="text" name="nama" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Jabatan</label>
                                <div class="col-lg-5">
                                    <input type="text" name="jabatan" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Alamat</label>
                                <div class="col-lg-5">
                                    <input type="text" name="alamat" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">No. Hp</label>
                                <div class="col-lg-5">
                                    <input type="text" name="no_hp" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Email</label>
                                <div class="col-lg-5">
                                    <input type="text" name="email" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Username</label>
                                <div class="col-lg-5">
                                    <input type="text" name="username" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-lg-3 control-label">Password</label>
                                <div class="col-lg-5">
                                    <input type="password" name="password" class="form-control" />
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-lg-9 col-lg-offset-3">
                                    <input type="submit" value="Simpan" class="btn btn-primary" />
                                    <a href="?h=registrasi"><input type="button" value="Batal" class="btn btn-default" /></a>
                                </div>
                            </div>
                </form>
                
              </div>          
        </section><!-- /.content -->