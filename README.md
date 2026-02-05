# Доктор КОМП - GravCMS Website

Computer store and service website built with GravCMS.

## Local Development

```bash
cd /path/to/drcomp
php -S localhost:8000 system/router.php
```

Open http://localhost:8000

---

## Deployment to VPS

### 1. Server Requirements

- PHP 8.0+ with extensions: curl, ctype, dom, gd, json, mbstring, openssl, xml, zip
- Nginx or Apache
- SSL certificate (Let's Encrypt recommended)

### 2. Install Dependencies (Ubuntu/Debian)

```bash
sudo apt update
sudo apt install nginx php8.2-fpm php8.2-cli php8.2-gd php8.2-curl php8.2-mbstring php8.2-xml php8.2-zip unzip
```

### 3. Upload Files

```bash
# From local machine
rsync -avz --exclude='.git' --exclude='cache/*' --exclude='logs/*' --exclude='tmp/*' \
  /path/to/drcomp/ user@your-server:/var/www/drcomp/
```

### 4. Set Permissions

```bash
sudo chown -R www-data:www-data /var/www/drcomp
sudo find /var/www/drcomp -type d -exec chmod 755 {} \;
sudo find /var/www/drcomp -type f -exec chmod 644 {} \;
sudo chmod -R 775 /var/www/drcomp/cache /var/www/drcomp/logs /var/www/drcomp/images /var/www/drcomp/backup /var/www/drcomp/tmp /var/www/drcomp/user
```

### 5. Configure Nginx

```bash
# Edit nginx.conf - replace drcomp.org with your domain
# Check PHP socket path: ls /var/run/php/

sudo cp /var/www/drcomp/nginx.conf /etc/nginx/sites-available/drcomp.org
sudo ln -s /etc/nginx/sites-available/drcomp.org /etc/nginx/sites-enabled/
sudo rm /etc/nginx/sites-enabled/default  # optional
sudo nginx -t
sudo systemctl reload nginx
```

### 6. SSL Certificate

```bash
sudo apt install certbot python3-certbot-nginx
sudo certbot --nginx -d drcomp.org -d www.drcomp.org
```

### 7. Clear Cache

```bash
cd /var/www/drcomp
sudo -u www-data bin/grav clear-cache
```

---

## Admin Panel

### Install Admin Plugin

```bash
cd /var/www/drcomp
sudo -u www-data bin/gpm install admin
```

### Create Admin User

```bash
cd /var/www/drcomp
sudo -u www-data bin/plugin login new-user
```

Follow the prompts:
- **Username:** admin
- **Password:** (choose a strong password)
- **Email:** office@drcomp.org
- **Permissions:** admin.super

### Access Admin Panel

```
https://drcomp.org/admin
```

Login with the credentials you created.

---

## Directory Structure

```
drcomp/
├── user/
│   ├── config/          # Site configuration
│   │   ├── site.yaml    # Site title, metadata
│   │   └── system.yaml  # System settings, theme
│   ├── pages/           # Content pages (Markdown)
│   │   ├── 01.home/
│   │   ├── 02.сервиз/
│   │   ├── 03.gps-навигации/
│   │   ├── 04.видеонаблюдение/
│   │   └── 05.контакти/
│   └── themes/drcomp/   # Custom theme
│       ├── css/
│       ├── js/
│       ├── images/
│       └── templates/
├── nginx.conf           # Nginx configuration
└── README.md
```

---

## Editing Content

### Via Admin Panel (Recommended)

1. Go to https://drcomp.org/admin
2. Login with your admin credentials
3. Navigate to **Pages** in the sidebar
4. Click on any page to edit
5. Use the visual editor or switch to Expert mode for Markdown
6. Click **Save** when done

### Via Markdown Files

Edit files directly in `user/pages/`:

| Page | File |
|------|------|
| Home | `01.home/home.md` |
| Сервиз | `02.сервиз/service.md` |
| GPS Навигации | `03.gps-навигации/service.md` |
| Видеонаблюдение | `04.видеонаблюдение/service.md` |
| Контакти | `05.контакти/contact.md` |

After editing, clear cache:
```bash
sudo -u www-data bin/grav clear-cache
```

---

## Troubleshooting

### 404 Errors

```bash
# Check nginx config syntax
sudo nginx -t

# Check error log
sudo tail -f /var/log/nginx/drcomp.error.log

# Verify files exist
ls -la /var/www/drcomp/index.php
```

### Permission Errors

```bash
sudo chown -R www-data:www-data /var/www/drcomp
sudo chmod -R 775 /var/www/drcomp/cache /var/www/drcomp/logs /var/www/drcomp/user
```

### PHP-FPM Issues

```bash
# Check PHP version
php -v

# List available sockets (update nginx.conf accordingly)
ls /var/run/php/

# Restart PHP-FPM
sudo systemctl restart php8.2-fpm
sudo systemctl status php8.2-fpm
```

### Cache Issues

```bash
cd /var/www/drcomp
sudo -u www-data bin/grav clear-cache
```

---

## Updating Grav

```bash
cd /var/www/drcomp
sudo -u www-data bin/gpm selfupgrade
sudo -u www-data bin/gpm update
```

---

## Contact Information

- **Phone:** 0431 62692, 0899 662 622, 0899 663 633
- **Email:** office@drcomp.org
- **Skype:** drcomp_kz
- **Facebook:** https://www.facebook.com/drcomp.org
- **Location:** Kazanlak, Bulgaria
