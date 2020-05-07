<?php
return function($kirby, $pages, $page, $site) {

    if ($kirby->session()->get('email') == null) {
        Header::redirect($site->url() . '/login');
    }

};