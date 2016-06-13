<?php
use \Controllers\Page;
class PageTest extends PHPUnit_Framework_TestCase
{
	public function testViewReturnsHiThere(){
		
		$page=new Page();
		$expected = "hi there";
		$this->assertEquals($expected,$page->view());
	}
}
