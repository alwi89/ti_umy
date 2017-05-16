<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Berita
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <?php
                $a = mysql_query("select * from berita order by id_berita desc");
                while($b = mysql_fetch_array($a)){
                ?>
                <div id="isi" align="justify" style="margin-top: 10px;">
                
                  <b><?php echo $b['judul']; ?></b><br />
                  <span style="color:red;font-size: 9px;"><?php echo date('d/m/Y', strtotime($b['tanggal'])); ?></span><br />
                  <?php echo substr(strip_tags($b['isi_berita']), 0, 600).'.........'; ?><br />
                  <div style="clear: both;">&nbsp;</div>
                  <a href="?h=berita_detail&id=<?php echo $b['id_berita']; ?>">lihat detail &gt;</a>
                
                </div>
                <?php } ?>        
        </section><!-- /.content -->