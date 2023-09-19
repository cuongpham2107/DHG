<?php











namespace Composer;

use Composer\Autoload\ClassLoader;
use Composer\Semver\VersionParser;








class InstalledVersions
{
private static $installed = array (
  'root' => 
  array (
    'pretty_version' => 'dev-main',
    'version' => 'dev-main',
    'aliases' => 
    array (
    ),
    'reference' => 'f24affdefdf220586d02d16094c31bb617ade2a5',
    'name' => 's-cart/s-cart',
  ),
  'versions' => 
  array (
    'aws/aws-crt-php' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '2f1dc7b7eda080498be96a4a6d683a41583030e9',
    ),
    'aws/aws-sdk-php' => 
    array (
      'pretty_version' => '3.279.6',
      'version' => '3.279.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e83376ac8e88ed99c3d75d1309a2cb1148d31fd9',
    ),
    'barryvdh/laravel-debugbar' => 
    array (
      'pretty_version' => 'v3.9.1',
      'version' => '3.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '070a313fd744f67348906bc879e544c4dda36be9',
    ),
    'barryvdh/laravel-dompdf' => 
    array (
      'pretty_version' => 'v1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'de83130d029289e1b59f28b41c314ce1d157b4a0',
    ),
    'brick/math' => 
    array (
      'pretty_version' => '0.11.0',
      'version' => '0.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0ad82ce168c82ba30d1c01ec86116ab52f589478',
    ),
    'cordoval/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'davedevelopment/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'dflydev/dot-access-data' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f41715465d65213d644d3141a6a93081be5d3549',
    ),
    'doctrine/deprecations' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '612a3ee5ab0d5dd97b7cf3874a6efe24325efac3',
    ),
    'doctrine/inflector' => 
    array (
      'pretty_version' => '2.0.8',
      'version' => '2.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f9301a5b2fb1216b2b08f02ba04dc45423db6bff',
    ),
    'doctrine/instantiator' => 
    array (
      'pretty_version' => '1.5.0',
      'version' => '1.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '0a0fa9780f5d4e507415a065172d26a98d02047b',
    ),
    'doctrine/lexer' => 
    array (
      'pretty_version' => '2.1.0',
      'version' => '2.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '39ab8fcf5a51ce4b85ca97c7a7d033eb12831124',
    ),
    'dompdf/dompdf' => 
    array (
      'pretty_version' => 'v1.2.2',
      'version' => '1.2.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5031045d9640b38cfc14aac9667470df09c9e090',
    ),
    'dragonmantank/cron-expression' => 
    array (
      'pretty_version' => 'v3.3.3',
      'version' => '3.3.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'adfb1f505deb6384dc8b39804c5065dd3c8c8c0a',
    ),
    'egulias/email-validator' => 
    array (
      'pretty_version' => '3.2.6',
      'version' => '3.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5997fa97e8790cdae03a9cbd5e78e45e3c7bda7',
    ),
    'ezyang/htmlpurifier' => 
    array (
      'pretty_version' => 'v4.16.0',
      'version' => '4.16.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '523407fb06eb9e5f3d59889b3978d5bfe94299c8',
    ),
    'fakerphp/faker' => 
    array (
      'pretty_version' => 'v1.23.0',
      'version' => '1.23.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3daa170d00fde61ea7719ef47bb09bb8f1d9b01',
    ),
    'filp/whoops' => 
    array (
      'pretty_version' => '2.15.3',
      'version' => '2.15.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c83e88a30524f9360b11f585f71e6b17313b7187',
    ),
    'firebase/php-jwt' => 
    array (
      'pretty_version' => 'v6.8.1',
      'version' => '6.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5dbc8959427416b8ee09a100d7a8588c00fb2e26',
    ),
    'fruitcake/php-cors' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '58571acbaa5f9f462c9c77e911700ac66f446d4e',
    ),
    'google/apiclient' => 
    array (
      'pretty_version' => 'v2.15.0',
      'version' => '2.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '49787fa30b8d8313146a61efbf77ed1fede723c2',
    ),
    'google/apiclient-services' => 
    array (
      'pretty_version' => 'v0.312.1',
      'version' => '0.312.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd13797cf251ec0d62f00b70dfa8642aa9550900d',
    ),
    'google/auth' => 
    array (
      'pretty_version' => 'v1.29.1',
      'version' => '1.29.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f199ed635b945e5adfd3c1a203543d8d86aff239',
    ),
    'graham-campbell/result-type' => 
    array (
      'pretty_version' => 'v1.1.1',
      'version' => '1.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '672eff8cf1d6fe1ef09ca0f89c4b287d6a3eb831',
    ),
    'guzzlehttp/guzzle' => 
    array (
      'pretty_version' => '7.7.0',
      'version' => '7.7.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fb7566caccf22d74d1ab270de3551f72a58399f5',
    ),
    'guzzlehttp/promises' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '111166291a0f8130081195ac4556a5587d7f1b5d',
    ),
    'guzzlehttp/psr7' => 
    array (
      'pretty_version' => '2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8bd7c33a0734ae1c5d074360512beb716bef3f77',
    ),
    'guzzlehttp/uri-template' => 
    array (
      'pretty_version' => 'v1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b945d74a55a25a949158444f09ec0d3c120d69e2',
    ),
    'hamcrest/hamcrest-php' => 
    array (
      'pretty_version' => 'v2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8c3d0a3f6af734494ad8f6fbbee0ba92422859f3',
    ),
    'illuminate/auth' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/broadcasting' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/bus' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/cache' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/collections' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/conditionable' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/config' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/console' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/container' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/contracts' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/cookie' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/database' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/encryption' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/events' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/filesystem' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/hashing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/http' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/log' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/macroable' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/mail' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/notifications' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/pagination' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/pipeline' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/queue' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/redis' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/routing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/session' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/support' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/testing' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/translation' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/validation' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'illuminate/view' => 
    array (
      'replaced' => 
      array (
        0 => 'v9.52.15',
      ),
    ),
    'intervention/image' => 
    array (
      'pretty_version' => '2.7.2',
      'version' => '2.7.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '04be355f8d6734c826045d02a1079ad658322dad',
    ),
    'jaybizzle/crawler-detect' => 
    array (
      'pretty_version' => 'v1.2.116',
      'version' => '1.2.116.0',
      'aliases' => 
      array (
      ),
      'reference' => '97e9fe30219e60092e107651abb379a38b342921',
    ),
    'jenssegers/agent' => 
    array (
      'pretty_version' => 'v2.6.4',
      'version' => '2.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'daa11c43729510b3700bc34d414664966b03bffe',
    ),
    'kodova/hamcrest-php' => 
    array (
      'replaced' => 
      array (
        0 => '*',
      ),
    ),
    'laravel/framework' => 
    array (
      'pretty_version' => 'v9.52.15',
      'version' => '9.52.15.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3350e87a52346af9cc655a3012d2175d2d05ad7',
    ),
    'laravel/helpers' => 
    array (
      'pretty_version' => 'v1.6.0',
      'version' => '1.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4dd0f9436d3911611622a6ced8329a1710576f60',
    ),
    'laravel/legacy-factories' => 
    array (
      'pretty_version' => 'v1.3.2',
      'version' => '1.3.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cc6720da81094c82ea9f4737d615dd3d71f7f43d',
    ),
    'laravel/sail' => 
    array (
      'pretty_version' => 'v1.23.4',
      'version' => '1.23.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cfa1ad579349110a87f9412eb65ecba94d682ac2',
    ),
    'laravel/sanctum' => 
    array (
      'pretty_version' => 'v3.2.6',
      'version' => '3.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '217e8a2bc5aa6a827ced97fcb76504029d3115d7',
    ),
    'laravel/serializable-closure' => 
    array (
      'pretty_version' => 'v1.3.1',
      'version' => '1.3.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e5a3057a5591e1cfe8183034b0203921abe2c902',
    ),
    'laravel/socialite' => 
    array (
      'pretty_version' => '5.x-dev',
      'version' => '5.9999999.9999999.9999999-dev',
      'aliases' => 
      array (
      ),
      'reference' => '860b49af103958882de59955363544bb59621f53',
    ),
    'laravel/tinker' => 
    array (
      'pretty_version' => 'v2.8.1',
      'version' => '2.8.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '04a2d3bd0d650c0764f70bf49d1ee39393e4eb10',
    ),
    'laravel/ui' => 
    array (
      'pretty_version' => 'v3.4.6',
      'version' => '3.4.6.0',
      'aliases' => 
      array (
      ),
      'reference' => '65ec5c03f7fee2c8ecae785795b829a15be48c2c',
    ),
    'league/commonmark' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd44a24690f16b8c1808bf13b1bd54ae4c63ea048',
    ),
    'league/config' => 
    array (
      'pretty_version' => 'v1.2.0',
      'version' => '1.2.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '754b3604fb2984c71f4af4a9cbe7b57f346ec1f3',
    ),
    'league/flysystem' => 
    array (
      'pretty_version' => '3.15.1',
      'version' => '3.15.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a141d430414fcb8bf797a18716b09f759a385bed',
    ),
    'league/flysystem-local' => 
    array (
      'pretty_version' => '3.15.0',
      'version' => '3.15.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '543f64c397fefdf9cfeac443ffb6beff602796b3',
    ),
    'league/mime-type-detection' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a6dfb1194a2946fcdc1f38219445234f65b35c96',
    ),
    'league/oauth1-client' => 
    array (
      'pretty_version' => 'v1.10.1',
      'version' => '1.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd6365b901b5c287dd41f143033315e2f777e1167',
    ),
    'maennchen/zipstream-php' => 
    array (
      'pretty_version' => '2.4.0',
      'version' => '2.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '3fa72e4c71a43f9e9118752a5c90e476a8dc9eb3',
    ),
    'markbaker/complex' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '95c56caa1cf5c766ad6d65b6344b807c1e8405b9',
    ),
    'markbaker/matrix' => 
    array (
      'pretty_version' => '3.0.1',
      'version' => '3.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '728434227fe21be27ff6d86621a1b13107a2562c',
    ),
    'maximebf/debugbar' => 
    array (
      'pretty_version' => 'v1.18.2',
      'version' => '1.18.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '17dcf3f6ed112bb85a37cf13538fd8de49f5c274',
    ),
    'mobiledetect/mobiledetectlib' => 
    array (
      'pretty_version' => '2.8.41',
      'version' => '2.8.41.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fc9cccd4d3706d5a7537b562b59cc18f9e4c0cb1',
    ),
    'mockery/mockery' => 
    array (
      'pretty_version' => '1.6.6',
      'version' => '1.6.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b8e0bb7d8c604046539c1115994632c74dcb361e',
    ),
    'monolog/monolog' => 
    array (
      'pretty_version' => '2.9.1',
      'version' => '2.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f259e2b15fb95494c83f52d3caad003bbf5ffaa1',
    ),
    'mtdowling/cron-expression' => 
    array (
      'replaced' => 
      array (
        0 => '^1.0',
      ),
    ),
    'mtdowling/jmespath.php' => 
    array (
      'pretty_version' => '2.6.1',
      'version' => '2.6.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9b87907a81b87bc76d19a7fb2d61e61486ee9edb',
    ),
    'myclabs/deep-copy' => 
    array (
      'pretty_version' => '1.11.1',
      'version' => '1.11.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '7284c22080590fb39f2ffa3e9057f10a4ddd0e0c',
    ),
    'myclabs/php-enum' => 
    array (
      'pretty_version' => '1.8.4',
      'version' => '1.8.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a867478eae49c9f59ece437ae7f9506bfaa27483',
    ),
    'nesbot/carbon' => 
    array (
      'pretty_version' => '2.69.0',
      'version' => '2.69.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '4308217830e4ca445583a37d1bf4aff4153fa81c',
    ),
    'nette/schema' => 
    array (
      'pretty_version' => 'v1.2.4',
      'version' => '1.2.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c9ff517a53903b3d4e29ec547fb20feecb05b8ab',
    ),
    'nette/utils' => 
    array (
      'pretty_version' => 'v4.0.1',
      'version' => '4.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '9124157137da01b1f5a5a22d6486cb975f26db7e',
    ),
    'nikic/php-parser' => 
    array (
      'pretty_version' => 'v4.17.1',
      'version' => '4.17.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'a6303e50c90c355c7eeee2c4a8b27fe8dc8fef1d',
    ),
    'nunomaduro/collision' => 
    array (
      'pretty_version' => 'v6.4.0',
      'version' => '6.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f05978827b9343cba381ca05b8c7deee346b6015',
    ),
    'nunomaduro/termwind' => 
    array (
      'pretty_version' => 'v1.15.1',
      'version' => '1.15.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ab0b32c8caa4a2e09700ea32925441385e4a5dc',
    ),
    'paragonie/constant_time_encoding' => 
    array (
      'pretty_version' => 'v2.6.3',
      'version' => '2.6.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '58c3f47f650c94ec05a151692652a868995d2938',
    ),
    'paragonie/random_compat' => 
    array (
      'pretty_version' => 'v9.99.100',
      'version' => '9.99.100.0',
      'aliases' => 
      array (
      ),
      'reference' => '996434e5492cb4c3edcb9168db6fbb1359ef965a',
    ),
    'phar-io/manifest' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '97803eca37d319dfa7826cc2437fc020857acb53',
    ),
    'phar-io/version' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4f7fd7836c6f332bb2933569e566a0d6c4cbed74',
    ),
    'phenx/php-font-lib' => 
    array (
      'pretty_version' => '0.5.4',
      'version' => '0.5.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd448ad1ce34c63d09baccd05415e361300c35b4',
    ),
    'phenx/php-svg-lib' => 
    array (
      'pretty_version' => '0.4.1',
      'version' => '0.4.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '4498b5df7b08e8469f0f8279651ea5de9626ed02',
    ),
    'phpoffice/phpspreadsheet' => 
    array (
      'pretty_version' => '1.29.0',
      'version' => '1.29.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fde2ccf55eaef7e86021ff1acce26479160a0fa0',
    ),
    'phpoption/phpoption' => 
    array (
      'pretty_version' => '1.9.1',
      'version' => '1.9.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dd3a383e599f49777d8b628dadbb90cae435b87e',
    ),
    'phpseclib/phpseclib' => 
    array (
      'pretty_version' => '3.0.21',
      'version' => '3.0.21.0',
      'aliases' => 
      array (
      ),
      'reference' => '4580645d3fc05c189024eb3b834c6c1e4f0f30a1',
    ),
    'phpunit/php-code-coverage' => 
    array (
      'pretty_version' => '9.2.27',
      'version' => '9.2.27.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b0a88255cb70d52653d80c890bd7f38740ea50d1',
    ),
    'phpunit/php-file-iterator' => 
    array (
      'pretty_version' => '3.0.6',
      'version' => '3.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cf1c2e7c203ac650e352f4cc675a7021e7d1b3cf',
    ),
    'phpunit/php-invoker' => 
    array (
      'pretty_version' => '3.1.1',
      'version' => '3.1.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a10147d0aaf65b58940a0b72f71c9ac0423cc67',
    ),
    'phpunit/php-text-template' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5da5f67fc95621df9ff4c4e5a84d6a8a2acf7c28',
    ),
    'phpunit/php-timer' => 
    array (
      'pretty_version' => '5.0.3',
      'version' => '5.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '5a63ce20ed1b5bf577850e2c4e87f4aa902afbd2',
    ),
    'phpunit/phpunit' => 
    array (
      'pretty_version' => '9.6.11',
      'version' => '9.6.11.0',
      'aliases' => 
      array (
      ),
      'reference' => '810500e92855eba8a7a5319ae913be2da6f957b0',
    ),
    'psr/cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'aa5030cfa5405eccfdcb1083ce040c2cb8d253bf',
    ),
    'psr/clock' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41a24703d4560fd0acb709162f73b8adfc3aa0d',
    ),
    'psr/clock-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/container' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c71ecc56dfe541dbd90c5360474fbc405f8d5963',
    ),
    'psr/container-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.1|2.0',
      ),
    ),
    'psr/event-dispatcher' => 
    array (
      'pretty_version' => '1.0.0',
      'version' => '1.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'dbefd12671e8a14ec7f180cab83036ed26714bb0',
    ),
    'psr/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-client' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '0955afe48220520692d2d09f7ab7e0f93ffd6a31',
    ),
    'psr/http-client-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-factory' => 
    array (
      'pretty_version' => '1.0.2',
      'version' => '1.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e616d01114759c4c489f93b099585439f795fe35',
    ),
    'psr/http-factory-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/http-message' => 
    array (
      'pretty_version' => '1.1',
      'version' => '1.1.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cb6ce4845ce34a8ad9e68117c10ee90a29919eba',
    ),
    'psr/http-message-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0',
      ),
    ),
    'psr/log' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fe5ea303b0887d5caefd3d431c3e61ad47037001',
    ),
    'psr/log-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
        1 => '1.0.0 || 2.0.0 || 3.0.0',
      ),
    ),
    'psr/simple-cache' => 
    array (
      'pretty_version' => '3.0.0',
      'version' => '3.0.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '764e0b3939f5ca87cb904f570ef9be2d78a07865',
    ),
    'psr/simple-cache-implementation' => 
    array (
      'provided' => 
      array (
        0 => '1.0|2.0|3.0',
      ),
    ),
    'psy/psysh' => 
    array (
      'pretty_version' => 'v0.11.20',
      'version' => '0.11.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '0fa27040553d1d280a67a4393194df5228afea5b',
    ),
    'ralouphie/getallheaders' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '120b605dfeb996808c31b6477290a714d356e822',
    ),
    'ramsey/collection' => 
    array (
      'pretty_version' => '1.3.0',
      'version' => '1.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ad7475d1c9e70b190ecffc58f2d989416af339b4',
    ),
    'ramsey/uuid' => 
    array (
      'pretty_version' => '4.7.4',
      'version' => '4.7.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '60a4c63ab724854332900504274f6150ff26d286',
    ),
    'rhumsaa/uuid' => 
    array (
      'replaced' => 
      array (
        0 => '4.7.4',
      ),
    ),
    's-cart/core' => 
    array (
      'pretty_version' => '7.2.5.7',
      'version' => '7.2.5.7',
      'aliases' => 
      array (
      ),
      'reference' => 'dae10c36262ff6fc996636e2ae2e20bdfc30e9f1',
    ),
    's-cart/s-cart' => 
    array (
      'pretty_version' => 'dev-main',
      'version' => 'dev-main',
      'aliases' => 
      array (
      ),
      'reference' => 'f24affdefdf220586d02d16094c31bb617ade2a5',
    ),
    'sabberworm/php-css-parser' => 
    array (
      'pretty_version' => '8.4.0',
      'version' => '8.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e41d2140031d533348b2192a83f02d8dd8a71d30',
    ),
    'sebastian/cli-parser' => 
    array (
      'pretty_version' => '1.0.1',
      'version' => '1.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '442e7c7e687e42adc03470c7b668bc4b2402c0b2',
    ),
    'sebastian/code-unit' => 
    array (
      'pretty_version' => '1.0.8',
      'version' => '1.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => '1fc9f64c0927627ef78ba436c9b17d967e68e120',
    ),
    'sebastian/code-unit-reverse-lookup' => 
    array (
      'pretty_version' => '2.0.3',
      'version' => '2.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac91f01ccec49fb77bdc6fd1e548bc70f7faa3e5',
    ),
    'sebastian/comparator' => 
    array (
      'pretty_version' => '4.0.8',
      'version' => '4.0.8.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa0f136dd2334583309d32b62544682ee972b51a',
    ),
    'sebastian/complexity' => 
    array (
      'pretty_version' => '2.0.2',
      'version' => '2.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '739b35e53379900cc9ac327b2147867b8b6efd88',
    ),
    'sebastian/diff' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '74be17022044ebaaecfdf0c5cd504fc9cd5a7131',
    ),
    'sebastian/environment' => 
    array (
      'pretty_version' => '5.1.5',
      'version' => '5.1.5.0',
      'aliases' => 
      array (
      ),
      'reference' => '830c43a844f1f8d5b7a1f6d6076b784454d8b7ed',
    ),
    'sebastian/exporter' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'ac230ed27f0f98f597c8a2b6eb7ac563af5e5b9d',
    ),
    'sebastian/global-state' => 
    array (
      'pretty_version' => '5.0.6',
      'version' => '5.0.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bde739e7565280bda77be70044ac1047bc007e34',
    ),
    'sebastian/lines-of-code' => 
    array (
      'pretty_version' => '1.0.3',
      'version' => '1.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c1c2e997aa3146983ed888ad08b15470a2e22ecc',
    ),
    'sebastian/object-enumerator' => 
    array (
      'pretty_version' => '4.0.4',
      'version' => '4.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '5c9eeac41b290a3712d88851518825ad78f45c71',
    ),
    'sebastian/object-reflector' => 
    array (
      'pretty_version' => '2.0.4',
      'version' => '2.0.4.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b4f479ebdbf63ac605d183ece17d8d7fe49c15c7',
    ),
    'sebastian/recursion-context' => 
    array (
      'pretty_version' => '4.0.5',
      'version' => '4.0.5.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e75bd0f07204fec2a0af9b0f3cfe97d05f92efc1',
    ),
    'sebastian/resource-operations' => 
    array (
      'pretty_version' => '3.0.3',
      'version' => '3.0.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '0f4443cb3a1d92ce809899753bc0d5d5a8dd19a8',
    ),
    'sebastian/type' => 
    array (
      'pretty_version' => '3.2.1',
      'version' => '3.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '75e2c2a32f5e0b3aef905b9ed0b179b953b3d7c7',
    ),
    'sebastian/version' => 
    array (
      'pretty_version' => '3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c6c1022351a901512170118436c764e473f6de8c',
    ),
    'spatie/backtrace' => 
    array (
      'pretty_version' => '1.5.3',
      'version' => '1.5.3.0',
      'aliases' => 
      array (
      ),
      'reference' => '483f76a82964a0431aa836b6ed0edde0c248e3ab',
    ),
    'spatie/db-dumper' => 
    array (
      'pretty_version' => '3.4.0',
      'version' => '3.4.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'bbd5ae0f331d47e6534eb307e256c11a65c8e24a',
    ),
    'spatie/flare-client-php' => 
    array (
      'pretty_version' => '1.4.2',
      'version' => '1.4.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '5f2c6a7a0d2c1d90c12559dc7828fd942911a544',
    ),
    'spatie/ignition' => 
    array (
      'pretty_version' => '1.10.1',
      'version' => '1.10.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd92b9a081e99261179b63a858c7a4b01541e7dd1',
    ),
    'spatie/laravel-ignition' => 
    array (
      'pretty_version' => '1.6.4',
      'version' => '1.6.4.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a2b4bd3d48c72526c0ba417687e5c56b5cf49bc',
    ),
    'spatie/laravel-json-api-paginate' => 
    array (
      'pretty_version' => '1.13.0',
      'version' => '1.13.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e3cc9b9505e998da312ea87570e215ecd40a005b',
    ),
    'spatie/laravel-pjax' => 
    array (
      'pretty_version' => '2.3.0',
      'version' => '2.3.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'fa6c0a391b15d90f814e79345142309d32562d40',
    ),
    'symfony/console' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3ebc83d031b71c39da318ca8b7a07ecc67507ed',
    ),
    'symfony/css-selector' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f1d00bddb83a4cb2138564b2150001cb6ce272b1',
    ),
    'symfony/deprecation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '26954b3d62a6c5fd0ea8a2a00c0353a14978d05c',
    ),
    'symfony/dom-crawler' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '622578ff158318b1b49d95068bd6b66c713601e9',
    ),
    'symfony/error-handler' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c7df52182f43a68522756ac31a532dd5b1e6db67',
    ),
    'symfony/event-dispatcher' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '2eaf8e63bc5b8cefabd4a800157f0d0c094f677a',
    ),
    'symfony/event-dispatcher-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => '7bc61cc2db649b4637d331240c5346dcc7708051',
    ),
    'symfony/event-dispatcher-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.0|3.0',
      ),
    ),
    'symfony/finder' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '5cc9cac6586fc0c28cd173780ca696e419fefa11',
    ),
    'symfony/http-foundation' => 
    array (
      'pretty_version' => 'v6.0.20',
      'version' => '6.0.20.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e16b2676a4b3b1fa12378a20b29c364feda2a8d6',
    ),
    'symfony/http-kernel' => 
    array (
      'pretty_version' => 'v6.0.20',
      'version' => '6.0.20.0',
      'aliases' => 
      array (
      ),
      'reference' => '6dc70833fd0ef5e861e17c7854c12d7d86679349',
    ),
    'symfony/mailer' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'cd60799210c488f545ddde2444dc1aa548322872',
    ),
    'symfony/mime' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd7052547a0070cbeadd474e172b527a00d657301',
    ),
    'symfony/polyfill-ctype' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '5bbc823adecdae860bb64756d639ecfec17b050a',
    ),
    'symfony/polyfill-intl-grapheme' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '511a08c03c1960e08a883f4cffcacd219b758354',
    ),
    'symfony/polyfill-intl-idn' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '639084e360537a19f9ee352433b84ce831f3d2da',
    ),
    'symfony/polyfill-intl-normalizer' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '19bd1e4fcd5b91116f14d8533c57831ed00571b6',
    ),
    'symfony/polyfill-mbstring' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '8ad114f6b39e2c98a8b0e3bd907732c207c2b534',
    ),
    'symfony/polyfill-php72' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '869329b1e9894268a8a61dabb69153029b7a8c97',
    ),
    'symfony/polyfill-php80' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '7a6ff3f1959bb01aefccb463a0f2cd3d3d2fd936',
    ),
    'symfony/polyfill-php81' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '707403074c8ea6e2edaf8794b0157a0bfa52157a',
    ),
    'symfony/polyfill-uuid' => 
    array (
      'pretty_version' => 'v1.27.0',
      'version' => '1.27.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'f3cf1a645c2734236ed1e2e671e273eeb3586166',
    ),
    'symfony/process' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '2114fd60f26a296cc403a7939ab91478475a33d4',
    ),
    'symfony/routing' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'e56ca9b41c1ec447193474cd86ad7c0b547755ac',
    ),
    'symfony/service-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd78d39c1599bd1188b8e26bb341da52c3c6d8a66',
    ),
    'symfony/string' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'd9e72497367c23e08bf94176d2be45b00a9d232a',
    ),
    'symfony/translation' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '9c24b3fdbbe9fb2ef3a6afd8bbaadfd72dad681f',
    ),
    'symfony/translation-contracts' => 
    array (
      'pretty_version' => 'v3.0.2',
      'version' => '3.0.2.0',
      'aliases' => 
      array (
      ),
      'reference' => 'acbfbb274e730e5a0236f619b6168d9dedb3e282',
    ),
    'symfony/translation-implementation' => 
    array (
      'provided' => 
      array (
        0 => '2.3|3.0',
      ),
    ),
    'symfony/uid' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => '6499e28b0ac9f2aa3151e11845bdb5cd21e6bb9d',
    ),
    'symfony/var-dumper' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'eb980457fa6899840fe1687e8627a03a7d8a3d52',
    ),
    'symfony/yaml' => 
    array (
      'pretty_version' => 'v6.0.19',
      'version' => '6.0.19.0',
      'aliases' => 
      array (
      ),
      'reference' => 'deec3a812a0305a50db8ae689b183f43d915c884',
    ),
    'theseer/tokenizer' => 
    array (
      'pretty_version' => '1.2.1',
      'version' => '1.2.1.0',
      'aliases' => 
      array (
      ),
      'reference' => '34a41e998c2183e22995f158c581e7b5e755ab9e',
    ),
    'tijsverkoyen/css-to-inline-styles' => 
    array (
      'pretty_version' => '2.2.6',
      'version' => '2.2.6.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c42125b83a4fa63b187fdf29f9c93cb7733da30c',
    ),
    'unisharp/laravel-filemanager' => 
    array (
      'pretty_version' => 'v2.6.0',
      'version' => '2.6.0.0',
      'aliases' => 
      array (
      ),
      'reference' => 'c3c6ded95fd0cd6ec8a0f53af953a6273b9348c1',
    ),
    'vlucas/phpdotenv' => 
    array (
      'pretty_version' => 'v5.5.0',
      'version' => '5.5.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '1a7ea2afc49c3ee6d87061f5a233e3a035d0eae7',
    ),
    'voku/portable-ascii' => 
    array (
      'pretty_version' => '2.0.1',
      'version' => '2.0.1.0',
      'aliases' => 
      array (
      ),
      'reference' => 'b56450eed252f6801410d810c8e1727224ae0743',
    ),
    'webmozart/assert' => 
    array (
      'pretty_version' => '1.11.0',
      'version' => '1.11.0.0',
      'aliases' => 
      array (
      ),
      'reference' => '11cb2199493b2f8a3b53e7f19068fc6aac760991',
    ),
  ),
);
private static $canGetVendors;
private static $installedByVendor = array();







