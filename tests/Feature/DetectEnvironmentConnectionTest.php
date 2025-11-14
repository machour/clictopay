<?php

use App\Enums\Environment;
use App\Models\Merchant;
use App\Models\User;

test('middleware detects test environment from api key prefix', function () {
    $merchant = Merchant::on(Environment::CONNECTION_TEST)->create([
        'name' => 'Test Merchant',
        'config' => ['clictopay' => ['login' => 'test', 'password' => 'test']],
    ]);
    $token = $merchant->createTestToken('test-token');

    $this->withHeader('Authorization', 'Bearer ' . $token->plainTextToken)
        ->getJson('/api/info')
        ->assertOk()
        ->assertJson(['mode' => Environment::TEST]);

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::TEST);
});

test('middleware detects live environment from api key prefix', function () {
    $merchant = Merchant::on(Environment::CONNECTION_LIVE)->create([
        'name' => 'Test Merchant',
        'config' => ['clictopay' => ['login' => 'test', 'password' => 'test']],
    ]);
    $token = $merchant->createLiveToken('test-token');

    $this->withHeader('Authorization', 'Bearer ' . $token->plainTextToken)
        ->getJson('/api/info')
        ->assertOk()
        ->assertJson(['mode' => Environment::LIVE]);

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::LIVE);
});

test('middleware uses user env for authenticated web requests', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::LIVE]);

    $this->actingAs($user)->get('/dashboard');

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::LIVE);
});

test('middleware defaults to test environment for guest requests', function () {
    $this->get('/');

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::TEST);
});

test('middleware respects cookie override for authenticated users', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::TEST]);

    $this->actingAs($user)
        ->withCookie('app_env_mode', Environment::LIVE)
        ->get('/dashboard');

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::LIVE);
});

test('middleware ignores invalid cookie values', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::TEST]);

    $this->actingAs($user)
        ->withCookie('app_env_mode', 'invalid')
        ->get('/dashboard');

    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::TEST);
});

test('middleware stores environment mode in container', function () {
    $user = User::factory()->withoutTwoFactor()->create(['env' => Environment::LIVE]);
    
    $this->actingAs($user)->get('/');
    
    expect(app(Environment::CONTAINER_KEY))->toBe(Environment::LIVE);
});
