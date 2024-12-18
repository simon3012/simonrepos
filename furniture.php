<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Cart with Images</title>
    <div class="cart-icon" id="cart-icon">
        🛒 <span id="item-count">0</span>
    </div>

    <style>
        body {
            font-family: Arial, sans-serif;
            
        }
        
     .cart-icon {
        position: fixed;
        top: 20px;
        right: 20px;
        background-color: #c94c4c;
        color: white;
        padding: 10px;
        border-radius: 5px;
        cursor: pointer;
        display: flex;
        align-items: center;
    }
    .cart-icon span {
        margin-left: 5px;
    }

        .item {
            margin: 30px;
            display: inline-block;
            align-items: center;
            flex-direction: row;
            text-align: center;
            border: 1px solid #5ae708;
            padding: 10px;
            border-radius: 5px;
            background-color:white;
           
        }
        .item img {
            width: 200px;
            height: 200px;
            margin-right: 20px;
        }
        .cart {
            margin-top: 30px;
            border-top: 1px solid #c94c4c;
            padding-top: 20px;
        }
        @media (max-width: 768px) {
            .item {
                flex: 1 1 45%; /* Adjusts to two items per row on smaller screens */
            }
        }
        @media (max-width: 480px) {
            .item {
                flex: 1 1 100%; /* Stacks items on small screens */
            }
            .cart {
                margin-top: 20px;
            }
        }

    </style>
</head>
<body>

    <h1>Shopping Cart Example with Images</h1>

    <!-- Item List -->
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-cottonbro-6334872.jpg">
        <div>
            <p><strong>Item 1</strong> - Price: $10</p>
            <button onclick="addToCart('Item 1', 10)">Add to Cart</button>
        </div>
    </div>

    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-cottonbro-7404941.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>

    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-fotios-photos-1957478.jpg">
        <div>
            <p><strong>Item 3</strong> - Price: $15</p>
            <button onclick="addToCart('Item 3', 15)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-fotoaibe-1571463.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-houzlook-3356416.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-jonathanborba-3263716.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-kamo11235-667838.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-kathekth-3049121.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-lina-1841184.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-markusspiske-105004.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-martinpechy-1866149.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-medhat-ayad-122846-447592.jpg">
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-pixabay-276663.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-quark-studio-1159039-3201922.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-valeriya-827528.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\furniture\pexels-zvolskiy-2082092.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-mvtkvrimow-2885940.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-olly-3763871.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-paulvanyork-14214319.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-pexels-user-1464603298-26811651.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-pixabay-159728.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-pixabay-163439.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-pixabay-257970.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>
    <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-ron-lach-10669594.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div> <div class="item">
        <img src="C:\Users\simon\Desktop\codehtml\photosweb\sports\pexels-sevenbcollection-28970060.jpg">
        <div>
            <p><strong>Item 2</strong> - Price: $20</p>
            <button onclick="addToCart('Item 2', 20)">Add to Cart</button>
        </div>
    </div>


    <!-- Cart Section -->
    <div class="cart">
        <h2>Your Cart</h2>
        <ul id="cart-items"></ul>
        <p><strong>Total: $<span id="cart-total">0</span></strong></p>
    
        
    </div>

    <script>
        let cart = [];
        let total = 0;
        const MAX_ITEMS_DISPLAYED = 5;

        function addToCart(itemName, itemPrice) {
            // Add item to cart
            cart.push({ name: itemName, price: itemPrice });
            total += itemPrice;
            updateCart();
        }

        function updateCart() {
            // Update the cart display
            let cartItems = document.getElementById('cart-items');           
            let cartTotal = document.getElementById('cart-total');
            let itemCount = document.getElementById('item-count');
            cartItems.innerHTML = ''; // Clear previous items
                     
            cart.forEach(function(item) {
                let li = document.createElement('li');
                li.textContent = `${item.name} - $${item.price}`;
                cartItems.appendChild(li);
            });
            cartTotal.textContent = total.toFixed(2); // Update total
            itemCount.textContent = cart.length;
        }
        function addToCart(product_id, product_name, quantity, price) {
            // Assuming you have a user ID from session or authentication
            let user_id = 1; // Example: replace with actual user ID
        
            // Prepare data to be sent to the server
            let formData = new FormData();
           // formData.append('user_id', user_id);
            formData.append('product_id', product_id);
            formData.append('product_name', product_name);
            formData.append('quantity', quantity);
            formData.append('price', price);
        
            // Send POST request to PHP file
            fetch('add_to_cart.php', {
                method: 'POST',
                body: formData
            })
            .then(response => response.text())
            .then(data => {
                alert(data); // Show success/error message
            })
            .catch(error => {
                console.error('Error:', error);
            });
        }
        
    </script>
    <?php
// Database connection
$servername = "localhost";
$username = "root"; // default XAMPP username
$password = ""; // default XAMPP password
$dbname = "webcommerce"; // database name

// Create connection
$conn = new mysqli($localhost, $root, "", $webcommerce);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data from the request (POST method)

$product_id = $_POST['product_id'];
$product_name = $_POST['product_name'];
$quantity = $_POST['quantity'];
$price = $_POST['price'];

// Insert data into the database
$sql = "INSERT INTO cart(user_id, product_id, product_name, quantity, price) 
        VALUES ('$product_id', '$product_name', '$quantity', '$price')";

if ($conn->query($sql) === TRUE) {
    echo "Item added to cart successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>


</body>
</html>
