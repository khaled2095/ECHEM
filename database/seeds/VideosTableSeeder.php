<?php

use Illuminate\Database\Seeder;

class VideosTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('videos')->delete();
        
        \DB::table('videos')->insert(array (
            0 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 15:33:07',
                'description' => 'Hybrid Foil Adhesive',
                'id' => 5,
                'name' => 'Hybrid Foil Adhesive',
                'updated_at' => '2020-11-14 15:33:07',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/ChFxBH3xhUU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            1 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:21:56',
                'description' => 'WT White WT Clear',
                'id' => 6,
                'name' => 'WT White WT Clear',
                'updated_at' => '2020-11-14 17:21:56',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/wqa03BPO6cQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            2 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:23:04',
                'description' => 'Water Based Poly White',
                'id' => 7,
                'name' => 'Water Based Poly White',
                'updated_at' => '2020-11-14 17:23:04',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/vZOl7TSdsSQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            3 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:24:09',
                'description' => 'Water Based ink',
                'id' => 8,
                'name' => 'Water Based ink',
                'updated_at' => '2020-11-14 17:24:09',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/laX3P7yhkXE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            4 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:25:54',
                'description' => 'TB White TB Clear With Pigment',
                'id' => 9,
                'name' => 'TB White TB Clear With Pigment',
                'updated_at' => '2020-11-14 17:25:54',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/T-cqB_hBkPA" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            5 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:27:03',
                'description' => 'Plastisol PL Series by echem',
                'id' => 10,
                'name' => 'Plastisol PL Series by echem',
                'updated_at' => '2020-11-14 17:27:03',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/jTOjuyiZ4uM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            6 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 17:29:53',
                'description' => 'PL White PL Color by echem',
                'id' => 11,
                'name' => 'PL White PL Color by echem',
                'updated_at' => '2020-11-14 17:29:53',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/MQOPGJ68Wi8" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            7 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:05:28',
                'description' => 'PL Puff PL Black by echem',
                'id' => 12,
                'name' => 'PL Puff PL Black by echem',
                'updated_at' => '2020-11-14 18:05:28',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/nXxKtagaZAY" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            8 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:06:27',
                'description' => 'PL Low Bleed#',
                'id' => 13,
                'name' => 'PL Low Bleed',
                'updated_at' => '2020-11-14 18:06:27',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/h8DrZcqGolU" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            9 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:07:41',
                'description' => 'PL Foil Adhesive',
                'id' => 14,
                'name' => 'PL Foil Adhesive',
                'updated_at' => '2020-11-14 18:07:41',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/w-9jFBqV4t0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            10 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:08:41',
                'description' => 'ND White ND Clear Base',
                'id' => 15,
                'name' => 'ND White ND Clear Base',
                'updated_at' => '2020-11-14 18:08:41',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/NASb6USfczs" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            11 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:10:24',
                'description' => 'Hybrid LM White of Mesh 110',
                'id' => 16,
                'name' => 'Hybrid LM White of Mesh 110',
                'updated_at' => '2020-11-14 18:10:24',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/3d__Fvw5agE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            12 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:15:40',
                'description' => 'Hybrid HM LM Clear',
                'id' => 17,
                'name' => 'Hybrid HM LM Clear',
                'updated_at' => '2020-11-14 18:15:40',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/xq6aw1cOXiM" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            13 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:17:14',
                'description' => 'Hybrid HM LM White',
                'id' => 18,
                'name' => 'Hybrid HM LM White',
                'updated_at' => '2020-11-14 18:17:14',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/H_5YO7AM43I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
            14 => 
            array (
                'category_id' => 1,
                'created_at' => '2020-11-14 18:18:22',
                'description' => 'Hybrid Flock Adhesive',
                'id' => 19,
                'name' => 'Hybrid Flock Adhesive',
                'updated_at' => '2020-11-14 18:18:22',
                'video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/tozJNPrOees" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
            ),
        ));
        
        
    }
}