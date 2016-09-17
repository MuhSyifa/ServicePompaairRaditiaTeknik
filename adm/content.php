<?php
include "../josys/koneksi.php";
include "../josys/library.php";
include "../josys/fungsi_combobox.php";
include "../josys/class_paging.php";

// Bagian Home
if ($_GET[module]=='halamanadmin'){
  if ($_SESSION['leveluser']=='admin'){ ?>
  <h4 class="alert_info">Selamat Datang Di admin panel RADITIA TEKNIK.</h4>
		
		<!-- end of stats article --> <?php
  }
}

// Bagian Welcome
elseif ($_GET[module]=='welcome'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_welcome/welcome.php";
  }
}

// Bagian Profil
elseif ($_GET[module]=='profil'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_profil/profil.php";
  }
}

// Bagian Produk
elseif ($_GET[module]=='artikel'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_artikel/artikel.php";
  }
}


// Bagian Kategori
elseif ($_GET[module]=='kategori'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kategori/kategori.php";
  }
}

// Bagian Kontak
elseif ($_GET[module]=='kontak'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_kontak/kontak.php";
  }
}


// Bagian Slideshow
elseif ($_GET[module]=='slideshow'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_slideshow/slideshow.php";
  }
}

// Bagian Banner
elseif ($_GET[module]=='banner'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_banner/banner.php";
  }
}

// Bagian Gallery
elseif ($_GET[module]=='reservasi'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_reservasi/reservasi.php";
  }
}

// Bagian Gallery
elseif ($_GET[module]=='gallery'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_gallery/gallery.php";
  }
}


// Bagian Title
elseif ($_GET[module]=='title'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_title/title.php";
  }
}

// Bagian Description
elseif ($_GET[module]=='description'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_description/description.php";
  }
}

// Bagian Keyword
elseif ($_GET[module]=='keyword'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_keyword/keyword.php";
  }
}

// Bagian User
elseif ($_GET[module]=='user'){
  if ($_SESSION['leveluser']=='admin'){
    include "modul/mod_user/user.php";
  }
}

//sosial media
elseif($_GET['module']=='jasa_produk'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_jasa_produk/jasa_produk.php";
	}
}

//sosial media
elseif($_GET['module']=='galeri_jasaproduk'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_galeri_jasaproduk/galeri_jasaproduk.php";
	}
}

//sosial media
elseif($_GET['module']=='pengalaman'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_pengalaman/pengalaman.php";
	}
}

//sosial media
elseif($_GET['module']=='galeri_pengalaman'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_galeri_pengalaman/galeri_pengalaman.php";
	}
}

//sosial media
elseif($_GET['module']=='sosmed'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_sosial/sosial.php";
	}
}


//sosial media
elseif($_GET['module']=='ym'){
	if($_SESSION['leveluser']=='admin')
	{
		include "modul/mod_ym/ym.php";
	}
}


// Apabila modul tidak ditemukan
else{
  echo "<p><b>MODUL BELUM ADA ATAU BELUM LENGKAP</b></p>";
}
?>
