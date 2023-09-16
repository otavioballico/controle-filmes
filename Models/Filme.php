<?php

require_once '../Config/bd.php';

class Filme
{
    private $id_filme;
    private $nome;
    private $genero;
    private $nota;
    private $media = 0;
    private $inserido_por;


    function __construct()
    {
    }

    // Função para calcular a média das notas e atualizar no banco de dados
    public function calcularMedia()
    {
        $id_filme = $this->getId();

        // Consulta para obter todas as notas relacionadas a este filme
        $sql = "SELECT Nota FROM notas WHERE id_filmes = ?";

        $db = new db();
        $conn = $db->conectar();

        // Use declaração preparada
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("i", $id_filme);

        if ($stmt->execute()) {
            $result = $stmt->get_result();

            $totalNotas = 0;
            $numNotas = 0;

            // Iterar sobre as notas e calcular a média
            while ($row = $result->fetch_assoc()) {
                $nota = $row['Nota'];
                $totalNotas += $nota;
                $numNotas++;
            }

            // Calcular a média
            if ($numNotas > 0) {
                $media = $totalNotas / $numNotas;
                $this->setMedia($media);

                // Atualizar a média no banco de dados (opcional)
                $sqlUpdate = "UPDATE filmes SET media = ? WHERE id_filme = ?";
                $stmtUpdate = $conn->prepare($sqlUpdate);
                $stmtUpdate->bind_param("di", $media, $id_filme);

                if ($stmtUpdate->execute()) {
                    // A média foi atualizada no banco de dados com sucesso
                } else {
                    // Tratamento de erro ao atualizar a média
                    echo "Erro ao atualizar a média: " . $stmtUpdate->error;
                }
            }

            $stmt->close();
            $conn->close();
        } else {
            // Tratamento de erro ao buscar as notas
            echo "Erro ao buscar as notas: " . $stmt->error;
            $stmt->close();
            $conn->close();
        }
    }



    // GETTER'S E SETTER'S 
    public function setMedia($media)
    {
        $this->media = $media;
    }

    public function getMedia()
    {
        return $this->media;
    }
    public function setId($id_filme)
    {
        $this->id_filme = $id_filme;
    }

    public function getId()
    {
        return $this->id_filme;
    }

    public function setNome($nome)
    {
        $this->nome = $nome;
    }

    public function getNome()
    {
        return $this->nome;
    }

    public function setGenero($genero)
    {
        $this->genero = $genero;
    }

    public function getGenero()
    {
        return $this->genero;
    }

    public function getNota()
    {
        return $this->nota;
    }

    public function setNota($nota)
    {
        $this->nota = $nota;
    }
    public function setInseridoPor($inserido_por)
    {
        $this->inserido_por = $inserido_por;
    }

    public function getInseridoPor()
    {
        return $this->inserido_por;
    }


    //Inserts no BANCO DE DADOS

    function insert($nome, $genero)
    {
        $sql = "INSERT INTO filmes (nome_filme, genero) VALUES ('$nome', '$genero')";

        $db = new db();
        $conn = $db->conectar();
        if ($conn->query($sql) === TRUE) {
            // Recupere o ID do filme inserido
            $id_filme = $conn->insert_id;
            $conn->close();

            // Defina o ID do filme na instância atual
            $this->setId($id_filme);
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
            exit();
        }
    }

    public function inserirNota($nota, $idFilme, $inseridoPor)
    {
        $sql = "INSERT INTO notas (Nota, id_filmes, inserido_por) VALUES (?, ?, ?)";
        $db = new db();
        $conn = $db->conectar();

        // Use declaração preparada
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("dss", $nota, $idFilme, $inseridoPor);


        if ($stmt->execute()) {
            $stmt->close();
            $conn->close();
        } else {
            // Tratamento de erro
            echo "Erro ao inserir nota: " . $stmt->error;
            $stmt->close();
            $conn->close();
        }
    }


    // listar filmes
    public function getFilmesComMedias()
    {
        $sql = "SELECT nome_filme, genero, media FROM filmes";

        $db = new db();
        $conn = $db->conectar();

        $result = $conn->query($sql);

        $filmes = array();

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                $filmes[] = $row;
            }
        }

        $conn->close();

        return $filmes;
    }
    // No modelo Filme, adicione a seguinte função para obter as avaliações por filme:
}
