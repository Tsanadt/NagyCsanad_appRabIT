<?php

require_once 'core/Controller.php';
require_once 'services/AdvertisementService.php';

class AdvertisementController extends Controller {
    private $advertisementService;

    public function __construct() {
        $this->advertisementService = new AdvertisementService();
    }

    #loading page with the needed information
    public function listPage() {
        $advertisements = $this->advertisementService->getAllAdvertisements();
        $this->view('advertisements/listPage', ['advertisements'=>$advertisements]);
    }
}