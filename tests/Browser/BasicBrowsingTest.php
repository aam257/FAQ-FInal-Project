<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Answer;
use App\Question;
use App\User;

class BasicBrowsingTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testLogin()
    {
        $user = factory(User::class)->make();
        $user->save();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertPathIs('/home');
        });
    }

    public function  testProfileView()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit ('/user/{user_id}/profile')
                ->assertSee('My Profile')
                ->assertSee('First Name')
                ->assertSee('Last Name')
                ->assertSee('Body');
        });
    }

    public function  testAllQuestionsPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit ('/allQuestionsPage')
                ->assertSee('Questions in Database')
                ->assertSee('Question Number: 1')
                ->assertSee('Answer Question');
        });
    }

    /*public function  testLoginAs()
    {
        $this->browse(function ($first, $second) {
            $first->loginAs(User::find(1))
                ->visit('/home')
                ->assertSee('Create a Question');
        });
    }*/

    public function  testCreateAQuestion()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->clickLink('Create a Question')
                ->type('body','New Question for testing???')
                ->press('Save')
                ->assertPathIs('/home');
        });
    }

    public function  testViewQuestion()
    {
        $this->browse(function ($first, $second) {
            $first->loginAs(User::find(1))
                ->visit ('/home')
                ->clickLink('View')
                ->assertSee('Question');
        });
    }

}
