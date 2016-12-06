<?php
namespace Gamblingtec\OAuth2Module;

final class Module
{
    const CONFIG = 'gamblingtec-oauth2-client';

    const CONFIG_CLIENT_ID = 'client_id';

    const CONFIG_CLIENT_SECRET = 'client_secret';

    const CONFIG_REDIRECT_URI = 'redirect_uri';

    const CONFIG_DOMAIN = 'domain';

    public function getConfig()
    {
        $provider = new ConfigProvider();

        return [
            self::CONFIG => [
                self::CONFIG_CLIENT_ID => '',
                self::CONFIG_CLIENT_SECRET => '',
                self::CONFIG_REDIRECT_URI => '',
            ],
            'service_manager' => $provider->getDependencyConfig(),
        ];
    }
}
