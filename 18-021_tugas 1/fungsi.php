<!DOCTYPE html>
<html>
<body>
<head>
           <style>
        h2{  
        color:white;  
        background-color:blue;  
        padding:5px;  
        }  
        p{  
        color:blue;  
        }       
    </style>
      <?php
      echo "<h2>Selamat Datang</h2>";
      // membuat fungsi
      function hitungSemester($thn_masuk, $thn_sekarang){
        $semester = ($thn_sekarang - $thn_masuk)*2;
        return $semester;
      }

      function perkenalan($nama, $salam="Hello"){
        echo $salam.", ";
        echo "Perkenalkan <br/>";
        echo "Nama saya ".$nama."<br/>";
        // memanggil fungsi lain
        echo "Saya semester ". hitungSemester(2018, 2022) ."<br/>";
        echo "Di Prodi Teknik Informatika Universitas Trunojoyo Madura <br/>";
        echo "Senang berkenalan dengan anda<br/>";
      }


      // memanggil fungsi perkenalan
      perkenalan("Oktaviana Dwi Sujatmiko");
      ?>