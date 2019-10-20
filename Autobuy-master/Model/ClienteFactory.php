<?php

class clienteFactory
{

    public $file_db;

    public function __construct()
    {

        // Create (connect to) SQLite database in file
        $this->file_db = new PDO('sqlite:C:\wamp\www\Autobuy - PROJETO\Autobuy-master\Model\DBAutobuy.sqlite');//muda aqui se quiser acessar teu bd

        // Set errormode to exceptions
        $this->file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS cliente (
                        ID INTEGER PRIMARY KEY AUTOINCREMENT,
		                email TEXT NOT NULL,
		                nome TEXT NOT NULL )");
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