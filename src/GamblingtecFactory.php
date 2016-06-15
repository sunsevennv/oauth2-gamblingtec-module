<?php
namespace Gamblingtec\OAuth2Module;

use Gamblingtec\OAuth2\Provider\Gamblingtec;
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
        $provider = new Gamblingtec([
            'clientId'                => $settings->getSettings('sso_client_id'),
            'clientSecret'            => $settings->getSettings('sso_secret'),
            'redirectUri'             => $settings->getSettings('sso_redirect_uri'),
            'scopes'                  => ['basic', 'transparent'],
        ]);
        return $provider;
    }
}
