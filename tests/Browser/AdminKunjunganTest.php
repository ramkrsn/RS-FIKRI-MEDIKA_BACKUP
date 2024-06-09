<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AdminKunjunganTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/menerimakunjungan')
                    ->assertPathIs('/menerimakunjungan')
                    ->assertSee('ID Kunjungan')
                    ->assertSee('Nama')
                    ->assertSee('NIK')
                    ->assertSee('Email')
                    ->assertSee('Nomor HP')
                    ->assertSee('Nama Pasien')
                    ->assertSee('Tanggal')
                    ->assertSee('Waktu');
                });
    }
    
}
