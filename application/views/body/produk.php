


			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="<?php echo base_url();?>home"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Data Produk</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="<?php echo base_url();?>produk/add" style="text-decoration:none">Tambah Produk</a></div>
					<div class="panel-body">
					<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#menu">Semua Menu</a></li>
    <li> <a data-toggle="tab" href="#makanan">Makanan</a></li>
    <li><a data-toggle="tab" href="#minuman">Minuman</a></li>
  </ul>

  <div class="tab-content">
    <div id="menu" class="tab-pane fade in active">
						<h3>SEMUA MENU</h3>
						<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px">No</th>
						        <th data-field="id_pegawai" data-sortable="true">Id Produk</th>
						        <th data-field="nama_pegawai" data-sortable="true">Kategori</th>
						        <th data-field="alamat" data-sortable="true">Nama Produk</th>
						        <th data-field="jenis_kelamin" data-sortable="true">Harga</th>
						        <th data-field="aktif" data-sortable="true">Status</th>
						        <th>Aksi</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($dataproduk as $row) : $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="nik"><?php echo $row->id_produk;?></td>
						        <td data-field="nama"><?php echo $row->nama_kategori;?></td>
						        <td data-field="alamat"><?php echo $row->nama_produk;?></td>
						        <td data-field="jk"><?php echo $row->harga;?></td>
								
						        <td data-field="status">
								<?php 
									if ($row->aktif ==0){
											?>
									<button type="button" class="btn btn-warning btn-lg">Habis</button>
									<?php } else{?>
									<a href="<?php echo base_url();?>order/view/"><button type="button" class="btn btn-success btn-lg">Ready</button></a>
								<?php } ?></td>
							</td>
						        <td> 
<a class="ubah btn btn-primary btn-lg" href="<?php echo base_url();?>produk/edit/<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-edit" ></span></a>
<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-lg" href="#modKonfirmasi" data-id="<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-trash"></span></a>
</td>
						    </tr>
						    <?php endforeach;?>
						    </tbody>
						    
						</table>
						</div>
					
						    <div id="makanan" class="tab-pane fade">
							<h3>MAKANAN</h3>
							<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px">No</th>
						        <th data-field="id_pegawai" data-sortable="true">Id Produk</th>
						        <th data-field="nama_pegawai" data-sortable="true">Kategori</th>
						        <th data-field="alamat" data-sortable="true">Nama Produk</th>
						        <th data-field="jenis_kelamin" data-sortable="true">Harga</th>
						        <th data-field="aktif" data-sortable="true">Status</th>
						        <th>Aksi</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($dataproduk as $row) {
							   if($row->nama_kategori=="MAKANAN"){ $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="nik"><?php echo $row->id_produk;?></td>
						        <td data-field="nama"><?php echo $row->nama_kategori;?></td>
						        <td data-field="alamat"><?php echo $row->nama_produk;?></td>
						        <td data-field="jk"><?php echo $row->harga;?></td>
								
						        <td data-field="status">
								<?php 
									if ($row->aktif ==0){
											?>
									<button type="button" class="btn btn-warning btn-lg">Habis</button>
									<?php } else{?>
									<a href="<?php echo base_url();?>order/view/"><button type="button" class="btn btn-success btn-lg">Ready</button></a>
								<?php } ?></td>
							</td>
						        <td> 
<a class="ubah btn btn-primary btn-lg" href="<?php echo base_url();?>produk/edit/<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-edit" ></span></a>
<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-lg" href="#modKonfirmasi" data-id="<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-trash"></span></a>
</td>
						    </tr>
							   <?php }}?>
						    </tbody>
						    
						</table>
							</div>
							    <div id="minuman" class="tab-pane fade">
							<h3>MINUMAN</h3>
							<table data-toggle="table" data-show-refresh="false" data-show-toggle="true" data-show-columns="true" data-search="true"  data-pagination="true" data-sort-name="name" data-sort-order="desc">
						    <thead>
						    <tr>
						        <th data-field="no" data-sortable="true" width="10px">No</th>
						        <th data-field="id_pegawai" data-sortable="true">Id Produk</th>
						        <th data-field="nama_pegawai" data-sortable="true">Kategori</th>
						        <th data-field="alamat" data-sortable="true">Nama Produk</th>
						        <th data-field="jenis_kelamin" data-sortable="true">Harga</th>
						        <th data-field="aktif" data-sortable="true">Status</th>
						        <th>Aksi</th>
						    </tr>
                            </thead>
                            <tbody>
                           <?php $no = 0; foreach($dataproduk as $row){
							   if($row->nama_kategori=="MINUMAN"){ $no++;?>
						     <tr>
						        <td data-field="no" width="10px"><?php echo $no;?></td>
						        <td data-field="nik"><?php echo $row->id_produk;?></td>
						        <td data-field="nama"><?php echo $row->nama_kategori;?></td>
						        <td data-field="alamat"><?php echo $row->nama_produk;?></td>
						        <td data-field="jk"><?php echo $row->harga;?></td>
								
						        <td data-field="status">
								<?php 
									if ($row->aktif ==0){
											?>
									<button type="button" class="btn btn-warning btn-lg">Habis</button>
									<?php } else{?>
									<a href="<?php echo base_url();?>order/view/"><button type="button" class="btn btn-success btn-lg">Ready</button></a>
								<?php } ?></td>
							</td>
						        <td> 
<a class="ubah btn btn-primary btn-lg" href="<?php echo base_url();?>produk/edit/<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-edit" ></span></a>
<a data-toggle="modal"  title="Hapus Kontak" class="hapus btn btn-danger btn-lg" href="#modKonfirmasi" data-id="<?php echo $row->id_produk;?>"><span class="glyphicon glyphicon-trash"></span></a>
</td>
						    </tr>
						   <?php }}?>
						    </tbody>
						    
						</table>
							</div>
								</div>
					</div>
				</div>
			</div>
		</div><!--/.row-->	

		<?php echo $this->session->flashdata("msg");?>

	
						<script>
						    $(function () {
						        $('#hover, #striped, #condensed').click(function () {
						            var classes = 'table';
						
						            if ($('#hover').prop('checked')) {
						                classes += ' table-hover';
						            }
						            if ($('#condensed').prop('checked')) {
						                classes += ' table-condensed';
						            }
						            $('#table-style').bootstrapTable('destroy')
						                .bootstrapTable({
						                    classes: classes,
						                    striped: $('#striped').prop('checked')
						                });
						        });
						    });
						
						    function rowStyle(row, index) {
						        var classes = ['active', 'success', 'info', 'warning', 'danger'];
						
						        if (index % 2 === 0 && index / 2 < classes.length) {
						            return {
						                classes: classes[index / 2]
						            };
						        }
						        return {};
						    }
						</script>

						<?php $this->load->view('konfirmasi');?>

<script type="text/javascript">
$(document).ready(function(){

$(".hapus").click(function(){
var id = $(this).data('id');

$(".modal-body #mod").text(id);

});

});
</script>



					</div>
				</div>
			</div>
		</div><!--/.row-->	
		
		
