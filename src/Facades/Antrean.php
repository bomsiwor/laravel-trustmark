<?php

namespace Bomsiwor\LaravelTrustmark\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Bomsiwor\Trustmark\Resources\Antrean\AntreanBPJS bpjs() Mendapatkan resource subservice Peserta sebagai bridge API Integration
 */
class Antrean extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'antrean';
    }
}
