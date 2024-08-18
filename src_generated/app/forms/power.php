<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use action\Element; 


class power extends AbstractForm
{

    /**
     * @event rect5.globalKeyDown-Esc 
     */
    function doRect5GlobalKeyDownEsc(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event rect.globalKeyDown-Esc 
     */
    function doRectGlobalKeyDownEsc(UXKeyEvent $e = null)
    {    
        
    }




    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('power');

        
    }



    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
        
    }

    /**
     * @event button6.click 
     */
    function doButton6Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showForm('LogonShell_1');
		app()->hideForm('Screen');
		app()->hideForm('MainForm');
		app()->hideForm('power');

        
    }

    /**
     * @event button7.click 
     */
    function doButton7Click(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->showFormAndWait('Close');

        
    }

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->hideForm('Screen');
		app()->hideForm('MainForm');
		$this->loadForm('sleep_mode');

        
    }





}
