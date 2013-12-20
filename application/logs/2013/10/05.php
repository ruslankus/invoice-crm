<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-05 05:59:32 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 05:59:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(91): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 06:34:09 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\pdf\invoice.php [ 114 ] in file:line
2013-10-05 06:34:09 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 06:37:31 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\pdf\invoice.php [ 114 ] in file:line
2013-10-05 06:37:31 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 06:38:32 --- CRITICAL: ErrorException [ 1 ]: Call to a member function count() on a non-object ~ APPPATH\views\pdf\invoice.php [ 114 ] in file:line
2013-10-05 06:38:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in file:line
2013-10-05 16:04:22 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 16:04:22 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(108): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 16:07:32 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 16:07:32 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(108): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 16:10:23 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 16:10:23 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(108): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 16:12:06 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 16:12:06 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(108): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 16:17:53 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 16:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(108): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line
2013-10-05 17:22:19 --- CRITICAL: ErrorException [ 2 ]: fopen(media/pdf/test.pdf) [function.fopen]: failed to open stream: Permission denied ~ MODPATH\mpdf\vendor\mpdf\mpdf.php [ 7087 ] in file:line
2013-10-05 17:22:19 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(media/pdf...', 'C:\new_open_ser...', 7087, Array)
#1 C:\new_open_server\domains\invoice.local\modules\mpdf\vendor\mpdf\mpdf.php(7087): fopen('media/pdf/test....', 'wb')
#2 C:\new_open_server\domains\invoice.local\modules\mpdf\classes\view\mpdf\core.php(82): mPDF->Output('media/pdf/test....', 'F')
#3 C:\new_open_server\domains\invoice.local\application\classes\Controller\Index\Cards.php(112): View_mPDF_Core->write_to_disk('media/pdf/test....')
#4 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_generate()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\new_open_server\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\new_open_server\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in file:line