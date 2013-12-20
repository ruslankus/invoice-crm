<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-12 09:53:20 --- CRITICAL: Kohana_Exception [ 0 ]: The op_name property does not exist in the Model_Operation class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\new_open_server\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-12 09:53:20 --- DEBUG: #0 C:\new_open_server\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_name')
#1 C:\new_open_server\domains\invoice.local\application\views\card.php(125): Kohana_ORM->__get('op_name')
#2 C:\new_open_server\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\new_open_ser...')
#3 C:\new_open_server\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\new_open_ser...', Array)
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\new_open_server\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\new_open_ser...')
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\new_open_ser...', Array)
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#12 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\new_open_server\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-12 10:14:27 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 700 ] in file:line
2013-10-12 10:14:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 10:14:43 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 1122 ] in file:line
2013-10-12 10:14:43 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 10:15:09 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\database\classes\Kohana\Database\MySQL\Result.php [ 48 ] in file:line
2013-10-12 10:15:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 10:16:09 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 463 ] in file:line
2013-10-12 10:16:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-12 10:18:25 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 60 seconds exceeded ~ MODPATH\orm\classes\Kohana\ORM.php [ 1098 ] in file:line
2013-10-12 10:18:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line