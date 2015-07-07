<html>
    <head>
        <title>Post test</title>
    </head>
    <body>
        <form method="POST" action="posttest.php">
            bil1 : <input type="number" name="bil1"/><br><br>
            bil2 : <input type="number" name="bil2"/><br><br>
            <input type="submit" name="jumlah" value="+"/>
            <input type="submit" name="kurang" value="-"/>
            <input type="submit" name="kali" value="*"/>
            <input type="submit" name="bagi" value="/"/>
            <input type="reset" value="C">
        </form>
        <?php
        if (isset($_POST['jumlah'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            echo $bil1 + $bil2;
        } else if (isset($_POST['kurang'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            echo $bil1 - $bil2;
        } else if (isset($_POST['kali'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            echo $bil1 * $bil2;
        } else if (isset($_POST['bagi'])) {
            $bil1 = $_POST['bil1'];
            $bil2 = $_POST['bil2'];
            echo $bil1 / $bil2;
        }
        ?>
    </body>
</html>