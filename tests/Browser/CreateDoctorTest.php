<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateDoctorTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dokter')
                    ->clickLink('Add')
                    ->waitForLocation('/createdokter')
                    ->assertPathIs('/createdokter')
                    ->type('namadokter', 'Alif')
                    ->type('seninstart', '10:00')
                    ->type('seninend', '11:00')
                    ->type('selasastart', '10:00')
                    ->type('selasaend', '11:00')
                    ->type('rabustart', '10:00')
                    ->type('rabuend', '11:00')
                    ->type('kamisstart', '10:00')
                    ->type('kamisend', '11:00')
                    ->type('jumatstart', '10:00')
                    ->type('jumatend', '11:00')
                    ->type('sabtustart', '10:00')
                    ->type('sabtuend', '11:00')
                    ->type('polidokter', 'jantung')
                    ->attach('wajahdokter', 'C:\xampp\htdocs\RS-FIKRI-MEDIKA_BACKUP\public\img\X.png')
                    ->press('Create')
                    ->waitForLocation('/dokter')
                    ->assertPathIs('/dokter');
        });
    }

}



