<?php

declare(strict_types=1);

namespace Kitchenaid\RecipesPlugin;

use Sylius\Bundle\CoreBundle\Application\SyliusPluginTrait;
use Symfony\Component\HttpKernel\Bundle\Bundle;

final class KitchenaidRecipesPlugin extends Bundle
{
    use SyliusPluginTrait;
}
