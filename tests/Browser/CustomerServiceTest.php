<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CustomerServiceTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->waitFor('#chat') // Menunggu sampai elemen dengan id 'chat' muncul
            ->click('#chat') // Klik pada elemen dengan id 'chat'
            ->assertSee('Percakapan'); // Verifikasi bahwa teks 'Percakapan' muncul di halaman
        });
    }
}
