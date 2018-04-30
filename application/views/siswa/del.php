<script type="text/javascript">
	function confirmDialod(){

		var a = confirm("Apakah Anda Yakin Ingin Menghapus?");
		if(a == true){
			<?php echo anchor('siswa/hapus/'.$data->nis, 'Hapus').?>
		}else{
			<?php echo form_close(); ?>
		}
	}
</script>