<?php

namespace Tests\Feature;

use App\Models\Account;
use Tests\TestCase;
use App\Models\Form;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;

class TestDownloadController extends TestCase
{
    /**
     * A basic feature test example.
     */

    // use RefreshDatabase;

    public function testDownloadFile()
    {
        // Arrange - Create a form for testing
        $form = Form::where('nim', '1302213011')->first();

        // Log in as admin
        $admin = Account::where('username', 'admin')->first();

        $this->actingAs($admin);
        

        // Act - Make a request to the controller's downloadFile method
        $response = $this->get("/list-pengajuan-ktm/download/$form->id/ksm"); // Replace with your actual route

        // Assert - Check the expected result
        $response->assertStatus(200)
                 ->assertHeader('Content-Disposition', 'attachment; filename=' . basename($form->ksm));

        // Additional assertions can be made based on your specific requirements
        // For example, you can assert the content type, file content, etc.
    }

    public function testFailedDownloadFile()
    {
        // Log in as admin
        $admin = Account::where('username', 'admin')->first();

        $this->actingAs($admin);

        // Act - Make a request to the controller's downloadFile method with non-existing form ID and file type
        $response = $this->get("/list-pengajuan-ktm/download/9999/dump");

        // Assert - Check the expected result
        $response->assertStatus(404)
                 ->assertJson(['error' => 'Data not found.']);
    }
}
