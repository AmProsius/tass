<?php

namespace App\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent('icon_mini')]
class IconMiniComponent
{
    public string $name;
}
