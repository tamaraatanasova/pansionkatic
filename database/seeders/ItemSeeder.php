<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class ItemSeeder extends Seeder
{
    public function run()
    {
        $items = [
            ['subtype_id'=>20,'name'=>'Dnevni kolać','description'=>null,'price'=>6.00],
            ['subtype_id'=>20,'name'=>'Palačinke','description'=>"marmelada\nčokolada\norasi / jam",'price'=>5.00],
            ['subtype_id'=>2,'name'=>'Dalmatinski Pršut','description'=>'pršut, masline','price'=>12.00],
            ['subtype_id'=>2,'name'=>'Sir','description'=>'Sir, masline ','price'=>12.00],
            ['subtype_id'=>2,'name'=>'Hladna Plata za 2 osobe','description'=>'Pršut, sir, masline, slani inćuni','price'=>20.00],
            ['subtype_id'=>2,'name'=>'Plata "Trpanj" (2 osobe)','description'=>'Pršut, sir, masline, riblja pašteta, mušule','price'=>22.00],
            ['subtype_id'=>3,'name'=>'Dnevna juha','description'=>null,'price'=>5.00],
            ['subtype_id'=>4,'name'=>'Miješana sezonska','description'=>null,'price'=>5.00],
            ['subtype_id'=>4,'name'=>'Kompir salata','description'=>null,'price'=>6.00],
            ['subtype_id'=>4,'name'=>'Salata sa sirom','description'=>null,'price'=>10.00],
            ['subtype_id'=>4,'name'=>'Salata od piletine','description'=>null,'price'=>12.00],
            ['subtype_id'=>4,'name'=>'Salata od tune','description'=>null,'price'=>12.00],
            ['subtype_id'=>4,'name'=>'Hobotnica salata','description'=>null,'price'=>15.00],
            ['subtype_id'=>1,'name'=>'Omlet','description'=>null,'price'=>6.00],
            ['subtype_id'=>1,'name'=>'Phovani sir i Pomfrit','description'=>null,'price'=>10.00],
            ['subtype_id'=>1,'name'=>'Špageti Milanez','description'=>null,'price'=>8.00],
            ['subtype_id'=>1,'name'=>'Špageti Bolonjez','description'=>null,'price'=>10.00],
            ['subtype_id'=>1,'name'=>'Špageti 4 vrste sira','description'=>null,'price'=>11.00],
            ['subtype_id'=>1,'name'=>'Špageti Carbonara','description'=>null,'price'=>12.00],
            ['subtype_id'=>1,'name'=>'Špageti Plodovi Mora','description'=>null,'price'=>12.00],
            ['subtype_id'=>5,'name'=>'Prženi krompir','description'=>null,'price'=>5.00],
            ['subtype_id'=>5,'name'=>'Kuhani krompir','description'=>null,'price'=>5.00],
            ['subtype_id'=>5,'name'=>'Blitva na ulju sa kuhanim krompirom','description'=>null,'price'=>5.00],
            ['subtype_id'=>5,'name'=>'Povrće na žaru','description'=>null,'price'=>5.00],  // Fixed entry
            ['subtype_id'=>5,'name'=>'Riža','description'=>'','price'=>4.00],
            ['subtype_id'=>6,'name'=>'Kobasice','description'=>'2 kobasice + prilog','price'=>9.00],
            ['subtype_id'=>6,'name'=>'Čevapi','description'=>'10 čevapi + prilog','price'=>12.00],
            ['subtype_id'=>6,'name'=>'Pleskavice','description'=>'Pleskavice + prilog','price'=>12.00],
            ['subtype_id'=>6,'name'=>'Svinjski ražnjići','description'=>'2 Svinjski ražnjići + prilog','price'=>9.00],
            ['subtype_id'=>6,'name'=>'Svinjski odrezak','description'=>'Svinjski odrezak + prilog','price'=>10.00],
            ['subtype_id'=>6,'name'=>'Pileći ražnjići','description'=>'Pileći ražnjići + prilog','price'=>10.00],
            ['subtype_id'=>6,'name'=>'Pileći file','description'=>'Pileći file + prilog','price'=>13.00],
            ['subtype_id'=>6,'name'=>'Pljeskavice punjene šunkom i sirom','description'=>'Pljeskavice punjene šunkom i sirom + prilog','price'=>14.00],
            ['subtype_id'=>6,'name'=>'Pileći file sa gorgonzolom','description'=>"Pileći file sa gorgonzolom + prilog",'price'=>14.00],
            ['subtype_id'=>6,'name'=>'Mix meso za 1 osobu','description'=>'1 pljeskavica, 3 čevapa, 1 kobasica, 1 svinjski ražnjić, 1 pilećiražnjić+prilog','price'=>15.00],
            ['subtype_id'=>6,'name'=>'Mix meso za 2 osobe','description'=>'2 pljeskavice, 6 čevapa, 2 pileća ražnjića, 2 svinjska kotleta+prilog','price'=>25.00],
            ['subtype_id'=>6,'name'=>'Mesna plata "Trpanj" za 2 osobe','description'=>'2 pljeskavice, 2 pileća filea, 6 čevapa, 2 kobasice i povrće na žaru','price'=>30.00],
            ['subtype_id'=>6,'name'=>'Mesna plata "Pelješac" za 2 osobe','description'=>'2 bifteka, 6 čevapa, 2 pileća ražnjića, 2 kobasice i povrće na žaru','price'=>40.00],
            ['subtype_id'=>6,'name'=>'Ramstek','description'=>'Ramstek + prilog','price'=>22.00],
            ['subtype_id'=>6,'name'=>'Biftek','description'=>'Biftek + prilog','price'=>27.00],
            ['subtype_id'=>7,'name'=>'NARAVNI TELEĆI ODREZAK','description'=>null,'price'=>17.00],
            ['subtype_id'=>7,'name'=>'JANJETINA SA RAŽNJA (1 KG)','description'=>null,'price'=>45.00],
            ['subtype_id'=>7,'name'=>'TELETINA ISPOD PEKE ZA 4 OSOBE ','description'=>null,'price'=>50.00],
            ['subtype_id'=>7,'name'=>'HOBOTNICA ISPOD PEKE ZA 4 OSOBE','description'=>null,'price'=>55.00],
            ['subtype_id'=>8,'name'=>'Riba 1. klase','description'=>'Brancin/Orada + prilog','price'=>18.00],
            ['subtype_id'=>8,'name'=>'Riba 3. klase','description'=>'Gavuni + prilog','price'=>10.00],
            ['subtype_id'=>8,'name'=>'Riblja plata za 2 osobe','description'=>'Riba 1. klase, mušule i blitva na dalmatinski','price'=>32.00],
            ['subtype_id'=>8,'name'=>'Riblja plata "Trpanj" za 2 osobe','description'=>'Riba 1. klase, mušule, škampi na žaru, lignje na žaru i blitva na dalmatinski','price'=>42.00],
            ['subtype_id'=>8,'name'=>'Riblja plata "Pelješac" za 2 osobe','description'=>'Riba 1. klase, riblja pašteta, hobotnica na salatu, škampi na žaru, lignje na žaru i blitva','price'=>54.00],
            ['subtype_id'=>8,'name'=>'Mušule','description'=>'','price'=>12.00],
            ['subtype_id'=>8,'name'=>'Prženi lignji','description'=>'Pohani kolutići liganja + prilog','price'=>16.00],
            ['subtype_id'=>8,'name'=>'Lignji na dalmatinski','description'=>'Lignji na dalmatinski + prilog','price'=>17.00],
            ['subtype_id'=>8,'name'=>'Tuna odrezak','description'=>'Tuna odrezak + prilog','price'=>17.00],
            ['subtype_id'=>8,'name'=>'Crni rižot','description'=>'','price'=>15.00],
            ['subtype_id'=>8,'name'=>'Rižot sa škampima','description'=>'','price'=>17.00],
            ['subtype_id'=>8,'name'=>'Škampi na žaru','description'=>'Škampi na žaru + prilog','price'=>19.00],
            ['subtype_id'=>9,'name'=>'Margarita (medium)','description'=>'Pelata, sir, origano','price'=>9.00],
            ['subtype_id'=>9,'name'=>'Margarita (jumbo)','description'=>'Pelata, sir, origano','price'=>18.00],
            ['subtype_id'=>9,'name'=>'Fungi (medium)','description'=>'Pelata, sir, gljive, origano','price'=>9.00],
            ['subtype_id'=>9,'name'=>'Fungi (jumbo)','description'=>'Pelata, sir, gljive, origano','price'=>18.00],
            ['subtype_id'=>9,'name'=>'Vegetarijana (medium)','description'=>'Pelata, sir, rajčica, kapula, krastavac, paprika, origano','price'=>10.00],
            ['subtype_id'=>9,'name'=>'Vegetarijana (jumbo)','description'=>'Pelata, sir, rajčica, kapula, krastavac, paprika, origano','price'=>20.00],
            ['subtype_id'=>9,'name'=>'Mixed (medium)','description'=>'Pelata, sir, šunka, gljive, origano','price'=>10.00],
            ['subtype_id'=>9,'name'=>'Mixed (jumbo)','description'=>'Pelata, sir, šunka, gljive, origano','price'=>20.00],
            ['subtype_id'=>9,'name'=>'Mexicana (medium)','description'=>'Pelata, sir, šunka, chilli, feferoni, origano','price'=>11.00],
            ['subtype_id'=>9,'name'=>'Mexicana (jumbo)','description'=>'Pelata, sir, šunka, chilli, feferoni, origano','price'=>22.00],
            ['subtype_id'=>9,'name'=>'Slavonksa (medium)','description'=>'Pelata, sir, šunka, zimska salama, feferoni, origano','price'=>11.00],
            ['subtype_id'=>9,'name'=>'Slavonska (jumbo)','description'=>'Pelata, sir, šunka, zimska salama, feferoni, origano','price'=>22.00],
            ['subtype_id'=>9,'name'=>'Bijela (medium)','description'=>'Vrhnje, 2 vrste sira, mozarela, gljive, origano','price'=>11.00],
            ['subtype_id'=>9,'name'=>'Bijela (jumbo)','description'=>'Vrhnje, 2 vrste sira, mozarela, gljive, origano','price'=>22.00],
            ['subtype_id'=>9,'name'=>'Šunka (medium)','description'=>'Pelata, sir, šunka, origano','price'=>10.00],
            ['subtype_id'=>9,'name'=>'Šunka (jumbo)','description'=>'Pelata, sir, šunka, origano','price'=>20.00],
        ];

        foreach ($items as $item) {
            DB::table('items')->insert([
                'subtype_id' => $item['subtype_id'],
                'name' => $item['name'],
                'description' => $item['description'],
                'price' => $item['price'],
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]);
        }
    }
}
