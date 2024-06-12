<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PasienCreateTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/pasien')
            ->clickLink('Add')
            ->waitForLocation('/pasien/create')
            ->assertPathIs('/pasien/create')
            ->type( 'namapasien', 'Nurdin')
            ->type('nik', '1292833000234')
            ->type('no_hp', '08227162838')
            ->select('status', '')
            ->press('Create')
            ->waitForLocation('/pasien')
            ->assertPathIs('/pasien');
        });
    }
}
