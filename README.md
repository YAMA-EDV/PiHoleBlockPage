# PiHoleBlockPage
A blockpage for PiHole that lets your users send whitelist requests to you.

This is a project for people how use pihole in the cloud and let other people use there PiHole.

This block page lets your users send whitelist requests form the browser to you email.
The user has the give a reason for the whitelist and there email so you can respond.
User don't have to include the URL because the scipt will include it for them.

##TODO
- Install script. A script that will edit lighthttpd config to enable HTTPS and point to PiHoleBlockPage root
- Integrate into PiHole admin area so you will be able to see and respond te whitelist requests from the admin area.
- List the block lists the page is list on.


## Contributing

You can help the project by adding features, cleaning the code, helping with the todo list.
 
1. Fork it
2. Create your feature branch: `git checkout -b my-new-feature`
3. Commit your changes: `git commit -am 'Add some feature'`
4. Push to the branch: `git push origin my-new-feature`
5. Submit a pull request

#### this project uses
- [Bootstrap](http://getbootstrap.com/)
- [Jquery](https://jquery.com/)
- [philo/laravel-blade](https://github.com/PhiloNL/Laravel-Blade)
- [nesbot/carbon](http://carbon.nesbot.com/)
- [vlucas/phpdotenv](https://github.com/vlucas/phpdotenv)