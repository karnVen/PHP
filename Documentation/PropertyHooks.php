<?php
class User {
    // 1. Store the raw data in a private property
    private string $username = 'guest';

    // 2. The "Setter" - handles the lowercase logic
    public function setUsername(string $value): void {
        $this->username = strtolower($value);
    }

    // 3. The "Getter" - handles the capitalization logic
    public function getUsername(): string {
        return ucfirst($this->username);
    }

}



$user = new User();
$user->setUsername('KARAN');    // Set it
echo $user->getUsername();      // Outputs: "Karan"
?>