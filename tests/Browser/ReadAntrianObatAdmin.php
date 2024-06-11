<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadAntrianObatAdmin extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/manage-obat')
                    ->assertPathIs('/manage-obat')
                    ->waitForText('Manajemen Obat')
                    ->assertSee('Resep Obat')
                    ->assertSee('Nama Obat');

});
    }
}
