<?php

namespace TuimSped\Gnre\Sefaz\Estados;

use TuimSped\Gnre\Sefaz\Guia;

class AC extends Padrao
{


    /**
     * Estado do Acre não possui campos extras. Com esse método mesmo que
     * seja informado qualquer campo extra na $gnreGuia não vamos adicionar
     * no XML
     * {@inheritdoc}
     */
    public function getNodeCamposExtras(\DOMDocument $gnre, Guia $gnreGuia)
    {
        return null;
    }
}
