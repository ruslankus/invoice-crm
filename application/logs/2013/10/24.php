<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-24 06:48:49 --- CRITICAL: Kohana_Exception [ 0 ]: The vat property does not exist in the Model_Invoice class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-24 06:48:49 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('vat')
#1 C:\OpenServer\domains\invoice.local\application\views\inv_history.php(43): Kohana_ORM->__get('vat')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#14 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#15 {main} in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-24 07:14:46 --- CRITICAL: ErrorException [ 2 ]: unlink() [function.unlink]: http does not allow unlinking ~ APPPATH\classes\Controller\Index\Invoice.php [ 84 ] in file:line
2013-10-24 07:14:46 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink() [<a hr...', 'C:\OpenServer\d...', 84, Array)
#1 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(84): unlink('http://invoice....')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#8 {main} in file:line
2013-10-24 07:15:59 --- CRITICAL: Kohana_Exception [ 0 ]: Cannot delete invoice model because it is not loaded. ~ MODPATH\orm\classes\Kohana\ORM.php [ 1434 ] in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php:79
2013-10-24 07:15:59 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(79): Kohana_ORM->delete()
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_delete()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#6 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#7 {main} in C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php:79
2013-10-24 07:18:47 --- CRITICAL: ErrorException [ 2 ]: unlink() [function.unlink]: http does not allow unlinking ~ APPPATH\classes\Controller\Index\Invoice.php [ 85 ] in file:line
2013-10-24 07:18:47 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'unlink() [<a hr...', 'C:\OpenServer\d...', 85, Array)
#1 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Invoice.php(85): unlink('http://invoice....')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Invoice->action_delete()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Invoice))
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#7 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#8 {main} in file:line