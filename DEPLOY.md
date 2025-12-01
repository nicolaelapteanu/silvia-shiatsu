# 🚀 Quick Deployment Guide to GitHub Pages

## Step-by-Step Instructions

### 1. Initialize Git Repository (if not already done)

```bash
cd /Users/nicolae/work/pers/silvia-shiatsu
git init
```

### 2. Add and Commit Files

```bash
# Add files to git
git add index.html README.md .gitignore

# Commit with a message
git commit -m "Initial commit: Static Silvia Shiatsu landing page"
```

### 3. Create GitHub Repository

**Option A: Using GitHub CLI (if installed)**
```bash
gh repo create silvia-shiatsu --public --source=. --remote=origin
gh repo view --web
```

**Option B: Manually on GitHub.com**
1. Go to [github.com/new](https://github.com/new)
2. Repository name: `silvia-shiatsu`
3. Choose **Public**
4. Do **NOT** initialize with README (we already have one)
5. Click **Create repository**

### 4. Push to GitHub

```bash
# Add the remote repository (replace YOUR-USERNAME)
git remote add origin https://github.com/YOUR-USERNAME/silvia-shiatsu.git

# Rename branch to main (if needed)
git branch -M main

# Push to GitHub
git push -u origin main
```

### 5. Enable GitHub Pages

**On GitHub.com:**
1. Go to your repository: `https://github.com/YOUR-USERNAME/silvia-shiatsu`
2. Click **Settings** (top right)
3. Scroll down and click **Pages** (left sidebar)
4. Under **Source**, select:
   - Branch: `main`
   - Folder: `/ (root)`
5. Click **Save**
6. Wait 1-2 minutes

Your site will be live at:
```
https://YOUR-USERNAME.github.io/silvia-shiatsu/
```

### 6. (Optional) Add Custom Domain

If you want to use a custom domain like `silvia-shiatsu.md`:

**Create CNAME file:**
```bash
echo "silvia-shiatsu.md" > CNAME
git add CNAME
git commit -m "Add custom domain"
git push
```

**Configure DNS (at your domain provider):**
- Add a CNAME record:
  - Name: `@` or `www`
  - Value: `YOUR-USERNAME.github.io`

**Enable in GitHub:**
1. Go to Settings → Pages
2. Under "Custom domain", enter: `silvia-shiatsu.md`
3. Check "Enforce HTTPS" (after DNS propagates)

---

## 🔄 Update Site After Changes

Whenever you make changes to `index.html`:

```bash
# Save your changes
git add index.html

# Commit
git commit -m "Update content"

# Push to GitHub
git push

# Site will auto-update in 1-2 minutes
```

---

## ✅ Verify Deployment

After pushing, check:
1. **Build Status**: Go to Actions tab on GitHub
2. **Live Site**: Visit your GitHub Pages URL
3. **Mobile Test**: Open on your phone to test responsive design

---

## 🆘 Troubleshooting

### "Permission denied" when pushing
```bash
# Use HTTPS with personal access token
# OR use SSH keys (recommended)
ssh-keygen -t ed25519 -C "your_email@example.com"
# Then add SSH key to GitHub: Settings → SSH keys
```

### Site not loading
- Wait 2-3 minutes after first push
- Check Settings → Pages to see status
- Ensure `index.html` is in root directory (not in a subfolder)

### Romanian characters broken
- Ensure file is saved as UTF-8
- Check browser encoding (should auto-detect)

---

## 📊 Check Your Site

Once deployed, test:
- ✅ Desktop view
- ✅ Mobile view (Chrome DevTools or real phone)
- ✅ All contact links (phone, WhatsApp, email, Facebook)
- ✅ Smooth scrolling and animations
- ✅ Romanian characters display correctly

---

**Need help?** Contact: studio@silvia-shiatsu.com
