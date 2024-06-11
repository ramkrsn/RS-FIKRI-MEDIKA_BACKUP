<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateManajemenObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/manage-obat')
                    ->assertPathIs('/manage-obat')
                    ->click('.add-medicine')
                    ->waitFor('.modal');
                    // ->type('nama_obat', '10ss0000');
                    // ->type('resep_obat', '10');
                    // -select('.form-select', '1')
                    // ->click('.submit-button')
        });
    }
}

