<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>SLaporan</title>
  <link rel="stylesheet" href="<?php echo base_url(). "assets/";?>css/bootstrap.min.css">
</head>

<body>
<div class="row" align="center">

	<h1>Laporan</h1>


	<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px"> No</th>
						        <th data-field="id" data-sortable="true">Id Pemesanan</th>
						        <th data-field="id2" data-sortable="true">Nama Pemesan</th>
						        <th data-field="id3" data-sortable="true">Meja</th>
						        <th data-field="id4" data-sortable="true">Bayar</th>
						        <th data-field="id5" data-sortable="true">Status</th>
						        <th data-field="id5d" data-sortable="true">Konfirmasi</th>
						       
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($dataorder as $row) {
							   $pegawai= $this->session->userdata('id_user');
							   if($row->id_pegawai==$pegawai){
						    $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="id1"><a href="<?php echo base_url();?>daftar_order/view_detail/<?php echo $row->id_pemesanan;?>"><?php echo $row->id_pemesanan;?></a></td>
						        <td data-field="id2"><?php echo $row->nama_pemesan;?></td>
						        <td data-field="id3"><?php echo $row->nama_meja;?></td>
						        <td data-field="id4"><?php echo $row->bayar;?></td>
						        <td><?php
						        if($row->STATUS_PESAN==1)
						        { echo "PROSES MASAK";}
						    	else if($row->STATUS_PESAN=='2'){ echo "SUDAH DISAJIKAN"; }
						    	else if($row->STATUS_PESAN==0){echo "BATAL PEMESANAN";}else{echo "SUDAH DIBAYAR";}
						        ;?></td>
						        <td data-field="33" align="center">
						        	<?php
									$user=$this->session->userdata('nama'); 
									$get3 =$this->db->get_where("pegawai",array("nama_pegawai" =>$user))->row();
									$idp = $get3->id_pegawai;
									$get4 =$this->db->get_where("akun",array("username" =>$idp))->row();
					 
					  	$lvl = $get4->level;
						
									if($row->STATUS_PESAN==1)
						        {?>
<a href="<?php echo base_url();?>daftar_order/antar/<?php echo $row->id_pemesanan;?>"><button type="button" class="btn btn-warning btn-lg">ANTAR PESANAN</button></a>
<?php }else if($row->STATUS_PESAN==2 && $lvl=="kasir"){?>
<a href="<?php echo base_url();?>daftar_order/trans_bayar/<?php echo $row->id_pemesanan;?>"><button type="button" class="btn btn-success btn-lg">PEMBAYARAN</button></a>
<?php }else if($row->STATUS_PESAN==2 && $lvl=="pelayan"){?>
<button type="button" class="btn btn-danger btn-lg "disabled><font color="black">PEMBAYARAN</font></button>
<?php }else  if($row->STATUS_PESAN==0){}else{?>	
<a href="<?php echo base_url();?>daftar_order/view_detail/<?php echo $row->id_pemesanan;?>"><button type="button" class="btn btn-primary btn-lg">SUDAH BAYAR</button></a>
<?php }?>
</td>

						         <td data-field="iwd5"> 

<?php if($row->STATUS_PESAN==3)
						        {}else{?>

<?php if($row->STATUS_PESAN==0)
{
	?>


</td>

						    </tr>
						   <?php }}}}?>
						    </tbody>
						    
						</table>


    <td>
  <div class="progress">
  <div class="progress-bar progress-bar-success progress-bar-striped active" role="progressbar" aria-valuenow="<?php echo $row->progress;?>" aria-valuemin="0" aria-valuemax="100" style="width: <?php echo $row->progress;?>%">
    <span><?php echo $row->progress;?> % Complete (Progress)</span>
  </div>
  </div>
    </td>
  </tr>
<?php endforeach;?>
</table>

</div>
</body>
</html>