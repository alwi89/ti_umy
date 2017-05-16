<!-- Content Header (Page header) -->
        <section class="content-header">
          <h1 style="margin-top:30px;">
            Agenda
          </h1>
        </section>

        <!-- Main content -->
        <section class="content">
                <?php
                $a = mysql_query("select * from agenda order by tgl_agenda desc");
                while($b = mysql_fetch_array($a)){
                ?>
                <div id="isi" align="justify" style="margin-top: 10px;">
                
                  <b><?php echo $b['nama_agenda']; ?></b><br />
                  <span style="color:red;font-size: 9px;"><?php echo date('d/m/Y', strtotime($b['tgl_agenda'])); ?></span><br />
                  <?php echo substr(strip_tags($b['isi']), 0, 600).'.........'; ?><br />
                  <div style="clear: both;">&nbsp;</div>
                  <a href="?h=agenda_detail&id=<?php echo $b['id_agenda']; ?>">lihat detail &gt;</a>
                
                </div>
                <?php } ?>        
        </section><!-- /.content -->