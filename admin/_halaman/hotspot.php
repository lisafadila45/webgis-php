<?php
  $title="Hotspot";
  $judul=$title;
  $url='hotspot';
  if(isset($_POST['simpan'])){
    // Cek apakah file gambar diunggah
    if(isset($_FILES['gambar']['name']) && $_FILES['gambar']['name'] != '') {
        // Lakukan proses upload
        $file = upload('gambar', 'gambar');
        if($file != false){
            // Jika upload berhasil, simpan nama file ke dalam $data['gambar']
            $data['gambar'] = $file;
            
            // Hapus file gambar lama jika id_hotspot telah diset
            if(isset($_POST['id_hotspot']) && $_POST['id_hotspot'] != ''){
                $id_hotspot = $_POST['id_hotspot'];
                
                // Ambil nama gambar lama dari database
                $get = $db->where('id_hotspot', $id_hotspot)->ObjectBuilder()->getOne('t_hotspot');
                $gambar = $get->gambar;

                // Hapus file gambar lama dari folder
                unlink('assets/unggah/gambar/'.$gambar);
            }
        }
    }
	$data['id_kecamatan']=$_POST['id_kecamatan'];
	$data['kel_desa']=$_POST['kel_desa'];
	$data['nama_wp']=$_POST['nama_wp'];
	$data['pemilik_wp']=$_POST['pemilik_wp'];
	$data['jenis_wp']=$_POST['jenis_wp'];
	$data['koordinat']=$_POST['koordinat'];
	$data['jumlah_pajak']=$_POST['jumlah_pajak'];
	$data['status']=$_POST['status'];
	$data['tanggal']=$_POST['tanggal'];
	if($_POST['id_hotspot']==""){
		$exec=$db->insert("t_hotspot",$data);
		$info='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses Ditambah </div>';
		
	}
	else{
		$db->where('id_hotspot',$_POST['id_hotspot']);
		$exec=$db->update("t_hotspot",$data);
		$info='<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses diubah </div>';
	}

	if($exec){
		$session->set('info',$info);
	}
	else{
      $session->set("info",'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> Proses gagal dilakukan <br>'.$db->getLastError().'
              </div>');
	}
	redirect(url($url));
}

if(isset($_GET['hapus'])){
	$setTemplate=false;
	$db->where("id_hotspot",$_GET['id']);
	$exec=$db->delete("t_hotspot");
	$info='<div class="alert alert-success alert-dismissible">
            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
            <h4><i class="icon fa fa-check"></i> Sukses!</h4> Data Sukses dihapus </div>';
	if($exec){
		$session->set('info',$info);
	}
	else{
      $session->set("info",'<div class="alert alert-danger alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h4><i class="icon fa fa-ban"></i> Error!</h4> Proses gagal dilakukan
              </div>');
	}
	redirect(url($url));
}

elseif(isset($_GET['tambah']) OR isset($_GET['ubah'])){
  $id_hotspot="";
  $id_kecamatan="";
  $kel_desa="";
  $nama_wp="";
  $pemilik_wp="";
  $jenis_wp="";
  $jumlah_pajak="";
  $koordinat="";
  $status="";
  $tanggal=date('Y-m-d');
  if(isset($_GET['ubah']) AND isset($_GET['id'])){
  	$id=$_GET['id'];
  	$db->where('id_hotspot',$id);
	$row=$db->ObjectBuilder()->getOne('t_hotspot');
	if($db->count>0){
		$id_hotspot=$row->id_hotspot;
		$id_kecamatan=$row->id_kecamatan;
		$kel_desa=$row->kel_desa;
		$nama_wp=$row->nama_wp;
		$pemilik_wp=$row->pemilik_wp;
		$jenis_wp=$row->jenis_wp;
		$jumlah_pajak=$row->jumlah_pajak;
		$koordinat=$row->koordinat;
		$status=$row->status;
		$tanggal=$row->tanggal;
	}
  }
?>

<?=content_open('Form Hotspot')?>
   <form method="post" enctype="multipart/form-data">
    	<?=input_hidden('id_hotspot',$id_hotspot)?>
    	<div class="form-group">
    		<label>Nama WP</label>
    		<div class="row">
	    		<div class="col-md-4">
	    			<?=input_text('nama_wp',$nama_wp)?>
		    	</div>
	    	</div>
    	</div>
		<div class="form-group">
			<label>Pemilik WP</label>
			<div class="row">
				<div class="col-md-4">
					<?=input_text('pemilik_wp',$pemilik_wp)?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jenis WP</label>
			<div class="row">
				<div class="col-md-4">
				<?php
					// Mendefinisikan opsi dropdown
					$status_options = [
						'Restoran' => 'Restoran',
						'Reklame' => 'Reklame',
						'BPHTB' => 'BPHTB',
						'Mineral BLB' => 'Mineral BLB',
						'Retribusi' => 'Retribusi',
						'Penginapan' => 'Penginapan'
					];
					// Menggunakan fungsi select untuk membuat dropdown
					?>
					<?=select('jenis_wp', $status_options, $jenis_wp)?>
				</div>
			</div>
		</div>
    	<div class="form-group">
			<label>Nama Kecamatan</label>
    		<div class="row">
				<div class="col-md-4">
					<?php
	    				$op['']='Pilih Kecamatan';
	    				foreach ($db->ObjectBuilder()->get('m_kecamatan') as $row) {
							$op[$row->id_kecamatan]=$row->nm_kecamatan;
	    				}
						?>
	    			<?=select('id_kecamatan',$op,$id_kecamatan)?>
	    		</div>
    		</div>
    	</div>
		<div class="form-group">
			<label>Nama Kelurahan/Desa</label>
			<div class="row">
				<div class="col-md-4">
					<?=input_text('kel_desa',$kel_desa)?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Jumlah Pajak</label>
			<div class="row">
				<div class="col-md-4">
					<?=input_text('kel_desa',$kel_desa)?>
				</div>
			</div>
		</div>
		<div class="form-group">
			<label>Status Pembayaran</label>
			<div class="row">
				<div class="col-md-4">
					<?php
					// Mendefinisikan opsi dropdown
					$status_options = [
						'0' => 'Belum Lunas',
						'1' => 'Lunas'
					];
					// Menggunakan fungsi select untuk membuat dropdown
					?>
					<?=select('status', $status_options, $status)?>
				</div>
			</div>
		</div>
    	<div class="form-group">
    		<label>Titik Koordinat</label>
			<a href="#" id="use_current_location_link" class="use-location-link">(Gunakan Lokasi Saat Ini)</a>
			<div class="row"> 
				<div class="col-md-4">
					<?=input_text('koordinat',$koordinat, ['id' => 'koordinat'])?>
				</div>
    		</div>
    	</div>
    	<div class="form-group">
    		<label>Tanggal</label>
    		<div class="row">
	    		<div class="col-md-4">
    				<?=input_date('tanggal',$tanggal)?>
    			</div>
    		</div>
    	</div>
    	<div class="form-group">
    		<label>Gambar</label>
    		<div class="row">
	    		<div class="col-md-4">
    				<?=input_file('gambar','')?>
    			</div>
    		</div>
    	</div>
    	<div class="form-group">
    		<button type="submit" name="simpan" class="btn btn-info"><i class="fa fa-save"></i> Simpan</button>
			<a href="<?=url($url)?>" class="btn btn-danger" ><i class="fa fa-reply"></i> Kembali</a>
    	</div>
    </form>
<?=content_close()?>

<?php  } else { ?>
<?=content_open('Data Hotspot')?>

<a href="<?=url($url.'&tambah')?>" class="btn btn-success" ><i class="fa fa-plus"></i> Tambah</a>
<hr>
<?=$session->pull("info")?>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama WP</th>
			<th>Pemilik WP</th>
			<th>Jenis WP</th>
			<th>Kecamatan</th>
			<th>Kelurahan/Desa</th>
			<th>Jumlah Pajak</th>
			<th>Tanggal</th>
			<th>Status</th>
			<th>Gambar</th>
		</tr>
	</thead>
	<tbody>
		<?php
			$no=1;
			$db->join('m_kecamatan b','a.id_kecamatan=b.id_kecamatan','LEFT');
			$getdata=$db->ObjectBuilder()->get('t_hotspot a');
			foreach ($getdata as $row) {
				?>
					<tr>
						<td><?=$no?></td>
						<td><?=$row->nama_wp?></td>
						<td><?=$row->pemilik_wp?></td>
						<td><?=$row->jenis_wp?></td>
						<td><?=$row->nm_kecamatan?></td>
						<td><?=$row->kel_desa?></td>
						<td><?=$row->jumlah_pajak?></td>
						<td><?=$row->tanggal?></td>
						<td>
						<?php
						// Mengonversi nilai 0 dan 1 menjadi "Tidak" dan "Ya"
						$status = ($row->status == 1) ? "Lunas" : "Belum Lunas";
						echo $status;
						?>
						</td>
						<td class="text-center">
							<?php if ($row->gambar != ''): ?>
								<a href="<?=assets('unggah/gambar/'.$row->gambar)?>" data-lightbox="gallery" id="toggleImage">
									<img src="<?=assets('unggah/gambar/'.$row->gambar)?>" width="40px" alt="Gambar" />
								</a>
							<?php else: ?>
								-
							<?php endif; ?>
						</td>
						<td>
							<a href="<?=url($url.'&ubah&id='.$row->id_hotspot)?>" class="btn btn-info"><i class="fa fa-edit"></i> Ubah</a>
							<a href="<?=url($url.'&hapus&id='.$row->id_hotspot)?>" class="btn btn-danger" onclick="return confirm('Hapus data?')"><i class="fa fa-trash"></i> Hapus</a>
						</td>
					</tr>
				<?php
				$no++;
			}

		?>
	</tbody>
</table>
<?=content_close()?>
<?php } ?>

