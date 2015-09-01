# Loginer
Simple and light php login system.
Using sessions.

## Usage 
  - Bassed on a ready users database that has a **username** and **password** field.
- Configure your settings `config.php`.
2. Makesure to put the `config.php` file at the same directory as your pages.
3. Include `Login.php` file in your login page.
4. Include `Login.php` file in every page you want to reach login info from.
5. Take a look at the `test` folder.

## Functions 
- `allowed()` : **Function to verify that user is loged in.**
- `get(var)`  : **Function to get a specfiec field ( element ) of the logen in user from the database.**

## Callbacks
You can use. url callbacks from the `config.php` file. and implement your own callbacks throug `callbacks.php`.
- `OnLogin(username)` : **Will be called when a user loges in successfully.**
- `OnLoginFail()`     : **Will be called when a user loging in fails.**
- `OnLogout()`        : **Will be called when a user loges out.**

Example : 
```php
function OnLogin($username)
{
  // Increasse online users .. 
  // TODO
}
```
## Contributing
1. Fork it!
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request :D

## Credits
DOT GROUP :dancer:
