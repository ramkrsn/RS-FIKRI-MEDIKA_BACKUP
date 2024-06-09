<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AntrianJadwalTestCase extends DuskTestCase
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
                    ->type('email', 'jj@gmail.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->press('#openToggle')
                    ->clickLink('Jadwalkan Pertemuan')
                    ->assertPathIs('/jadwalpertemuan')
                    ->select('opsi','Pertemuan dengan Dokter')
                    ->type('namadepan','Alif')
                    ->type('namabelakang','Maulana')
                    ->type('NIK','1202210212')
                    ->type('keluhanpasien','sakit perut')
                    ->type('tanggalpertemuan','09/06/2024')
                    ->type('jampertemuan','10:00')
                    ->select('namadokter','daulay')
                    ->select('polidokter','dokter')
                    ->press('Jadwalkan Pertemuan')
                    ->assertPathIs('/jadwalpertemuan')
                    ->press('.x-button')
                    ->assertPathIs('/home')
                    ->press('#openToggle')
                    ->clickLink('Antrian')
                    ->assertSee('P007')
                     ;
        });
    }
}
