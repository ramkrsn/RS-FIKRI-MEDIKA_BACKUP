<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteArtikel extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/artikel')
                    ->press('Delete')
                    ->waitForText('Delete Artikel')
                    ->press('Yes')
                    ->assertPathIs('/admin/artikel');
                   
        });
    }
}

