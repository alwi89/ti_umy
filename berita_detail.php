<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Detail Berita
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <?php
                $a = mysql_query("select * from berita where id_berita='$_GET[id]'");
                $b = mysql_fetch_array($a);
                ?>
                <div id="isi" align="justify" style="margin-top: 10px;">
                
                  <b><?php echo $b['judul']; ?></b><br />
                  <span style="color: blue;font-size: 9px;"><span style="color:red;font-size: 9px;"><?php echo date('d/m/Y', strtotime($b['tanggal'])); ?></span><br />
                  <?php
                  if($b['gambar_berita']!=''){
                  ?>
                  <img src="berita/<?php echo $b['gambar_berita']; ?>" width="300" height="280" />
                  <?php } ?><br />
                  <?php echo $b['isi_berita']; ?><br />
                  <div style="clear: both;">&nbsp;</div>
                </div>
        </section><!-- /.content -->