<?php namespace App\Controllers;

use CodeIgniter\Controller;
use CodeIgniter\Database\Exceptions\DatabaseException;
use Config\Database;

class TestDatabase extends Controller
{
    public function index()
    {
        $data = [];

        try {
            // Load the database
            $db = Database::connect();

            // Test the connection
            if ($db->connID->connect_error) {
                $data['status'] = 'Failed to connect to the database: ' . $db->connID->connect_error;
            } else {
                $data['status'] = 'Database connection successful.';

                // Execute a simple query to fetch data
                $query = $db->query('SELECT * FROM students LIMIT 1');
                $data['result'] = $query->getResult();
            }

        } catch (DatabaseException $e) {
            $data['status'] = 'Database error: ' . $e->getMessage();
            log_message('error', 'Database error: ' . $e->getMessage());
        } catch (\Exception $e) {
            $data['status'] = 'General error: ' . $e->getMessage();
            log_message('error', 'General error: ' . $e->getMessage());
        }

        // Load the view and pass the data
        return view('test_database', $data);
    }
}
