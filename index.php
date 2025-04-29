<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
<?php
require_once 'includes/config.php';
require_once 'includes/functions.php';

// Get featured products (8 random products)
$featured_products = [];
if ($result = $conn->query("SELECT * FROM products ORDER BY RAND() LIMIT 8")) {
    $featured_products = $result->fetch_all(MYSQLI_ASSOC);
}

// Get product categories
$categories = [];
if ($result = $conn->query("SELECT * FROM categories LIMIT 6")) {
    $categories = $result->fetch_all(MYSQLI_ASSOC);
}

require_once 'includes/header.php';
?>

<div class="hero-section">
    <div class="container">
        <div class="hero-content">
            <h1>Fresh Groceries Delivered to Your Door</h1>
            <p>Get high-quality groceries with same-day delivery</p>
            <a href="products/" class="btn btn-primary">Shop Now</a>
        </div>
    </div>
</div>

<div class="container">
    <section class="categories-section">
        <h2>Shop by Category</h2>
        <div class="category-grid">
            <?php foreach ($categories as $category): ?>
            <a href="products/?category=<?= $category['category_id'] ?>" class="category-card">
                <div class="category-icon">
                    <i class="fas fa-<?= getCategoryIcon($category['category_name']) ?>"></i>
                </div>
                <h3><?= htmlspecialchars($category['category_name']) ?></h3>
                <p><?= htmlspecialchars($category['description']) ?></p>
            </a>
            <?php endforeach; ?>
        </div>
    </section>

    <section class="featured-products">
        <h2>Featured Products</h2>
        <div class="product-grid">
            <?php foreach ($featured_products as $product): ?>
            <div class="product-card">
                <a href="products/view_product.php?id=<?= $product['product_id'] ?>">
                    <img src="<?= htmlspecialchars($product['image_url']) ?>" alt="<?= htmlspecialchars($product['product_name']) ?>">
                    <h3><?= htmlspecialchars($product['product_name']) ?></h3>
                    <p class="price">$<?= number_format($product['price'], 2) ?></p>
                </a>
                <form action="cart/add_to_cart.php" method="POST" class="add-to-cart-form">
                    <input type="hidden" name="product_id" value="<?= $product['product_id'] ?>">
                    <input type="hidden" name="quantity" value="1">
                    <input type="hidden" name="csrf_token" value="<?= generateCsrfToken(); ?>">
                    <button type="submit" class="btn btn-sm">Add to Cart</button>
                </form>
            </div>
            <?php endforeach; ?>
        </div>
        <div class="text-center">
            <a href="products/" class="btn">View All Products</a>
        </div>
    </section>

    <section class="benefits-section">
        <div class="benefit-card">
            <i class="fas fa-truck"></i>
            <h3>Fast Delivery</h3>
            <p>Same-day delivery for orders before 2pm</p>
        </div>
        <div class="benefit-card">
            <i class="fas fa-leaf"></i>
            <h3>Fresh Products</h3>
            <p>Sourced daily from local farms</p>
        </div>
        <div class="benefit-card">
            <i class="fas fa-lock"></i>
            <h3>Secure Payment</h3>
            <p>100% secure payment options</p>
        </div>
    </section>
</div>

<?php
require_once 'includes/footer.php';
?>
