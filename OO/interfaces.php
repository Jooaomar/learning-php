<?php 

/**
 * Interfaces servem para definir modelos a ser usado por outras classes. Os métodos devem ser public
 */
interface Crud 
{
	public function create();
	public function read();
	public function update();
	public function delete();
}

/**
 * A interface obriga a classe interligada a ter os mesmos métodos e outros estabelecidos 
 */
class Noticias implements Crud
{
	public function create()
	{
		// code...
	}
	public function read()
	{
		// code...
	}
	public function update()
	{
		// code...
	}
	public function delete()
	{
		// code...
	}
}