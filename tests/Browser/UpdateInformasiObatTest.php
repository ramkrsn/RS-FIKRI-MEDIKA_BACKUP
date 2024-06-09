<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class UpdateInformasiObatTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/informasiobat')
                    ->clickLink('Edit')
                    ->assertPathIs('/informasiobat/5/edit')
                    ->type('name', 'Paracetamoll')
                    ->type('description', 'Obat sakit kepalaa')
                    ->type('price', '50000')
                    ->press('Update')
                    ->assertPathIs('/informasiobat')
                    ->assertSee('Paracetamoll')
                    ->assertSee('Obat sakit kepalaa')
                    ->assertSee('50000');
        });
    }
}
