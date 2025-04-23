<?php

namespace Tests\Browser;

// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class NotesTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group notes
     */
    public function testExample(): void
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
                    ->ClickLink('Create Note') // Mengklik Create Note
                    ->assertSee('Create Note') //Memeriksa apakah ada Create Note
                    ->type('title', 'Note 2') // Menginput title note
                    ->type('description', 'Note 2 untuk praktikum PPL modul 3') // Menginput description
                    ->press('CREATE') // Menekan tombol CREATE
                    ->assertPathIs('/notes'); // Memastikan redirect ke /notes
                
        });
    }
}
