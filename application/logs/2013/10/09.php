<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-09 03:49:29 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-09 03:49:29 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\OpenServer\d...', 7087, Array)
#1 C:\OpenServer\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\OpenServer\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(112): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-09 06:43:15 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\main.php [ 22 ] in C:\OpenServer\domains\invoice.local\application\views\main.php:22
2013-10-09 06:43:15 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\views\main.php(22): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 22, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\OpenServer\domains\invoice.local\application\views\base.php(16): Kohana_View->__toString()
#5 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Main))
#11 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#13 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#14 {main} in C:\OpenServer\domains\invoice.local\application\views\main.php:22
2013-10-09 06:56:24 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_Card::count() ~ APPPATH\views\main.php [ 26 ] in file:line
2013-10-09 06:56:24 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line