<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
	<link rel="stylesheet" href="public/css/default.css"
</head>
<body>

  <?php require 'views/header.php';?>
    <div id="main">
	   <h1 class="center"> Consulta de Socios</h1>
	   <form action ="<?php echo constant('URL'); ?>consulta/consultarSocios" method ="POST">
	   <p>
	    <label for="nombre">Codigo de Agua</label><br>
		<input type="text" name="codagua" id="">
	   </p>
	   <p>
	    
		<input type="submit" value="consultar">
	   </p>
	   </form>
	   <div class="center"><?php echo $this->mensaje; ?></div>
	   <!--?php var_dump($this->movimientos); ?-->
	   <table>
	      <thead> <tr>
		              <th>Glosa</th>
					  <th> saldo</th>
				   </tr>
			</thead>
			<tbody>
			  <?php 
			      $totalSaldo=0;
			      include_once 'models/movimiento.php';
			      foreach($this->movimientos as $row){
					  $movimiento=new Movimiento();
					  $movimiento=$row;
				?>	  
					  
			   <tr>
		              <td><?php echo $movimiento->glosa; ?></td>
					  <td><?php echo number_format($movimiento->saldo,2,'.','x'); ?></td>
				   </tr>
				  <?php 
				     $totalSaldo=$totalSaldo + $movimiento->saldo;
				  }?>
				  
				  <tr>
		              <td>Total Saldo</td>
					  <td><?php echo number_format($totalSaldo,2,'.','x'); ?></td>
				   </tr>
				  
			</tbody>
		</table>
	</div>
	  
	<?php require 'views/footer.php';?>  

</body>
</html>