<?php
require 'functions.php';
$tailorID = $_GET["id"];

if( deleteTailor($tailorID) > 0 ) {
	echo "<script>
			alert('data berhasil dihapus!');
			document.location.href = '../homepageAdmin.php';
		</script>";
} else {
	echo "<script>
			alert('data gagal dihapus!');
			document.location.href = '../homepageAdmin.php';
		</script>";
}
?>