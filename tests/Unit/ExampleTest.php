<?php

namespace Tests\Unit;

use App\Post; 

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class ExampleTest extends TestCase
{
    use DatabaseTransactions; // this will un does the transaction that already did
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        //Given I have two records in the database that are posts, and each one is posted a month apart.
        $first = factory(Post::class)->create();
        $second = factory(Post::class)->create([
            'created_at' => \Carbon\Carbon::now()->submonth() 
        ]);

        //When I fetch the archives.
        $post = Post::archives();
        // dd($post);
        //Then the response should be in the proper format.
        $this->assertEquals([
            [
                'year' => $first['created_at']->format('Y'),
                'month' => $first['created_at']->format('F'),
                'published' => 2
            ]
        ], $post);


    }
}
