<?php

namespace Mi\Bundle\PuliMetadataFileLocatorBundle;

use Mi\Bundle\PuliMetadataFileLocatorBundle\DependencyInjection\Compiler\SetMetadataDriverPass;
use Symfony\Component\DependencyInjection\ContainerBuilder;
use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Alexander Miehe <alexander.miehe@movingimage.com>
 *
 * @codeCoverageIgnore
 */
class MiPuliMetadataFileLocatorBundle extends Bundle
{
    /**
     * {@inheritdoc}
     */
    public function build(ContainerBuilder $container)
    {
        $container->addCompilerPass(new SetMetadataDriverPass());
    }
}