public static function getInstalledPackages()
{
$packages = array();
foreach (self::getInstalled() as $installed) {
$packages[] = array_keys($installed['versions']);
}

if (1 === \count($packages)) {
return $packages[0];
}

return array_keys(array_flip(\call_user_func_array('array_merge', $packages)));
}









public static function isInstalled($packageName)
{
foreach (self::getInstalled() as $installed) {
if (isset($installed['versions'][$packageName])) {
return true;
}
}

return false;
}














public static function satisfies(VersionParser $parser, $packageName, $constraint)
{
$constraint = $parser->parseConstraints($constraint);
$provided = $parser->parseConstraints(self::getVersionRanges($packageName));

return $provided->matches($constraint);
}










public static function getVersionRanges($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

$ranges = array();
if (isset($installed['versions'][$packageName]['pretty_version'])) {
$ranges[] = $installed['versions'][$packageName]['pretty_version'];
}
if (array_key_exists('aliases', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['aliases']);
}
if (array_key_exists('replaced', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['replaced']);
}
if (array_key_exists('provided', $installed['versions'][$packageName])) {
$ranges = array_merge($ranges, $installed['versions'][$packageName]['provided']);
}

return implode(' || ', $ranges);
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['version'])) {
return null;
}

return $installed['versions'][$packageName]['version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getPrettyVersion($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['pretty_version'])) {
return null;
}

