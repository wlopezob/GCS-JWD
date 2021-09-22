<?php

    include_once 'models/movimiento.php';

	class ConsultaModel extends Model{
	
		public function __construct(){
			parent:: __construct();
		}
		
		public function consultaSocio(){
		
		}
		
		public function insert(){
		
		}
		
		
		public function consultaSocios($datos){
			$items=[];
		 try{
			$query = $this->db->connect()->prepare('Select * from movimientos where codigoagua=:codigo');
			$query->execute(['codigo'=>$datos['codigo']]);
			//echo "consultar socios_model";
			while($row=$query->fetch()){
			   $item = new Movimiento();
			   $item->cargoabono=$row['cargoabono'];
			   $item->codigoagua=$row['codigoagua'];
			   $item->fechamov=$row['fechamov'];
			   $item->fecven=$row['fecven'];
			   $item->glosa=$row['glosa'];
			   $item->mora=$row['mora'];
			   $item->periodo=$row['periodo'];
			   $item->saldo=$row['saldo'];
			   array_push($items,$item);

			
			}
			return $items;
		 }catch(PDOException $e){
			 echo $e->getMessage();
			 return [];
		 }
		 
		}
	
	}
	
?>