<?php

namespace Tests\Feature;

use Tests\TestCase;
use Illuminate\Foundation\Testing\RefreshDatabase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        $this->get('/')->assertStatus(200);
        $this->get('/todo')->assertStatus(302);
        $this->get('/todo/show/1')->assertStatus(302);
        $this->get('/todo/addTitle')->assertStatus(302);
        $this->get('/todo/1/delete')->assertStatus(302);
        $this->get('/todo/editTitle')->assertStatus(302);
        $this->get('/todo/content')->assertStatus(302);
        $this->get('/todo/addContent/1')->assertStatus(302);
        $this->get('/login')->assertStatus(200);
        $this->get('/register')->assertStatus(200);
        $this->get('/easyLogin')->assertStatus(200);
        $this->get('/home')->assertStatus(200);
        $this->get('/noroute')->assertStatus(404);

        $this->get('/')->assertSeeInOrder(['<html','<head','<body','<header>']);

        $this->get('/')->assertSeeText('おかえりTodo');
        $this->get('/')->assertSeeText('TOPページ');
        // JS onclickの文章
        $this->get('/')->assertSeeText('家族と会う');
        $this->get('/')->assertSee('</div>');

        $response = $this->get(route('todo.show', ['id' => 1]));
        $response->assertStatus(302);
        $response = $this->post('/todo/create', ['title' => 'sample']);
        $response->assertStatus(302);
        $response = $this->post('/todo/editTitle', ['title' => 'sample']);
        $response->assertStatus(302);
        
        $data = [
            'id' => 1,
            'user_id' => 1,
            'title' => 'Sample Title11'
        ];

        $this->assertDatabaseHas('titles', $data);

    }
}
