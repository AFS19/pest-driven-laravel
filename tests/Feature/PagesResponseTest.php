<?php

use function Pest\Laravel\get;

test('returns a successful response', function () {
    // Act && Assert
    get(route('home'))
        ->assertOk();
});
