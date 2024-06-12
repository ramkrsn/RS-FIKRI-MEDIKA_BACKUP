<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ManajemenAntrianTestCase extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/manage-antrian')
                    ->assertSee('Manajemen Antrian')
                    ->press('.icon')
                    ->waitFor('.dropdown-menu')
                    ->press('Cancel')
                    ->assertSee('Status pasien dengan NIK')
                    ;
        });
    }
}
