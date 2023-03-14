  <?php

    include "../inc/config.php";
    $text   = $_POST['text'];
    $source = $_POST['source'];


    if($source=="jv"){

    // Get the translation from the database
    $sql = "select * from dictionary kj 
    inner join jenis_kata jk on jk.id_jenis_kata=kj.id_jenis_kata
    where kj.kata_jawa like '$text%'";
    $result = mysqli_query($koneksi, $sql);

?>

 <table class="table table-bordered">
                  <thead>
                  <tr>
                  <th style="text-align:center;">Bagean Tembung</th>
                  <th style="text-align:center;">Javanese Words</th>
                  <th style="text-align:center;">In Indonesian</th>
                  <th style="text-align:center;">In English</th>
                  </tr>

                  </thead>
                  <tbody>

<?php                  
    while($row = mysqli_fetch_array($result)){
    $kata_jawa = $row['kata_jawa'];
    $kata_indo = $row['kata_indo'];
    $kata_english= $row['kata_english'];
    $jenis_kata = $row['jenis_kata'];
    $kelas_kata = $row['kelas_kata'];
    $ket_jawa = $row['ket_jawa'];
    $ket_indo = $row['ket_indo'];
    $ket_english = $row['ket_english'];

?>

                  <tr>
                  <td align="center"><a href="#" title="<?php echo "".$ket_english."";?> / <?php echo "".$ket_indo."";?> / <?php echo "".$ket_jawa."";?>"><?php echo "".$jenis_kata."";?></a></td>
                  <td><?php echo "<b class=''>".$kata_jawa."</b>";?></td>
                  <td><?php echo "".$kata_indo."";?></td>
                  <td><?php echo "".$kata_english."";?></td>
                  </tr>

                <?php } ?>


                </tbody>
              </table>


  <?php }else  if($source=="id"){

    // Get the translation from the database
    $query = "select * from dictionary kj 
    inner join jenis_kata jk on jk.id_jenis_kata=kj.id_jenis_kata
    where kj.kata_indo like '$text%'";
    $result = mysqli_query($koneksi, $query);

?>

 <table class="table table-bordered">
                  <thead>
                  <tr>
                
                  <th style="text-align:center;">Kelas Kata</th>
                  <th style="text-align:center;">In Indonesian</th>
                  <th style="text-align:center;">Javanese Words</th>
                  <th style="text-align:center;">In English</th>
                  </tr>
                 


                  </thead>
                  <tbody>

<?php                  
    while($row = mysqli_fetch_array($result)){
    $kata_jawa = $row['kata_jawa'];
    $kata_indo = $row['kata_indo'];
    $kata_english= $row['kata_english'];
    $jenis_kata = $row['jenis_kata'];
    $kelas_kata = $row['kelas_kata'];
    $ket_jawa = $row['ket_jawa'];
    $ket_indo = $row['ket_indo'];
    $ket_english = $row['ket_english'];

?>

                  <tr>
                    <td align="center"><a href="#" title="<?php echo "".$ket_english."";?> / <?php echo "".$ket_indo."";?> / <?php echo "".$ket_jawa."";?>"><?php echo "".$ket_indo."";?></a></td>
                  <td><?php echo "<b class=''>".$kata_indo."</b>";?></td>
                  <td><?php echo "".$kata_jawa."";?></td>
                  <td><?php echo "".$kata_english."";?></td>
                  </tr>

                <?php } ?>


                </tbody>
              </table>


  <?php }else  if($source=="en"){

    // Get the translation from the database
    $query = "select * from dictionary kj 
    inner join jenis_kata jk on jk.id_jenis_kata=kj.id_jenis_kata
    where kj.kata_english like '$text%'";
    $result = mysqli_query($koneksi, $query);

?>

 <table class="table table-bordered">
                  <thead>
                   <tr>
                
                  <th style="text-align:center;">Part Of Speech</th>
                  <th style="text-align:center;">In English</th>
                  <th style="text-align:center;">In Indonesian</th>
                  <th style="text-align:center;">Javanese Words</th>
                  </tr>
                 

                  </thead>
                  <tbody>

<?php                  
    while($row = mysqli_fetch_array($result)){
    $kata_jawa = $row['kata_jawa'];
    $kata_indo = $row['kata_indo'];
    $kata_english= $row['kata_english'];
    $jenis_kata = $row['jenis_kata'];
    $kelas_kata = $row['kelas_kata'];
    $ket_jawa = $row['ket_jawa'];
    $ket_indo = $row['ket_indo'];
    $ket_english = $row['ket_english'];

?>

                  <tr>
                    <td align="center"><a href="#" title="<?php echo "".$ket_english."";?> / <?php echo "".$ket_indo."";?> / <?php echo "".$ket_jawa."";?>"><?php echo "".$ket_english."";?></a></td>
                  <td><?php echo "<b  class=''>".$kata_english."</b>";?></td>
                  <td><?php echo "".$kata_indo."";?></td>
                  <td><?php echo "".$kata_jawa."";?></td>
                  </tr>

                <?php } ?>


                </tbody>
              </table>


  <?php } ?>
