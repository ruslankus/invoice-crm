<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-17 05:13:51 --- CRITICAL: Kohana_Exception [ 0 ]: The op_cost property does not exist in the Model_Opname class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 05:13:51 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_cost')
#1 C:\OpenServer\domains\invoice.local\application\views\pdf\invoice.php(323): Kohana_ORM->__get('op_cost')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(79): Kohana_View->render(NULL)
#5 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(161): View_mPDF_Core->write_to_disk('media/pdf/LIMA1...')
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 05:17:49 --- CRITICAL: Kohana_Exception [ 0 ]: The op_cost property does not exist in the Model_Opname class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 05:17:49 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_cost')
#1 C:\OpenServer\domains\invoice.local\application\views\pdf\invoice.php(323): Kohana_ORM->__get('op_cost')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(79): Kohana_View->render(NULL)
#5 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(161): View_mPDF_Core->write_to_disk('media/pdf/LIMA1...')
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#7 [internal function]: Kohana_Controller->execute()
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#10 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#11 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#12 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:35:58 --- CRITICAL: ErrorException [ 2 ]: Cannot use a scalar value as an array ~ APPPATH\classes\Controller\Index\Invoice.php [ 126 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php:126
2013-10-17 06:35:58 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(126): Kohana_Core::error_handler(2, 'Cannot use a sc...', 'C:\OpenServer\d...', 126, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_generate()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php:126
2013-10-17 06:38:25 --- CRITICAL: ErrorException [ 1 ]: Unsupported operand types ~ APPPATH\classes\Controller\Index\Invoice.php [ 121 ] in file:line
2013-10-17 06:38:25 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-17 06:45:34 --- CRITICAL: Kohana_Exception [ 0 ]: The op_cost property does not exist in the Model_Opname class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:45:34 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_cost')
#1 C:\OpenServer\domains\invoice.local\application\views\card.php(132): Kohana_ORM->__get('op_cost')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:46:06 --- CRITICAL: Kohana_Exception [ 0 ]: The op_cost property does not exist in the Model_Opname class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:46:06 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_cost')
#1 C:\OpenServer\domains\invoice.local\application\views\card.php(132): Kohana_ORM->__get('op_cost')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:54:43 --- CRITICAL: Kohana_Exception [ 0 ]: The op_cost property does not exist in the Model_Opname class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 06:54:43 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('op_cost')
#1 C:\OpenServer\domains\invoice.local\application\views\card.php(132): Kohana_ORM->__get('op_cost')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 09:37:57 --- CRITICAL: Kohana_Exception [ 0 ]: The firm_deliv_street property does not exist in the Model_Company class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-17 09:37:57 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firm_deliv_stre...')
#1 C:\OpenServer\domains\invoice.local\application\views\firm_edit.php(71): Kohana_ORM->__get('firm_deliv_stre...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603