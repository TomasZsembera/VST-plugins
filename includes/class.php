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

                header('Location: produkty.php');
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

            echo '<div class="produkty-container">';

            foreach ($produkty as $produkt) {

                echo '<div class="card produkt-card">';
                echo '<img class="card-img-top produkt-image" src="' . $produkt['obrazok'] . '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title produkt-title">' . $produkt['nazov'] . '</h5>';

                echo '<div class="price-cart-container">'; // Add a new div
                echo '<p class="card-text produkt-text">Cena: ' . $produkt['cena'] . '</p>';
                echo '<a href="produkt.php?id=' . $produkt['produkt_id'] . '" class="shopping-cart-button"><i class="fa fa-shopping-cart"></i></a>';
                echo '</div>'; // End the new div

                echo '</div>'; // End card-body div
                echo '</div>'; // End card div

            }

            echo '</div>';

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

}
?>