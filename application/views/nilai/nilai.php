<div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <i class="fa fa-bell fa-fw"></i> Guru
                        </div>
                         <div class="panel-body">
        <div class="row" style="margin-bottom: 10px">
            <div class="col-md-4">
               
            </div>
            <div class="col-md-4 text-center">
                
            </div>
            <div class="col-md-1 text-right">
            </div>
            <div class="col-md-3 text-right">
            </div>
        </div>
        <table class="table table-striped table-bordered table-hover" style="margin-bottom: 10px">
            <tr>
                <th>No</th>
		<th>Nama</th>
		<th>Tempatlahir</th>
		<th>Pendidikan</th>
		<th>Masakerja</th>
		<th>Jenisguru</th>
		<th>Action</th>
            </tr><?php
            foreach ($guru_data as $guru)
            {
                ?>
                <tr>
			<td width="80px"><?php echo ++$start ?></td>
			<td><?php echo $guru->nama ?></td>
			<td><?php echo $guru->tempatlahir ?></td>
			<td><?php echo $guru->pendidikan ?></td>
			<td><?php echo $guru->masakerja ?></td>
			<td><?php echo $guru->jenisguru ?></td>
			<td style="text-align:center" >
				<?php 
                if ($guru->jenisguru=="Guru Matpel") {
                    echo anchor(site_url('nilai/mapel/'.$guru->kodeguru),'Penilaian','class="btn btn-danger"'); 
                }else{
                    echo anchor(site_url('nilai/bk/'.$guru->kodeguru),'Penilaian','class="btn btn-danger"'); 
                }
				
				?>
			</td>
		</tr>
                <?php
            }
            ?>
        </table>
        <div class="row">
            <div class="col-md-6">
                <a href="#" class="btn btn-primary">Total Data : <?php echo $total_rows ?></a>
	    </div>
            <div class="col-md-6 text-right">
                <?php echo $pagination ?>
            </div>
        </div></div></div></div>
   