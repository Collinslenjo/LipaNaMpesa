### WooCommerce Lipa Na MPESA Payment Gateway ([KopoKopo](http://kopokopo.co.ke/))

> A nice friendly WordPress plugin that adds "Lipa na MPESA" as a payment gateway to WooCommerce.  

To set up instant payment notifications, do the following:

 * Go to KopoKopo API settings and get your API key.  Put this in the API field inside WordPress on the Lipa na MPESA settings page.  
 * Set up the "HTTP(S) POST Configuration" on the API page at KopoKopo to be as such:
>
```
  API: versionv3
  Notification URL: http://yourwebsite.com/?KOPOKOPO_IPN_LISTENER=1
  Username: kopokopousername
  Password: kopokoposecretapipassword
  ```

* Replace *```yourwebsite.com```* with your own domain name.
* With the above done, orders paid for via Lipa na MPESA will automatically be marked as paid.
> ##### credits to [Kelvin Jayanoris](https://github.com/moshthepitt)
