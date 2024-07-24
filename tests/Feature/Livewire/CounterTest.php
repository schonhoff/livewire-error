<?php

use App\Livewire\Counter;
use Illuminate\Support\Facades\Cache;
use Livewire\Livewire;

it('renders successfully', function () {
    Livewire::test(Counter::class)
        ->assertStatus(200);
});

it('some data already cached without partial mocking', function () {
    Cache::shouldReceive('rememberForever')
        ->once()
        ->andReturn(['foo' => 'bar']);

    Livewire::test(Counter::class)
        ->assertStatus(200)
        ->assertSet('someData', ['foo' => 'bar']);
});


it('some data already cached with partial mocking', function () {
    Cache::partialMock()
        ->shouldReceive('rememberForever')
        ->once()
        ->andReturn(['foo' => 'bar']);

    Livewire::test(Counter::class)
        ->assertStatus(200)
        ->assertSet('someData', ['foo' => 'bar']);
});
