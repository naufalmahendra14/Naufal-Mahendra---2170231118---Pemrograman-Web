<html>
    <head>
        <title>Pemrograman PHP dengan Array</title>
    </head>
    <body style="background-color: #F6F4F1;">
        <?php
        //Penulisan array dapat dibuat seperti berikut
        $nama[1] = "Naufal";
        $nama[2] = "Mahendra";
        echo $nama[1].$nama[2];
        echo "<br>";
        //menghitung jumlah elemen array
        $jum_array = count($nama);
        echo "jumlah elemen array = ". $jum_array;
        ?>
    </body>
</html>