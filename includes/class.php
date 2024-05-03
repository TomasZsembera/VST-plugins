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

                header('Location: ../produkty.php');
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

class Produkty
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }


    public function getProdukty()
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM Produkty");
            $stmt->execute();
            $produkty = $stmt->fetchAll(PDO::FETCH_ASSOC);

            echo '<div class="produkty-container">'; // Pridajte obalový div

            foreach ($produkty as $produkt) {
                echo '<div class="card" style="width: 1rem; height: 5rem;">'; // Upravte šírku a výšku
                echo '<img class="card-img-top" src="' . $produkt['obrazok'] . '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title">' . $produkt['nazov'] . '</h5>';
                echo '<p class="card-text">Cena: ' . $produkt['cena'] . '</p>';
                echo '</div>';
                echo '</div>';
            }

            echo '</div>'; // Ukončite obalový div

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
?>