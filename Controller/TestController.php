<?php 
namespace Firoj\SchoolManagement\Administrator\Controller;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class TestController extends Controller 
{
    public function index(Request $request)
    {
       return $this->render('@Core/index.html.twig');
    }
}

?>