<?php

namespace TurimSped\Gnre\Test\Configuration;

use TurimSped\Gnre\Configuration\FileOperation;

class MyFile extends FileOperation
{

    public function writeFile($content, \Sped\Gnre\Configuration\FilePrefix $filePrefix)
    {
        return null;
    }
}
