<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Detail Agenda
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <?php
                $a = mysql_query("select * from agenda where id_agenda='$_GET[id]'");
                $b = mysql_fetch_array($a);
                ?>
                <div id="isi" align="justify" style="margin-top: 10px;">
                
                  
                  <span style="color:red;font-size: 9px;"><?php echo date('d/m/Y', strtotime($b['tanggal'])); ?></span><br />
                  <?php echo $b['isi_kegiatan']; ?><br />
                  lokasi : <?php echo $b['lokasi']; ?><br />
                  <div style="clear: both;">&nbsp;</div>
                </div>
        </section><!-- /.content -->