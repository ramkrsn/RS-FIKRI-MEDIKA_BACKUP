<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateKamarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/kamar')
                    ->clickLink('Add')
                    ->waitForLocation('/createkamar')
                    ->assertPathIs('/createkamar')
                    ->type('tipekamar', 'Suite')
                    ->type('harga', '100000')
                    ->type('jumlahkamar', '10')
                    ->type('gedungkamar', 'B')
                    ->type('lantaikamar', '5')
                    ->type('infokamar', 'kamar berkelas dan mewah')
                    ->press('Create')
                    ->assertPathIs('/kamar');
        });
    }
}
