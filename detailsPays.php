
<?php
  require_once ('header.php');
  require_once 'inc/manager-db.php';
  if (isset($_GET['name']) && !empty($_GET['name']) ){
  $id = ($_GET['name']);
  $lePays = getInfo($id); 
  
  }
?>

<main role="main" class="flex-shrink-0">

<h1><?php echo $lePays->Name ?></h1>  
<img src="images/flag/<?php echo strtolower($lePays->Code2)?>.png" alt="<?php echo $lePays->Code2 ?>">
<div class="container">
    <table class = "table">
        <tr>
            <br>
            <td>Code</td>
            <td>Continent</td>
            <td>Capitale</td>
            <td>Population</td>
            <td>Superficie</td>
        </tr>

        <tr>
            <td> <?php echo $lePays->Code ?></td>
            <td> <?php echo $lePays->Continent ?></td>
            <td> <?php echo getCapitale($lePays->Capital)->Name ?></td>
            <td> <?php echo $lePays->Population ?></td>
            <td> <?php echo $lePays->SurfaceArea ?></td>
        </tr>
         
     </table>
    </div>
    
    <?php
require_once 'javascripts.php';
require_once 'footer.php';
?>
