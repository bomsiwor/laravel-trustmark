<?php

namespace Bomsiwor\LaravelTrustmark\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\Peserta peserta() Mendapatkan resource subservice Peserta sebagai bridge API Integration
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\Monitoring monitoring() Mendapatkan resource monitoring
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\LPK lpk() Mendapatkan resource Lembar Pengajuan Klaim
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\Referensi referensi() Mendapatkan resource Referensi
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\SEP sep() Mendapatkan resource SEP, Fingerprint, Jasa Raharja, dll.
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\Rujukan rujukan() Mendapatkan resource Rujukan.
 * @method static \Bomsiwor\Trustmark\Resources\VClaim\RencanaKontrol rencanaKontrol() Mendapatkan resource Rencana Kontrol.
 */
class VClaim extends Facade
{
    protected static function getFacadeAccessor()
    {
        return 'vclaim';
    }
}
