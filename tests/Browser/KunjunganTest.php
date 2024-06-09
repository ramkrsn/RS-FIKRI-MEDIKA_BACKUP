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
                    ->press('#openToggle')
                    ->clickLink('Masuk')
                    ->assertPathIs('/login')
                    ->type('email', 'user2@gmail.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->press('#openToggle')
                    ->clickLink('Kunjungan Pasien')
                    ->assertPathIs('/KunjunganPasien')
                    ->type('nama_depan', 'Alif')
                    ->type('nama_belakang', 'Maul')
                    ->type('nik', '1232456778')
                    ->type('email', 'usertest@gmail.com')
                    ->type('no_hp', '081275798')
                    ->type('tanggal', '06-18-2024')
                    ->type('waktu', '11.30 AM')
                    ->assertPathIs('/KunjunganPasien');
        });
    }
}
