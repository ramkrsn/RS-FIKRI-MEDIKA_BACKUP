<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteManajemenObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/manage-obat')
                    ->press('Delete')
                    ->waitForText('Hapus Obat')
                    ->press('Ya')
                    ->assertPathIs('/manage-obat');
                   
        });
    }
}

