<?php

namespace Generation;

interface Writer
{
    public function GenerationContent (array $content);
    public function WriteToFile();
}