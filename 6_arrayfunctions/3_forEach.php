<?php

    $estacionamento = [
        'Fusca',
        'Uno',
        'Ferrari'
    ];

    foreach ($estacionamento as $key => $value) {
        echo '<center>';
        echo '<hr>';
        echo '<b>Veiculo ' . $key . ': </b>' . $value;
    };

    $patio = [
        [
            'nome' => 'Fusca',
            'placa' => 'sccp22',
            'foto' => 'https://i.pinimg.com/736x/7a/23/f3/7a23f34de7c4fda519df62c12b3d7f04.jpg'
        ],
        [
            'nome' => 'Uno',
            'placa' => 'sccp13',
            'foto' => 'https://pbs.twimg.com/profile_images/1613579362728644613/nSTx0l3u_400x400.jpg'
        ],
        [
            'nome' => 'Ferrari',
            'placa' => 'sccp00',
            'foto' => 'https://p2.trrsf.com/image/fget/cf/800/450/middle/images.terra.com/2012/12/18/18122012desembarquecorinthians1252.JPG'
        ]
    ];

    foreach ($patio as $key => $value) {
        echo '<br>Veiculo: ' . $value['nome'];
        echo '<br>Placa: ' . $value['placa'];
        echo '<br><img src="' . $value['foto'] . '" style="width: 300px;">';
        echo '<hr>';
        echo '<center>';
    };

?>