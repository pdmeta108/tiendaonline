<?php

namespace App\Enums;

use BenSampo\Enum\Enum;

/**
 * @method static static Cancelado()
 * @method static static Activo()
 */
final class SuscripcionType extends Enum
{
    const Cancelado =   0;
    const Activo =   1;
}
