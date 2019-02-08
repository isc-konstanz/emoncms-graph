<?php
    $domain = "messages";
    bindtextdomain($domain, "Modules/graph/locale");
    bind_textdomain_codeset($domain, 'UTF-8');
    $menu_dropdown[] = array(
        'name'=> dgettext($domain,"Graphs"),
        'icon'=>'icon-list-alt',
        'path'=>"graph",
        'session'=>"read",
        'order' => 20
    );
