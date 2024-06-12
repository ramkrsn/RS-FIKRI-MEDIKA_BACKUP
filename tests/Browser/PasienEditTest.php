<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PasienEditTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pasien')
            ->pause(1000)
            ->clickLink('Edit')
            ->pause(1000)
            ->assertSee('Edit Pasien')
            ->pause(1000)
            ->type('no_hp', '08127391310')
            ->pause(1000)
            ->type('nomerkamar', '20')
            ->pause(1000)
            ->type('lantaikamar', '2')
            ->pause(1000)
            ->type('penyakit', 'tipes')
            ->pause(1000)
            ->select('namadokter', 'DR.LOLI POLIO')
            ->pause(1000)
            ->type('tanggal_masuk', '09/06/2024')
            ->pause(1000)
            ->type('tanggal_keluar', '14/06/2024')
            ->pause(1000)
            ->type('tanggal_masuk', '09/06/2024')
            ->pause(1000)
            ->select('status', 'Sudah Pulang')
            ->pause(1000)
            ->press('Update')
            ->pause(1000)
            ->assertPathIs('/pasien')
            ->pause(1000);
        });
    }
}
