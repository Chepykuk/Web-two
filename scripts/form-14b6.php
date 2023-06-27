<?php

require_once('FormProcessor.php');

$form = array(
    'subject' => 'Отправка новой формы',
    'email_message' => 'У вас есть новая отправка формы',
    'success_redirect' => '',
    'sendIpAddress' => true,
    'email' => array(
    'from' => 'ggg.eremeev.gggg@mail.ru',
    'to' => 'ggg.eremeev.gggg@mail.ru'
    ),
    'fields' => array(
    'name' => array(
    'order' => 1,
    'type' => 'string',
    'label' => 'Имя',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Имя\' is required.'
    )
    ),
    'phone' => array(
    'order' => 2,
    'type' => 'tel',
    'label' => 'Телефон',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Телефон\' is required.'
    )
    ),
    'email' => array(
    'order' => 3,
    'type' => 'email',
    'label' => 'Эл. почта',
    'required' => true,
    'errors' => array(
    'required' => 'Field \'Эл. почта\' is required.'
    )
    ),
    'text' => array(
    'order' => 4,
    'type' => 'string',
    'label' => 'Род деятельности',
    'required' => false,
    'errors' => array(
    'required' => 'Field \'Род деятельности\' is required.'
    )
    ),
    )
    );

    $processor = new FormProcessor('');
    $processor->process($form);

    ?>