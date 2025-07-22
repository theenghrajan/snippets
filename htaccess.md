

# php -- BEGIN cPanel-generated handler, do not edit
# Set the “ea-php82” package as the default “PHP” programming language.
<IfModule mime_module>
  AddHandler application/x-httpd-ea-php82 .php .php8 .phtml
</IfModule>
RewriteEngine On

# Redirect (301)
RewriteCond %{HTTP_HOST} ^lp\.atlantapiattorney\.com$ [NC]
RewriteRule ^$ https://lp.atlantapiattorney.com/personal-injury/ [L,R=301]

# php -- END cPanel-generated handler, do not edit

# .htaccess Configuration Examples

## PHP Handler Configuration
```apache
# Set PHP 8.2 as default handler
<IfModule mime_module>
  AddHandler application/x-httpd-ea-php82 .php .php8 .phtml
</IfModule>
```

## URL Redirection Example
```apache
# Enable the rewrite engine
RewriteEngine On

# 301 Redirect from root to specific path
RewriteCond %{HTTP_HOST} ^lp\.atlantapiattorney\.com$ [NC]
RewriteRule ^$ https://lp.atlantapiattorney.com/personal-injury/ [L,R=301]
```

### Notes:
- `[NC]` flag means case-insensitive matching
- `[L]` flag means last rule to process
- `[R=301]` indicates permanent redirect
- Configuration is for cPanel server environment
