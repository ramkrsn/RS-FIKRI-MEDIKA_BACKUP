<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;
use App\Models\User;

class ShowAntrianTest extends DuskTestCase
{
    /**
     * test
     * @group antrian
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->loginAs(User::find(1))
                    ->visit('/home')
                    ->press('#openToggle')
                    ->clickLink('Antrian')
                    ->assertPathIs('/queue')
                    ->click('@detailAntrian')
                    ->waitForText('Jadwalkan Pertemuan')
                    ->pause(1000)
                    ;
        });
    }
}