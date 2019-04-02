<?php
class Pages extends CI_Controller {
	//public function view($page = 'inicio')
	//{
		//if ( ! file_exists(APPPATH.'views/pages/'.$page.'.php'))
		//{
			//Rayos, todavía no hay una página para eso :'v
		//	show_404();
		//}

		//$data['title'] = ucfirst($page); //ucfirst escribe la primera letra en mayúscula

		//$this->load->view('templates/header', $data);
		//$this->load->view('pages/'.$page, $data);
		//$this->load->view('templates/footer', $data);
	//}

//public function index()
//		{
//			$this->load->view('templates/header');
//			$this->load->view('pages/inicio');
//			$this->load->view('templates/footer');
//		}

	function __construct()
	{
		parent::__construct();
	}

	public function index()
	{
		$data['title'] = ucfirst('inicio'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/inicio');
		$this->load->view('templates/footer');
	}

	public function contacto()
	{
		$data['title'] = ucfirst('contacto'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/contacto');
		$this->load->view('templates/footer');
	}

	public function quienes_somos()
	{
		$data['title'] = ucfirst('quiénes somos'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/quienes_somos');
		$this->load->view('templates/footer');
	}

	public function tesis()
	{
		$data['title'] = ucfirst('Tesis'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/tesis');
		$this->load->view('templates/footer');
	}

	public function articulos()
	{
		$data['title'] = ucfirst('artículos'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/articulos');
		$this->load->view('templates/footer');
	}

	public function carteles()
	{
		$data['title'] = ucfirst('carteles'); //ucfirst escribe la primera letra en mayúscula
		//redirect(base_url().'publicaciones/carteles');
		$this->load->view('templates/header', $data);
		$this->load->view('pages/carteles');
		$this->load->view('templates/footer');
	}

	public function presentaciones()
	{
		$data['title'] = ucfirst('presentaciones orales'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/presentaciones');
		$this->load->view('templates/footer');
	}

	public function fotos()
	{
		$data['title'] = ucfirst('fotos'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/fotos');
		$this->load->view('templates/footer');
	}

	public function videos()
	{
		$data['title'] = ucfirst('vídeos'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/videos');
		$this->load->view('templates/footer');
	}

	public function modelacion_atmosferica()
	{
		$data['title'] = ucfirst('modelación atmosférica'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/modelacion_atmosferica');
		$this->load->view('templates/footer');
	}

	public function modelacion_oceanica()
	{
		$data['title'] = ucfirst('modelación océanica'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/modelacion_oceanica');
		$this->load->view('templates/footer');
	}

	public function modelacion_mallas()
	{
		$data['title'] = ucfirst('modelación mallas no estructuradas'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/modelacion_mallas');
		$this->load->view('templates/footer');
	}

	public function atlas_meterologico()
	{
		$data['title'] = ucfirst('atlas meteorológico digital'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/atlas_meterologico');
		$this->load->view('templates/footer');
	}

	public function tomo_1()
	{
		$data['title'] = ucfirst('tomo 1 meteorología'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/tomo_1');
		$this->load->view('templates/footer');
	}

	public function modulos_derrames()
	{
		$data['title'] = ucfirst('módulos de derrames'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/modulos_derrames');
		$this->load->view('templates/footer');
	}

	public function bases_datos()
	{
		$data['title'] = ucfirst('bases de datos'); //ucfirst escribe la primera letra en mayúscula
		$this->load->view('templates/header', $data);
		$this->load->view('pages/bases_datos');
		$this->load->view('templates/footer');
	}

}
