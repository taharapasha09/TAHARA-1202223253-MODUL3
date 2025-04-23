<?php

namespace Tests\Browser;

// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class ShowNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group shownotes
     */
    public function testShowNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
            ->assertSee('Log in') //Memeriksa apakah ada Log in
            ->ClickLink('Log in') // Mengklik Log in
            ->assertPathIs('/login') //Memastikan halaman yang dijalankan /login
            ->type('email', 'taharapasha@gmail.com') // Menginput email
            ->type('password', '12345678') // Menginput password
            ->press('LOG IN') // Menekan tombol Log In
            ->assertPathIs('/dashboard') // Memastikan redirect ke /dashboard
            ->assertSee('Notes') //Memeriksa apakah ada Notes
            ->ClickLink('Notes') // Mengklik Notes
            ->ClickLink('Note 2') // Mengklik Note 2
            ->assertPathIs('/note/4'); // Memastikan redirect ke /note/4
        });
    }
}
