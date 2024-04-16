<?php

namespace Tests\Unit;

use Tests\TestCase;

class UserControllerTest extends TestCase 
{
	
	public function testUserList()
	{
		// Perform a GET request to the user list route
		$response = $this->get('/user');
		
		// Assert that the response status is 200 (OK)
		$response->assertStatus(200);
		
		// Assert that the response contains the specified textdomain
		$response->assertSee('Enjoy viewing our users');
	}
}