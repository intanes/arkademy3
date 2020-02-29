<html>
<head>
  <title> looping </title>
</head>
<body>
<form action="" method="POST">
  Masukan bintang <input type="text" name="insert">
  <input type="submit" name="proses" value="proses">  
</form>
  <?php 
    if (isset($_POST["proses"])) {
      $bintang = $_POST["insert"];
      for($a=$bintang;$a>=0;$a--) {
          for($b=1; $b<=$a; $b++){
             echo "&nbsp ";}
      for($c=$bintang;$c>$a;$c--){
        echo "*";
    }
       echo "<br/> ";
      }}
  ?>
 
</body>
</html>