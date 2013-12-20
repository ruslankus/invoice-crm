<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-12-20 04:27:22 --- CRITICAL: ErrorException [ 2 ]: simplexml_load_string() [function.simplexml-load-string]: Entity: line 2: parser error : Extra content at the end of the document ~ APPPATH\classes\Controller\Index\Auth.php [ 34 ] in file:line
2013-12-20 04:27:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'simplexml_load_...', 'C:\OpenServer\d...', 34, Array)
#1 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Auth.php(34): simplexml_load_string('<br />?<b>Warni...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Auth->action_login()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Auth))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#8 {main} in file:line