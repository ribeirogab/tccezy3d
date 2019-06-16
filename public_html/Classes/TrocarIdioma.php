<?php
require_once "Classes/Conexao.php";
class TrocarIdioma extends Conexao
{
    private $lang;

    public function __construct($lang)
    {
        parent::__construct();
        parent::conectar();
        $this->lang = $lang;
    }

    public function getLang()
    {
        return $this->lang;
    }
    public function setLang($lang)
    {
        $this->lang = $lang;
    }

    public function langPag($pagina)
    {
        $valores = [":pagina" => $pagina];
        $sql = "SELECT $this->lang, apelido FROM conteudo WHERE pagina=:pagina";
        return parent::executarFetchAll($sql, $valores);
    }

    public function langMenu($menu)
    {
        $valores = [":menu" => $menu];
        $sql = "SELECT $this->lang, apelido FROM conteudo WHERE pagina=:menu";
        return parent::executarFetchAll($sql, $valores);
    }

    public function langRodape($rodape)
    {
        $valores = [":rodape" => $rodape];
        $sql = "SELECT $this->lang, apelido FROM conteudo WHERE pagina=:rodape";
        return parent::executarFetchAll($sql, $valores);
    }
}
