<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-01 06:31:25 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_SQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2013-10-01 06:31:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-01 06:36:54 --- CRITICAL: ErrorException [ 1 ]: Class 'Database_SQL' not found ~ MODPATH\database\classes\Kohana\Database.php [ 78 ] in file:line
2013-10-01 06:36:54 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-01 08:34:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: firms ~ APPPATH\views\main.php [ 3 ] in C:\OpenServer\domains\invoice.local\application\views\main.php:3
2013-10-01 08:34:03 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\views\main.php(3): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 3, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\invoice.local\application\views\main.php:3
2013-10-01 09:37:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Index\Cards.php [ 9 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:37:25 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:37:36 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Index\Cards.php [ 9 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:37:36 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:38:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Index\Cards.php [ 9 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:38:34 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:40:27 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Index\Cards.php [ 9 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9
2013-10-01 09:40:27 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\OpenServer\d...', 9, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_info()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php:9