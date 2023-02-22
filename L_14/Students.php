<?php

class Students
{
    private int $id;
    private string $surname;
    private string $name;
    private string $email;
    private string $phone;
    private string $country;

    public function __construct(int $id, string $surname, string $name, string $email, string $phone, string $country)
{
    $this->id = $id;
    $this->surname = $surname;
    $this->name = $name;
    $this->email = $email;
    $this->phone = $phone;
    $this->country = $country;
}
    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getSurname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function getCountry(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getPhone(): string
    {
        return $this->phone;
    }

    public function setPhone(string $phone): void
    {
        $this->phone = $phone;
    }
}