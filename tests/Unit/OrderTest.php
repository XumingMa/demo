<?php

namespace Tests\Unit;

use App\Models\Order;
use Illuminate\Support\Facades\DB;
use Tests\TestCase;

class OrderTest extends TestCase
{

    public function testCreateAnOrder() {
        $order = new Order();
        $order->first_name = "Jean";
        $order->last_name = "Bing";
        $order->email = "Jean@gmail.com";
        $order->phone = "+1 (438) 233-5532";
        $order->schedule_date = "2020-12-20";
        $order->street_address = "3000 Avenue Jean-Talon, Montreal, Quebec";
        $order->city = "Montreal";
        $order->province = "Quebec";
        $order->postal = "J3K 3E2";
        $order->country = "Canada";
        $res = $order->save();
        $this->assertEquals(1, $res);
    }

    public function testAnOrderHasFirstName() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Jean', $order->first_name);
    }

    public function testAnOrderHasLastName() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Bing', $order->last_name);
    }

    public function testAnOrderHasEmail() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Jean@gmail.com', $order->email);
    }

    public function testAnOrderHasPhone() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('+1 (438) 233-5532', $order->phone);
    }

    public function testAnOrderHasScheduleDate() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('2020-12-20', $order->schedule_date);
    }

    public function testAnOrderHasCity() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Montreal', $order->city);
    }

    public function testAnOrderHasProvince() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Quebec', $order->province);
    }

    public function testAnOrderHasPostal() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('J3K 3E2', $order->postal);
    }

    public function testAnOrderHasCountry() {
        $order = DB::table('orders')
                ->orderBy('id', 'desc')
                ->first();
        $this->assertEquals('Canada', $order->country);
    }

    public function testDeleteAnOrder() {
        $res = DB::table('orders')
                ->latest()->delete();
        $this->assertTrue((boolean)$res);
    }

}
