<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
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
                ->clickLink('Notes')
                ->assertPathIs('/notes')
                ->clickLink('Edit')
                ->assertPathIs('/edit-note-page/2')
                ->type('title','PPL Modul 3 :)')
                ->type('description','Modul 3 PPL :)')
                ->press('UPDATE');
        });
    }
}
