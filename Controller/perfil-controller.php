<?

require_once '../Model/class-usuariodao.php';

public class PerfilController{

//private $dao;

public function montarPerfilUsuario($id){

	//$dao = new Dao();
	//$dao->abrirBD();
	
	
	$usuariodao = new UsuarioDao();
	$usuariodao->getProfileAluno($id);
	//$infos = $this->dao->getProfileAluno($id);
	echo '<table><tr><td>'. $infos['nome'] .'</td></tr><tr><td>'. $infos['curso'] . '</td><td>e-mail: '. $infos['email'] . '</td></tr></table>';
	//echo '<td>' . $infos['semestre']. ' Semestre</td>'.
	
}

public function __construct(){
	//$this->dao = new UsuarioDao();
}

}