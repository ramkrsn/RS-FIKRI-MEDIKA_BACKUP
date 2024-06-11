<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadReservasiObatAdmin extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservasi-obat')
                    ->assertPathIs('/reservasi-obat')
                    ->waitForText('Reservasi Obat')
                    ->assertSee('parasetamol');


});
    }
}
