<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditKamarTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/kamar')
                    ->clickLink('Edit')
                    ->assertSee('Edit Kamar')
                    ->type('jumlahkamar', '8')
                    ->press('Update')
                    ->assertPathIs('/kamar');
        });
    }
}
