<?php

use App\Enums\Environment;
use App\Models\User;

test('user can update their environment to test', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::LIVE]);

    $response = $this->actingAs($user)->put(route('user.env.update'), [
        'env' => Environment::TEST,
    ]);

    $response->assertRedirect();
    expect($user->fresh()->env)->toBe(Environment::TEST);
});

test('user can update their environment to live', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::TEST]);

    $response = $this->actingAs($user)->put(route('user.env.update'), [
        'env' => Environment::LIVE,
    ]);

    $response->assertRedirect();
    expect($user->fresh()->env)->toBe(Environment::LIVE);
});

test('environment update requires authentication', function () {
    $response = $this->put(route('user.env.update'), [
        'env' => Environment::LIVE,
    ]);

    $response->assertRedirect(route('login'));
});

test('environment update requires valid value', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::TEST]);

    $response = $this->actingAs($user)->put(route('user.env.update'), [
        'env' => 'invalid',
    ]);

    $response->assertSessionHasErrors('env');
    expect($user->fresh()->env)->toBe(Environment::TEST);
});

test('environment update requires env parameter', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::TEST]);

    $response = $this->actingAs($user)->put(route('user.env.update'), []);

    $response->assertSessionHasErrors('env');
});
