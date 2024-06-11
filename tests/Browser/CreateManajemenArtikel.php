<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateManajemenArtikel extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/artikel')
                    ->assertPathIs('/admin/artikel')
                    ->press('Tambah')
                    ->waitFor('.modal')
                    ->type('title', '10ss0000')
                    ->type('description', '10')
                    ->attach('image', 'C:\xampp\htdocs\RS-FIKRI-MEDIKA_BACKUP\public\img\X.png')
                    ->click('.submit-button');
        });
    }
}

