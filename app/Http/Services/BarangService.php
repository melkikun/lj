<?php
namespace App\Http\Services;

interface BarangService{

	function addBarang($request);

	function editBarang($request);

	function deleteBarang($id);

	function listBarang();

	function getBarang($id);
}