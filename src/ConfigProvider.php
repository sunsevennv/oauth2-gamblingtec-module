<?php
namespace Gamblingtec\OAuth2Module;

class ConfigProvider
{
    public function __invoke()
    {
        return [
            'dependencies' => $this->getDependencyConfig(),
            Module::CONFIG => [
                Module::CONFIG_CLIENT_ID => '',
                Module::CONFIG_CLIENT_SECRET => '',
                Module::CONFIG_REDIRECT_URI => '',
            ],
        ];
    }

    public function getDependencyConfig()
    {
        return [
            'factories' => [
                \Gamblingtec\OAuth2\Client\Provider\Gamblingtec::class => GamblingtecFactory::class,
            ],
        ];
    }
}
