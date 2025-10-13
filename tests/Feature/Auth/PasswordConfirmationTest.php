<?php

namespace Tests\Feature\Auth;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Livewire\Volt\Volt;
use Tests\TestCase;

class PasswordConfirmationTest extends TestCase
{
    use RefreshDatabase;

    public function testConfirmPasswordScreenCanBeRendered(): void
    {
        $user = User::factory()->create();

        $response = $this->actingAs($user)->get(route('password.confirm'));

        $response->assertStatus(200);
    }

    public function testPasswordCanBeConfirmed(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = Volt::test('auth.confirm-password')
            ->set('password', 'password')
            ->call('confirmPassword');

        $response
            ->assertHasNoErrors()
            ->assertRedirect(route('admin.dashboard', absolute: false));
    }

    public function testPasswordIsNotConfirmedWithInvalidPassword(): void
    {
        $user = User::factory()->create();

        $this->actingAs($user);

        $response = Volt::test('auth.confirm-password')
            ->set('password', 'wrong-password')
            ->call('confirmPassword');

        $response->assertHasErrors(['password']);
    }
}
