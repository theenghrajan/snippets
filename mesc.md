
> **Note**
>
> **Full Path for HOST in Windows:**  
> `C:\Windows\System32\drivers\etc\hosts`
>
> **Prevent Indexing in Custom HTML:**  
> To prevent all search engines that support the `noindex` rule from indexing a page, add the following `<meta>` tags to the `<head>` section:
>
> ```html
> <meta name="robots" content="noindex, nofollow">
> <meta name="googlebot" content="noindex">
> ```
> [Read more](https://developers.google.com/search/docs/crawling-indexing/block-indexing)
>
> **New Proxy Logins:**  
> - **IP Address:** `174.138.190.164`  
> - **URL:** https://server17.t35.net  
> - **Port:** `3128`  
> - **Frontend:**  
> - **Password:** `XL6ye98X9N`
>
> **.htaccess Check:**  
> Remove code like the following from `.htaccess` if present:
> ```apache
> <FilesMatch ".(py|exe|php)$">
> Order allow,deny
> Deny from all
> </FilesMatch>
> <FilesMatch "^(index.php|lock360.php|wp-l0gin.php|wp-the1me.php|wp-scr1pts.php|wp-admin.php|radio.php|content.php|about.php|wp-login.php|admin.php|mah.php|jp.php|ext.php)$">
> Order allow,deny
> Allow from all
> </FilesMatch>
> ```

**How to Look Up a Website's IP Address on Windows**

1. Open the Command Prompt:  
   - Click **Start** → type `cmd` → press **Enter**.

2. To find IPv4 addresses, enter:  
   ```
   nslookup -q=A example.com
   ```
   - Press **Enter**.

   - The IPv4 addresses appear under the **Non-authoritative answer** section.

3. *(Optional)* To find IPv6 addresses, use:  
   ```
   nslookup -q=AAAA example.com
   ```
   - Press **Enter**.

   - The IPv6 addresses will be listed similarly.




