<?php

use Illuminate\Database\Seeder;

class CategoriesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('categories')->delete();
        
        \DB::table('categories')->insert(array (
            0 => 
            array (
                'created_at' => '2020-10-22 06:57:13',
                'description' => NULL,
                'id' => 7,
                'name' => 'Supplies',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'supplies',
                'updated_at' => '2020-10-22 06:57:13',
            ),
            1 => 
            array (
                'created_at' => '2020-10-22 06:57:27',
                'description' => NULL,
                'id' => 8,
                'name' => 'Supportive Products',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'supportive-products',
                'updated_at' => '2020-10-22 06:57:27',
            ),
            2 => 
            array (
                'created_at' => '2020-10-22 06:57:38',
                'description' => NULL,
                'id' => 9,
                'name' => 'Chemicals',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'chemicals',
                'updated_at' => '2020-10-22 06:57:38',
            ),
            3 => 
            array (
                'created_at' => '2020-10-22 06:57:52',
                'description' => NULL,
                'id' => 10,
                'name' => 'Brands',
                'order' => 1,
                'parent_id' => NULL,
                'slug' => 'brands',
                'updated_at' => '2020-10-22 06:57:52',
            ),
            4 => 
            array (
                'created_at' => '2020-10-22 06:58:27',
                'description' => NULL,
                'id' => 11,
                'name' => 'Lancer',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'lancer',
                'updated_at' => '2020-10-22 06:58:27',
            ),
            5 => 
            array (
                'created_at' => '2020-10-22 06:58:53',
                'description' => NULL,
                'id' => 12,
                'name' => 'Excalibur',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'excalibur',
                'updated_at' => '2020-10-22 06:58:53',
            ),
            6 => 
            array (
                'created_at' => '2020-10-22 06:59:05',
                'description' => NULL,
                'id' => 13,
                'name' => 'Evolution',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'evolution',
                'updated_at' => '2020-10-22 06:59:21',
            ),
            7 => 
            array (
                'created_at' => '2020-10-22 06:59:37',
                'description' => NULL,
                'id' => 14,
                'name' => 'STI Silicons',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'sti-silicons',
                'updated_at' => '2020-10-22 06:59:37',
            ),
            8 => 
            array (
                'created_at' => '2020-10-22 07:00:00',
                'description' => NULL,
                'id' => 16,
                'name' => 'Inknovators',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'inknovators',
                'updated_at' => '2020-10-22 07:00:00',
            ),
            9 => 
            array (
                'created_at' => '2020-10-22 07:00:27',
                'description' => NULL,
                'id' => 18,
                'name' => 'Antex',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'antex',
                'updated_at' => '2020-10-22 07:00:27',
            ),
            10 => 
            array (
                'created_at' => '2020-10-22 07:00:42',
                'description' => NULL,
                'id' => 19,
                'name' => 'Afford',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'afford',
                'updated_at' => '2020-10-22 07:00:42',
            ),
            11 => 
            array (
                'created_at' => '2020-10-22 07:01:00',
                'description' => NULL,
                'id' => 20,
                'name' => 'Rhinotech',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'rhinotech',
                'updated_at' => '2020-10-22 07:01:00',
            ),
            12 => 
            array (
                'created_at' => '2020-10-22 07:01:16',
                'description' => NULL,
                'id' => 21,
                'name' => 'Imagemate',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'imagemate',
                'updated_at' => '2020-10-22 07:01:16',
            ),
            13 => 
            array (
                'created_at' => '2020-10-22 07:01:31',
                'description' => NULL,
                'id' => 22,
                'name' => 'DST',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'dst',
                'updated_at' => '2020-10-22 07:01:31',
            ),
            14 => 
            array (
                'created_at' => '2020-10-22 07:01:43',
                'description' => NULL,
                'id' => 23,
                'name' => 'Acosgraf',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'acosgraf',
                'updated_at' => '2020-10-22 07:01:43',
            ),
            15 => 
            array (
                'created_at' => '2020-10-22 07:01:56',
                'description' => NULL,
                'id' => 24,
                'name' => 'Perfectone',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'perfectone',
                'updated_at' => '2020-10-22 07:01:56',
            ),
            16 => 
            array (
                'created_at' => '2020-10-22 07:02:09',
                'description' => NULL,
                'id' => 25,
                'name' => 'Perfect Color',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'perfect-color',
                'updated_at' => '2020-10-22 07:02:09',
            ),
            17 => 
            array (
                'created_at' => '2020-10-22 07:02:24',
                'description' => NULL,
                'id' => 26,
                'name' => 'South Tech',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'south-tech',
                'updated_at' => '2020-10-22 07:02:24',
            ),
            18 => 
            array (
                'created_at' => '2020-10-22 07:02:54',
                'description' => NULL,
                'id' => 28,
                'name' => 'Salipt',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'salipt',
                'updated_at' => '2020-10-22 07:02:54',
            ),
            19 => 
            array (
                'created_at' => '2020-10-22 07:03:12',
                'description' => NULL,
                'id' => 29,
                'name' => 'Allover Printing Chemical',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'allover-printing-chemical',
                'updated_at' => '2020-10-22 07:03:12',
            ),
            20 => 
            array (
                'created_at' => '2020-10-22 07:03:24',
                'description' => NULL,
                'id' => 30,
                'name' => 'Digital Printing Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'digital-printing-chemicals',
                'updated_at' => '2020-10-22 07:03:24',
            ),
            21 => 
            array (
                'created_at' => '2020-10-22 07:03:45',
                'description' => NULL,
                'id' => 31,
                'name' => 'Washing Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'washing-chemicals',
                'updated_at' => '2020-10-22 07:03:45',
            ),
            22 => 
            array (
                'created_at' => '2020-10-22 07:03:57',
                'description' => NULL,
                'id' => 32,
                'name' => 'Dyeing Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'dyeing-chemicals',
                'updated_at' => '2020-10-22 07:03:57',
            ),
            23 => 
            array (
                'created_at' => '2020-10-22 07:04:09',
                'description' => NULL,
                'id' => 33,
                'name' => 'Finishing Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'finishing-chemicals',
                'updated_at' => '2020-10-22 07:04:09',
            ),
            24 => 
            array (
                'created_at' => '2020-10-22 07:04:27',
                'description' => NULL,
                'id' => 34,
                'name' => 'Laboratory Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'laboratory-chemicals',
                'updated_at' => '2020-10-22 07:04:27',
            ),
            25 => 
            array (
                'created_at' => '2020-10-22 07:04:47',
                'description' => NULL,
                'id' => 35,
                'name' => 'Paper Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'paper-chemicals',
                'updated_at' => '2020-10-22 07:04:47',
            ),
            26 => 
            array (
                'created_at' => '2020-10-22 07:04:58',
                'description' => NULL,
                'id' => 36,
                'name' => 'Argo Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'argo-chemicals',
                'updated_at' => '2020-10-22 07:04:58',
            ),
            27 => 
            array (
                'created_at' => '2020-10-22 07:05:10',
                'description' => NULL,
                'id' => 37,
                'name' => 'Phermaceutical Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'phermaceutical-chemicals',
                'updated_at' => '2020-10-22 07:05:10',
            ),
            28 => 
            array (
                'created_at' => '2020-10-22 07:05:25',
                'description' => NULL,
                'id' => 38,
                'name' => 'Packaging Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'packaging-chemicals',
                'updated_at' => '2020-10-22 07:05:25',
            ),
            29 => 
            array (
                'created_at' => '2020-10-22 07:05:37',
                'description' => NULL,
                'id' => 39,
                'name' => 'Cleaning Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'cleaning-chemicals',
                'updated_at' => '2020-10-22 07:05:37',
            ),
            30 => 
            array (
                'created_at' => '2020-10-22 07:05:49',
                'description' => NULL,
                'id' => 40,
                'name' => 'Ceramic Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'ceramic-chemicals',
                'updated_at' => '2020-10-22 07:05:49',
            ),
            31 => 
            array (
                'created_at' => '2020-10-22 07:06:12',
                'description' => NULL,
                'id' => 41,
                'name' => 'Paint & Ink Manufacturing Chemicals',
                'order' => 1,
                'parent_id' => 9,
                'slug' => 'paint-and-ink-manufacturing-chemicals',
                'updated_at' => '2020-10-22 07:06:12',
            ),
            32 => 
            array (
                'created_at' => '2020-10-22 07:06:26',
                'description' => NULL,
                'id' => 42,
                'name' => 'Vinyl',
                'order' => 1,
                'parent_id' => 8,
                'slug' => 'vinyl',
                'updated_at' => '2020-10-22 07:06:26',
            ),
            33 => 
            array (
                'created_at' => '2020-10-22 07:06:40',
                'description' => NULL,
                'id' => 43,
                'name' => 'Screen Mesh',
                'order' => 1,
                'parent_id' => 8,
                'slug' => 'screen-mesh',
                'updated_at' => '2020-10-22 07:06:40',
            ),
            34 => 
            array (
                'created_at' => '2020-10-22 07:06:54',
                'description' => NULL,
                'id' => 44,
                'name' => 'Squegges',
                'order' => 1,
                'parent_id' => 8,
                'slug' => 'squegges',
                'updated_at' => '2020-10-22 07:06:54',
            ),
            35 => 
            array (
                'created_at' => '2020-10-22 07:07:10',
                'description' => NULL,
                'id' => 45,
                'name' => 'Emulsion',
                'order' => 1,
                'parent_id' => 8,
                'slug' => 'emulsion',
                'updated_at' => '2020-10-22 07:07:10',
            ),
            36 => 
            array (
                'created_at' => '2020-10-22 07:07:53',
                'description' => NULL,
                'id' => 47,
                'name' => 'Tape, Paper & Film',
                'order' => 1,
                'parent_id' => 8,
                'slug' => 'tape-paper-and-film',
                'updated_at' => '2020-10-22 07:07:53',
            ),
            37 => 
            array (
                'created_at' => '2020-10-22 07:08:13',
                'description' => '<p>TEST DESCRIPTION</p>
<p style="margin: 0px 0px 15px; padding: 0px; text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Sed libero ante, convallis eget venenatis vitae, mollis sed arcu. Cras tempor ex sit amet turpis sodales aliquet. Aenean id scelerisque ante. Suspendisse sed sollicitudin libero, eget iaculis velit.</p>
<ul>
<li style="text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Nullam et nisi tempus, commodo leo vel,</li>
<li style="text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">mollis ex. Maecenas vitae cursus nibh.</li>
<li style="text-align: justify; color: #000000; font-family: \'Open Sans\', Arial, sans-serif;">Cras ac molestie ligula, eu porta orci.</li>
</ul>',
                'id' => 48,
                'name' => 'Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'inks',
                'updated_at' => '2020-10-31 18:03:04',
            ),
            38 => 
            array (
                'created_at' => '2020-10-22 07:08:36',
                'description' => NULL,
                'id' => 49,
                'name' => 'Film & Output Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'film-and-output-inks',
                'updated_at' => '2020-10-22 07:08:36',
            ),
            39 => 
            array (
                'created_at' => '2020-10-22 07:09:00',
                'description' => NULL,
                'id' => 50,
                'name' => 'Screen Printing Ink',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'screen-printing-ink',
                'updated_at' => '2020-10-22 07:09:00',
            ),
            40 => 
            array (
                'created_at' => '2020-10-22 07:09:15',
                'description' => NULL,
                'id' => 51,
                'name' => 'Offset Press Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'offset-press-inks',
                'updated_at' => '2020-10-22 07:09:15',
            ),
            41 => 
            array (
                'created_at' => '2020-10-22 07:09:28',
                'description' => NULL,
                'id' => 52,
                'name' => 'Sublimation Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'sublimation-inks',
                'updated_at' => '2020-10-22 07:09:28',
            ),
            42 => 
            array (
                'created_at' => '2020-10-22 07:09:40',
                'description' => NULL,
                'id' => 53,
                'name' => 'Pad Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'pad-printing-inks',
                'updated_at' => '2020-10-22 07:09:40',
            ),
            43 => 
            array (
                'created_at' => '2020-10-22 07:09:51',
                'description' => NULL,
                'id' => 54,
                'name' => 'Security Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'security-inks',
                'updated_at' => '2020-10-22 07:09:51',
            ),
            44 => 
            array (
                'created_at' => '2020-10-22 07:10:05',
                'description' => NULL,
                'id' => 55,
                'name' => 'Heat Transfer Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'heat-transfer-inks',
                'updated_at' => '2020-10-22 07:10:05',
            ),
            45 => 
            array (
                'created_at' => '2020-10-22 07:10:19',
                'description' => NULL,
                'id' => 56,
                'name' => 'Decal Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'decal-printing-inks',
                'updated_at' => '2020-10-22 07:10:19',
            ),
            46 => 
            array (
                'created_at' => '2020-10-22 07:10:34',
                'description' => NULL,
                'id' => 57,
                'name' => 'Digital Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'digital-printing-inks',
                'updated_at' => '2020-10-22 07:10:34',
            ),
            47 => 
            array (
                'created_at' => '2020-10-22 07:11:19',
                'description' => NULL,
                'id' => 59,
                'name' => 'Desktop Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'desktop-printing-inks',
                'updated_at' => '2020-10-22 07:11:19',
            ),
            48 => 
            array (
                'created_at' => '2020-10-22 07:11:35',
                'description' => NULL,
                'id' => 60,
                'name' => 'Pigment Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'pigment-printing-inks',
                'updated_at' => '2020-10-22 07:11:35',
            ),
            49 => 
            array (
                'created_at' => '2020-10-22 07:11:50',
                'description' => NULL,
                'id' => 61,
                'name' => 'Flexo Printing Inks',
                'order' => 1,
                'parent_id' => 7,
                'slug' => 'flexo-printing-inks',
                'updated_at' => '2020-10-22 07:11:50',
            ),
            50 => 
            array (
                'created_at' => '2020-11-09 16:31:00',
                'description' => '<div id="panel-5596-3-0-0" class="so-panel widget widget_sow-headline panel-first-child" style="font-family: Lato, -apple-system, BlinkMacSystemFont, \'Segoe UI\', Roboto, Helvetica, Arial, sans-serif, \'Apple Color Emoji\', \'Segoe UI Emoji\', \'Segoe UI Symbol\'; zoom: 1; margin-bottom: 30px; color: #555555; font-size: medium;" data-index="9">
<div class="so-widget-sow-headline so-widget-sow-headline-default-83fab2a0aaa2">
<div class="sow-headline-container ">
<h6 class="sow-headline" style="font-family: Montserrat; font-weight: 500; color: #333333; line-height: 36px; font-size: 26px; margin-bottom: 0px !important; margin-top: 0px !important; text-align: left;">"ChromaLime is exactly what I\'ve been looking for. I\'m shooting six second exposures on LED and it holds up all day! A great product from a great company."</h6>
<p><!-- [if !supportLists]--><span style="font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;"><span style="mso-list: Ignore;">&Oslash;<span style="font: 7.0pt \'Times New Roman\';">&nbsp; </span></span></span><!--[endif]-->Good screen printing results start with a good stencil, and the best stencils start with the right emulsion. Our premium screen printing emulsions are extremely high quality, easy to apply to the screen, and easy to reclaim.</p>
<p><!-- [if !supportLists]--><span style="font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;"><span style="mso-list: Ignore;">&Oslash;<span style="font: 7.0pt \'Times New Roman\';">&nbsp; </span></span></span><!--[endif]-->Chromaline branded screen printing emulsions are engineered and manufactured for outstanding performance and consistency. As your business continues to grow, don&rsquo;t let production slow down due to inferior supplies.</p>
<p><!-- [if !supportLists]--><span style="font-family: Wingdings; mso-fareast-font-family: Wingdings; mso-bidi-font-family: Wingdings;"><span style="mso-list: Ignore;">&Oslash;<span style="font: 7.0pt \'Times New Roman\';">&nbsp; </span></span></span><!--[endif]-->Rely on Chromaline&rsquo;s premium screen printing emulsions to deliver high quality images without the need to remake screens. In addition, reclaiming your screens has never been easier.</p>
<h3 style="margin-bottom: 0.75em; margin-top: 0.75em; background-color: #efefef;"><span style="color: #007ac2;"><span style="font-weight: bolder;">Premium Emulsion Recommendations</span></span></h3>
<p style="line-height: 28.56px; background-color: #efefef;"><span style="color: #007ac2;">✓</span>&nbsp;<span style="font-weight: bolder;">Desire faster exposure times and only work with plastisol inks?</span>&nbsp;Try&nbsp;<a style="background-color: transparent; color: #177ac2; text-decoration-line: none;" href="https://shop.chromaline.com/chromalime/" target="_blank" rel="noopener">ChromaLime</a>, our next generation technology<br /><span style="color: #007ac2;">✓</span>&nbsp;<span style="font-weight: bolder;">Desire the ability to make HD stencils?</span>&nbsp;Try&nbsp;<a style="background-color: transparent; color: #177ac2; text-decoration-line: none;" href="https://shop.chromaline.com/chromablue/" target="_blank" rel="noopener">ChromaBlue</a><br /><span style="color: #007ac2;">✓</span>&nbsp;<span style="font-weight: bolder;">Printing with water based inks?</span>&nbsp;Try&nbsp;<a style="background-color: transparent; color: #177ac2; text-decoration-line: none;" href="https://shop.chromaline.com/chromatech-wr/" target="_blank" rel="noopener">ChromaTech-WR</a><br /><span style="color: #007ac2;">✓</span>&nbsp;<span style="font-weight: bolder;">Using aggressive inks like UV, enamel, and solvents?</span>&nbsp;Try&nbsp;<a style="background-color: transparent; color: #177ac2; text-decoration-line: none;" href="https://shop.chromaline.com/magnacure-udc-2/" target="_blank" rel="noopener">UDC-2</a>&nbsp;or&nbsp;<a style="background-color: transparent; color: #177ac2; text-decoration-line: none;" href="https://shop.chromaline.com/magnacure-udc-ace/" target="_blank" rel="noopener">UDC-ACE</a></p>
</div>
</div>
</div>',
                'id' => 62,
                'name' => 'Chromaline',
                'order' => 1,
                'parent_id' => 10,
                'slug' => 'chromaline',
                'updated_at' => '2020-11-09 16:44:24',
            ),
        ));
        
        
    }
}