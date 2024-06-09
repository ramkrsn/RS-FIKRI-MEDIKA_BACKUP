<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class PengambilanobatTest extends DuskTestCase
{
  
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->press('#openToggle')
                    ->clickLink('Masuk')
                    ->assertPathIs('/login')
                    ->type('email', 'user2@gmail.com')
                    ->type('password', '12345678')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->press('#openToggle')
                    ->clickLink('Pengambilan Obat');

});
}
}