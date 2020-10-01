<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class OrderTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testVisitHome()
    {
        $response = $this->get('/');
        $response->assertStatus(200);
    }

    public function testVisitAbout()
    {
        $response = $this->get('/about');
        $response->assertStatus(200);
    }

    public function testVisitContact()
    {
        $response = $this->get('/contact');
        $response->assertStatus(200);
    }

    public function testPostOrderCreateRequest() 
    {
        $response = $this->post(
            '/api/order',
            [
                'first_name' => 'Jean2',
                'last_name' => 'Bing2',
                'email' => 'Jean@gmail.com',
                'phone' => '+1 (438) 233-5532',
                'schedule_date' => '2020-12-20',
                'street_address' => '3000 Avenue Jean-Talon, Montreal, Quebec',
                'city' => 'Montreal',
                'province' => 'Quebec',
                'postal' => 'J3K 3E2',
                'country' => 'Canada',
            ],
            [
                'Accept'=>'application/json',
            ]
        );
        $response->assertStatus(200);
    }
}
