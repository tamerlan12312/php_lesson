<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .green {
        background-color:green ;
        color:#fff ;
        }
        .red {
        background-color:red ;
        color:#fff ;
        }
    </style>
</head>
<body>
    <ul>
        <?php for ($i=0; $i < 10 ; $i++):?>
            <li>item : <?php echo $i ;?></li>
         <?php endfor ;?>   
    </ul>

<?php
   $products = [
    ["Samsung S20",7000,true],
    ["Samsung S21",8000,true],
    ["Samsung S22",9000,false],
    ["Samsung S22",9000,true]
   ]
 ?>

 <table border="1">
    <tr>
        <th>Mehsul Adi</th>
        <th>Qiymet</th>
        <th>Satisda</th>
    </tr>
 <?php foreach($products as $item) :?>
  <!-- <tr>
  <td><?php echo  $item[0];?></td>
  <td><?php echo  $item[1];?></td>
  <td><?php echo  $item[2] ? "Var" : "Bitib";?></td>
  </tr> -->
  <tr class="<?php echo $item[2] ? "green" :"red"?>">
    <?php foreach($item as $data) :?>
       <td><?php echo $data ;?></td>
    <?php endforeach ;?>
  </tr>


  <?php endforeach ;?>
 </table>

</body>
</html>