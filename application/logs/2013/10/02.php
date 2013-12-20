<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-10-02 05:02:28 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ INSERT INTO `operations` (`operation_id`) VALUES ('2') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php:251
2013-10-02 05:02:28 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `op...', false, Array)
#1 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(1324): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\OpenServer\domains\invoice.local\modules\orm\classes\Kohana\ORM.php(1421): Kohana_ORM->create(NULL)
#3 C:\OpenServer\domains\invoice.local\application\classes\Controller\Index\Cards.php(37): Kohana_ORM->save()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(84): Controller_Index_Cards->action_add()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\invoice.local\modules\database\classes\Kohana\Database\Query.php:251
2013-10-02 09:06:14 --- CRITICAL: ErrorException [ 2 ]: Invalid argument supplied for foreach() ~ APPPATH\views\base.php [ 5 ] in C:\OpenServer\domains\invoice.local\application\views\base.php:5
2013-10-02 09:06:14 --- DEBUG: #0 C:\OpenServer\domains\invoice.local\application\views\base.php(5): Kohana_Core::error_handler(2, 'Invalid argumen...', 'C:\OpenServer\d...', 5, Array)
#1 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(61): include('C:\OpenServer\d...')
#2 C:\OpenServer\domains\invoice.local\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\OpenServer\d...', Array)
#3 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#4 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Index_Cards))
#7 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\OpenServer\domains\invoice.local\system\classes\Kohana\Request.php(986): Kohana_Request_Client->execute(Object(Request))
#9 C:\OpenServer\domains\invoice.local\index.php(118): Kohana_Request->execute()
#10 {main} in C:\OpenServer\domains\invoice.local\application\views\base.php:5