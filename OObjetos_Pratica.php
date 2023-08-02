<?php

// OObjetos na Prática - 1
echo "<hr>" . "OObjetos na Prática 1" . "<br><br>";

abstract class FormaGeometrica {

    public abstract function calculoDaArea();

}

class Quadrado extends FormaGeometrica {

    private $comprimento;
    private $altura;

    public function __construct ($comprimento, $altura) {
        $this->comprimento = $comprimento;
        $this->altura = $altura;
    }

    public function calculoDaArea() {
        return "Área do Quadrado é de: " . 
            ($this->comprimento * $this->altura)
            . "<br>";
    }

}

class Circulo extends FormaGeometrica {

    private $constante = 3.14;
    private $raio;

    public function __construct ($raio) {
        $this->raio = $raio;
    }

    public function calculoDaArea() {
        return "Área do Círculo é de: " . 
            ($this->raio * $this->raio) * $this->constante
            . "<br>";
    }

}

class Losangulo extends FormaGeometrica {

    private $constante = 2;
    private $diagonalMaior;
    private $diagonalMenor;

    public function __construct ($diagonalMaior, $diagonalMenor) {
        $this->diagonalMaior = $diagonalMaior;
        $this->diagonalMenor = $diagonalMenor;
    }

    public function calculoDaArea() {
        return "Área do Losângulo é de: " . 
            ($this->diagonalMaior * $this->diagonalMenor) / $this->constante
            . "<br>";
    }

}

$quadrado = new Quadrado(3, 3);
$circulo = new Circulo(5);
$losangulo = new Losangulo(5, 3);

echo $quadrado->calculoDaArea();
echo $circulo->calculoDaArea();
echo $losangulo->calculoDaArea();


// ----------------------------------------------------------------


// OObjetos na Prática - 2
echo "<br><hr>" . "OObjetos na Prática 2" . "<br><br>";

// Interfaces: Criavel, Consultavel...
// Classes Abst: geters e seters (nome, telefone, endereco); exibirDados();

// Pessoa
abstract class Pessoa {

    public abstract function exibirDados();

    public abstract function setNome($nome);
    public abstract function setTelefone($telefone);
    public abstract function setEndereco($endereco);

    public abstract function getNome();
    public abstract function getTelefone();
    public abstract function getEndereco();

}

// Usuário
class Usuario extends Pessoa {

    private $nome;
    private $telefone;
    private $endereco;
    private $filmesLocados;

    public function __construct($nome, $telefone, $endereco, $filmesLocados) {
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEndereco($endereco);
        $this->setFilmesLocados($filmesLocados);
    }

    // Método exibirDados
    public function exibirDados() {
        return "Usuário: " . $this->getNome() . " | " . 
                "Telefone: " . $this->getTelefone() . " | " .
                "Endereço: " . $this->getEndereco() . " | " .
                "Filmes Locados: " . $this->getFilmesLocados() . "<br><br>";
    }

    // Início: Geters e Seters
    // Nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    // Telefone
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    // Endereco
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }

    public function getEndereco() {
        return $this->endereco;
    }

    // Filmes Locados
    public function setFilmesLocados($filmesLocados) {
        $this->filmesLocados = $filmesLocados;
    }

    public function getFilmesLocados() {
        return $this->filmesLocados;
    }

}

// Funcionário
class Funcionario extends Pessoa {

    private $nome;
    private $telefone;
    private $endereco;
    private $salario;

    public function __construct($nome, $telefone, $endereco, $salario) {
        $this->setNome($nome);
        $this->setTelefone($telefone);
        $this->setEndereco($endereco);
        $this->setSalario($salario);
    }

    // Método exibirDados
    public function exibirDados() {
        return "Funcionário: " . $this->getNome() . " | " . 
                "Telefone: " . $this->getTelefone() . " | " .
                "Endereço: " . $this->getEndereco() . " | " .
                "Salário: " . $this->getSalario() . "<br><br>";
    }

    // Início: Geters e Seters
    // Nome
    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    // Telefone
    public function setTelefone($telefone) {
        $this->telefone = $telefone;
    }

    public function getTelefone() {
        return $this->telefone;
    }

    // Endereco
    public function setEndereco($endereco) {
        $this->endereco = $endereco;
    }
    
    public function getEndereco() {
        return $this->endereco;
    }

    // Salario
    public function setSalario($salario) {
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }

}

/* // Teste: "Right"
$usuario = new Usuario("Fred", "+215 990458027", "Rua Gago Coutinho", 15);
$funcionario = new Funcionario("Antoine", "+237 908494021", "Rua D'Alameda", "35.000 (AKZ)");

echo $usuario->exibirDados();
echo $funcionario->exibirDados();

// Teste(2): "Right"
echo $usuario->getNome();
$usuario->setNome("Aldair");
echo "<br>";
echo $usuario->getNome();

echo "<br><br>";

// Teste(3): "Right"
echo $funcionario->getEndereco();
$funcionario->setEndereco("Praia do Bispo");
echo "<br>";
echo $funcionario->getEndereco();
 
echo "<br><br>";
*/
// Teste(4): "Error"
// echo $usuario->nome;
// echo "<br>";
// echo $funcionario->nome;
// echo "<br>";
// echo $funcionario->salario;
// echo "<br>";



