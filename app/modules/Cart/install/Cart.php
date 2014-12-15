<?php

Transaqt::install('cart',[

    'add_table' => [
        'name' => 'carts',

        'fields' => [
          ['id','bigint','auto'],
          ['session_id','text'],
          ['cart_products','text'],
          ['finalized','int',0],
          ['created_at','timestamp'],
          ['updated_on','timestamp']
        ],

        'keys' => [
          'primary' => ['id']
        ]
    ],

]);
