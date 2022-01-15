<?php

namespace App\Controllers;

use CodeIgniter\HTTP\RequestInterface;



class Home extends BaseController
{
  protected $request;
  public function __construct(RequestInterface $request)
  {
    $this->request = $request;
  }/* constructor */
    public function index()
    {

      echo view("templates/head.php");
      echo view("templates/body.php");
      echo view("templates/footer.php");
       
    }/* index */

    public function Datos(){

      if($this->request->getMethod()=="post"){

        $nombre = $this->request ->getPost("nombre");
        $noControl = $this->request ->getPost("Nocontrol");
        echo $nombre . " >>>  " . $noControl;

      }

    }/* Datos */
}
