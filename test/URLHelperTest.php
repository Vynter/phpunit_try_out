<?php

//use PHPUnit\Framework\TestCase;
use App\URLHelper;
use PHPUnit\Framework\TestCase;

//class URLHelperTest extends TestCase
class URLHelperTest extends TestCase
{
    public function test1egal1()
    {
        $this->assertEquals(1, 1);
    }
    public function assertURLEquals($expected, $url)
    {
        $this->assertEquals($expected, urldecode($url));
    }
    public function testWithParam()
    {
        $url = URLHelper::withParam([], 'k', 5);
        $this->assertURLEquals("k=3,2,1", $url);
    }
}