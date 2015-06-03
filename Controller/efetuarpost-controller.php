    <?php

    session_start();
    require '..\Model\class-arquivodao.php';
    require_once '..\model\class-dao.php';
    require '..\model\class-participacaodao.php';
    require_once '..\model\class-usuariodao.php';
    require_once '..\model\class-postdao.php';

    $post = $_POST['post'];

    $dao = new Dao();
    $dao->abrirBD();

    $login = $_SESSION['login'];

    $usuariodao = new UsuarioDao();
    $iduser = $usuariodao->loginViraId($login);



    unset($_SESSION['idPasta']);
    if(!isset($_SESSION['idPasta']))
    	$_SESSION['idPasta'] = 4;

    $participacao = new ParticipacaoDao();
    $participa = $participacao->buscarUltimaParticipacao($iduser);

    if (isset($_SESSION['filepath']))
        $caminho = $_SESSION['filepath'];
    else
        $caminho = "";




    function efetuarUpload($uploaddir, $nome) {
        if (empty($uploaddir))
            $uploaddir = '..\arquivos\\' . $_SESSION['login'] . '\\';
        if (!file_exists($uploaddir))
            mkdir($uploaddir);
        $ext = strtok($_FILES['userfile']['name'], ".");
        $ext = strtok(".");
        $_FILES['userfile']['name'] = $nome . "." . $ext;
        $uploadfile = $uploaddir . basename($_FILES['userfile']['name']);
        move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile);
       return str_replace('\\', '\\\\', $uploaddir);
    }

    $caminho = "";
    $idArquivo = 'NULL';
    $filename = $_POST['nome'];
    if(!empty($_POST['userfile'])){
        $caminho = efetuarUpload($caminho, $filename);
          $arquivoDao = new ArquivoDao();
        $idArquivo = $arquivoDao->inserirArquivo($_SESSION['idPasta'], $participa, $_POST['nome'], $_POST['descricao'], $caminho);
    }
  
    $oPost = new PostDao();
    $idPost = $oPost->inserirPost($_POST['post'], $caminho, $_POST['nome']);


    $idGrupo = !empty($_GET['idGrupo']) ? $_GET['idGrupo'] : 'NULL';
    $participacao->inserirParticipacaoPost($idPost, $idGrupo, $iduser, $idArquivo);

    header("location: ../view/principal.php");
    exit;