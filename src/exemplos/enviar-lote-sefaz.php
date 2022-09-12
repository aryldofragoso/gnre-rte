<?php

namespace Exemplo;

require '../vendor/autoload.php';

class MySetup extends TuimSped\Gnre\Configuration\Setup
{

    public function getBaseUrl()
    {
    }

    public function getCertificateCnpj()
    {
    }

    public function getCertificateDirectory()
    {
    }

    public function getCertificateName()
    {
    }

    public function getCertificatePassword()
    {
    }

    public function getCertificatePemFile()
    {
    }

    public function getEnvironment()
    {
    }

    public function getPrivateKey()
    {
    }

    public function getProxyIp()
    {
    }

    public function getProxyPass()
    {
    }

    public function getProxyPort()
    {
    }

    public function getProxyUser()
    {
    }

    public function getDebug()
    {
        return true;
    }
}

$xml = file_get_contents('estrutura-lote-completo-gnre.xml');


$minhaConfiguracao = new MySetup();

$guia = new TuimSped\Gnre\Sefaz\Guia();

$lote = new TuimSped\Gnre\Sefaz\Lote();
// $lote->utilizarAmbienteDeTeste(true); Descomente essa linha para utilizar o ambiente de testes

$lote->addGuia($guia);

$webService = new TuimSped\Gnre\Webservice\Connection($minhaConfiguracao, $lote->getHeaderSoap(), $lote->toXml());
echo $webService->doRequest($lote->soapAction());
