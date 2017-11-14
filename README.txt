System Requirements:

Supported web browsers- • Chrome
                        • Microsoft Edge
                        • Firefox
                        • Internet Explorer 10 or later
                        • Safari
                        • Opera
                        • Mobile


Deployment issues:

   - bootstrap on gallery page disables login dropdowns.

   - 3rd party javascript breaks 'jquery', therefore ajax doesnt work unless the 
     other 3rd party javascript is disabled. contact.php and invoice will only have jQuery 
     CDN as 3rd party javascript.
    
   - One of the jquery CDNs prevented SessionStorage from running.