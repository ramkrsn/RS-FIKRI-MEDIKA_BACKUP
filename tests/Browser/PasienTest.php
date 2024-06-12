<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PasienTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pasien')
            ->pause(1000)
                    ->assertPathIs('/pasien')
                    ->pause(1000)
                    ->assertSee('List Pasien')
                    ->pause(1000);
        });
    }
}
