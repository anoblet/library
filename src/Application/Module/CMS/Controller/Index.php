<?php
namespace Application\Module\CMS\Controller {

    use \Application\Module\CMS;

    class Index
    {
        use \Application\Controller;
      
        public function Index() {

        }
        public Function Home() {
            return CMS::getStaticView("Home.phtml");
        }
    }
}

?>