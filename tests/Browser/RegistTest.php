<?php

namespace Tests\Browser;

// use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class RegistTest extends DuskTestCase
{
    
    /**
     * A Dusk test example
     * @group register
     */
    public function testRegist(): void
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/')
                    ->assertSee('Register') //Memeriksa apakah ada Register
                    ->ClickLink('Register') // Mengklik register
                    ->assertPathIs('/register') //Memastikan halaman yang dijalankan /register
                    ->type('name', 'Tahara Pasha') // Menginput nama
                    ->type('email', 'taharapasha1@gmail.com') // Menginput email
                    ->type('password', '12345678') // Menginput password
                    ->type('password_confirmation', '12345678') // Menginput ulang password
                    ->press('REGISTER') // Menekan tombol Register
                    ->assertPathIs('/dashboard'); // Memastikan redirect ke /dashboard
        });
    }
}
