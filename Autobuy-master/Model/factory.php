<?php

class factory
{

    public $file_db;

    public function __construct()
    {
        // Usar o banco de dados aqui fica mais facil pra fazer as modificações futuras
        // Create (connect to) SQLite database in file
        $this->file_db = new PDO('sqlite:C:\wamp\www\Autobuy\Autobuy-master\Model\DBAutobuy.sqlite');//muda aqui se quiser acessar teu bd

        // Set errormode to exceptions
        $this->file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS login (
            login varchar(45) NOT NULL,
            senha varchar(8) NOT NULL,
            idLogin integer PRIMARY KEY AUTOINCREMENT)");

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS cliente(
            idCliente integer PRIMARY KEY AUTOINCREMENT,
            email varchar(45) NOT NULL,
            nome varchar(45) NOT NULL,
            cpf char(11) PRIMARY KEY,
            endereco varchar(45) NOT NULL,
            idLogin integer NOT NULL, FOREIGN KEY (idLogin) REFERENCES 'login' (idLogin))");

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS veiculo(
            idVeiculo integer PRIMARY KEY AUTOINCREMENT,
            foto longblob NOT NULL,
            marca varchar(45) NOT NULL,
            ano date PRIMARY KEY,
            cor varchar(45) NOT NULL,
            quilometragem integer NOT NULL,
            categoria varchar(45) NOT NULL,
            tipo varchar(45) NOT NULL)");

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS idAnuncio(
            idAnuncio integer PRIMARY KEY AUTOINCREMENT,
            idCliente integer NOT NULL,
            idVeiculo integer NOT NULL,
            descricao varchar NOT NULL,
            dataPublicacao date NOT NULL, 
            FOREIGN KEY (idCliente) REFERENCES 'cliente' (idCliente),
            FOREIGN KEY (idVeiculo) REFERENCES 'veiculo' (idVeiculo))");
    }

    public function __destruct()
    {
        try {
            // Close memory db connection
            $file_db = null;
            $memory_db = null;
        } catch (PDOException $e) {
            // Print PDOException message
            echo $e->getMessage();
        }
    }

    // public function addVeiculo($veiculo){
    //     try {

    //         $insert = "INSERT INTO veiculo (foto, marca, ano, cor, preco)
    //             VALUES (:foto, :marca, :ano, :cor, :preco)";
    //         $stmt = $this->file_db->prepare($insert);
    //         $stmt->bindParam(':foto', $veiculo->foto);
    //         $stmt->bindParam(':marca', $veiculo->marca);
    //         $stmt->bindParam(':ano', $veiculo->ano);
    //         $stmt->bindParam(':cor', $veiculo->cor);
    //         $stmt->bindParam(':preco', $veiculo->preco);
    //         $stmt->execute();
    //         return 0;

    //     } catch (PDOException $e) {
    //         echo $e->getMessage();
    //         return 2;
    //     }
    // }
    public function addClientes($cliente)
    {
        if ($this->buscarClientes($cliente->email) == null) {
            try {

                $insert = "INSERT INTO cliente (ID, nome, email)
	                VALUES (null, :nome, :email)";
                $stmt = $this->file_db->prepare($insert);
                $stmt->bindParam(':nome', $cliente->nome);
                $stmt->bindParam(':email', $cliente->email);
                $stmt->execute();
                return 0;

            } catch (PDOException $e) {
                echo $e->getMessage();
                return 2;
            }
        } else {
            return 3;
        }
    }

    public function buscarClientes($email)
    {
        $lista = $this->file_db->query('SELECT * FROM cliente');
        foreach ($lista as $row) {
            if ($row['email'] == $email)
                return $row['ID'];
        }
        return null;
    }

    public function listarClientes()
    {
        $lista = $this->file_db->query('SELECT * FROM cliente');

        foreach ($lista as $row) {
            echo "ID: " . $row['ID'] . '<br>';
            echo "nome: " . $row['nome'] . '<br>';
            echo "email: " . $row['email'] . '<br>';
            ?>
            <a href="index.php?action=editar&id=<?php echo $row['ID']; ?>">EDITAR</a><br>
            <a href="index.php?action=remover&id=<?php echo $row['ID']; ?>">REMOVER</a><br><br>
            <?php
        }
        ?><a href="index.php">VOLTAR</a><?php
    }

    //remover cliente
    public function removerClientes(){
        $id = $_SESSION['id'];
        try {
            $sql = "DELETE FROM cliente WHERE ID = :id";
            $stmt = $this->file_db->prepare($sql);
            $stmt->bindParam(':id', $id);  
            $stmt->execute();
            return 4;
        } catch (PDOException $e) {
            echo $e->getMessage();
            return 2;
        }
    }
    
    public function alterarCliente(){
        $id =  $_SESSION['id'];
        $novoNome = $_POST['novo-nome'];
        $novoEmail = $_POST['novo-email'];
        if (trim($_POST['novo-email']) == '' || trim($_POST['novo-nome']) == ''){
            return 1;
        }
        $idbuscado = $this->buscarClientes($novoEmail);    
        if ($idbuscado == null) {
            try {
                // Prepare INSERT statement to SQLite3 file db
                $insert = "UPDATE cliente SET nome = :novoN, email = :novoE WHERE ID = :id";
                $stmt = $this->file_db->prepare($insert);

                // Bind parameters to statement variables
                $stmt->bindParam(':id', $id);
                $stmt->bindParam(':novoE', $novoEmail);
                $stmt->bindParam(':novoN', $novoNome);
                $stmt->execute();
                return 0;
            } catch (PDOException $e) {
                echo $e->getMessage();
                return 2;
            }
        } else if ($idbuscado == $id) {  // caso o cara só mude o nome mas mantenha o email
          
            $insert = "UPDATE cliente SET nome = :novoN WHERE ID = :id";
            $stmt = $this->file_db->prepare($insert);

            // Bind parameters to statement variables
            $stmt->bindParam(':id', $id);
            $stmt->bindParam(':novoN', $novoNome);
            $stmt->execute();
            
            return 5;
        }else{
            return 3;
        }
    }
}