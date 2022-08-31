<?php

use App\Kernel;
use App\Controller\LdapService;

require_once dirname(__DIR__).'/vendor/autoload_runtime.php';

return function (array $context) {
    $ldapServ = new LdapService;

    $email = "c.manea@netrom.live";
    $password = "Netrom2020";

    $ldapServ->serverConnect($email, $password);
    // return new Kernel($context['APP_ENV'], (bool) $context['APP_DEBUG']);
    
};
