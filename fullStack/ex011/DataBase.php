<pre>
    <?php
    class DataBase
    {
        //propriedadesprivadas da classe
        private $host;
        private $dbname;
        private $username;
        private $password;
        private $conn;

        //método construtor da classe
        public function __construct($dbname, $username, $password, $host = "localhost")
        {
            $this->dbname = $dbname;
            $this->username = $username;
            $this->password = $password;
            $this->host = $host;
        }

        //Metodo para abrir a conexão com o MySQL
        public function connect()
        {
            try {
                $this->conn = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset=utf8mb4", $this->username, $this->password);

                //definir o modo de erro do PDO para exceção
                $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

                //retornar a conexão ativa
                return $this->conn;
            } catch (PDOException $e) {
                echo "Erro ao conectar ao MySQL:" . $e->getMessage();
            }
        }

        //Metodos para executar consultas de leitura Select
        public function read($query, $params = [])
        {
            try {
                $stmt = $this->conn->prepare($query);
                $stmt->execute($params);
                //retornar os resultados como um array associativo
                return $stmt->fetchAll(PDO::FETCH_ASSOC);
            } catch (PDOException $e) {
                echo "Erro na na leitura: " . $e->getMessage();
                return [];
            }
        }
        //Método para executar consultas de escrita Insert, Update, Delete
        public function write($query, $params = [])
        {
            try {
                $stmt = $this->conn->prepare($query);
                return $stmt->execute($params);
            } catch (PDOException $e) {
                echo "Erro na escrita: " . $e->getMessage();
                return false;
            }
        }

        //Metodo para fechar a conexão com o MySQL
        public function close()
        {
            $this->conn = null;
        }
    }

    ?>
</pre>