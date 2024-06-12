<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditManajemenAntrianTestCase extends DuskTestCase
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
                    ->press('Done')
                    ->assertSee('Status pasien dengan NIK')
                    ;
        });
    }
}
