<?php

namespace App\Http\Controllers;

use App\Models\Page;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function beranda()
    {
        return  view("pages.beranda");
    }
    public function infoNegara()
    {
        return  view("pages.info-negara.info-negara");
    }
    public function informasiUmum()
    {
        return  view("pages.info-negara.informasi-umum");
    }
    public function persyaratan()
    {
        return  view("pages.info-negara.persyaratan");
    }
    public function keselamatanKeamanan()
    {
        return  view("pages.info-negara.keselamatan&keamanan");
    }
    public function hukumKebiasaan()
    {
        return  view("pages.info-negara.hukum&kebiasaan");
    }
    public function mataUang()
    {
        return  view("pages.info-negara.mata-uang");
    }
    public function asuransiKesehatan()
    {
        return  view("pages.info-negara.asuransi-kesehatan");
    }
    public function telekomunikasi()
    {
        return  view("pages.info-negara.telekomunikasi");
    }
    public function tempatIbadah()
    {
        return  view("pages.info-negara.tempat-ibadah");
    }
    public function fasilitasKesehatan()
    {
        return  view("pages.info-negara.fasilitas-kesehatan");
    }
    public function kuliner()
    {
        return  view("pages.info-negara.kuliner");
    }
    public function tempatWisata()
    {
        return  view("pages.info-negara.tempat-wisata");
    }
    public function himbauan()
    {
        return  view("pages.himbauan.himbauan");
    }
    public function himbauanDetail()
    {
        return  view("pages.himbauan.himbauan-detail");
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Page $page)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Page $page)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Page $page)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Page $page)
    {
        //
    }
}
