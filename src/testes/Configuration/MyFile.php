<?php

namespace TuimSped\Gnre\Test\Configuration;

use TuimSped\Gnre\Configuration\FileOperation;

class MyFile extends FileOperation
{

    public function writeFile($content, \Sped\Gnre\Configuration\FilePrefix $filePrefix)
    {
        return null;
    }
}
