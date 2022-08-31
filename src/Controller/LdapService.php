<?php
namespace App\Controller;

use Symfony\Component\Ldap\Ldap;

class LdapService {

    public function serverConnect($em, $pass) {

        $ldap_con = ldap_connect("AD2.netrom.live");
        $email = $em;
        $password = $pass;

        ldap_set_option($ldap_con,LDAP_OPT_REFERRALS, 0);
        ldap_set_option($ldap_con, LDAP_OPT_PROTOCOL_VERSION, 3);

        if(@ldap_bind($ldap_con, $email, $password)) {

            //FOR SEARCHING IN SERVER DATA

            // $filter = "CN=*";
            // $result = ldap_search($ldap_con, "OU=Internship Timisoara,OU=Users,OU=Production,DC=netrom,DC=live", $filter);
            // $entries = ldap_get_entries($ldap_con, $result);

            // print "<pre>";
            // // print_r ($entries);
            // foreach ($entries as $entry) {
            //     print_r ($entry["userprincipalname"][0]);
            //     echo '<br/>';
            // }
            // print "</pre>";

            return true;
            

        } else {
            return false;
        }
    }

}