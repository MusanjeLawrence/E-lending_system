<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class LoginTest extends TestCase
{

    use RefreshDatabase;
    use WithFaker;

    /** @test */
    public function a_user_can_login()
    {
        $this->withoutExceptionHandling();
        $user = factory('App\User')->create([
            'password' => bcrypt($password = 'secret'),
        ]);
        $response = $this->post('/login', [
            'email' => $user->email,
            'password' => $password,
        ]);
        $response->assertRedirect('/home');
        $this->assertAuthenticatedAs($user);
    }

    /** @test */
    public function a_user_can_view_the_login_form()
    {
        $response = $this->get('/login');
        $response->assertSuccessful();
        $response->assertViewIs('auth.login');
    }



    /** @test */
    public function a_user_cannot_login_with_invalid_credentials()
    {
        $this->withoutExceptionHandling();
        $user = factory('App\User')->create([
            'password' => bcrypt('secret'),
        ]);
        $response = $this->from('/login')->post('/login', [
            'email' => $user->email,
            'password' => 'invalid-password',
        ]);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertTrue(session()->hasOldInput('email'));
        $this->assertFalse(session()->hasOldInput('password'));
        $this->assertGuest();
    }

    /** @test */
    public function a_user_cannot_login_without_a_name()
    {
        $response = $this->from('/login')->post('/login', [
            'email' => '',
            'password' => 'secret',
        ]);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertFalse(session()->hasOldInput('email'));
        $this->assertGuest();
    }

    /** @test */
    public function a_user_cannot_login_without_an_email()
    {
        $response = $this->from('/login')->post('/login', [
            'email' => '',
            'password' => 'secret',
        ]);
        $response->assertRedirect('/login');
        $response->assertSessionHasErrors('email');
        $this->assertFalse(session()->hasOldInput('email'));
        $this->assertGuest();
    }

    /** @test */
    

}
