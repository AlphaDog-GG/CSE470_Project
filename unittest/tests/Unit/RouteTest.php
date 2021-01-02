<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RouteTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $response =$this->get("http://localhost/CSE470_Project/");
        $response->assertStatus(404);

        $responses = $this->post("http://localhost/CSE470_Project/");
        $responses->assertStatus (404);


    }
}
