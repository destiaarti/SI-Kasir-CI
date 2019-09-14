			
		<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">Order List</li>
			</ol>
		</div><!--/.row-->
		
	<br>
				
		
		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">Order List</a></div>
					<div class="panel-body">




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
ANTAR PESANAN
<?php }else if($row->STATUS_PESAN==2 && $lvl=="kasir"){?>
PEMBAYARAN
<?php }else if($row->STATUS_PESAN==2 && $lvl=="pelayan"){?>
PEMBAYARAN</button>
<?php }else  if($row->STATUS_PESAN==0){}else{?>	
SUDAH BAYAR
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


					</div>





<br>
<a href="<?php echo base_url();?>lap/lap_print"><button type="button" class="btn btn-primary">CETAK</button></a>
		


					</div>
				</div>
			</div>
		</div><!--/.row-->	

		

	
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
		
	