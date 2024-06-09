<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditProfileTestCase extends DuskTestCase
{
    /**
     * A Dusk test example.
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->press('#openToggle')
                    ->clickLink('Masuk')
                    ->assertPathIs('/login')
                    ->type('email','jj@gmail.com')
                    ->type('password','12345678')
                    ->press('Login')
                    ->assertPathIs('/home')
                    ->clickLink('Profil')
                    ->assertPathIs('/profile/edit')
                    ->type('name', 'jeje')
                    ->type('email', 'jj@gmail.com')
                    ->type('phone', '213123321')
                    ->type('password', '12345678')
                    ->type('password_confirmation', '12345678')
                    ->press('Submit')
                    ->assertSee('Profil berhasil diperbarui');
        });
    }
}