// Artigo
abstract class Artigo {

    public abstract function exibirArtigo();

}

class CD extends Artigo {
    
    // deve conter o nome do artista, o nome do álbum e estilo. 
    // Deve conter um método que exiba estas informações.
    private $artista;
    private $album;
    private $estilo;

    public function __construct($artista, $album, $estilo) {
        $this->setArtista($artista);
        $this->setAlbum($album);
        $this->setEstilo($estilo);
    }

    public function exibirArtigo() {
        return "Tipo: CD | Artista: " . $this->artista . " | " .
                "Album: " . $this->album . " | " . 
                "Estilo: " . $this->estilo . ".<br>";
    }

    // Geters e Seters:
    // Artista
    public function getArtista() {
        return $this->artista;
    }

    public function setArtista($artista) {
        $this->artista = $artista;
    }

    // Álbum
    public function getAlbum() {
        return $this->album;
    }

    public function setAlbum($album) {
        $this->album = $album;
    }

    // Estilo
    public function getEstilo() {
        return $this->estilo;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

}

class DVD extends Artigo {
    
    // deve conter o título do DVD e o estilo. Deve conter um método que exiba
    // estas informações.
    private $titulo;
    private $estilo;

    public function __construct($titulo, $estilo) {
        $this->setTitulo($titulo);
        $this->setEstilo($estilo);
    }

    public function exibirArtigo() {
        return "Tipo: DVD | Título: " . $this->titulo . " | " .
                "Estilo: " . $this->estilo . ".<br>";
    }
    
    // Geters e Seters:
    // Título
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    // Estilo
    public function getEstilo() {
        return $this->estilo;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

}

class Bluray extends Artigo {
    
    // deve conter o título do Bluray, estilo e resolução (se é HD ou FullHD).
    // Deve conter um método que exiba estas informações.
    private $titulo;
    private $estilo;
    private $resolucao;

    public function __construct($titulo, $estilo, $resolucao) {
        $this->setTitulo($titulo);
        $this->setEstilo($estilo);
        $this->setResolucao($resolucao);
    }

    public function exibirArtigo() {
        return "Tipo: Bluray | Título: " . $this->titulo . " | " .
                "Estilo: " . $this->estilo . " | " .
                "Resolução: " . $this->resolucao . ".<br>";
    }

    // Geters e Seters:
    // Título
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    // Estilo
    public function getEstilo() {
        return $this->estilo;
    }

    public function setEstilo($estilo) {
        $this->estilo = $estilo;
    }

    // Resolução HD ou FullHD
    public function getResolucao() {
        return $this->resolucao;
    }

    public function setResolucao($resolucao) {
        $this->resolucao = $resolucao;
    }

}

//
class Locacao {
    // Objetos: $usuario & $produto
    // Método: exibirInformacoes()

    private $usuario;
    private $produto;

    public function __construct($usuario, $produto) {
        $this->setUsuario($usuario);
        $this->setProduto($produto);
    }

    public function exibirInformacoes() {
        return "Usuário: " . $this->usuario . ". | " . 
                "Produto: " . $this->produto . ".";
    }

    // Geters e Seters:
    // Usuário
    public function getUsuario() {
        return $this->usuario;
    }

    public function setUsuario($usuario) {
        $this->usuario = $usuario;
    }
    
    // Produto
    public function getProduto() {
        return $this->produto;
    }

    public function setProduto($produto) {
        $this->produto = $produto;
    }

}

class Locadora {
    // Objeto que armazena todos os outros objetos
    // Métodos: De Criação e de Consulta de cada lista de objetos...
    
    // Sub-objetos: Usuario, Funcionario, CD, DVD, Bluray, Locacao

    /* 
    * CONVÊNIOS:
    * Atributos -> Descritos com underscore e totalmente com letras minúsculas
    * Métodos   -> Descritos sem underscore e iniciais minúsculas
    */

    private $lista_usuarios;
    private $lista_funcionarios;
    private $lista_cd_s;
    private $lista_dvd_s;
    private $lista_bluray_s;
    private $lista_locacoes;

    public function __construct() {
        $this->lista_usuarios = array();
        $this->lista_funcionarios = array();
        $this->lista_cd_s = array();
        $this->lista_dvd_s = array();
        $this->lista_bluray_s = array();
        $this->lista_locacoes = array();
    }

    // Métodos criar e listar:
    // Usuário
    public function criarUsuario($nome, $telefone, $endereco, $filmesLocados) {

        $novoUsuario = new Usuario($nome, $telefone, $endereco, $filmesLocados);

        $dadosNovoUsuario = array(  "Nome"            => ($novoUsuario->getNome()),
                                    "Telefone"        => ($novoUsuario->getTelefone()),
                                    "Endereço"        => ($novoUsuario->getEndereco()),
                                    "Filmes Locados"  => ($novoUsuario->getFilmesLocados())
                                 );

        array_push($this->lista_usuarios, $dadosNovoUsuario);
    }

