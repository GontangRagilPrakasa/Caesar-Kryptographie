<div class="col-md-12">
<?php
/**
 * Gontang Ragil Prakasa
 * Teknik Informatika
 * Universitas Ahmad Dahlan Yogyakarta
*/
include ('library/import.php');
include ('navbar.php');
if(!empty($_POST['submit'])){ //mengambil variabel post pada index.php
	$kalimat = $_POST['kalimat'];
	$kunci = $_POST['kunci'];
	prosesenkripsi::utama($kalimat,$kunci);
}
class prosesenkripsi{ //membuat kelas enkripsi
	public static function utama($k,$ku){ //fungsi yang akan dipanggil pertama kali
	$enkripsi = self::enkripsi($k,$ku);
	$dekripsi = self::dekripsi($enkripsi,$ku);
  ?>	
    <div class="col-md-5 col-md-offset-1">
          <div class="panel panel-success">
            <div class="panel-heading">
              <h3 class="panel-title">CHIPERTEXT</h3>
            </div>
              <div class="panel-body">
                <div class="input-group">
                  </div>
                    <textarea name="code" id="generate-notif" style="width:350px; height:100px;"><?php echo $enkripsi; ?></textarea>
                  </div>
                  </div>
                </div>

    <div class="col-md-5">
    			  <div class="panel panel-success">
                      <div class="panel-heading">
                      <h3 class="panel-title">PLAINTEKS HASIL DEKRIPSI</h3>
                      </div>
                      <div class="panel-body">
                      <div class="input-group">
                  <textarea name="code"  id="generate-notif1" style="width:350px; height:100px;"><?php echo $dekripsi; ?></textarea>
                  </div>
                  </div>
	<?php
  }
	function ciper($ch,$key){
		if(!ctype_alpha($ch)) //mengecek kalimat yang dimasukkan (apakah karakter atau bukan)
			return $ch;
		$batas = ord(ctype_upper($ch) ? 'A':'a'); //mengatur variabel batas, ord (convert string ke ASCII dan ctype_upper (mengecek semua karakter apakah karakter atau tidak))
		return chr(fmod(((ord($ch)+ $key)-$batas),26)+$batas); // chr digunakan untuk convert ASCII ke string kebalikan ord dan fmod digunakan untuk mencari sisa bagi untuk tipe data float
	}
	function enkripsi($input,$key){
		$keluaran = " "; //mengatur keluaran awal dengan string kosong .
		$masukkan = str_split($input); //str_split memisahkan antara string menjadi karakter
		foreach ($masukkan as $ch ) { //masing masing karakter akan dikeluarkan di perulangan ini
			$keluaran .= self::ciper($ch,$key); // memanggil fungsi ciper, yang membawa karatkter ch.
		}
		return $keluaran; 
	}
	function dekripsi ($input,$key){  //fungsi ini akan mengembalikan teks yang terenkripsi ke plainteks
		return self::enkripsi($input,26 - $key); //memanggil fungsi enkirpsi dengan membawa variabel input
	}

}
?>
</div>