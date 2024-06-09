<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditDoctorTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/dokter')
                    ->clickLink('Edit')
                    ->assertSee('Edit Doctor')
                    ->type('namadokter', 'Alew')
                    ->type('polidokter', 'hati')
                    ->press('Update')
                    ->assertPathIs('/dokter');
        });
    }
}
