<?php

require_once __DIR__ . '/crest/crest.php';

function addDeal() {
    return [
        'method' => 'crm.deal.add',
        'params' => [
            'fields' => [
                'TITLE' => 'Тестирование вебхука',
                'RESPONSIBLE_ID' => 15,
                'CATEGORY_ID' => 0,
                'STAGE_ID' => 'NEW',
                'UF_CRM_1700424718' => 45
            ]
        ],
    ];
}

function addTask() {
    return [
        'method' => 'tasks.task.add',
        'params' => [
            'fields' => [
                'TITLE' => 'Тестирование вебхука',
                'CREATED_BY' => 1,
                'RESPONSIBLE_ID' => 15,
                'DEADLINE' => (new DateTime('today'))->modify('+18 hours')->format('c'),
            ]
        ]
    ];
}

$batch['addDeal'] = addDeal();
$batch['addTask'] = addTask();
$result = CRest::callBatch($batch);