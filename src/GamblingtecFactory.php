<?php
namespace Gamblingtec\OAuth2Module;

use Gamblingtec\OAuth2\Client\Provider\Gamblingtec;
use Interop\Container\ContainerInterface;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

class GamblingtecFactory implements FactoryInterface
{
    public function __invoke(ContainerInterface $container, $requestedName, array $options = null)
    {
        $config = $container->get('config')[Module::CONFIG];
        $options = [
            'clientId'                => $config[Module::CONFIG_CLIENT_ID],
            'clientSecret'            => $config[Module::CONFIG_CLIENT_SECRET],
            'redirectUri'             => $config[Module::CONFIG_REDIRECT_URI],
        ];
        if (isset($config[Module::CONFIG_DOMAIN])) {
            $options['domain'] = $config[Module::CONFIG_DOMAIN];
        }
        $provider = new Gamblingtec($options);
        return $provider;
    }

    /**
     * Create service
     *
     * @param ServiceLocatorInterface $serviceLocator
     * @return mixed
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        return $this($serviceLocator, Gamblingtec::class);
    }
}
