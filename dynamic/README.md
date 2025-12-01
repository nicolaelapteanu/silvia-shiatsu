# Silvia Shiatsu - Romanian Landing Page

This is a Romanian language landing page for Silvia Shiatsu, targeting audiences in the Republic of Moldova.

## 🌟 Features

- **Modern, Responsive Design**: Beautiful UI that works perfectly on all devices (mobile, tablet, desktop)
- **Romanian Language**: Full content in Romanian for Moldovan audience
- **Professional Presentation**: Comprehensive information about Shiatsu therapy and its benefits
- **Contact Integration**: Multiple contact methods (phone, WhatsApp, Facebook, email)
- **PHP 8 Compatible**: Built to work with modern PHP versions
- **Apache Optimized**: Includes .htaccess configuration for optimal performance

## 📋 File Structure

```
silvia-shiatsu/
├── index.php          # Main landing page (Romanian)
├── .htaccess          # Apache configuration
└── README.md          # This file
```

## 🚀 Deployment Instructions

### For Apache Server with PHP 8

1. **Upload Files**:
   - Upload all files to your web server's root directory (usually `public_html/` or `www/`)
   - Or create a subdirectory for the Romanian version (e.g., `public_html/ro/`)

2. **Verify PHP Version**:
   ```bash
   php -v
   ```
   Should show PHP 8.x

3. **Set Permissions**:
   ```bash
   chmod 644 index.php
   chmod 644 .htaccess
   ```

4. **Test the Site**:
   - Visit your domain (e.g., `https://silvia-shiatsu.com/` or `https://silvia-shiatsu.com/ro/`)
   - Check all contact links work properly
   - Test on mobile devices

### Apache Configuration

The `.htaccess` file includes:
- ✅ UTF-8 encoding for Romanian characters (ă, â, î, ș, ț)
- ✅ Gzip compression for faster loading
- ✅ Browser caching for better performance
- ✅ Security headers
- ✅ Directory protection
- ✅ HTTPS redirect (commented out - uncomment when SSL is ready)

### SSL Certificate (Recommended)

For security and trust, install an SSL certificate:
```bash
# Using Certbot (Let's Encrypt - Free)
sudo certbot --apache -d silvia-shiatsu.com
```

Then uncomment the HTTPS redirect lines in `.htaccess`.

## 📱 Contact Information

The landing page includes the following contact methods:

- **📞 Phone**: (+39) 3291 427 321
- **💬 WhatsApp**: Direct messaging link
- **📘 Facebook**: Link to Facebook page
- **✉️ Email**: studio@silvia-shiatsu.com

## 🎨 Customization

### Colors
The color scheme can be customized by editing the CSS variables in `index.php`:

```css
:root {
    --primary-color: #2c5f2d;    /* Dark green */
    --secondary-color: #97bf0d;   /* Light green */
    --accent-color: #d4a574;      /* Gold/beige */
    --text-dark: #333;            /* Dark text */
    --text-light: #666;           /* Light text */
}
```

### Content
Edit the text directly in `index.php`. All content is in Romanian and can be modified as needed.

### Facebook Link
Update the Facebook link in the contact section:
```html
<a href="https://facebook.com/silviashiatsu" target="_blank">
```
Replace with your actual Facebook page URL.

## 🌐 Multi-language Setup (Optional)

If you want to serve both Italian and Romanian versions:

1. Keep your Italian version at root: `index.php` or `index.html`
2. Create a subdirectory: `ro/` for Romanian version
3. Add language switcher links on both pages
4. Use language-specific meta tags for SEO

Example structure:
```
public_html/
├── index.php          # Italian version (existing)
├── ro/
│   └── index.php      # Romanian version (this file)
└── .htaccess
```

## 🔧 Troubleshooting

### Issue: Romanian characters display incorrectly
**Solution**: Ensure your server is set to UTF-8 encoding. Check `.htaccess` has:
```apache
AddDefaultCharset UTF-8
```

### Issue: Page not loading
**Solution**: 
- Verify PHP 8 is installed: `php -v`
- Check Apache is running: `sudo systemctl status apache2`
- Check file permissions

### Issue: .htaccess not working
**Solution**: Ensure `mod_rewrite` is enabled:
```bash
sudo a2enmod rewrite
sudo systemctl restart apache2
```

## 📊 Performance

The page is optimized for:
- ⚡ Fast loading times (< 2 seconds)
- 📱 Mobile-first responsive design
- ♿ Accessibility standards
- 🎯 SEO best practices
- 🔒 Security headers

## 📝 License

© 2025 Silvia Shiatsu. All rights reserved.

## 🆘 Support

For questions or support:
- Email: studio@silvia-shiatsu.com
- Phone: (+39) 3291 427 321

---

**Created**: October 2025  
**Server Requirements**: Apache 2.4+, PHP 8.0+  
**Target Audience**: Romanian speakers in Republic of Moldova

