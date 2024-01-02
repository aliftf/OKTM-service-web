<?php

namespace Tests\Feature;

use App\Models\Account;
use App\Models\Mahasiswa;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TestDump extends TestCase
{
    /**
     * A basic feature test example.
     */
    // public function test_example(): void
    // {
    //     $response = $this->get('/');

    //     $response->assertStatus(200);
    // }

    public function testSuccessfulLogin()
    {
        // Arrange - Create a user for testing
        $mahasiswa = Account::firstOrNew(['username' => 'mahasiswa']);
        
        if (!$mahasiswa->exists) {
            $mahasiswa->username = 'mahasiswa';
            $mahasiswa->password = bcrypt('mahasiswa');
            $mahasiswa->save();
        }

        // Act - Make a POST request to the login endpoint
        $response = $this->post('/login', [
            'username' => 'mahasiswa',
            'password' => 'mahasiswa',
        ]);

        // Assert - Check the expected result
        $response->assertRedirect('/'); // Assuming you redirect to '/' after successful login
        $this->assertAuthenticatedAs($mahasiswa); // Check if the user is authenticated
    }

    public function testFailedLogin()
    {
        // Act - Make a POST request to the login endpoint with invalid credentials
        $response = $this->post('/login', [
            'username' => 'invaliduser',
            'password' => 'invalidpassword',
        ]);

        // Assert - Check the expected result
        $response->assertRedirect('/login'); // Assuming you redirect back to login page on failure
        $this->assertGuest(); // Check if the user is not authenticated
        $response->assertSessionHas('error', 'Invalid username or password'); // Check the error message
    }
}
