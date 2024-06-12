<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class KunjunganTest extends DuskTestCase
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
                    ->clickLink('Kunjungan Pasien')
                    ->pause(1000)
                    ->assertPathIs('/KunjunganPasien')
                    ->pause(1000)
                    ->type('nama_depan', 'Alif')
                    ->pause(1000)
                    ->type('nama_belakang', 'Maul')
                    ->pause(1000)
                    ->type('nik', '1232456778')
                    ->pause(1000)
                    ->type('email', 'usertest@gmail.com')
                    ->pause(1000)
                    ->type('no_hp', '081275798')
                    ->pause(1000)
                    ->select('idpasien', '1')
                    ->pause(1000)
                    ->type('tanggal', '06-18-2024')
                    ->pause(1000)
                    ->type('waktu', '13.30 PM')
                    ->pause(1000)
                    ->assertPathIs('/KunjunganPasien')
                    ->pause(1000);
                    
        });
    }
}
