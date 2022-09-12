<?php

require '../vendor/autoload.php';

use TuimSped\Gnre\Configuration\CertificatePfxFileOperation;

$certificadoArquivo = new CertificatePfxFileOperation('/var/www/sped-gnre/certs/certificado.pfx');

$gnre = new TuimSped\Gnre\Configuration\CertificatePfx($certificadoArquivo, '425236');

print 'Private key' . PHP_EOL;
print $gnre->getPrivateKey();

print 'Certificate .pem' . PHP_EOL;
print $gnre->getCertificatePem();