    public function listarUsuarios() {

        for ($i=0; $i < count($this->lista_usuarios); $i++) {
            $n = $i + 1;
            echo "Usuário - " . $n . " | ";
            print_r($this->lista_usuarios[$i]);
            echo "<br>";
        }

        echo "<br>";
    }

    // Funcionário
    public function criarFuncionario($nome, $telefone, $endereco, $salario) {

        $novoFuncionario = new Funcionario($nome, $telefone, $endereco, $salario);

        $dadosNovoFuncionario = array(  "Nome"      => ($novoFuncionario->getNome()),
                                        "Telefone"  => ($novoFuncionario->getTelefone()),
                                        "Endereço"  => ($novoFuncionario->getEndereco()),
                                        "Salário"   => ($novoFuncionario->getSalario())
                                     );

       array_push($this->lista_funcionarios, $dadosNovoFuncionario);
    }

    public function listarFuncionarios() {
        
        for ($i=0; $i < count($this->lista_funcionarios); $i++) {
            $n = $i + 1;
            echo "Funcionário - " . $n . " | ";
            print_r($this->lista_funcionarios[$i]);
            echo "<br>";
        }

        echo "<br>";
    }

    // CD
    public function criarCD($artista, $album, $estilo) {
        
        $novoCD = new CD($artista, $album, $estilo);

        $dadosNovoCD = array(   "Artista"   => ($novoCD->getArtista()),
                                "Álbum"     => ($novoCD->getAlbum()),
                                "Estilo"    => ($novoCD->getEstilo())
                            );

        array_push($this->lista_cd_s, $dadosNovoCD);
    }

    public function listarCDs() {
        
        for ($i=0; $i < count($this->lista_cd_s); $i++) {
            $n = $i + 1;
            echo "CD - " . $n . " | ";
            print_r($this->lista_cd_s[$i]);
            echo "<br>";
        }
        
        echo "<br>";
    }

    // DVD
    public function criarDVD($titulo, $estilo) {
        
        $novoDVD = new DVD($titulo, $estilo);

        $dadosNovoDVD = array(  "Título"    => ($novoDVD->getTitulo()),
                                "Estilo"    => ($novoDVD->getEstilo())
                             );

        array_push($this->lista_dvd_s, $dadosNovoDVD);
    }

    public function listarDVDs() {
        
        for ($i=0; $i < count($this->lista_dvd_s); $i++) {
            $n = $i + 1;
            echo "DVD - " . $n . " | ";
            print_r($this->lista_dvd_s[$i]);
            echo "<br>";
        }
        
        echo "<br>";
    }

    // Bluray
    public function criarBluray($titulo, $estilo, $resolucao) {

        $novoBluray = new Bluray($titulo, $estilo, $resolucao);

        $dadosNovoBluray = array(   "Título"    => ($novoBluray->getTitulo()),
                                    "Estilo"    => ($novoBluray->getEstilo()),
                                    "Resolução" => ($novoBluray->getResolucao())
                                );

        array_push($this->lista_bluray_s, $dadosNovoBluray);
    }

    public function listarBlurays() {
        
        for ($i=0; $i < count($this->lista_bluray_s); $i++) {
            $n = $i + 1;
            echo "Bluray - " . $n . " | ";
            print_r($this->lista_bluray_s[$i]);
            echo "<br>";
        }
        
        echo "<br>";
    }

    // Locação
    public function criarLocacao($usuario, $produto) {
        
        $novaLocacao = new Locacao($usuario, $produto);

        $dadosNovaLocacao = array(  "Usuário"    => ($novaLocacao->getUsuario()),
                                    "Produto"    => ($novaLocacao->getProduto())
                                 );

        array_push($this->lista_locacoes, $dadosNovaLocacao);
    }

    public function listarLocacoes() {
        
        for ($i=0; $i < count($this->lista_locacoes); $i++) {
            $n = $i + 1;
            echo "Locação - " . $n . " | ";
            print_r($this->lista_locacoes[$i]);
            echo "<br>";
        }
        
        echo "<br>";
    }
    
}

// Criação dum objeto Locadora
$locadora = new Locadora();

// Teste => Métodos Criar
$locadora->criarUsuario("Fred", "+215 990458027", "Rua Gago Coutinho", 15);
$locadora->criarUsuario("Ney", "+255 990452574", "Rua do Amaral", 5);

$locadora->criarFuncionario("Funcionario 1", "+352 87934556", "Rua Ultra Machado", "300.000,00 (Kz)");
$locadora->criarFuncionario("Funcionario 2", "+340 67733356", "Rua Joaquim de Belém", "320.000,00 (Kz)");

$locadora->criarCD("Paula Fernandes", "Pássaro de Fogo", "Romântica");
$locadora->criarDVD("A Vida Continua", "Jovial");
$locadora->criarBluray("Doutor Estranho", "Acção e Ficção", "Full HD");
$locadora->criarLocacao("Valério", "CD");

// ------------------------------

// Teste => Métodos Listar
$locadora->listarUsuarios();
$locadora->listarFuncionarios();
$locadora->listarCDs();
$locadora->listarDVDs();
$locadora->listarBlurays();
$locadora->listarLocacoes();


?>