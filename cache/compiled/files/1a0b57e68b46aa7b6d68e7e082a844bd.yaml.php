<?php
return [
    '@class' => 'Grav\\Common\\File\\CompiledYamlFile',
    'filename' => '/Users/boyan/Documents/_DEV/drcomp/user/themes/drcomp/blueprints.yaml',
    'modified' => 1770278515,
    'size' => 637,
    'data' => [
        'name' => 'DrComp',
        'slug' => 'drcomp',
        'type' => 'theme',
        'version' => '1.0.0',
        'description' => 'Custom theme for DrComp - Computer Store and Service',
        'icon' => 'desktop',
        'author' => [
            'name' => 'DrComp',
            'email' => 'office@drcomp.org'
        ],
        'homepage' => 'https://drcomp.org',
        'keywords' => 'computer, service, repair, bulgaria, kazanlak',
        'bugs' => 'https://github.com/drcomp/issues',
        'license' => 'MIT',
        'dependencies' => [
            0 => [
                'name' => 'grav',
                'version' => '>=1.7.0'
            ]
        ],
        'form' => [
            'validation' => 'loose',
            'fields' => [
                'dropdown.enabled' => [
                    'type' => 'toggle',
                    'label' => 'Dropdown in navbar',
                    'highlight' => 1,
                    'default' => 1,
                    'options' => [
                        1 => 'PLUGIN_ADMIN.ENABLED',
                        0 => 'PLUGIN_ADMIN.DISABLED'
                    ],
                    'validate' => [
                        'type' => 'bool'
                    ]
                ]
            ]
        ]
    ]
];
