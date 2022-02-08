<?php

namespace RyanChandler\Uuid\Tests;

use Illuminate\Database\Eloquent\Model;
use RyanChandler\Uuid\Concerns\HasUuid;

class Post extends Model
{
    use HasUuid;
}

class UuidTest extends TestCase
{
    /** @test */
    public function it_fills_in_uuid_on_model()
    {
        $post = Post::create();

        $this->assertNotEmpty($post->uuid);
        $this->assertDatabaseHas('posts', [
            'uuid' => $post->uuid,
        ]);
    }
}
