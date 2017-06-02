<?php
namespace App\Http\Services;

interface BarangService{

	function addBarang($request);

	function editBarang($id);

	function deleteBarang($id);

	function listBarang();
}