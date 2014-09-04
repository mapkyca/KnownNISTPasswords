<?php

    
    namespace IdnoPlugins\NISTPasswords {
	
	require_once(dirname(__FILE__) . '/vendor/phpass/src/Phpass.php');
	
        class Main extends \Idno\Common\Plugin {
            function registerPages() {     

		\Idno\Core\site()->addEventHook('user/password/checkstrength', function (\Idno\Core\Event $event) {
                    if ($password = $event->data()['password']) {
                        $strength = new \Phpass\Strength();
			$entropy = $strength->calculate($password);
			$min_entropy = \Idno\Core\site()->config()->min_password_entropy ? \Idno\Core\site()->config()->min_password_entropy : 30;

			if ($entropy < $min_entropy)
			    $event->setResponse(false);
                    }
                });
		
            }
        }
    }
