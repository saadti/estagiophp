<?php
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: text/html; charset=utf-8");
    header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

    //formulário
    $data = file_get_contents("php://input");
    $objData = json_decode($data);

    // TRANSFORMA O S DADOS
	$id = $objData->id;
	
	$tarefa = $objData->tarefa;
	
    $titulo = $objData->titulo;
   
    $descricao = $objData->descricao;


    // LIMPA OS DADOS
	$id = stripslashes($id);
	
	$tarefa = stripslashes($tarefa);
	
	$titulo = stripslashes($titulo);
    
    $descricao = stripslashes($descricao);
    
	$id = trim($id);
	
    $tarefa = trim($tarefa);
	
	$titulo = trim($titulo);
	
    $descricao = trim($descricao);
	    
	
    // INSERE OS DADOS
    $mysqli = new mysqli("localhost", "root", "vertrigo", 'gerenciamento');

    if($mysqli){
        if ($id == null){
            $query = $mysqli->query("insert into pedidos values(NULL,'".$id."','".$tarefa."',".$titulo."','".$descricao."')");
        }
        echo "Os dados foram inseridos com sucesso. Obrigado" .$tarefa.$titulo.$descricao;
    }else{
        echo "Não foi possivel iserir os dados! Tente novamente mais tarde.";
    };
	// DELETAR OS DADOS
    $mysqli = new mysqli("localhost", "root", "vertrigo", 'gerenciamento');
	
	if($mysqli){
        if ($id != null){
            $query = $mysqli->query("delete into pedidos values(NULL,'".$id."','".$tarefa."',".$titulo."','".$descricao."')");
        }
        echo "Os dados foram deletados com sucesso. Obrigado!" .$tarefa.$titulo.$descricao;
    }else{
        echo "Não foi possivel deletar os dados! Tente novamente mais tarde.";
    };
	// UPDATE NOS DADOS
	$mysqli = new mysqli("localhost", "root", "vertrigo", 'gerenciamento');
	
	if($mysqli){
        if ($id == $id){
            $query = $mysqli->query("update into pedidos values(NULL,'".$id."','".$tarefa."',".$titulo."','".$descricao."')");
        }
        echo "Os dados foram atualizados com sucesso. Obrigado!" .$tarefa.$titulo.$descricao;
    }else{
        echo "Não foi possivel atualizar os dados! Tente novamente mais tarde.";
    };
?>