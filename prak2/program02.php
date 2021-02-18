<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>BELAJAR PHP</title>
  </head>
  <body>
    <h1> TABLE PERKALIAN</h1>
    <?php
    if (isset($_GET['MAX'])) {
      $MAX = $_GET['MAX'];
    } else {
      $MAX = 10;
    }
    if ($MAX > 10) {
      $MAX = 10;
    }
     ?>
     <table border="1" cellspacing='0' cellpadding='5'>
       <tr>
         <?php
         for ($t=1; $t<=$MAX; $t++) {


          ?>
          <td>
            <table border="1" cellspacing='0' cellpadding='5'>

              <?php
              for ($n=1; $n <=10; $n++) {
                echo "<td align='center'>".$n."x".$t."=".$n*$t."</td>";
                echo "<tr>";
                echo "</tr>";
              }
              ?>

            </table>
          </td>
          <?php
            }
           ?>
       </tr>
     </table>
  </body>
</html>
