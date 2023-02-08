<?php
namespace Generation;
class CsvGeneration implements Writer
{
    private array $content;
    public function __construct(array $content)
    {
        $this->content = $content;    }
    public function GenerationContent ($content) : array
    {
        return [];
    }
    public function WriteToFile()
    {
        $fp = fopen('CsvFile.scv', 'w');
        foreach ($this->content as $fields)
        {
            fputcsv($fp, $fields);
        }
        fclose($fp);
    }
}

