<?php

namespace Tests\Browser;

// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class EditNotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group editnotes
     */
    public function testEditNotes(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/') // Mengunjungi laman home
                    ->assertSee('Log in') //Memeriksa apakah ada Log in
                    ->ClickLink('Log in') // Mengklik Log in
                    ->assertPathIs('/login') //Memastikan halaman yang dijalankan /login
                    ->type('email', 'taharapasha@gmail.com') // Menginput email
                    ->type('password', '12345678') // Menginput password
                    ->press('LOG IN') // Menekan tombol Log In
                    ->assertPathIs('/dashboard') // Memastikan redirect ke /dashboard
                    ->assertSee('Notes') //Memeriksa apakah ada Notes
                    ->ClickLink('Notes') // Mengklik Notes
                    ->ClickLink('Edit') // Mengklik edit
                    ->assertPathIs('/edit-note-page/3') // Memastikan redirect ke /edit page
                    ->type('title', 'Note 2 (edit)') // Mengedit title note 2
                    ->type('description', 'Note 2 untuk praktikum PPL modul 3 after edit') // Mengedit description
                    ->press('UPDATE') // Menekan tombol UPDATE
                    ->assertPathIs('/notes'); //Memastikan halaman ke /notes
      
        });
    }
}
