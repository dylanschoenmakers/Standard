<?php

use Opifer\CmsBundle\Kernel\Kernel;
use Symfony\Component\Config\Loader\LoaderInterface;

class AppKernel extends Kernel
{
    public function registerBundles()
    {
        $bundles = array(
            new AppBundle\AppBundle(),
        );

        // The parent bundles array must be passed as the first parameter, because
        // our CmsBundle holds all required config.
        return array_merge(parent::registerBundles(), $bundles);
    }

    public function registerContainerConfiguration(LoaderInterface $loader)
    {
        $loader->load($this->getRootDir().'/config/config_'.$this->getEnvironment().'.yml');
    }
}
