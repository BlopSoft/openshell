<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 


class Close extends AbstractForm
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
        
    }

    /**
     * @event button3.click 
     */
    function doButton3Click(UXMouseEvent $e = null)
    {    
        
    }

    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
        
    }





}
