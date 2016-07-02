<?php

namespace Fidry\EloquentSerializer\Symfony\Bundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * @author Théo FIDRY <theo.fidry@gmail.com>
 */
final class FidryEloquentSerializerBundle extends Bundle
{
    /**
     * @inheritdoc
     */
    public function getContainerExtension()
    {
        return new DependencyInjection\EloquentSerializerExtension();
    }
}
