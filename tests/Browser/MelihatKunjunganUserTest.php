<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class MelihatKunjunganUserTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->pause(1000)
            ->press('#openToggle')
            ->pause(1000)
            ->clickLink('Masuk')
            ->pause(1000)
            ->assertPathIs('/login')
            ->pause(1000)
            ->type('email', 'ramahoki216@gmail.com')
            ->pause(1000)
            ->type('password', '12345678')
            ->pause(1000)
            ->press('Login')
            ->pause(1000)
            ->assertPathIs('/home')
            ->pause(1000)
            ->press('#openToggle')
            ->pause(1000)
            ->clickLink('Kunjungan Saya')
            ->pause(1000)
            ->assertPathIs('/KunjunganPasienView')
            ->pause(2000);
        });
    }
}
