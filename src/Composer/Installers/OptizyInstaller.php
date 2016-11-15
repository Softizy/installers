<?php
namespace Composer\Installers;

class OptizyInstaller extends BaseInstaller
{
    protected $locations = array(
        'client' => '{$name}/',
        'server'  => '{$name}/',
    );
}
