<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class LogOutTest extends DuskTestCase
{
    /**
     * A Dusk test example.
     * @group logout
     */
    public function testLogOut(): void
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
            ->press('') // Menekan tombol Log In

        });
    }
}
