<?php
    //Require the autoload file
    error_reporting('E_ALL');
    require_once('vendor/autoload.php');
    session_start();

    //Create an instance of the Base class
    $f3 = Base::instance();
    
    //Default route
    $f3->route('GET /', function($f3) {
        echo "Hello!";
    });
    
    // Templating Route
    $f3->route('GET /templating', function($f3) {
        
        // Save Variables
        $f3->mset(
            array(
                'username' => 'pertyslick',
                'password' => sha1('pokemon'),
                'title' => 'Working With Templates',
                'temp' => 68,
                'color' => 'chrome',
                'radius' => '10',
                'preferredCustomer', true,
                'lastLogin', strtotime('-1 week')
                )
        );
        $f3->set('bookmarks', array(
                    'http://www.cnet.com',
                    'http://www.reddit.com/r/news',
                    'http://edition.cnn.com'));
        $f3->set('addresses', array(
            'primary' => '1000 Apple Ln. Seattle, WA 98999',
            'secondary' => '2510 100th Court Tacoma, WA 90000'
        ));
        $f3->set('desserts', array(
            'chocolate' => 'Chocolate Mousse',
            'vanilla' => 'Vanilla Custard',
            'strawberry' => 'Strawberry Shortcake'
        ));
        
        echo \Template::instance()->render('pages/info.html');
    });

    //Run fat free
    $f3->run();
    