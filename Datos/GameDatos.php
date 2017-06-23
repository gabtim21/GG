<?php 
require_once("Modelos/Game.php");
require_once("conection.php");

class GameDatos{

	function getGameById($id){

		$db=conexion();
        $game=new Game();
        $query = array('_id' => $id);
        $resultado = $db->game->find($query);
        foreach ($resultado as $doc=>$value) {
            $game->id_game=$value['_id'];
            $game->nom_game=$value['nombre'];
        }
        return $game;
	}

	function getGameByGame($xnom_game){
           
        $db=conexion();
        $game=new Game();
        $query = array('nom_game' => $xnom_game);
        $resultado = $db->game->find($query);
        foreach ($resultado as $doc=>$value) {
            $game->id_game=$value['_id'];
            $game->nom_game=$value['nombre'];
        }
        return $game;
    }

    function getGames(){
        $games[] = new Game;
        array_pop($games);
        $db = conexion();
        $gmes = $db->games->find();
        foreach($gmes as $doc=>$fila){
            $gmtemp=new Game();
            $gmtemp->id_game=$fila['_id'];
            $gmtemp->nom_game=$fila['nombre'];
            array_push($games,$gmtemp);

        }
        return $games;
                   
    }

    function newGame($xid_game,$xnom_game){
        $db=conexion();
        $xid_game=$xid_game*1;
        $registro = array('_id'=>$xid_game,'nombre'=>$xnom_game);
        $db->game->insert($registro); 
    }
    function setGame($xid_game,$xnom_game){
        $db=conexion();
        $xid_game=$xid_game*1;
        //$nuevosdatos =['$set' =>['_id'=>$xid_cat,'nombre'=>$xnom_cat];
        //$query=['_id'=>$xid_cat];
        //$db->categoria->updateOne($query, $nuevodatos);
        $db->game->update(array ('_id' => $xid_game), array('$set' => ['nombre' =>$xnom_game]),array('upsert' => true));   

    }
    function deleteGame($xid_game){
        $db=conexion();
        $xid_game=$xid_game*1;
        $query = array('_id' => $xid_game);
        $db->game->remove($query);
    }
    /*function obtenerId($categorias){
        $temp=0;
                 foreach($categorias as $categoria){
                    $ultimo=($categoria->id_cat)*1;
                                if($ultimo<2){
                                    $temp=2;
                                }else{                                            
                                    if($temp<$ultimo){
                                            $temp=$ultimo;
                                            }
                                    }

                             }
        $temp++;
       return $temp;
    }*/

}

 ?>