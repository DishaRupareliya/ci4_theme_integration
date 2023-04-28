<?php 
namespace Example1\Controllers;
use \Hermawan\DataTables\DataTable;

class DatatableDemo extends \App\Controllers\BaseController
{
  /**
   * INDEX LEAD STATUS
   */
  public function index() {
     echo view('Example1\Views\index');
  }

  /**
   * INSERT LEAD STATUS
   */
  public function insert() {
     echo view('Example1\Views\insert');
  }

  /**
   * UPDATE LEAD STATUS
   */
  public function update() {
     echo view('Example1\Views\update');
  }

  /**
   * DELETE LEAD STATUS
   */
  public function delete() {
     echo view('Example1\Views\manage');
  }


    public function ajaxDatatable()
    {
        $db = db_connect();
        $builder = $db->table('projects')->select('id, name');

        return DataTable::of($builder)->toJson();
    }

}
