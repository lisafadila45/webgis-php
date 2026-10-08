<!-- jQuery 3 -->
<script src="<?=templates()?>bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="<?=templates()?>bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- SlimScroll -->
 
<script type="text/javascript" src="https://cdn.datatables.net/v/bs/dt-1.10.20/datatables.min.js"></script>

<script src="<?=templates()?>bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?=templates()?>bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="<?=templates()?>dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?=templates()?>dist/js/demo.js"></script>
<script>
  $(document).ready(function () {
    $('.sidebar-menu').tree();
 	$('table.table').DataTable();
  })
</script>

<script>
    // Fungsi untuk mengambil lokasi saat ini
    function getCurrentLocation() {
        if (navigator.geolocation) {
            navigator.geolocation.getCurrentPosition(showPosition);
        } else {
            alert("Geolocation tidak didukung oleh browser ini.");
        }
    }

    // Fungsi untuk menampilkan lokasi saat ini
    function showPosition(position) {
        var latitude = position.coords.latitude;
        var longitude = position.coords.longitude;
        // Mengisi nilai koordinat dengan lokasi saat ini
        document.getElementById('koordinat').value = latitude + ', ' + longitude;
    }

    // Menambahkan event listener untuk tombol "Gunakan Lokasi Saat Ini"
    document.getElementById('use_current_location_link').addEventListener('click', function(event) {
        event.preventDefault(); // Menghentikan aksi default dari tombol (misalnya, mengikuti tautan)
        getCurrentLocation(); // Memanggil fungsi untuk mengambil lokasi saat ini
    });
</script>
