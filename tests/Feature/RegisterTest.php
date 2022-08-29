<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class RegisterTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    
    /** @test */
    public function a_user_can_register()
    {
        $this->withoutExceptionHandling();
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);
        $response->assertRedirect('/home');
        $this->assertAuthenticated();
    }
    
    /** @test */
    public function a_user_can_view_the_register_form()
    {
        $response = $this->get('/register');
        $response->assertSuccessful();
        $response->assertViewIs('auth.register');
    }

    /** @test */
    public function a_user_cannot_register_without_a_name()
    {
        $response = $this->post('/register', [
            'name' => '',
            'email' => $this->faker->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);
        $response->assertSessionHasErrors('name');
        $this->assertFalse(auth()->check());
    }

    /** @test */
    public function a_user_cannot_register_without_an_email()
    {
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => '',
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);
        $response->assertSessionHasErrors('email');
        $this->assertFalse(auth()->check());
    }

    /** @test */
    public function a_user_cannot_register_without_a_password()
    {
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => '',
            'password_confirmation' => 'secret',
        ]);
        $response->assertSessionHasErrors('password');
        $this->assertFalse(auth()->check());
    }

    /** @test */
    public function a_user_cannot_register_without_a_password_confirmation()
    {
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'secret',
            'password_confirmation' => '',
        ]);
        $response->assertSessionHasErrors('password');
        $this->assertFalse(auth()->check());
    }

    /** @test */
    public function a_user_cannot_register_with_a_password_that_is_too_short()
    {
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'secret',
            'password_confirmation' => 'secret',
        ]);
        $response->assertSessionHasErrors('password');
        $this->assertFalse(auth()->check());
    }

    /** @test */
    public function a_user_cannot_register_with_a_password_that_does_not_match_the_password_confirmation()
    {
        $response = $this->post('/register', [
            'name' => $this->faker->name,
            'email' => $this->faker->email,
            'password' => 'secret',
            'password_confirmation' => 'not-secret',
        ]);
        $response->assertSessionHasErrors('password');
        $this->assertFalse(auth()->check());
    }
}
