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

                echo '<a href="produkt_p.php?id=' . $produkt['produkt_id'] . '" class="card-link">'; // Start of card link
                echo '<div class="card produkt-card">';
                echo '<img class="card-img-top produkt-image" src="' . $produkt['obrazok'] . '" alt="Card image cap">';
                echo '<div class="card-body">';
                echo '<h5 class="card-title produkt-title">' . $produkt['nazov'] . '</h5>';

                echo '<div class="price-cart-container">';
                echo '<p class="card-text produkt-text">Cena: ' . $produkt['cena'] . '</p>';
                echo '<a href="../includes/addToC.php?id=' . $produkt['produkt_id'] . '" class="shopping-cart-button"><i class="fa fa-shopping-cart"></i></a>';

                // Check if the user is logged in
                if (isset($_SESSION['email'])) {
                    echo '<div class="card-spacer">'; 
                    echo '<br><a href="edit.php?id=' . $produkt['produkt_id'] . '" class="edit-button">Edit</a>';
                    echo '<br><a href="delete.php?id=' . $produkt['produkt_id'] . '" class="delete-button">Delete</a>';
                    echo '</div>'; // Close new div
                }

                echo '</div>';

                echo '</div>';
                echo '</div>'; // End of card
                echo '</a>'; // End of card link

            }

            echo '</div>';

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function getProduct($id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM Produkty WHERE produkt_id = ?");
            $stmt->execute([$id]);
            $produkt = $stmt->fetch(PDO::FETCH_ASSOC);

            return $produkt;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
 
    public function createProduct($productName, $productPrice, $productDescription, $productImageNewName)
    {
        try {
            $stmt = $this->conn->prepare("INSERT INTO Produkty (nazov, cena, popis, obrazok) VALUES (?, ?, ?, ?)");
            $stmt->execute([$productName, $productPrice, $productDescription, $productImageNewName]);
            header('Location: produkty.php');
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function deleteProduct($id)
    {
        try {
            $stmt = $this->conn->prepare("DELETE FROM Produkty WHERE produkt_id = ?");
            $stmt->execute([$id]);
            header('Location: produkty.php');
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
    public function editProduct($id, $productName, $productPrice, $productDescription, $productImageNewName)
    {
        try {
            $stmt = $this->conn->prepare("UPDATE Produkty SET nazov = ?, cena = ?, popis = ?, obrazok = ? WHERE produkt_id = ?");
            $stmt->execute([$productName, $productPrice, $productDescription, $productImageNewName, $id]);
            header('Location: produkty.php');
            exit();
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }
}

class Kosik
{
    private $conn;

    public function __construct($conn)
    {
        $this->conn = $conn;
    }

    
    public function addToCart($id)
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        $product = $this->getProductById($id); // Táto funkcia by mala vrátiť celý produkt na základe jeho ID

        $cartItem = [
            'id' => $product['produkt_id'],
            'name' => $product['nazov'],
            'price' => $product['cena'],
            'image' => $product['obrazok']
        ];

        array_push($_SESSION['cart'], $cartItem);
        header('Location: ../public_html/produkty.php');
    }
 
    public function getProductById($id)
    {
        try {
            $stmt = $this->conn->prepare("SELECT * FROM Produkty WHERE produkt_id = ?");
            $stmt->execute([$id]);
            $product = $stmt->fetch(PDO::FETCH_ASSOC);

            return $product;

        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
    }

    public function getCart()
    {
        if (!isset($_SESSION['cart'])) {
            $_SESSION['cart'] = [];
        }

        return $_SESSION['cart'];
    }

    public function removeFromCart($id)
    {
        if (($key = array_search($id, $_SESSION['cart'])) !== false) {
            unset($_SESSION['cart'][$key]);
        }
    }
}


?>