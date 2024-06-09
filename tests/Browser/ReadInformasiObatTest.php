<?php

namespace Tests\Browser;

use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ReadInformasiObatTest extends DuskTestCase
{
    /**
     * A Dusk test to verify the Informasi Obat page loads and displays the correct content.
     */
    public function testInformasiObatPageDisplaysCorrectContent(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/informasiobat')
                    ->assertSee('Nama')        // Example text to verify
                    ->assertSee('Deskripsi')   // Example text to verify
                    ->assertSee('Harga');      // Example text to verify
        });
    }
}
