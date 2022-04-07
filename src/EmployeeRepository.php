<?php

/**
 * Criando a classe funcionário que vai carregar os métodos do C-R-U-D
 * C - Create
 * R - Read
 * U - Update
 * D - Delete
 */

class EmployeeRepository
{
    /**
     * @var mysqli
     * Variável que vai ter os dados de conexão com o banco
     */
    private mysqli $conn;

    /**
     * Construtor da classe
     */
    public function __construct(mysqli $conn)
    {
        $this->conn = $conn;
    }

    /**
     * @return void
     * Criando método que vai inserir dados dentro da tabela do banco de dados
     */
    public function insert(string $name, string $email, string $office): void
    {
        $query = $this->conn->prepare("INSERT INTO `funcionarios` (nome, email, cargo) VALUES (?, ?, ?)");
        $query->bind_param('sss', $name, $email, $office);
        $query->execute();
    }

    /**
     * @return array
     * Criando método que vai ser responsável por retornar dados que já foram criados dentro do banco de dados
     */
    public function listAll(): array
    {
        $query = $this->conn->query("SELECT * FROM `funcionarios`");
        $stmt = $query->fetch_all(MYSQLI_ASSOC);
        return $stmt;
    }

    /**
     * @return array
     * Criando método que irá retornar apenas os dados que tiverem o id chamado
     */
    public function findByID(string $id): array
    {
        $query = $this->conn->prepare("SELECT * FROM `funcionarios` WHERE id = ?");
        $query->bind_param('s', $id);
        $query->execute();

        $stmt = $query->get_result()->fetch_assoc();
        return $stmt;
    }

    /**
     * @return void
     * Criando método responsável por atualizar dados dentro do banco
     */
    public function update(string $id, string $name, string $email, string $office): void
    {
        $query = $this->conn->prepare("UPDATE `funcionarios` SET nome = ?, email = ?, cargo = ? WHERE id = ?");
        $query->bind_param('ssss', $name, $email, $office, $id);
        $query->execute();
    }

    /**
     * @return void
     * Criando método responsável por deletar dados dentro do banco
     */
    public function delete(string $id)
    {
        $query = $this->conn->prepare("DELETE FROM `funcionarios` WHERE id = ?");
        $query->bind_param('s', $id);
        $query->execute();
    }
}
