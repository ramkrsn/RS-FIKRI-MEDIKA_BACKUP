<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditReservasiObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservasi-obat')
                    ->assertPathIs('/reservasi-obat')
                    ->select('.dropdown-menu-end','pending')
                    ->pause(10000);
                    
        });
    }
}
