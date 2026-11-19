<?php

namespace Tests\Feature;

use Tests\TestCase;

class HomeTest extends TestCase
{
    public function test_homepage_loads_correctly(): void
    {
        $this->get('/')
            ->assertStatus(200)
            ->assertSee('Tasks Laravel')
            ->assertSee('Mi proyecto de prueba CI/CD funciona correctamente.');
    }
}
