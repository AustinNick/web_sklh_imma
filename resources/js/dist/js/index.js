$(document).ready(function() {
	$('.menu').click( function() {
		var menu = $(this).attr('id');

		if (menu == "konf") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Barang.php");
		} else if (menu == "banner") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Tambah_Barang.php");
		} else if (menu == "hak") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Cart.php");
		} else if (menu == "kategori") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Login.php");
		} else if (menu == "contact") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Register.php");
		} else if (menu == "penjualan") {
			$(this).addClass("active-menu");
			$('#page-inner').load("Logout.php");
		}
	});

	$('#page-inner').load("");
});