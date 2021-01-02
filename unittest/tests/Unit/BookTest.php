<?php

namespace Tests\Unit;

use Tests\TestCase;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class BookTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->assertDatabaseHas('books' , ['book_isbn'=>"	
        978-1-49192-706-9"]);

        $this->assertDatabaseHas('books' , ['book_title'=>"Java And XML"]);

        $this->assertDatabaseHas('books' , ['category_name'=>"Computer"]);
    }
}
