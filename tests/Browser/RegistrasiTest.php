<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistrasiTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group regist
     */
    public function testExample(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->clickLink('Register')
                    ->assertPathIs('/register')
                    ->type('name', 'tiara')
                    ->type('email', 'tiara@gmail.com')
                    ->type('password', 'tiara111')
                    ->type('password_confirmation', 'tiara111')
                    ->press('REGISTER');
        });
    }
}
