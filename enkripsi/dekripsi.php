<?php
    error_reporting(0);
?>
<!DOCTYPE html>
<html>
    <head>
        <title>Enkripsi & Dekripsi</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            $input=$_POST["input"];

            $key = array(
            'a' => '~',
            'i' => '$',
            'u' => '^',
            'e' => '#',
            'o' => '+',

            'A' => '!',
            'I' => '%',
            'U' => '_',
            'E' => '=',
            'O' => '*'
            );

            $output = str_replace($key, array_keys($key), $input);
        ?>
        <div class="link">
            <a href="enkripsi.php">ENKRIPSI</a>
            <a href="dekripsi.php" class="active">DEKRIPSI</a>
        </div>
        <div class="enkrip">
            <div class="atas">
                <form action="dekripsi.php" method="POST">
                    <center><h4>DEKRIPSI</h4></center>
                    <textarea name="input" cols="50" rows="8" style="font-family: Arial;" placeholder="Masukkan disini ..."></textarea><br>
                    <input type="submit" value="DEKRIPSI !" class="button"/>
                </form>
            </div>
            <div class="bawah dekripsi">
                <center><h4>HASIL DEKRIPSI</h4></center>
                <textarea name="hasil" cols="50" rows="10" style="font-family: Arial;" readonly><?php echo $output; ?></textarea>
            </div>
        </div>
    </body>
</html>