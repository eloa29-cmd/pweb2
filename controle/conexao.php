<?php
/*DataModulo do Delphi ou do Lazarus*/
class Conexao
{
/*FDConnection do Delphi ou ZeosConnection <lazarus></lazarus*/
    private  static $dbname = "oLojinha";
    private static $host = "127.0.0.1"; /*localhost*/
    private static $user = "root";
    private static $pass = "";
    private static $con = null;

    public function __construct()
    {
        throw new \Exception( 'not implemented');
    }
  /*cria a função que conecta no banco de dados*/
    public static function conectar(){
        if (null === self::$con){

          /* PHP  1 igual é 'recebe' no Delphi ou no Lazaruz;
             PHP 2 iguais é igual 'sem fazer diferença nos caracteres' 
             PHP 3 iguais é igual 'fazendo diferença nos caracteres'.obs: tem que ser exatamente igual.

             Exemplo: 
             if ($nome1=Karla
             $nome2=Karla){
             echo 'são diferentes mesmo tendo caracteres em maiusculo e minusculo} */ 

             try {
                self::$con = new PDO("mysql:host=".self::$host.";dbname=".self::$dbname,self::$user,self ::$pass,array (PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
              }
              catch(Exception $erro)
              {
                die ($erro->getmessage()); /*possivel erro de banco, tabela,atributo.retorna a mensagem direta do banco*/
             }

        }
        return self::$con;
    }
        public static function desconectar()
    {
        self::$con = null;
    }
}
?>