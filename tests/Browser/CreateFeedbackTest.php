<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class CreateFeedbackTest extends DuskTestCase
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
            ->type('email', 'jj@gmail.com')
            ->type('password', '12345678')
            ->press('Login')
            ->assertPathIs('/home')
            ->press('#openToggle')
            ->clickLink('Feedback')
            ->assertPathIs('/feedback')
            // ->assertSee('jj')
            // ->assertSee('jj@gmail.com')
            ->type('message', 'bagus')
            ->press('Submit')
            ->assertSee('Thank you for your feedback!')
            ;
        });
    }
}