<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 


class crashscr2 extends AbstractForm
{

    /**
     * @event rect5.globalKeyDown-Esc 
     */
    function doRect5GlobalKeyDownEsc(UXKeyEvent $e = null)
    {    
        
    }

    /**
     * @event button.click 
     */
    function doButtonClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		app()->shutdown();

        
    }













}
