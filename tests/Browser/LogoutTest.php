<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogoutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                ->clickLink('Log in')
                ->assertPathIs('/login')
                ->type('email', 'tiara@gmail.com')
                ->type('password', 'tiara111')
                ->press('LOG IN')
                ->assertPathIs('/dashboard')
                ->waitFor('#click-dropdown', 5)
                ->click('#click-dropdown')
                ->pause(500)
                ->waitFor('form[action="http://127.0.0.1:8000/logout"] a', 5)
                ->click('form[action="http://127.0.0.1:8000/logout"] a');
        });
    }
}
