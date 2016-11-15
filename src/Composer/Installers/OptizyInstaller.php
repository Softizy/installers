<?php
namespace Composer\Installers;

class OptizyInstaller extends BaseInstaller
{
    protected $locations = array(
        'optizy-client' => '{$name}/',
        'optizy-server'  => '{$name}/',
    );
}
