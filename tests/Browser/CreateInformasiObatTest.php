<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateInformasiObatTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/informasiobat')
                    ->clickLink('Tambah Obat')
                    ->assertPathIs('/informasiobat/create')
                    ->type('name', 'Paracetamol')
                    ->type('description', 'Obat sakit kepala')
                    ->type('price', '5000')
                    ->press('Simpan')
                    ->assertPathIs('/informasiobat')
                    ->assertSee('Paracetamol')
                    ->assertSee('Obat sakit kepala')
                    ->assertSee('5000');
        });
    }
}