return $installed['versions'][$packageName]['pretty_version'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getReference($packageName)
{
foreach (self::getInstalled() as $installed) {
if (!isset($installed['versions'][$packageName])) {
continue;
}

if (!isset($installed['versions'][$packageName]['reference'])) {
return null;
}

return $installed['versions'][$packageName]['reference'];
}

throw new \OutOfBoundsException('Package "' . $packageName . '" is not installed');
}





public static function getRootPackage()
{
$installed = self::getInstalled();

return $installed[0]['root'];
}








public static function getRawData()
{
@trigger_error('getRawData only returns the first dataset loaded, which may not be what you expect. Use getAllRawData() instead which returns all datasets for all autoloaders present in the process.', E_USER_DEPRECATED);

return self::$installed;
}







public static function getAllRawData()
{
return self::getInstalled();
}



















public static function reload($data)
{
self::$installed = $data;
self::$installedByVendor = array();
}





private static function getInstalled()
{
if (null === self::$canGetVendors) {
self::$canGetVendors = method_exists('Composer\Autoload\ClassLoader', 'getRegisteredLoaders');
}

$installed = array();

if (self::$canGetVendors) {
foreach (ClassLoader::getRegisteredLoaders() as $vendorDir => $loader) {
if (isset(self::$installedByVendor[$vendorDir])) {
$installed[] = self::$installedByVendor[$vendorDir];
} elseif (is_file($vendorDir.'/composer/installed.php')) {
$installed[] = self::$installedByVendor[$vendorDir] = require $vendorDir.'/composer/installed.php';
}
}
}

$installed[] = self::$installed;

return $installed;
}
}
