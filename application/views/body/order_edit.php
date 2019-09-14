	<script type="text/javascript">

	function TotalHarga()
	{

		var T_HARGA = 0;

		var i;
for (i = 0; i <=100; i++) {			

			var harga = $("#harga_"+i).val() || 0;

      var total_harga = $("#total_harga_"+i).val() || 0;

			var qty = $("#qty_"+i).val() || 0;

			var total_harga = parseFloat(harga) * parseFloat(qty);

			$("#total_harga_"+i).val(total_harga);

      T_HARGA +=  total_harga;

			}


      


      $("#sum").text(T_HARGA);

      $("#bayar").val(T_HARGA);

      $("#rp").text('Rp');



	}

	</script>





	<div class="row">
			<ol class="breadcrumb">
				<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
				<li class="active">MENU MAKANAN/MINUMAN</li>
			</ol>
		</div><!--/.row-->
		
	<br>
			

		<div class="row">
			<div class="col-lg-12">
				<div class="panel panel-default">
					<div class="panel-heading"><svg class="glyph stroked male user "><use xlink:href="#stroked-male-user"/></svg>
<a href="#" style="text-decoration:none">LIST MENU </a><span id="rp"></span> <span id="sum"></span> &nbsp;&nbsp; </div>
					<div class="panel-body">


            <form method="post" action="<?php echo base_url();?><?php echo $url;?>">

<div class="row">

 <div class="col-sm-4">
   <div class="input-group">
    <span class="input-group-addon">Atas Nama ?</span>
    <input id="msg" type="text" class="form-control"required name="nama_pemesan" value="<?php echo $nama_pemesan;?>" placeholder="Nama Pemesan"  >

  </div>

  <input id="bayar" type="hidden" class="form-control" name="bayar">
</div>

<div class="col-sm-2">
 <span class="input-group-addon">Ganti ke Meja : </span>

 <?php echo form_dropdown('id_meja',$dd_meja, $id_meja, 'required class="form-control"');?>
		       
</div>


</div>
<p></p>
<div class="row">

 <div class="col-sm-4">
   <div class="input-group">
    <span class="input-group-addon">Meja Sebelumnya : </span>
    <input id="msg" type="text" class="form-control"required name="id_meja" value="<?php echo $id_meja;?>" placeholder="Nama Pemesan"  >

  </div>
  </div>
  </div>

<br>

            


<ul class="nav nav-tabs">
    <li class="active"><a data-toggle="tab" href="#namakan">Pesanan</a></li>

  </ul>

  <div class="tab-content">
    <div id="namakan" class="tab-pane fade in active">
  
     
      <table class="table table-striped table-hover">
    <thead>
      <tr>
        <th>NO</th>
        <th>NAMA</th>
        <th>HARGA (Rp)</th>
        <th width="100px">QTY Sebelumnya</th>
        <th width="100px">QTY</th>
        <th width="200px">TOTAL HARGA</th>
      </tr>
    </thead>

    <tbody>
    	<?php $no=0; foreach($data_detailorder->result() as $row_makanan){ $no++;
   
$total_harga = $row_makanan->harga * $row_makanan->qty;
 		
 $no++;?>
      <tr>
      	<td><?php echo $no;?></td>
        <td><?php echo $row_makanan->nama_produk;?></td>

        <td style="display:none"><input type="text" name="id_produk[]" value="<?php echo $row_makanan->id_produk;?>"></td>
        <td style="display:none"><input type="text" name="harga[]"  id="harga_<?php echo $no;?>" value="<?php echo $row_makanan->harga;?>"></td>

        <td><?php echo number_format($row_makanan->harga);?></td>
        <td><?php echo $row_makanan->qty;?></td>
      
        <td><input type="text" name="qty[]" id="qty_<?php echo $no;?>" onkeyup="TotalHarga()" class="form-control"></td>
 <td><input type="text" name="total_harga[]"  class="form-control" readonly id="total_harga_<?php echo $no;?>" ></td>
      </tr>
 <?php }?>

    </tbody>
  </table>


    </div>
  </div>
</div>

 <table class="table table-striped table-hover">
 	<td align="right">
<button type="submit" class="btn btn-primary">Simpan</button>
<a href="<?php echo base_url();?>order/view"  class="btn btn-default">Batal</a>
</td>
</table>

</form>


			       </div>
				</div>
			</div>
		</div><!--/.row-->	