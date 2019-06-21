<?php

class ModeratorController_test extends TestCase
{
	/*
		Test 6 - moderator
	*/
	public function test_Slagalica()
	{
		$output = $this->request('GET', ['ModeratorController','Slagalica']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Moderator -> Slagalica</i></h3>', $output);
	}
	
	/*
		Test 7 - moderator
	*/
	public function test_Spojnice()
	{
		$output = $this->request('GET', ['ModeratorController','Spojnice']);
		$this->assertContains('<h3 class="text-center text-dark"><i>Moderator -> Spojnice</i></h3>', $output);
	}

}
