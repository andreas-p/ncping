<?php
/**
 * mcsa
 *
 * @author Andreas Pflug <pflug@pse-consulting.de>
 * @copyright Andreas Pflug 2019
 */

namespace OCA\NcPing\Controller;
use OCP\IRequest;
use OCP\AppFramework\Controller;
use OCP\AppFramework\Http\TemplateResponse;



class PageController extends Controller
{
    public function __construct($AppName, IRequest $request, $UserId)
    {
        parent::__construct($AppName, $request);
    }
    
    /**
     * @NoAdminRequired
     * @NoCSRFRequired
     */
    public function index()
    {
        return new TemplateResponse($this->appName, 'main', []);
    }
    
    
    /**
     * @NoCSRFRequired
     */
    public function check()
    {
        return "OK";
    }
}
