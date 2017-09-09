<?php
Class multiplicar
{
   public $numero;
   public $mat;
   public $indice=0;
   
   public function ma()
   {	
	$this->numero[0]="a";
	$this->numero[1]="b";
	$this->numero[2]="c";
	$this->numero[3]="d";
	
	echo $this->numero[0];
	echo $this->numero[1];
	echo $this->numero[2];
	echo $this->numero[3];
	//echo $this->numero[4];

	$this->mat[0][0]="Perro";
	$this->mat[0][1]="Gato";
	$this->mat[0][2]="Leon";
	$this->mat[0][3]="Aguila";
	
	//echo $this->mat[0][0];
	//echo "<br>";
	//echo $this->mat[0][1];
	//echo "<br>";
	//echo $this->mat[0][2];
	}
	public function imprimir()
	{
		while($this->indice<3)
			{
	
			echo $this->mat[0][$this->indice];
			echo "<br>";
			$this->indice=$this->indice+1;
			}	
	}
}
 $mul = new multiplicar();
 $mul->ma();
 $mul->imprimir();
?>