<?php return array(
    'root' => array(
        'name' => '__root__',
        'pretty_version' => '1.0.0+no-version-set',
        'version' => '1.0.0.0',
        'reference' => NULL,
        'type' => 'library',
        'install_path' => __DIR__ . '/../../',
        'aliases' => array(),
        'dev' => true,
    ),
    'versions' => array(
        '__root__' => array(
            'pretty_version' => '1.0.0+no-version-set',
            'version' => '1.0.0.0',
            'reference' => NULL,
            'type' => 'library',
            'install_path' => __DIR__ . '/../../',
            'aliases' => array(),
            'dev_requirement' => false,
        ),
        'composer/semver' => array(
            'pretty_version' => '3.4.0',
            'version' => '3.4.0.0',
            'reference' => '35e8d0af4486141bc745f23a29cc2091eb624a32',
            'type' => 'library',
            'install_path' => __DIR__ . '/./semver',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'doctrine/event-manager' => array(
            'pretty_version' => '2.0.0',
            'version' => '2.0.0.0',
            'reference' => '750671534e0241a7c50ea5b43f67e23eb5c96f32',
            'type' => 'library',
            'install_path' => __DIR__ . '/../doctrine/event-manager',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'doctrine/persistence' => array(
            'pretty_version' => '3.2.0',
            'version' => '3.2.0.0',
            'reference' => '63fee8c33bef740db6730eb2a750cd3da6495603',
            'type' => 'library',
            'install_path' => __DIR__ . '/../doctrine/persistence',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'friendsofphp/proxy-manager-lts' => array(
            'pretty_version' => 'v1.0.16',
            'version' => '1.0.16.0',
            'reference' => 'ecadbdc9052e4ad08c60c8a02268712e50427f7c',
            'type' => 'library',
            'install_path' => __DIR__ . '/../friendsofphp/proxy-manager-lts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'laminas/laminas-code' => array(
            'pretty_version' => '4.13.0',
            'version' => '4.13.0.0',
            'reference' => '7353d4099ad5388e84737dd16994316a04f48dbf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../laminas/laminas-code',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'ocramius/proxy-manager' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => '^2.1',
            ),
        ),
        'php-http/async-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '*',
            ),
        ),
        'php-http/client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '*',
            ),
        ),
        'phpstan/phpstan' => array(
            'pretty_version' => '1.10.39',
            'version' => '1.10.39.0',
            'reference' => 'd9dedb0413f678b4d03cbc2279a48f91592c97c4',
            'type' => 'library',
            'install_path' => __DIR__ . '/../phpstan/phpstan',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/cache' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/cache',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.0|3.0',
            ),
        ),
        'psr/clock' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/clock',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/clock-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/container' => array(
            'pretty_version' => '2.0.2',
            'version' => '2.0.2.0',
            'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/container',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/container-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.1|2.0',
            ),
        ),
        'psr/event-dispatcher' => array(
            'pretty_version' => '1.0.0',
            'version' => '1.0.0.0',
            'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/event-dispatcher',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/http-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0',
            ),
        ),
        'psr/link' => array(
            'pretty_version' => '2.0.1',
            'version' => '2.0.1.0',
            'reference' => '84b159194ecfd7eaa472280213976e96415433f7',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/link',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/link-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0',
            ),
        ),
        'psr/log' => array(
            'pretty_version' => '3.0.0',
            'version' => '3.0.0.0',
            'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
            'type' => 'library',
            'install_path' => __DIR__ . '/../psr/log',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'psr/log-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'psr/simple-cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.0|2.0|3.0',
            ),
        ),
        'staabm/phpstan-dba' => array(
            'pretty_version' => '0.2.79',
            'version' => '0.2.79.0',
            'reference' => '14d9afd28413e9964a9a33d30bafa1683d044542',
            'type' => 'phpstan-extension',
            'install_path' => __DIR__ . '/../staabm/phpstan-dba',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/asset' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/asset-mapper' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/browser-kit' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/cache' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/cache-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/cache-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.1|2.0|3.0',
            ),
        ),
        'symfony/clock' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/config' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/console' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/contracts' => array(
            'pretty_version' => 'v3.3.0',
            'version' => '3.3.0.0',
            'reference' => '9e4b5e4e44e7620475dbceecf7c72c3883f3ea35',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/contracts',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/css-selector' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/debug-bundle' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/dependency-injection' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/deprecation-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/doctrine-bridge' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/dom-crawler' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/dotenv' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/error-handler' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/event-dispatcher' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/event-dispatcher-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/event-dispatcher-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.0|3.0',
            ),
        ),
        'symfony/expression-language' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/filesystem' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/finder' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/form' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/framework-bundle' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/http-client' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/http-client-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/http-client-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '3.0',
            ),
        ),
        'symfony/http-foundation' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/http-kernel' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/intl' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/ldap' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/lock' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/mailer' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/messenger' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/mime' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/monolog-bridge' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/notifier' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/options-resolver' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/password-hasher' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/polyfill-ctype' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => 'ea208ce43cbb04af6867b4fdddb1bdbf84cc28cb',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-ctype',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-grapheme' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '875e90aeea2777b6f135677f618529449334a612',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-grapheme',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-icu' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => 'e46b4da57951a16053cd751f63f4a24292788157',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-icu',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-idn' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => 'ecaafce9f77234a6a449d29e49267ba10499116d',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-idn',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-intl-normalizer' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '8c4ad05dd0120b6a53c1ca374dca2ad0a1c4ed92',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-intl-normalizer',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-mbstring' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '42292d99c55abe617799667f454222c54c60e229',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-mbstring',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php72' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '70f4aebd92afca2f865444d30a4d2151c13c3179',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php72',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php80' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '6caa57379c4aec19c0a12a38b59b26487dcfe4b5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php80',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-php83' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => 'b0f46ebbeeeda3e9d2faebdfbf4b4eae9b59fa11',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-php83',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/polyfill-uuid' => array(
            'pretty_version' => 'v1.28.0',
            'version' => '1.28.0.0',
            'reference' => '9c44518a5aff8da565c8a55dbe85d2769e6f630e',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/polyfill-uuid',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/process' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/property-access' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/property-info' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/proxy-manager-bridge' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/rate-limiter' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/remote-event' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/routing' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/scheduler' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/security-bundle' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/security-core' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/security-csrf' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/security-http' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/semaphore' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/serializer' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/service-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/service-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '1.1|2.0|3.0',
            ),
        ),
        'symfony/stopwatch' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/string' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/symfony' => array(
            'pretty_version' => 'v6.3.5',
            'version' => '6.3.5.0',
            'reference' => '8592a340eb04a3cff5032dcd454d10fd7a87cad5',
            'type' => 'library',
            'install_path' => __DIR__ . '/../symfony/symfony',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
        'symfony/templating' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/translation' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/translation-contracts' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v3.3.0',
            ),
        ),
        'symfony/translation-implementation' => array(
            'dev_requirement' => true,
            'provided' => array(
                0 => '2.3|3.0',
            ),
        ),
        'symfony/twig-bridge' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/twig-bundle' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/uid' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/validator' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/var-dumper' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/var-exporter' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/web-link' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/web-profiler-bundle' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/webhook' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/workflow' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'symfony/yaml' => array(
            'dev_requirement' => true,
            'replaced' => array(
                0 => 'v6.3.5',
            ),
        ),
        'twig/twig' => array(
            'pretty_version' => 'v3.7.1',
            'version' => '3.7.1.0',
            'reference' => 'a0ce373a0ca3bf6c64b9e3e2124aca502ba39554',
            'type' => 'library',
            'install_path' => __DIR__ . '/../twig/twig',
            'aliases' => array(),
            'dev_requirement' => true,
        ),
    ),
);
