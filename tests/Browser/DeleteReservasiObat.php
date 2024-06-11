<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteReservasiObat extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/reservasi-obat')
                    ->click('.bi-trash3-fill')
                    ->waitForText('Konfirmasi Hapus')
                    ->click('.btn-danger')
                    ->assertPathIs('/reservasi-obat');
                   

                   
        });
    }
}

