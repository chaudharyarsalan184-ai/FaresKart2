# 🚀 FaresKart WordPress Integration

Your PHP website is now connected with WordPress functionality! Here's how to use it:

## ✨ What You Get

✅ **WordPress Functions** - Your site now uses WordPress-style functions  
✅ **Content Management** - Easy admin panel to update content  
✅ **Dynamic Content** - Text, numbers, and contact info are now editable  
✅ **WordPress Ready** - Easy to upgrade to full WordPress later  

## 🎯 How It Works

### 1. **WordPress Integration File** (`wordpress-connect.php`)
- Provides WordPress-like functions for your existing PHP code
- Works even without WordPress installed
- Automatically loads WordPress if available

### 2. **Admin Panel** (`wordpress-admin.php`)
- Simple web interface to update your content
- No database required
- Saves changes to configuration files

### 3. **Dynamic Content**
- Hero title and subtitle
- About us text
- Contact information
- Statistics numbers
- Social media links

## 🚀 Quick Start

### Step 1: Access Admin Panel
1. Open your browser
2. Go to: `http://yourdomain.com/wordpress-admin.php`
3. Login with:
   - **Username:** `admin`
   - **Password:** `fareskart2024`

### Step 2: Customize Content
1. **Hero Section** - Update main title and subtitle
2. **About Us** - Change company description
3. **Contact Info** - Update address, phone, email
4. **Statistics** - Modify numbers and figures

### Step 3: Save Changes
- Click "Save All Changes" button
- Your website will automatically update

## 🔧 How to Customize

### Update Hero Section
```php
// In your admin panel, change:
Hero Title: "Find & Book Your Perfect Trip"
Hero Subtitle: "Discover amazing deals on flights, hotels, and vacation packages around the world"
```

### Update Contact Information
```php
// Change these values:
Address: "123 Travel St, Suite 100"
Phone: "+1 (555) 123-4567"
Email: "support@fareskart.com"
```

### Update Statistics
```php
// Modify these numbers:
Happy Customers: "2,000,000+"
Airlines: "600+"
Destinations: "1,000+"
Experience: "5+"
```

## 📁 File Structure

```
fareskart/
├── index.php                    # Your main page (now WordPress-enabled)
├── wordpress-connect.php        # WordPress integration functions
├── wordpress-admin.php          # Admin panel for content management
├── wordpress-config.php         # Auto-generated configuration (created by admin)
├── style.css                    # Your existing styles
└── [other PHP files]           # Your existing pages
```

## 🎨 Customization Examples

### Change Hero Title
1. Go to admin panel → Hero Section
2. Update "Hero Title" field
3. Save changes
4. Your website instantly shows the new title

### Update Contact Info
1. Go to admin panel → Contact Info
2. Change address, phone, or email
3. Save changes
4. Footer automatically updates

### Modify Statistics
1. Go to admin panel → Statistics
2. Update any number
3. Save changes
4. Numbers section shows new values

## 🔒 Security

### Change Admin Credentials
Edit `wordpress-admin.php` and change:
```php
$admin_username = 'admin';        // Change this
$admin_password = 'fareskart2024'; // Change this
```

### Recommended Security Steps
1. Change default username/password
2. Use strong passwords
3. Consider moving admin file to secure location
4. Add IP restrictions if needed

## 🚀 Next Steps (Optional)

### Upgrade to Full WordPress
When you're ready for full WordPress:

1. **Install WordPress** on your hosting
2. **Upload your theme** to `/wp-content/themes/fareskart/`
3. **Activate the theme** in WordPress admin
4. **Import your content** from the admin panel

### Add More Features
- **User registration** system
- **Booking forms** with database
- **Payment integration** (PayPal, Stripe)
- **Email notifications**
- **Booking management** system

## 🆘 Troubleshooting

### Admin Panel Not Working
- Check file permissions (should be 644)
- Ensure PHP is enabled on your hosting
- Check for PHP errors in hosting logs

### Content Not Updating
- Clear browser cache
- Check if `wordpress-config.php` was created
- Verify file permissions

### Website Shows Errors
- Check PHP error logs
- Ensure all files are uploaded correctly
- Verify PHP version compatibility (7.4+)

## 📞 Support

### Common Issues
1. **"Page not found"** - Check file names and paths
2. **"Permission denied"** - Set file permissions to 644
3. **"Content not updating"** - Clear cache and check file permissions

### Getting Help
1. Check your hosting error logs
2. Verify all files are uploaded
3. Test with a simple PHP file first

## 🎉 Congratulations!

Your PHP website is now:
- ✅ **WordPress-enabled**
- ✅ **Easy to manage**
- ✅ **Professional looking**
- ✅ **Ready for growth**

You can now update your website content without touching code, just like a real WordPress site!

---

**Need help?** Check your hosting error logs or contact your hosting provider for PHP-related issues.
