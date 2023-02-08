<?php
namespace Generation;
class JsonGeneration implements Writer
{
    private array $content;
    public function __construct(array $content)
    {
        $this->content = $content;
    }
    public function GenerationContent(array $content) : string
    {

        return json_encode($this->content);
    }
    public function WriteToFile()
    {
        $jsonfile = $this->GenerationContent();
        $file = fopen('jsonFile.json', 'w');
        fwrite($file, $jsonfile);
        fclose($file);
    }
}
