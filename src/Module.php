<?php
namespace Gamblingtec\OAuth2Module;

use Zend\ModuleManager\Feature\ConfigProviderInterface;

final class Module implements ConfigProviderInterface
{
    const CONFIG = 'gamblingtec-oauth2-client';

    const CONFIG_CLIENT_ID = 'client_id';

    const CONFIG_CLIENT_SECRET = 'client_secret';

    const CONFIG_REDIRECT_URI = 'redirect_uri';

    const CONFIG_DOMAIN = 'domain';

    public function getConfig()
    {
        return [
            self::CONFIG => [
                self::CONFIG_CLIENT_ID => '',
                self::CONFIG_CLIENT_SECRET => '',
                self::CONFIG_REDIRECT_URI => '',
            ],
            'service_manager' => [
                'factories' => [
                    'Gamblingtec\\OAuth2\\Client\\Provider\\Gamblingtec' => GamblingtecFactory::class,
                ],
            ],
        ];
    }
}
