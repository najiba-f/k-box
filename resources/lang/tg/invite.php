<?php

return [

    'label' => 'Даъватҳо',
    'hint' => 'Шумо метавонед истифодабарандагони дигарро барои бақайдгирӣ даъват кунед. Дар ин ҷо даъватномаҳое, ки аз ҷониби шумо сохта шудаанд, оварда шудаанд.',
    'hint_expiration' => 'Даъватномаҳо пас аз :period ба итмом мерасанд, пас аз гузашти мӯҳлат, ба таври худкор нест карда мешавад.',

    'create' => [
        'not-authorized-verified-email' => 'Шумо даъватномаҳо эҷод карда наметавонед. Лутфан тасдиқ  кунед, ки шумо суроғаи почтаи электронии тасдиқшударо дорост.',
        'not-authorized' => 'You cannot create invites',

        'title' => 'Шахсро даъват кунед',
        'btn' => 'Даъват',
    ],
    
    'created' => '":email" даъват барои эҷод кардани акаунт',
    'deleted' => 'Даъватнома ба ":email" хориҷ карда шуд.',

    'labels' => [
        'invited_on' => 'Даъват шуд.',
        'accepted_on' => 'Қабул карда шуд.',
        'status' => 'Вазъият',
        
        'remove_invite' => 'Хориҷ кардани даъватнома',

        'empty' => 'Ҳанӯз даъват барои нишон нест.',
    ],

    'status' => [
        'pending' => 'интизоранд',
        'accepted' => 'кабул кард',
        'expired' => 'гузашт',
        'errored' => 'хато',
    ],

    'notification' => [
        'mail' => [
            'subject' => '":name" мехоҳад шуморо даъват кунад, ки K-Box-ро истифода баред',
            'greeting' => 'Салом, ":name". Хуш омадед ба ҳамроҳ шудан ба K-Box, веб-барномаи идоракунии ҳуҷҷатҳо дар :url',
            'no_further_action' => 'Агар шумо нияти қабул кардани ин таклифро надоред, амали дигар лозим нест. Барои эҳтироми махфияти шумо, мо ин даъватро :date дар 23:59 (UTC) нест мекунем.',

            'reason' => [
                'invitation' => 'Истифодабарандаи мавҷудае, ки мо онро бо номи ":name" мешиносем, мехоҳад шуморо даъват кунад, ки шумо дар K-Box дар :url аккаунт эҷод кунед .',
                'project' => 'Истифодабарандаи мавҷудае, ки мо онро бо номи ":name" мешиносем, мехоҳад шуморо ҳамчун қисми лоиҳае, ки бо ёрии K-Box дар :url идора карда мешавад, дохил кунад.',
                'shared' => 'Истифодабарандаи мавҷудае, ки мо онро бо номи ":name" мешиносем, мехоҳад ба шумо ҳуҷате ки дар K-Box дар :url мавҷуд аст, муштаракан кунад.',
            ],
        ],
    ],

    'invalid' => 'Даъвати истифодашуда дуруст нест. Эҳтимол аст, ки вақташ гузаштааст ё бозхондшуда аст.',
    
    'registration-label' => 'Даъват кунед',
];
