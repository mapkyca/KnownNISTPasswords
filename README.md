NIST Password Entropy
=====================

This plugin will evaluate the entropy of new user passwords using NIST guidelines, 
and then enforce a minimum value.

By default, new passwords will require a minimum entropy of 30, but this can be changed
by setting ```min_password_entropy``` in your config.ini

Installation
------------

Install and activate in the usual way, but if you're cloning the git repo make sure
you ```git clone --recursive```

Uses
----
 * PHPass <https://github.com/rchouinard/phpass> released under the MIT licence.

See
---
 * Author: Marcus Povey <http://www.marcus-povey.co.uk> 
 * NIST password strength publication <https://en.wikipedia.org/wiki/Password_strength#NIST_Special_Publication_800-63>
