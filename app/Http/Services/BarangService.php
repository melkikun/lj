<?php
namespace App\Http\Services;

interface BarangService{

	function addBarang($request);

	function editBarang();

	function deleteBarang();

	function listBarang();
}