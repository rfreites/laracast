<?php

namespace Tests\Browser;

use App\User;
use Tests\DuskTestCase;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

class ExampleTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */
    public function testBasicExample()
    {
        $this->browse(function (Browser $browser, Browser $loginBrowser) {

            $user = User::first();

            $browser->visit('/')
                    ->assertSee('Laravel');

            $loginBrowser->loginAs($user)
                         ->visit('/home')
                         ->assertSee('Dashboard');

        });
    }
}
