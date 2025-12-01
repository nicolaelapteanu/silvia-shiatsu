# Silvia Shiatsu - Romanian Landing Page

[![GitHub Pages](https://img.shields.io/badge/Hosted%20on-GitHub%20Pages-blue)](https://your-username.github.io/silvia-shiatsu/)
[![License](https://img.shields.io/badge/License-MIT-green.svg)](LICENSE)

A beautiful, modern, and fully responsive Romanian language landing page for Silvia Shiatsu, targeting audiences in the Republic of Moldova.

## 🌟 Features

- ✨ **Modern, Responsive Design**: Beautiful UI that works perfectly on all devices
- 🇷🇴 **Romanian Language**: Full content in Romanian for Moldovan audience
- 💼 **Professional Presentation**: Comprehensive information about Shiatsu therapy
- 📱 **Contact Integration**: Multiple contact methods (phone, WhatsApp, Facebook, email)
- 🚀 **Static HTML**: No backend required - perfect for GitHub Pages
- ⚡ **Fast Loading**: Optimized performance with inline CSS
- ♿ **Accessible**: Follows WCAG guidelines
- 🎨 **Smooth Animations**: Elegant scroll animations and transitions

## 🖼️ Preview

The site includes:
- Hero section with call-to-action
- "Ce este Shiatsu?" (What is Shiatsu?) section
- Benefits grid with 6 key benefits
- Contact section with multiple options
- Responsive design for all screen sizes

## 📋 File Structure

```
silvia-shiatsu/
├── index.html         # Main landing page (static HTML)
├── README.md          # This file
└── dynamic/           # Original PHP version (for Apache servers)
    ├── index.php
    ├── .htaccess
    └── README.md
```

## 🚀 GitHub Pages Deployment

### Quick Deploy (3 minutes)

1. **Create a new GitHub repository**
   ```bash
   # Initialize git (if not already done)
   git init
   
   # Add all files
   git add index.html README.md
   
   # Commit
   git commit -m "Initial commit: Silvia Shiatsu landing page"
   ```

2. **Push to GitHub**
   ```bash
   # Add your GitHub repository as remote
   git remote add origin https://github.com/YOUR-USERNAME/silvia-shiatsu.git
   
   # Push to main branch
   git branch -M main
   git push -u origin main
   ```

3. **Enable GitHub Pages**
   - Go to your repository on GitHub
   - Click **Settings** → **Pages**
   - Under "Source", select **main** branch
   - Click **Save**
   - Your site will be live at: `https://YOUR-USERNAME.github.io/silvia-shiatsu/`

### Custom Domain (Optional)

To use a custom domain like `shiatsu-moldova.com`:

1. Add a `CNAME` file to the root:
   ```bash
   echo "shiatsu-moldova.com" > CNAME
   git add CNAME
   git commit -m "Add custom domain"
   git push
   ```

2. Configure your DNS provider:
   - Add a CNAME record pointing to `YOUR-USERNAME.github.io`
   - Wait for DNS propagation (up to 24 hours)

3. In GitHub Settings → Pages, enter your custom domain and enable HTTPS

## 🎨 Customization

### Update Contact Information

Edit `index.html` and modify the contact section:

```html
<!-- Phone -->
<a href="tel:+393291427321">(+39) 3291 427 321</a>

<!-- WhatsApp -->
<a href="https://wa.me/393291427321" target="_blank" rel="noopener">

<!-- Email -->
<a href="mailto:studio@silvia-shiatsu.com">

<!-- Facebook -->
<a href="https://facebook.com/silviashiatsu" target="_blank" rel="noopener">
```

### Change Colors

Edit the CSS variables in `index.html`:

```css
:root {
    --primary-color: #2c5f2d;    /* Dark green */
    --secondary-color: #97bf0d;   /* Light green */
    --accent-color: #d4a574;      /* Gold/beige */
    --text-dark: #333;            /* Dark text */
    --text-light: #666;           /* Light text */
}
```

### Modify Content

All text content is in Romanian and can be edited directly in `index.html`. Look for sections:
- `<section class="hero">` - Hero banner
- `<section id="despre">` - About Shiatsu
- `<section id="beneficii">` - Benefits grid
- `<section id="contact">` - Contact information

## 📱 Contact Methods Included

- **📞 Phone**: (+39) 3291 427 321 (clickable tel: link)
- **💬 WhatsApp**: Direct messaging link
- **📘 Facebook**: Link to your page
- **✉️ Email**: studio@silvia-shiatsu.com (mailto: link)

## 🔧 Local Development

To test locally before deploying:

1. **Simple HTTP Server** (Python):
   ```bash
   # Python 3
   python3 -m http.server 8000
   
   # Then visit: http://localhost:8000
   ```

2. **Using Node.js**:
   ```bash
   npx http-server
   ```

3. **Using VS Code**: Install "Live Server" extension and click "Go Live"

## 📊 Performance

The page is optimized for:
- ⚡ Fast loading times (< 2 seconds)
- 📱 Mobile-first responsive design
- ♿ Accessibility standards (WCAG 2.1)
- 🎯 SEO best practices
- 🔒 Secure external links (rel="noopener")

### Optimization Features

- Inline CSS (no external stylesheet requests)
- Google Fonts with preconnect
- SVG background (inline data URI)
- Smooth scroll behavior
- Intersection Observer for animations
- Responsive images and layouts

## 🌐 Browser Support

- ✅ Chrome/Edge (latest)
- ✅ Firefox (latest)
- ✅ Safari (latest)
- ✅ Mobile browsers (iOS Safari, Chrome Mobile)

## 🐛 Troubleshooting

### Romanian characters not displaying correctly

Ensure your HTML file is saved with **UTF-8 encoding**. In most editors:
- VS Code: Bottom right → "UTF-8"
- Notepad++: Encoding → UTF-8

### Page not loading on GitHub Pages

1. Check that `index.html` is in the root directory
2. Verify GitHub Pages is enabled in Settings
3. Wait 1-2 minutes for deployment
4. Check Actions tab for build status

### Links not working

- Ensure all `href` attributes are properly formatted
- External links should have `target="_blank"` and `rel="noopener"`

## 📄 License

© 2025 Silvia Shiatsu. All rights reserved.

## 🆘 Support

For questions or support:
- **Email**: studio@silvia-shiatsu.com
- **Phone**: (+39) 3291 427 321

## 🔄 Alternative Deployment Options

Besides GitHub Pages, you can also host on:

1. **Netlify**: Drag & drop the folder → instant deploy
2. **Vercel**: Import from GitHub → auto-deploy
3. **Cloudflare Pages**: Connect GitHub → deploy
4. **Apache Server**: Use the `dynamic/` folder version

## 📝 Changelog

### Version 1.0.0 (2025-12-01)
- Initial release
- Static HTML version for GitHub Pages
- Full Romanian translation
- Responsive design
- Contact integration
- Smooth animations

---

**Created**: December 2025  
**Technology**: HTML5, CSS3, JavaScript (Vanilla)  
**Hosting**: GitHub Pages (or any static hosting)  
**Target Audience**: Romanian speakers in Republic of Moldova