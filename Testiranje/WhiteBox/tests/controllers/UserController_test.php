<?php

class UserController_test extends TestCase
{
	/*
		Test 1 - obican korisnik
	*/
	public function test_userHomePage()
	{
		$output = $this->request('GET', ['UserController','userHomePage']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Običan Korisnik</i></h3>', $output);
	}
	/*
		Test 2 - obican korisnik
	*/	
	public function test_rangLista()
	{
		$output = $this->request('GET', ['UserController','rangLista']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Običan korisnik -> Rang lista</i></h3>	', $output);
	}
	
	/*
		Test 3 - gost
	*/
	public function test_guestPage()
	{
		$output = $this->request('GET', ['UserController','guestPage']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Gost</i></h3>', $output);	
	}
}
