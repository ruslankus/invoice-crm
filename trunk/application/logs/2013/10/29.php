<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-29 07:51:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Index_Ajax::d() ~ APPPATH\classes\Controller\Index\Ajax.php [ 17 ] in file:line
2013-10-29 07:51:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-29 08:08:10 --- CRITICAL: ErrorException [ 2048 ]: Creating default object from empty value ~ APPPATH\classes\Controller\Index\Ajax.php [ 23 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Ajax.php:23
2013-10-29 08:08:10 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Ajax.php(23): Kohana_Core::error_handler(2048, 'Creating defaul...', 'C:\OpenServer\d...', 23, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Ajax->action_get_ballance()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Ajax))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Ajax.php:23