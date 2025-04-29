# FreshCart Grocery Delivery System

![FreshCart Logo](assets/images/logo.png)

A complete web-based grocery delivery system built with PHP, MySQL, HTML5, CSS3, and JavaScript.

## Features

- 🛒 **User Features**:
  - Product catalog with categories and search
  - Shopping cart functionality
  - Secure checkout process
  - Order tracking
  - User profile management

- 🛠️ **Admin Features**:
  - Product management (CRUD)
  - Order management
  - User management
  - Delivery tracking
  - Sales reporting

- 🚚 **Delivery Features**:
  - Order assignment
  - Delivery status updates
  - Route optimization

## Technologies Used

- **Backend**: PHP 7.4+, MySQL
- **Frontend**: HTML5, CSS3, JavaScript, Bootstrap 5
- **Security**: CSRF protection, password hashing, input validation
- **Tools**: Git, Composer (optional)

## Installation

### Quick Start (XAMPP/WAMP)

1. Clone the repository to your `htdocs` folder
2. Import `database.sql` to phpMyAdmin
3. Configure `includes/config.php`
4. Access via `http://localhost/freshcart`

### Detailed Installation

See [INSTALL.md](INSTALL.md) for complete installation instructions.

## System Requirements

- Web server (Apache/Nginx)
- PHP 7.4+
- MySQL 5.7+
- Modern web browser

## Configuration

Edit `includes/config.php` to set:
- Database credentials
- Email settings
- Payment gateway options
- System preferences

## Usage

### For Customers
1. Browse products and add to cart
2. Proceed to checkout
3. Track orders in your account

### For Admins
1. Access `/admin/dashboard.php`
2. Manage products, orders, and users
3. View sales reports

## Screenshots

| Customer View | Admin Dashboard |
|--------------|----------------|
| ![Customer](screenshots/customer.png) | ![Admin](screenshots/admin.png) |

## Contributing

1. Fork the repository
2. Create your feature branch (`git checkout -b feature/AmazingFeature`)
3. Commit your changes (`git commit -m 'Add some AmazingFeature'`)
4. Push to the branch (`git push origin feature/AmazingFeature`)
5. Open a Pull Request

## License

This project is licensed under the MIT License - see the [LICENSE](LICENSE) file for details.

## Support

For support, please contact:
- Email: support@freshcart.com
- GitHub Issues: [https://github.com/yourusername/freshcart/issues]()

---

**FreshCart** - Your one-stop grocery delivery solution 🍎🥦🍞