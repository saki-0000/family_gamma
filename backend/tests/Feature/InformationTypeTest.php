<?php

namespace Tests\Feature;

use App\Models\InformationType;
use Tests\TestCase;

class InformationTypeTest extends TestCase
{
    public function testCreateInformationType(): void
    {
        $params = InformationType::factory()->definition();
        $this->assertDatabaseMissing('information_types', $params);
        $this->postJson('api/infomataion/type', $params)
            ->assertStatus(201);
        $this->assertDatabaseHas('information_types', $params);
    }
}
