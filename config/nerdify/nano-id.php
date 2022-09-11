<?php

return [

    /*
    | The alphabet used to generate the Nano ID.
    */

    'alphabet' => \Hidehalo\Nanoid\CoreInterface::SAFE_SYMBOLS,

    /*
    | The size of the generated Nano ID.
    |
    | By default, Nano ID uses URL-friendly symbols (A-Za-z0-9_-) and returns an
    | ID with 21 characters (to have a collision probability similar to UUID v4).
    */

    'size' => env('NANO_ID_SIZE', 21),

];
