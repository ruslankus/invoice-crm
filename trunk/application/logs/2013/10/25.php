<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-25 07:21:22 --- CRITICAL: Kohana_Exception [ 0 ]: The firm_deliv_contry property does not exist in the Model_Company class ~ MODPATH\orm\classes\Kohana\ORM.php [ 687 ] in C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php:603
2013-10-25 07:21:22 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(603): Kohana_ORM->get('firm_deliv_cont...')
#1 C:\OpenServer\domains\invoice.local\application\views\firm_edit.php(106): Kohana_ORM->__get('firm_deliv_cont...')
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