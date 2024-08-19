<?php
namespace app\forms;

use php\gui\framework\AbstractForm;
use php\gui\event\UXEvent; 
use php\gui\event\UXMouseEvent; 
use php\gui\event\UXKeyEvent; 
use action\Element; 


class runwindow extends AbstractForm
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

		app()->hideForm('runwindow');

        
    }


    /**
     * @event buttonAlt.click 
     */
    function doButtonAltClick(UXMouseEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2


		if (sha1(uiText($this->edit) . '#Dsqv') == 'd89319f9987de4113b96479af4189979a05e68b9')
			app()->showFormAndWait('BlopConnect');

		if (sha1(uiText($this->edit) . '#nKTk') == 'c833251a91a199aed2ffb496953d8648b8dff3f7')
			app()->showFormAndWait('betaprogram');

		if (sha1(uiText($this->edit) . '#gKso') == '46cc1ed6430f4bebe064ce65bba9b816f1df9d71')
			app()->showFormAndWait('NewMusic');

		if (sha1(uiText($this->edit) . '#I8if') == '543d64f705fa0c7b2d80d07e1c6288c4fb8119af')
			app()->showFormAndWait('music');

		if (sha1(uiText($this->edit) . '#QtRP') == 'bc6a9320d4724717928a850f662c3b796553bdca')
			app()->showFormAndWait('riba');

		if (sha1(uiText($this->edit) . '#BBuV') == 'abf2b5ef7fdd44ab64d5fc626a43e8a1e67b7043')
			app()->showFormAndWait('HTML_Tester');

        
    }

    /**
     * @event construct 
     */
    function doConstruct(UXEvent $e = null)
    {    
$e = $event ?: $e; // legacy code from 16 rc-2

		Element::setValue($start, '');

        
    }





}
