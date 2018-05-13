<?php
return array (
  'backend' => 
  array (
    'frontName' => 'admin',
  ),
  'queue' => 
  array (
    'amqp' => 
    array (
      'host' => 'rabbitmq',
      'port' => '5672',
      'user' => 'rabbitmq',
      'password' => 'rabbitmq',
      'virtualhost' => '/',
    ),
  ),
  'db' => 
  array (
    'connection' => 
    array (
      'indexer' => 
      array (
        'host' => 'db',
        'dbname' => 'magento2',
        'username' => 'magento2',
        'password' => 'magento2',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
        'persistent' => NULL,
      ),
      'default' => 
      array (
        'host' => 'db',
        'dbname' => 'magento2',
        'username' => 'magento2',
        'password' => 'magento2',
        'model' => 'mysql4',
        'engine' => 'innodb',
        'initStatements' => 'SET NAMES utf8;',
        'active' => '1',
      ),
    ),
    'table_prefix' => '',
  ),
  'crypt' => 
  array (
    'key' => '1d5da394d6473758e6dbbc7edecbd799',
  ),
  'resource' => 
  array (
    'default_setup' => 
    array (
      'connection' => 'default',
    ),
  ),
  'x-frame-options' => 'SAMEORIGIN',
  'MAGE_MODE' => 'developer',
  'session' => 
  array (
    'save' => 'redis',
    'redis' => 
    array (
      'host' => 'redis-session',
      'port' => '6379',
      'password' => '',
      'timeout' => '2.5',
      'persistent_identifier' => '',
      'database' => '2',
      'compression_threshold' => '2048',
      'compression_library' => 'gzip',
      'log_level' => '1',
      'max_concurrency' => '6',
      'break_after_frontend' => '5',
      'break_after_adminhtml' => '30',
      'first_lifetime' => '600',
      'bot_first_lifetime' => '60',
      'bot_lifetime' => '7200',
      'disable_locking' => '0',
      'min_lifetime' => '60',
      'max_lifetime' => '2592000',
    ),
  ),
  'cache_types' => 
  array (
    'config' => 1,
    'layout' => 1,
    'block_html' => 1,
    'collections' => 1,
    'reflection' => 1,
    'db_ddl' => 1,
    'eav' => 1,
    'customer_notification' => 1,
    'config_integration' => 1,
    'config_integration_api' => 1,
    'target_rule' => 1,
    'full_page' => 1,
    'translate' => 1,
    'config_webservice' => 1,
    'compiled_config' => 1,
  ),
  'install' => 
  array (
    'date' => 'Tue, 16 Jan 2018 17:05:52 +0000',
  ),
  'system' => 
  array (
    'default' => 
    array (
      'dev' => 
      array (
        'js' => 
        array (
          'session_storage_key' => 'collected_errors',
        ),
        'restrict' => 
        array (
          'allow_ips' => NULL,
        ),
      ),
      'system' => 
      array (
        'smtp' => 
        array (
          'host' => 'localhost',
          'port' => '25',
        ),
      ),
      'web' => 
      array (
        'unsecure' => 
        array (
          'base_url' => 'http://127.0.0.1/',
          'base_link_url' => '{{unsecure_base_url}}',
        ),
        'secure' => 
        array (
          'base_url' => 'https://127.0.0.1/',
          'base_link_url' => '{{secure_base_url}}',
        ),
        'default' => 
        array (
          'front' => 'cms',
        ),
      ),
      'admin' => 
      array (
        'url' => 
        array (
          'custom' => NULL,
        ),
      ),
      'currency' => 
      array (
        'import' => 
        array (
          'error_email' => NULL,
        ),
      ),
      'customer' => 
      array (
        'create_account' => 
        array (
          'email_domain' => 'example.com',
        ),
      ),
      'catalog' => 
      array (
        'search' => 
        array (
          'elasticsearch_server_hostname' => 'localhost',
          'elasticsearch_server_port' => '9200',
          'elasticsearch_index_prefix' => 'magento2',
          'elasticsearch_enable_auth' => '0',
          'elasticsearch_server_timeout' => '15',
          'solr_server_hostname' => 'localhost',
          'solr_server_port' => '8983',
          'solr_server_username' => 'admin',
          'solr_server_timeout' => '15',
          'solr_server_path' => 'solr',
        ),
        'productalert_cron' => 
        array (
          'error_email' => NULL,
        ),
      ),
      'payment' => 
      array (
        'cybersource' => 
        array (
          'sandbox_flag' => '1',
          'access_key' => NULL,
          'profile_id' => NULL,
          'secret_key' => NULL,
          'merchant_id' => NULL,
          'transaction_key' => NULL,
        ),
        'eway' => 
        array (
          'sandbox_flag' => '1',
          'live_api_key' => NULL,
          'live_api_password' => NULL,
          'live_encryption_key' => NULL,
          'sandbox_api_key' => NULL,
          'sandbox_api_password' => NULL,
          'sandbox_encryption_key' => NULL,
        ),
        'payflowpro' => 
        array (
          'user' => NULL,
          'pwd' => NULL,
        ),
        'payflow_link' => 
        array (
          'pwd' => NULL,
          'url_method' => 'GET',
        ),
        'payflow_advanced' => 
        array (
          'user' => 'PayPal',
          'pwd' => NULL,
          'url_method' => 'GET',
        ),
        'authorizenet_directpost' => 
        array (
          'debug' => '0',
          'email_customer' => '0',
          'login' => NULL,
          'merchant_email' => NULL,
          'test' => '1',
          'trans_key' => NULL,
          'trans_md5' => NULL,
          'cgi_url' => 'https://secure.authorize.net/gateway/transact.dll',
          'cgi_url_td' => 'https://api2.authorize.net/xml/v1/request.api',
        ),
        'braintree' => 
        array (
          'private_key' => NULL,
        ),
        'worldpay' => 
        array (
          'response_password' => NULL,
          'auth_password' => NULL,
          'md5_secret' => NULL,
          'sandbox_flag' => '1',
          'signature_fields' => 'instId:cartId:amount:currency',
        ),
      ),
      'promo' => 
      array (
        'magento_reminder' => 
        array (
          'identity' => 'general',
        ),
      ),
      'contact' => 
      array (
        'email' => 
        array (
          'recipient_email' => 'hello@example.com',
        ),
      ),
      'analytics' => 
      array (
        'url' => 
        array (
          'signup' => 'https://advancedreporting.rjmetrics.com/signup',
          'update' => 'https://advancedreporting.rjmetrics.com/update',
          'bi_essentials' => 'https://dashboard.rjmetrics.com/v2/magento/signup',
          'otp' => 'https://advancedreporting.rjmetrics.com/otp',
          'report' => 'https://advancedreporting.rjmetrics.com/report',
          'notify_data_changed' => 'https://advancedreporting.rjmetrics.com/report',
        ),
      ),
      'carriers' => 
      array (
        'dhl' => 
        array (
          'account' => NULL,
          'gateway_url' => 'https://xmlpi-ea.dhl.com/XMLShippingServlet',
          'id' => NULL,
          'password' => NULL,
        ),
        'fedex' => 
        array (
          'account' => NULL,
          'meter_number' => NULL,
          'key' => NULL,
          'password' => NULL,
          'sandbox_mode' => '0',
          'production_webservices_url' => 'https://ws.fedex.com:443/web-services/',
          'sandbox_webservices_url' => 'https://wsbeta.fedex.com:443/web-services/',
        ),
        'ups' => 
        array (
          'access_license_number' => NULL,
          'gateway_url' => 'http://www.ups.com/using/services/rave/qcostcgi.cgi',
          'gateway_xml_url' => 'https://onlinetools.ups.com/ups.app/xml/Rate',
          'tracking_xml_url' => 'https://www.ups.com/ups.app/xml/Track',
          'username' => NULL,
          'password' => NULL,
          'is_account_live' => '0',
        ),
        'usps' => 
        array (
          'gateway_url' => 'http://production.shippingapis.com/ShippingAPI.dll',
          'gateway_secure_url' => 'https://secure.shippingapis.com/ShippingAPI.dll',
          'userid' => NULL,
          'password' => NULL,
        ),
      ),
      'trans_email' => 
      array (
        'ident_custom1' => 
        array (
          'email' => 'custom1@example.com',
          'name' => 'Custom 1',
        ),
        'ident_custom2' => 
        array (
          'email' => 'custom2@example.com',
          'name' => 'Custom 2',
        ),
        'ident_general' => 
        array (
          'email' => 'owner@example.com',
          'name' => 'Owner',
        ),
        'ident_sales' => 
        array (
          'email' => 'sales@example.com',
          'name' => 'Sales',
        ),
        'ident_support' => 
        array (
          'email' => 'support@example.com',
          'name' => 'CustomerSupport',
        ),
      ),
      'newrelicreporting' => 
      array (
        'general' => 
        array (
          'api_url' => 'https://api.newrelic.com/deployments.xml',
          'insights_api_url' => 'https://insights-collector.newrelic.com/v1/accounts/%s/events',
        ),
      ),
      'paypal' => 
      array (
        'wpp' => 
        array (
          'api_password' => NULL,
          'api_signature' => NULL,
          'api_username' => NULL,
        ),
        'fetch_reports' => 
        array (
          'ftp_login' => NULL,
          'ftp_password' => NULL,
        ),
      ),
      'fraud_protection' => 
      array (
        'signifyd' => 
        array (
          'api_url' => 'https://api.signifyd.com/v2/',
          'api_key' => NULL,
        ),
      ),
      'sitemap' => 
      array (
        'generate' => 
        array (
          'error_email' => NULL,
        ),
      ),
      'crontab' => 
      array (
        'default' => 
        array (
          'jobs' => 
          array (
            'analytics_subscribe' => 
            array (
              'schedule' => 
              array (
                'cron_expr' => '0 * * * *',
              ),
            ),
          ),
        ),
      ),
    ),
  ),
  'cache' => 
  array (
    'frontend' => 
    array (
      'default' => 
      array (
        'backend' => 'Cm_Cache_Backend_Redis',
        'backend_options' => 
        array (
          'server' => 'redis',
          'database' => '0',
          'port' => '6379',
        ),
      ),
    ),
  ),
);
