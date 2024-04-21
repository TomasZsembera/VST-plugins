<?php
class Login
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    public function login($email, $heslo)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM Admins WHERE email = ?");
            $stmt->execute([$email]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user && password_verify($heslo, $user['heslo'])) {
                session_start();
                // Prihlásenie úspešné
                $_SESSION['email'] = $email;

                header('Location: kontakt.php');
                exit();
            } else {
                // Prihlásenie neúspešné
                echo "Nesprávne prihlasovacie údaje.";
            }
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }

    }
}
?>