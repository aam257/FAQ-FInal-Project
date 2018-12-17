<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Answer;
use App\Question;
use App\User;

class SearchTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testLoginNSearch()
    {
        $user = factory(User::class)->make();
        $user->save();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertSee('Search');
        });
    }

    public function  testSearch()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->type('search','New')
                ->press('Search')
                ->assertSee('New');
        });
    }


}
