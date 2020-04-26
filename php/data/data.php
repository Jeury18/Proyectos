<?php
include_once 'db.php';
class Data extends Basedata{

    //Buscador-------------
    public function buscar($sql,$op=2){
            $a=[];
            $lista = $this -> simpleQuery($sql);

            while($vaso = $lista -> fetch_array()){
                array_push($a,$vaso);
            }
            if($op == "JSON"){
                return json_encode($a);
            }else{
                return $a;
            }

    }
    //Final del buscador-----------------------



    public function guardar($sql){
        return $this -> simpleQuery($sql);
    }

    public function contar($sql){
        $info = $this -> simpleQuery($sql);
        return  $info -> num_rows;
    }


    public function eliminar($sql){
    	return $this->simpleQuery($sql);
	}

	public function modificar($sql){
		return $this->simpleQuery($sql);

	}
  //Funcion para generar ceros
  public function ceros($numero, $ceros=3){
    return sprintf("%0".$ceros."s", $numero );
  }
  //Fin funcion para generar ceros




 public function ejecutar($sql){
   return $this->simpleQuery($sql);

 }

}
