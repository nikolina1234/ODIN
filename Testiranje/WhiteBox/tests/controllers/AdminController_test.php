<?php

class AdminController_test extends TestCase
{
	/*
		Test 4 - admin
	*/
	public function test_prikazBaze()
	{
		$output = $this->request('GET', ['AdminController','prikazBaze']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Admin -> Prikaz baze</i></h3>', $output);
	}
	
	/*
		Test 5 - admin
	*/
	public function test_prikazSlagalice()
	{
		$output = $this->request('GET', ['AdminController','prikazSlagalice']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Admin -> Prikaz baze -> Slagalica</i></h3>', $output);
	}

}
