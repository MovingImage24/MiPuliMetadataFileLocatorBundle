<?php

namespace Mi\Bundle\PuliMetadataFileLocatorBundle\DependencyInjection\Compiler;

use Symfony\Component\DependencyInjection\Compiler\CompilerPassInterface;
use Symfony\Component\DependencyInjection\ContainerBuilder;

/**
 * @author Alexander Miehe <alexander.miehe@movingimage.com>
 */
class SetMetadataDriverPass implements CompilerPassInterface
{
    /**
     * {@inheritdoc}
     */
    public function process(ContainerBuilder $container)
    {
        if (!$container->hasAlias('jms_serializer.metadata_driver')) {
            return;
        }

        $container->setAlias(
            'jms_serializer.metadata_driver',
            'mi.puli_metadata_file_locator_bundle.serializer.metadata.puli_chain_driver'
        );
    }

}
