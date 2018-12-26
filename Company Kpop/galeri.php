<?php
include "koneksi.php";
//bagian home admin
if (@$_GET['module']=='home') {
	echo "<div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/rap.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">1. Rap Monster(RM)</h5>
            <p class=\"card-text\">Nama Asli : Kim Nam-joon<br>Tempat Tanggal Lahir : Goyang, Korea Selatan, 12 September 1994<br>Tinggi Badan : 181cm<br>Berat Badan : 67kg<br>Posisi : Leader, Rapper</p>
          </div>
        </div><br>
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/jimin.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">4. Jimin</h5>
            <p class=\"card-text\">Nama Asli : Park Ji-min<br>Tempat Tanggal Lahir : Busan, Korea Selatan, 13 Oktober 1995<br>Tinggi Badan : 175cm<br>Berat Badan : 61kg<br>Posisi : Vokalis</p>
          </div>
        </div><br>
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/suga.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">6. Suga</h5>
            <p class=\"card-text\">Nama Asli : Min Yoon-gi (Hangul: 민윤기) lahir pada<br>Tempat Tanggal Lahir : Daegu, Korea Selatan, 9 Maret 1993<br>Tinggi Badan : 176cm<br>Berat Badan : 59kg<br>Posisi : Rapper</p>
          </div>
        </div>
      </div>
      <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/jung.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">2. Jungkook</h5>
            <p class=\"card-text\">Nama Asli : Jeon Jeong Guk 전 정국<br>Tempat Tanggal Lahir : Busan, Korea Selatan, 1 September 1997<br>Tinggi Badan : 178cm<br>Berat Badan : 66kg<br>Posisi : Maknae, Vokalis, Rapper</p>
          </div>
        </div><br>
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/jhope.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">5.J-Hope</h5>
            <p class=\"card-text\">Nama Asli : Jung Ho-seok<br>Tempat Tanggal Lahir : Gwangju, Korea Selatan, 18 Februari 1994<br>Tinggi Badan : 177cm<br>Berat Badan : 65kg<br>Posisi : Rapper</p>
          </div>
        </div><br>
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/jin.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">7. Jin</h5>
            <p class=\"card-text\">Nama Asli : Kim Seok-jin<br>Tempat Tanggal Lahir : Gwacheon, Korea Selatan, 4 Desember 1992<br>Tinggi Badan : 179cm<br>Berat Badan : 60kg<br>Posisi : Vokalis, Visual</p>
          </div>
        </div>
      </div>
      <div class=\"col-sm\">
        <div class=\"card\" style=\"width: 18rem;\">
          <img class=\"card-img-top\" src=\"img/v.jpg\" alt=\"Card image cap\">
          <div class=\"card-body\">
            <h5 class=\"card-title\">3. V</h5>
            <p class=\"card-text\">Nama Asli : Kim Tae-hyung<br>Tempat Tanggal Lahir : Daegu, Korea Selatan, 30 Desember 1995<br>Tinggi Badan : 178cm<br>Berat Badan : 58kg<br>Posisi : Vokalis</p>
          </div>
        </div>
      </div>
      </div>
    </div><br><br>
  </div>
  <div style=\"background-color: #FFEFD5;\" id=\"Galeri\">
    <h2 align=\"center\" style=\"font-family: Decorative; color: black;\">Galery</h2>
    <div class=\"row\">
      <div class=\"col\"><img src=\"img/bts1.jpg\" class=\"img-fluid img-thumbnail float-left\" alt=\"img1\" height=\"300\" width=\"300\"></div>
      <div class=\"col\"><img src=\"img/bts2.jpg\" class=\"img-fluid img-thumbnail float-right\" alt=\"img1\" height=\"300\" width=\"300\"></div>
      <div class=\"col\"><img src=\"img/bts3.jpg\" class=\"img-fluid img-thumbnail float-right\" alt=\"img1\" height=\"300\" width=\"300\"></div>
      <div class=\"col\"><img src=\"img/bts4.jpg\" class=\"img-fluid img-thumbnail float-right\" alt=\"img1\" height=\"300\" width=\"300\"></div>
    </div>
  </div><br><br>";
		}
//bagian user
		elseif (@$_GET['module']=='got7') {
			include "modul/got7.php";
		}
		elseif (@$_GET['module']=='blackpink') {
			include "modul/blackpink.php";
		}
		?>