<?php
class StudentHandler
{
    private PDO $connection;

    public function __construct()
    {
        $this->connection = new PDO("mysql:host=localhost;dbname=Courses", "root", "");
    }

    public function find(int $id): Students
    {
        $statement = $this->connection->prepare("SELECT * FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
        $result = $statement->fetch();

        return new Students( $result['id'], $result["surname"], $result["name"], $result["email"], $result["phone"], $result["country"]);
    }

    public function getAll()
    {
        $result = $this->connection->query("SELECT * from students");
        $data = $result->fetchAll();
        $students = [];

            foreach ($data as $student) {
            $students[] = new Students($student['id'],$student["surname"], $student["name"], $student["email"], $student["phone"], $student["country"]);
        }

        return $students;
    }

    public function create(string $surname, string $name, string $email, string $phone, string $country): Students
    {
        $sql = "INSERT INTO students (surname, name, email, phone, country) VALUES (:surname, :name, :email, :phone, :country)";
        $statement = $this->connection->prepare($sql);
        $statement->execute([
            ":surname" => $surname,
            ":name" => $name,
            ":email" => $email,
            ":phone" => $phone,
            ":country" => $country,
        ]);

        return new Students($surname, $name, $email, $phone, $country);
    }

    public function delete(int $id)
    {

        $statement = $this->connection->prepare("DELETE FROM students WHERE id = :id");
        $statement->execute([
            ":id" => $id
        ]);
    }

    public function update(int $id, string $surname = null, string $name = null, string $email = null, string $phone = null, string $country = null)
    {

        $sql = "UPDATE students SET surname = :surname, name = :name, email = :email, phone = :phone, country = :country WHERE id = :id";
        $statement = $this->connection->prepare($sql);
        $student = $this->find($id);

        $statement->execute([
            ":id" => $id,
            ":surname" => $surname ?: $student->getSurname(),
            ":name" => $name ?: $student->getName(),
            ":email" => $email ?: $student->getEmail(),
            ":phone" => $phone ?: $student->getPhone(),
            ":country" => $country ?: $student->getCountry(),
        ]);
        return $this->find($id);
    }
}