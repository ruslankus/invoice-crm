<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-15 06:39:10 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 06:39:10 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(124): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 06:46:08 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 06:46:08 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(124): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 06:51:20 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 06:51:20 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(124): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 06:54:46 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 06:54:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(124): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 07:04:11 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 07:04:11 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(124): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 07:48:26 --- CRITICAL: Kohana_Exception [ 0 ]: The and property does not exist in the Model_Card class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 07:48:26 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('and')
#1 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(109): Kohana_ORM->__get('and')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#8 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-15 07:50:05 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'status' in 'where clause' [ SELECT `card`.`id` AS `id`, `card`.`company_id` AS `company_id`, `card`.`cart_number` AS `cart_number`, `card`.`phone_number` AS `phone_number`, `card`.`cart_status` AS `cart_status` FROM `cards` AS `card` WHERE `company_id` = 1 AND `status` = 2 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 07:50:05 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `card`.`...', 'Model_Card', Array)
#1 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(1063): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(1004): Kohana_ORM->_load_result(true)
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(109): Kohana_ORM->find_all()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php:251
2013-10-15 08:26:20 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\pdf\invoice.php [ 191 ] in C:\OpenServer\domains\invoice.local\application\views\pdf\invoice.php:191
2013-10-15 08:26:20 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\views\pdf\invoice.php(191): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 191, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(79): Kohana_View->render(NULL)
#4 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(139): View_mPDF_Core->write_to_disk('media/pdf/test....')
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#10 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#11 {main} in C:\OpenServer\domains\invoice.local\application\views\pdf\invoice.php:191
2013-10-15 09:41:30 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-15 09:41:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(140): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-15 15:40:51 --- CRITICAL: ErrorException [ 1 ]: Class 'Auth' not found ~ APPPATH\classes\Controller\Base.php [ 12 ] in file:line
2013-10-15 15:40:51 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line