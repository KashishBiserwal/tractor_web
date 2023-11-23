<!-- <?php
   include 'includes/headertag.php';
   include 'includes/footertag.php';
   ?> 
   </php> -->
   <?php
// Perform authentication and validation here
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Replace with your actual authentication logic and database connection
    $storedEmail = 'email';
    $storedPasswordHash = password_hash('password', PASSWORD_BCRYPT);

    if ($email === $storedEmail && password_verify($password, $storedPasswordHash)) {
        $response = [
            'access_token' => 'your_access_token',
            'expires_in' => 3600 // Token expiration time in seconds
        ];
        http_response_code(200); // Success
    } else {
        $response = [
            'message' => 'Login credentials are invalid.'
        ];
        http_response_code(401); // Unauthorized
    }

    // Set response headers
    header('Content-Type: application/json');

    // Send the JSON response
    echo json_encode($response);
} else {
    http_response_code(405); // Method Not Allowed
    echo json_encode(['message' => 'Method Not Allowed']);
}

