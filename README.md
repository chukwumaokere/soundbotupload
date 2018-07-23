# Soundbot Uploader    

### How To Use    
Just deploy the index.php and upload.php to your webdirectory.

Then create a directory in the same path as index.php named `sounds/` and update `upload.php`'s `distantdir` to the destination path of the `sounds/` directory of your Discord sound bot from [here](https://github.com/chukwumaokere/BoomBot)   

Run watcher.js using a program like [pm2](http://pm2.keymetrics.io/) like this: `pm2 start watcher.js --watch` (The watch flag allows it to continously run and restart when you edit the file `watcher.js` or if it crashes for some reason.)

Navigate to the web path and test an upload. Voila.    
   
### Common troubleshooting    
Make sure both `sounds/` directories and `upload.php` and `watcher.js` have write privileges.   
(Best bet is to just chmod 777 -R the Soundbot directory and the SoundbotUpload directory)
