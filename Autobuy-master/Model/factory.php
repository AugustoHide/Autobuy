<?php

class factory
{

    public $file_db;

    public function __construct()
    {
        // Usar o banco de dados aqui fica mais facil pra fazer as modificações futuras
        // Create (connect to) SQLite database in file
        try{
            $this->file_db = new PDO('sqlite:C:\wamp64\www\Autobuy-master\Autobuy-master\Model\DBAutobuy.sqlite');//muda aqui se quiser acessar teu bd
        }catch(PDOException $ex){
            throw new PDO ( $ex->getMessage( ) , $ex->getCode( ) );
        }
        

        // Set errormode to exceptions
        $this->file_db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS cliente(
            idCliente integer PRIMARY KEY AUTOINCREMENT,
            email varchar(45) NOT NULL,
            nome varchar(45) NOT NULL,
            cpf char(11) NOT NULL,
            endereco varchar(45) NOT NULL,
            senha varchar(45) NOT NULL)");

        $this->file_db->exec("CREATE TABLE IF NOT EXISTS veiculo(
            idVeiculo integer PRIMARY KEY AUTOINCREMENT,
            foto longblob NOT NULL,
            marca varchar(45) NOT NULL,
            ano date NOT NULL,
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
    public function logar($email, $senha){
       
        $lista = $this->file_db->query('SELECT * FROM cliente');
        foreach ($lista as $row) {
            if ($row['email'] == $email && $row['senha'] == $senha)
                return $row['nome'];
        }
        return null;
    }
    public function addClientes($cliente)
    {
        if ($this->buscarClientes($cliente->email) == null) {
            try {

                $insert = "INSERT INTO cliente (idCliente, email, nome,cpf,endereco,senha)
                    VALUES (null, :email, :nome,:cpf,:endereco,:senha)";
                    //Mudar o 1 pra 2 quando adicionar novo cliente(so to fazendo teste mesmo)
                    
                $stmt = $this->file_db->prepare($insert);
                $stmt->bindParam(':email', $cliente->email);
                $stmt->bindParam(':nome', $cliente->nome);
                $stmt->bindParam(':cpf', $cliente->cpf);
                $stmt->bindParam(':endereco', $cliente->endereco);
                $stmt->bindParam(':senha', $cliente->senha);
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
                return $row['idCliente'];
        }
        return null;
    }

    public function listarClientes()
    {
        $lista = $this->file_db->query('SELECT * FROM cliente');

        foreach ($lista as $row) {
            echo "idCliente: " . $row['idCliente'] . '<br>';
            echo "nome: " . $row['nome'] . '<br>';
            echo "email: " . $row['email'] . '<br>';
            echo "senha: " . $row['senha'] . '<br>';
            ?>
            <a href="index.php?action=editar&id=<?php echo $row['idCliente']; ?>">EDITAR</a><br>
            <a href="index.php?action=remover&id=<?php echo $row['idCliente']; ?>">REMOVER</a><br><br>
            <?php
        }
        ?><a href="index.php">VOLTAR</a><?php
    }

    //remover cliente
    public function removerClientes(){
        $id = $_SESSION['idCliente'];
        try {
            $sql = "DELETE FROM cliente WHERE idCliente = :idCliente";
            $stmt = $this->file_db->prepare($sql);
            $stmt->bindParam(':idCliente', $id);  
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