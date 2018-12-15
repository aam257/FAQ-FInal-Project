<?php

namespace Tests\Browser;

use Tests\DuskTestCase;
use Laravel\Dusk\Chrome;
use Laravel\Dusk\Browser;
use Illuminate\Foundation\Testing\DatabaseMigrations;

use App\Answer;
use App\Question;
use App\User;

class ViewAllQuestionsTest extends DuskTestCase
{
    /**
     * A basic browser test example.
     *
     * @return void
     */

    public function testLoginNQuestions()
    {
        $user = factory(User::class)->make();
        $user->save();

        $this->browse(function ($browser) use ($user) {
            $browser->visit('/login')
                ->type('email', $user->email)
                ->type('password', 'secret')
                ->press('Login')
                ->assertSee('View All Questions');
        });
    }

    public function  testProfilePageQuestions()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit ('/user/{user_id}/profile')
                ->assertSee('My Profile')
                ->assertSee('View All Questions');
        });
    }

    public function  testCreateQuestionPage()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/home')
                ->clickLink('Create a Question')
                ->type('body','New Question for testing???')
                ->press('Save')
                ->assertSee('View All Questions');
        });
    }

    public function  testViewQuestionPage()
    {
        $this->browse(function ($first, $second) {
            $first->loginAs(User::find(1))
                ->visit ('/home')
                ->clickLink('View')
                ->assertSee('View All Questions');
        });
    }

}
