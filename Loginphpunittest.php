<?php
use PHPUnit\Framework\TestCase;

class LoginTest extends TestCase
{
    public function testValidLogin()
    {
        $expected = "Welcome, ".$_POST['email'];
        $actual = login("valid-email@example.com", "valid-password");
        $this->assertEquals($expected, $actual);
    }

    public function testInvalidLogin()
    {
        $expected = "Invalid Email or Password";
        $actual = login("invalid-email@example.com", "invalid-password");
        $this->assertEquals($expected, $actual);
    }

    private function login($email, $password)
    {
        ob_start();
        $_POST['email'] = $email;
        $_POST['password'] = $password;
        include 'login.php';
        $output = ob_get_clean();
        return $output;
    }
}