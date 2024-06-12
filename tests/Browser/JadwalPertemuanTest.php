<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;


class JadwalPertemuanTest extends DuskTestCase
{
    /**
     * test
     * @group antrian
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->press('#openToggle')
                    ->clickLink('Jadwalkan Pertemuan')
                    ->assertPathIs('/jadwalpertemuan')
                    ->select('opsi','Pertemuan dengan Dokter')
                    ->type('namadepan','Alif')
                    ->type('namabelakang','Maulana')
                    ->type('NIK','1202210212')
                    ->type('keluhanpasien','sakit perut')
                    ->type('tanggalpertemuan','09/06/2024')
                    ->type('jampertemuan','09:00')
                    ->select('namadokter','bobi')
                    ->select('polidokter','gigi')
                    ->press('Jadwalkan Pertemuan')
                    ->waitForDialog()
                    ->assertDialogOpened('Appointment scheduled successfully.')
                    ->acceptDialog()
                    ->assertPathIs('/jadwalpertemuan');
        });
    }
}