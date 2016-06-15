<?php
namespace Gamblingtec\OAuth2Module;

use Gamblingtec\OAuth2\Client\Provider\Gamblingtec;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GamblingtecFactory implements FactoryInterface
{
    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config')[Module::CONFIG];
        $provider = new Gamblingtec([
            'clientId'                => $config[Module::CONFIG_CLIENT_ID],
            'clientSecret'            => $config[Module::CONFIG_CLIENT_SECRET],
            'redirectUri'             => $config[Module::CONFIG_REDIRECT_URI],
            'scopes'                  => $config[Module::CONFIG_SCOPES],
        ]);
        return $provider;
    }
}
