<?php

namespace Tests\Browser;

// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class DeleteNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group deletenotes
     */
    public function testDeleteNotes(): void
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
                    ->press('Delete') // Menekan tombol Delete
                    ->assertPathIs('/notes'); // Memastikan redirect ke /dashboard
        });
    }
}
