<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadAntrianObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/antrian-obat')
                    ->assertPathIs('/antrian-obat')
                    ->waitForText('Antrian')
                    ->assertSee('OBAT BB')
                    ->assertSee('ASDASDASD');

});
    }
}
