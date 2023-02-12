<?php
class Config
{
    private array $configuration = [];

    private static $instance = null;

    private function __construct()
    {
    }

    public static function getInstance(): Config
    {
        if (!self::$instance) {
            self::$instance = new Config();
        }

        return self::$instance;
    }
    public  function getKey(string $key): string
    {
       return $this->configuration[$key];
    }
    public function setKey (string $key, string $value): void
    {
        $this->configuration[$key] = $value;
    }
}

