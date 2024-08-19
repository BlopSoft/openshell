<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 


class crashscr1 extends AbstractForm
{

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		$this->getContextForm()->fullScreen = true;
		app()->hideForm('Screen');
		app()->hideForm('MainForm');
		app()->showFormAndWait('crashscr2');

        
    }













}
