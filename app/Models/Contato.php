<?php namespace App\Models;

use CodeIgniter\Model;

class Contato extends Model
{
    protected $table      = 'contatos';
    protected $primaryKey = 'id';

    protected $allowedFields = ['nome', 'email', 'telefone'];
}