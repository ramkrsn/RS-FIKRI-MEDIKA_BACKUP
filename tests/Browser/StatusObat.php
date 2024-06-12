<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class StatusObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->press('#openToggle')
                    ->clickLink('Masuk')
                    ->assertPathIs('/login')
                    ->type('email', 'user2@gmail.com')
                    ->pause(1000)
                    ->type('password', '11111111')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->pause(1000)
                    ->press('#openToggle')
                    ->pause(1000)
                    ->clickLink('Antrian')
                    ->pause(1000)
                    ->clickLink('Obat')
                    ->pause(1000)
                    ->click('@antrianobat')
                    ->pause(3000);
        });
    }
}
