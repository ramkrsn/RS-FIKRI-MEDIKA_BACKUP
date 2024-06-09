<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MenerimaReservasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/MenerimaReservasi')
                    ->assertPathIs('/MenerimaReservasi')
                    ->assertSee('ID')
                    ->assertSee('Nama Depan')
                    ->assertSee('Nama Belakang')
                    ->assertSee('NIK')
                    ->assertSee('Tanggal Pertemuan')
                    ->assertSee('Poli Dokter')
                    ->assertSee('Nama Dokter')
                    ->assertSee('Opsi');
        });
    }
}
