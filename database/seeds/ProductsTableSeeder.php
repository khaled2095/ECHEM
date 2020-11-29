<?php

use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('products')->delete();
        
        \DB::table('products')->insert(array (
            0 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/Q8uaMpwemevqrELefpwK.png',
                'created_at' => '2020-11-09 17:44:00',
                'description' => '<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #0000ff;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">ChromaTech WR</span></span>&nbsp;is Chromaline\'s latest water-resistant pure photopolymer emulsion. Dual cure technology built into a ready-to-use formula.&nbsp;&nbsp;</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; color: #0000ff;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">ChromaTech WR</span></span>&nbsp;is designed for textile printing offering superior durability to water based and discharge inks as well as the press cleaning solvents used when printing plastisol inks.</span></p>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box;">Due to the high solid content,&nbsp;<span style="box-sizing: border-box; color: #0000ff;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">ChromaTech WR</span></span>&nbsp;is most often applied with a 1x1 coating. Just two simple coatings reduces your coating time and consumes less product per screen (more screens per gallon). ChromaTech WR offers extremely fast exposure which in large shops translates to substantial time savings.</span></p>
<ul style="box-sizing: border-box; margin: 0px 0px 1.5rem 1.15rem; padding: 0px; list-style-position: outside; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Color:&nbsp;<span style="box-sizing: border-box; color: #0000ff;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">Blue</span></span></span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Solids: 46%</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Viscosity: High</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Fast Exposure</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Excellent mesh bridging</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Sharp image quality</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Resistance to plastisol, water and&nbsp;</span><span style="box-sizing: border-box;">discharge inks</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">Does NOT require stencil hardener chemistry</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;">View&nbsp;<span style="box-sizing: border-box; font-weight: bold; line-height: inherit;"><a style="box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;" href="https://www.ikonics.com/userguides/" target="_blank" rel="noopener">User Guide</a></span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;">View&nbsp;<span style="box-sizing: border-box; font-weight: bold; line-height: inherit;"><a style="box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;" href="https://www.ikonics.com/sds/" target="_blank" rel="noopener">SDS</a></span></li>
</ul>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">What our Customers Say:</span></p>
<ul style="box-sizing: border-box; margin: 0px 0px 1.5rem 1.15rem; padding: 0px; list-style-position: outside; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;">
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">"1+1 coating is all I need"</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">"I consolidated from 2 different emulsions to just this one for both of my plastisol and discharge ink setups"</span></li>
<li style="box-sizing: border-box; margin: 0px; padding: 0px;"><span style="box-sizing: border-box;">"I\'m now in single digit exposure times on my LED system"</span></li>
</ul>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box; background-color: #ffff00;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">Bottom line - Perfect emulsion if your shop uses mostly plastisol, but also prints water/discharge inks.</span></span></p>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><span style="box-sizing: border-box;"><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;"><span style="box-sizing: border-box; line-height: inherit;"><span style="box-sizing: border-box; color: #ff00ff;">SHIPPING NOTE:&nbsp;</span>This product is not freeze/thaw stable and will not ship during freezing temperatures.</span></span></span></p>
<hr style="box-sizing: content-box; height: 0px; border-style: solid; border-color: #e5e5e5; border-image: initial; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; clear: both; margin: 2rem 0px 1.92857rem; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;" />
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><img class="__mce_add_custom__" style="box-sizing: border-box; border: 0px; display: inline-block; height: auto; max-width: 100%; vertical-align: middle; float: left; margin: 5px 20px 5px 0px;" title="pro-tip-chromaline.png" src="https://cdn8.bigcommerce.com/s-kk74s4rcmv/product_images/uploaded_images/pro-tip-chromaline.png" alt="pro-tip-chromaline.png" width="135" height="36" /></p>
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;">Doing a long run job with water/discharge ink?&nbsp; Simply add a&nbsp;<a style="box-sizing: border-box; background-color: transparent; color: #007ac2; line-height: inherit; text-decoration-line: none; transition: color 0.15s ease 0s;" href="https://shop.chromaline.com/magna-cure-diazo-sensitizer-bottle/?attributes=eyIxODAiOjI2N30">3gr bottle of diazo sensitizer</a>&nbsp;to a gallon of ChromaTech WR and it will boost resistance for thousands of prints.</p>
<hr style="box-sizing: content-box; height: 0px; border-style: solid; border-color: #e5e5e5; border-image: initial; border-right-width: 0px; border-bottom-width: 0px; border-left-width: 0px; clear: both; margin: 2rem 0px 1.92857rem; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;" />
<p style="box-sizing: border-box; margin: 0px 0px 1.5rem; padding: 0px; color: #333333; font-family: Karla, Arial, Helvetica, sans-serif;"><img class="__mce_add_custom__" style="box-sizing: border-box; border: 0px; display: inline-block; height: auto; max-width: 100%; vertical-align: middle;" title="p95-warning-28x22.png" src="https://cdn8.bigcommerce.com/s-kk74s4rcmv/product_images/uploaded_images/p95-warning-28x22.png" alt="p95-warning-28x22.png" width="28" height="22" /><span style="box-sizing: border-box; font-weight: bold; line-height: inherit;">WARNING:</span>&nbsp;This product can expose you to chemicals including benzophenone, which is known in the State of California to cause cancer. For more information go to</p>',
                'featured' => 0,
                'id' => 38,
                'min_qty' => NULL,
                'name' => 'ChromaTech WR',
                'price' => 5999.0,
                'product_pdf' => '[]',
                'product_video' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/66MnDKX11Gc" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>',
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:21:10',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            1 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/e44XGlw9dgUwTbYQXf2N.png',
                'created_at' => '2020-11-09 18:33:00',
                'description' => '<p><strong>EP BLUE</strong></p>
<p><a href="https://www.inknovators.com/images/galeri/test-009-EP-Blue.pdf">SDS&nbsp;</a></p>
<p><a href="https://www.inknovators.com/images/galeri/tds-009-EP-Blue.pdf">TDS&nbsp;</a></p>
<p><a href="https://www.inknovators.com/images/galeri/test-009-EP-Blue.pdf">TEST REPORTS</a></p>',
                'featured' => 1,
                'id' => 39,
                'min_qty' => NULL,
                'name' => 'EP BLUE',
                'price' => 1400.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/7meULGoRwY8qDkoqNkGz.pdf","original_name":"sds-009-EP-Blue.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:19:35',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            2 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/CH3x7OijC8gsgnWyoYCY.jpg',
                'created_at' => '2020-11-09 18:44:00',
                'description' => '<p class="MsoNormal" style="line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;">E9211 Union Foil Adhesive</span></p>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #72b9ff;">Features:</span></p>
<ul type="disc">
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Ideal for Woven Fabrics</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Non-Phthalate</span></li>
</ul>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #72b9ff;">Description:</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">UFOIL-E9211 Foil Adhesive can be directy printed and cured,or, applied to the garment by the transfer method. UFOIL-E9211 is a NonPhthalate formulation which complies with regulations regarding printing onto children\'s wear. This product is also processed with a smoother consistency with less clogging in the mesh.</span></p>
<p class="MsoNormal">&nbsp;</p>
<h2 style="background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; color: #302b27; font-weight: normal;">SPECIFICATIONS:</span></h2>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">TRANSFER METHOD:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Print the design on the noncolor side of the foil sheet and semicure or gel the transfer print at 240&deg; F.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">DIRECT PRINT METHOD:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">Print the design using E9211 Foil Adhesive directly on the garment and cure the entire ink film at 300&deg;F (149&deg;C).</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">MESH:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">83/inch to 110/inch (33T cm to 44T cm) monofilament polyester.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">FOIL APPLICATION:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">Apply the plastisol heat transfer or direct print to the garment. If you have directly printed the E9211 Foil Adhesive directly on the garment, cut the foil sheet to the desired shape and place it color side up over the area where you want the foil effect. If foil is not placed over the entire design, cover the exposed plastisol ink areas with release paper to shield them from the hot platen surface. The transfer press temperature should be set at 375&deg; F (163&deg; to 177&deg; C) with medium to high pressure for 68 seconds over a direct print. If using the transfer method of applying the E9211 Foil Adhesive directly to the foil sheet, transfer the design to the garment for 12 seconds at a temperature of 325&deg; to 350&deg; F (163&deg; to 177&deg; C.)using medium to high pressure. Allow the fabric and foil to cool completely before peeling.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">WASHING INSTRUCTIONS:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">Prints decorated with foil are not as durable as unfoiled prints. Some dulling of the foil over time is to be expected with laundering and normal wear. To minimize this during laundering the garment should be hand washed inside out, using cool or lukewarm water and dried by either hanging or laying flat. Do not dryclean.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">SCREEN COATING, FILM, BLOCKOUT:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Use water soluble hand-cut, photo screens and blockouts with this ink or use other suitable products.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">WASHUP:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;T-125 mineral spirits, or biodegradable washes SYS-2500, SYS-2550 or SYS-2510 screen wash gel.</span></p>
<p class="MsoNormal"><strong><span style="font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; color: red; background: white;">ALWAYS TEST PRINT BEFORE PRODUCTION!</span></strong></p>',
                'featured' => 0,
                'id' => 40,
                'min_qty' => NULL,
                'name' => 'Foil Adhesive',
                'price' => 0.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:14:25',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            3 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => 40.0,
                'cover_img' => 'products/November2020/u9X6z8ImqDOVaN57c9R8.jpg',
                'created_at' => '2020-11-09 18:47:00',
                'description' => '<p class="MsoNormal" style="line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;">841 Foil &amp; Puff Adhesive</span></p>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #72b9ff;">Features:</span></p>
<ul type="disc">
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">For direct printing on Foil or Puff Transfers</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Phthalate Free</span></li>
</ul>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #72b9ff;">Description:</span></p>
<p class="MsoNormal" style="margin-bottom: .0001pt; line-height: normal; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">841 Printable Adhesive is designed for producing puff heat transfers. 841 Printable Adhesive will eliminate the need for powders. 841 Adhesive has a very soft hand feel and good elongation. see the "Read More" for specific instructions.</span></p>
<p class="MsoNormal">&nbsp;</p>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;">SPECIFICATIONS:</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">FOIL TRANSFERS:</span></strong></p>
<ol start="1" type="1">
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">841 Printable Adhesive can be printed on the back of the foil to create a foil transfer. It can be gelled on the back of the foil and transferred later.</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Screen print 841 Printable Adhesive onto a cold peel transfer paper such as T-75. Gel onto the paper the same as any other heat transfer. Then apply the transfer to the fabric at 350&deg;F (177&deg;C) for 10 seconds - peel cold. Apply the foil over the transfer and heat seal for 10 to 15 seconds. Allow to cool completely and peel foil.</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l1 level1 lfo2; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Direct print with light pressure on surface of fabric. Keep ink on surface, do not drive it too far into the fabric. Cure print through a dryer. Using transfer machine apply foil for 10 to 15 seconds at 350&deg;F (177&deg;C). Let cool completely and peel foil.</span></li>
</ol>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">PUFF TRANSFERS:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">Puff Transfers: Print 841 Adhesive over the whole puff transfer image slightly overlapping the puff ink.<br /><br />Curing: Gel the 841 Adhesive at the same condition as the puff ink so as not to puff the ink on the paper. Puff Transfers always perform better when they are not puffed or beginning to puff on paper.</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">MESH:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">80/inch to 125/inch (36T cm to 57T cm).</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">SCREEN COATING, FILM, BLOCKOUT:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">&nbsp;Use water soluble hand-cut, photo screens and blockouts with this ink or use other suitable products.</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">WASHUP:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">&nbsp;T-125 mineral spirits, or biodegradable washes SYS-2500, SYS-2550 or SYS-2510 screen wash gel.</span></p>
<p class="MsoNormal"><strong><span style="font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: red; background: white;">ALWAYS TEST PRINT BEFORE PRODUCTION!</span></strong></p>',
                'featured' => 0,
                'id' => 41,
                'min_qty' => NULL,
                'name' => 'Poil Puff Adhesive',
                'price' => 25000.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:15:39',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            4 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/thJkPVQCXP1bz94Yw1TO.jpg',
                'created_at' => '2020-11-09 18:55:00',
                'description' => '<h2 style="margin: 0px; padding: 0px 0px 10px; border: 0px; font-variant-numeric: inherit; font-variant-east-asian: inherit; font-weight: normal; font-stretch: inherit; font-size: 20px; line-height: 28px; font-family: Oswald, arial, serif; position: relative; color: #f01d1d;">500PF Series Wet-On-Wet Plastisol Inks</h2>
<div class="clear" style="clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;">&nbsp;</div>
<div class="box three product first" style="display: inline; float: left; border: 0px; width: 180px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; margin: 0px 10px 10px 0px !important;">&nbsp;</div>
<div class="box two-three product last" style="display: inline; float: left; border: 0px; width: 420px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; margin: 0px 0px !important 10px 10px;">
<div class="clear" style="clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px;">&nbsp;</div>
<div class="space v_10" style="clear: both; padding: 5px 0px;">&nbsp;</div>
</div>
<div class="clear" style="clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;">&nbsp;</div>
<div class="space v_10" style="clear: both; padding: 5px 0px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px;">&nbsp;</div>
<div class="box product_detail full" style="margin: 0px 0px 10px; border: 0px; width: 640px; color: #000000; font-family: \'Droid Sans\', arial, serif; font-size: 12px; float: none !important;">Excalibur&rsquo;s 500PF Series is the printer&rsquo;s choice for high-production, wet-on-wet direct printing on 100% cotton light colors or on top of a flashed white underbase. 500PF is available in a wide range of colors all formulated to minimize build-up on the backs of screens. One of Excalibur&rsquo;s most versatile inks 500PF can be used for producing cold-peel transfers as well as being the ink series most widely used with Excalibur&rsquo;s additives suede or puff additive to transform 500PF Series colors into special effects inks. The 500PF Series is available in quantities from one quart to 50 gallon drums.
<div class="clear" style="clear: both; overflow: hidden; visibility: hidden; width: 0px; height: 0px;">&nbsp;</div>
<div class="space v_10" style="clear: both; padding: 5px 0px;">&nbsp;</div>
<div class="box" style="margin: 0px 10px 10px; display: inline; float: left; border: 0px;">
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;">FEATURES AND BENEFITS</span></strong></p>
<ul style="margin: 0px 0px 20px 17px; padding: 0px; border: 0px; font: inherit; list-style-position: initial; list-style-image: initial;">
<li style="margin: 0px; padding: 0px; border: 0px; font: inherit;">Creamy, easy-printing consistency produces sharp, opaque prints on both manual and automatic presses whether you are printing directly on top of a white or light colored 100% cotton garment or on top of a flashed white underbase.</li>
<li style="margin: 0px; padding: 0px; border: 0px; font: inherit;">Completely phthalate-free and lead-free formulation complies with all standards of Consumer Product Safety Improvement Act (CPSIA) banning phthalates and heavy metals in textile-printing inks.</li>
</ul>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;">TECHNICAL INFORMATION</span></strong></p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Gel Temperature:&nbsp;</strong>Ink will surface gel at 240&deg; F (116&deg; C).</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Curing</strong><strong>:</strong>&nbsp;Prints will fully cure when the entire ink film reaches 320&deg;F (160&deg;C) for at least 15 seconds.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Heat Transfers:</strong>&nbsp;500PF can be used in printing cold peel transfers.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Mesh:</strong>&nbsp;For direct printing a 110-305/inch (43T-122Tcm) may be used.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Stencil:</strong>&nbsp;Any stencil compatible with plastisol inks may be used.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Modification:</strong>&nbsp;Because plastisol inks are thixotropic and can body up during storage always stir ink thoroughly prior to print or adding reducers. If necessary 501PF Curable Reducer may be added increase printability of ink and to help clean from the screen. CAUTION: Adding too much 501PF Curable Reducer will reduce opacity and bleed-resistance.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Squeegee</strong>: 70 durometer or 90/70/90 triple durometer blades are recommended.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong>Clean-up:</strong>&nbsp;Use Enviro Series 2000 Green or Enviro Series TR Blend.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;">COLOURS</span></strong></p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;">Lemon Yellow, True Yellow, Light Royal, Maroon, Navy Blue, Old Gold, Light Gold, Gold, Purple, Violet, Fuschia, Reflex Blue, Royal Blue, Rhodamine Red, Rubine Red, Scarlet Red, Silver Grey, True Blue, Super Royal, Bright Blue, Light Blue, Warm Fled, Fluorescent Blue, Fluorescent Green, Fluorescent Magenta, Fluorescent Orange, Fluorescent Pink, Fluorescent Red, Fluorescent Violet, Fluorescent Yellow.</p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;"><strong><span style="margin: 0px; padding: 0px; border: 0px; font: inherit; color: #ff0000;">CAUTION</span></strong></p>
<p style="margin: 0px; padding: 0px 0px 20px; border: 0px; font: inherit;">Always test finished prints for curing, adhesion and desired look prior to beginning full production runs. Lancer Group International cannot guarantee the results or back claims that this mixed ink will test phthalate-free if any additive other than an additive manufactured by Lancer Group International is used to modify this ink. Test results by a third-party laboratory verifying all components used to produce this ink are phthalate-free and lead-free are available upon request.</p>
</div>
</div>',
                'featured' => 0,
                'id' => 42,
                'min_qty' => NULL,
                'name' => 'Plastisol',
                'price' => 1200.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:16:37',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            5 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products\\November2020\\JpDzJZNzgv52n2S96O5S.jpg',
                'created_at' => '2020-11-12 06:15:18',
                'description' => '<p>nill</p>',
                'featured' => 0,
                'id' => 43,
                'min_qty' => NULL,
                'name' => 'chill product',
                'price' => 4100.0,
                'product_pdf' => '',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-12 06:15:18',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            6 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products\\November2020\\bIcV2paqYQoMaDjnp9HL.jpg',
                'created_at' => '2020-11-12 06:59:00',
                'description' => '<p>ok</p>',
                'featured' => 0,
                'id' => 44,
                'min_qty' => NULL,
                'name' => 'lil wyne',
                'price' => 7800.0,
                'product_pdf' => '',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => 1,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-12 07:08:56',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            7 => 
            array (
                'buying_price' => 90.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products\\November2020\\CGHFINXNCWoBV3BPo3zL.jpeg',
                'created_at' => '2020-11-12 09:26:00',
                'description' => '<p>wicked</p>',
                'featured' => 0,
                'id' => 45,
                'min_qty' => 2,
                'name' => 'checking fb post',
                'price' => 45000.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 20,
                'top_product' => 0,
                'updated_at' => '2020-11-16 02:47:32',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            8 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/8SMe0nZTsqk0yuZGm2y4.png',
                'created_at' => '2020-11-16 16:14:23',
                'description' => '<p><span style="font-family: Raleway, sans-serif;">EP Flu Green</span></p>',
                'featured' => 0,
                'id' => 46,
                'min_qty' => NULL,
                'name' => 'EP Flu Green',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/m9aDXCQtxFQ9mJMyXeeh.pdf","original_name":"sds-020-EP-Fluor-Green.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 190,
                'top_product' => 0,
                'updated_at' => '2020-11-16 16:14:23',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            9 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/tkFkm5j7mFNMMXLX4VIL.png',
                'created_at' => '2020-11-16 17:27:48',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 48,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Black',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/IKjRnVIsBUx5n5hVLSOj.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:27:48',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            10 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/X6Ch0MbZhERaCUsJlt1Q.png',
                'created_at' => '2020-11-16 17:30:49',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 49,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Blue',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/b4Xhq1YsJh2yI8fXGiMX.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:30:49',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            11 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/52GB0kGTSIc78BbBtqkm.png',
                'created_at' => '2020-11-16 17:32:44',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 50,
                'min_qty' => -1,
                'name' => 'Excalibur_1800_Gold',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/sqYlr0XTHLJfWXnjbkAX.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:32:44',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            12 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/mPkIt93bIHigz9t6CbRd.png',
                'created_at' => '2020-11-16 17:34:22',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 51,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Gray',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/92u5Gko7VLpaRy2cehcq.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:34:22',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            13 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/ALkNIhiNSCeFWrNRT0xF.png',
                'created_at' => '2020-11-16 17:36:18',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 52,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Green',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/cWyP4dzLE46ckXTZ1tNr.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:36:18',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            14 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/jCForHVcRRk3y2X56lid.png',
                'created_at' => '2020-11-16 17:39:19',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 53,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Red',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/mvJd2l5IkzBhVtWdF3YY.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 17:39:19',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            15 => 
            array (
                'buying_price' => 3200.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/gXAy3ttx8tyv4xrmjXnZ.png',
                'created_at' => '2020-11-16 17:43:00',
                'description' => '<p class="MsoNormal" style="text-align: center;" align="center"><strong style="mso-bidi-font-weight: normal;"><u>Process Color</u></strong><u></u></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">&nbsp;</strong></p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Trade Name</strong>: Excalibur Direct Print Plastisol Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Chemical Family</strong>: Plastisol</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">Product Use</strong>: Screen printing ink</p>
<p class="MsoNormal"><span style="mso-spacerun: yes;">&nbsp;</span><strong style="mso-bidi-font-weight: normal;">WHMIS Classification</strong>: Not controlled</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Effects of Overexposure</strong>: Fumes emitted during fusion may irritate eyes, skin or respiratory tract.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Chronic Effects</strong>: Skin sensitization and allergenic reactions may occur in certain individuals in slight cases.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Composition comments</strong>: These products do not contain any known currently listed hazardous materials nor do they contain any carcinogenic or suspected carcinogenic agents.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Primary Routes of Exposure</strong>: Potential routes of overexposure to these products are skin contact and inhalation of fumes during heat processing.</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;">Codes</strong>: 100 Horizon Series, 400 Color Series, 400 FF Series, 400 LB White, 504 Base, 500 Color Series, 505 Process Base, 5050 White, 525 Competition White, 550 Base, 550 Color Series, 551 Series, 565 White, 567 FF High Opacity White, 579 White, 581 White, 585 White, 595 White, 600 Process Colors, 600 Super Strength Series Process Colors, 700 Series, 750 Stone Print Series, 825 Foam Grip, 834 High Density Base, 835 Super Clear, 837 Coning Base, 1550 SportPro Athletic Series, 1551 ColorPro Athletic Series, 1800 Spot Process Color Series, Jelly Print Series, Knife Coat Series, Spray Plas Base, Retroflec, Quicksilver, Stone Age Series and High Density, and Sponge Base Inks</p>
<p class="MsoNormal"><strong style="mso-bidi-font-weight: normal;"><span style="mso-spacerun: yes;">&nbsp;</span>Synergistic Products</strong>: None known</p>',
                'featured' => 0,
                'id' => 54,
                'min_qty' => NULL,
                'name' => 'Excalibur_1800_Spot_Flo_Purple',
                'price' => 5000.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/2ZGlUBJxk3bhM7NrXJ9x.pdf","original_name":"Process Color.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-16 18:21:15',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            16 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/azEh3vRWTB9ToGvotj7p.jpg',
                'created_at' => '2020-11-18 15:43:14',
                'description' => '<p class="MsoNormal" style="line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #302b27;">STI Ready For Use Silicone Inks</span></p>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #72b9ff;">Features:</span></p>
<ul type="disc">
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Low Temperature Cure</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">PVC Free</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">RSL Compliant</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">High Heat Resistance, Cured Ink Can Be Ironed</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">Ultra Elongation</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">High Opacity</span></li>
<li class="MsoNormal" style="color: #302b27; mso-margin-top-alt: auto; mso-margin-bottom-alt: auto; line-height: normal; mso-list: l0 level1 lfo1; tab-stops: list .5in; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\';">High Wash Resistance</span></li>
</ul>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 4; background: white; margin: 7.5pt 0in 7.5pt 0in;"><span style="font-size: 13.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: \'Times New Roman\'; color: #72b9ff;">Description:</span></p>
<p class="MsoNormal" style="line-height: normal; mso-outline-level: 2; background: white; margin: 15.0pt 0in 7.5pt 0in;"><span style="font-size: 22.5pt; font-family: \'Comic Sans MS\'; mso-fareast-font-family: \'Times New Roman\'; mso-bidi-font-family: Arial; color: #302b27;">Evolution STI Silicone Ink System</span></p>
<p class="MsoNormal" style="margin-bottom: 7.5pt; line-height: normal; background: white;"><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; mso-fareast-font-family: \'Times New Roman\'; color: #302b27;">Lancer Group International\'s STI Silicone Ink System is a state-of-the-art system that produces completely PVC-free and phthalate free prints for athletic uniforms and performance wear garments. Prints will exhibit extremely high-stretch, high-opacity and a soft, smooth hand-feel. This system is extremely bleed-resistant when curing parameters are followed.</span></p>
<p class="MsoNormal">&nbsp;<span style="color: #302b27; font-family: \'Comic Sans MS\'; font-size: 22.5pt;">SPECIFICATIONS:</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">USES:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;For use on cottons, cotton/polyester blends, can be used on cold peel transfers, and on Spandex and Lycra.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">PRINTING METHOD:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;For the most durable transfers a thick ink deposit is recommended. If using direct emulsion coat your screen normally, then face coat the print side of the screen until the necessary stencil thickness is achieved. Capillary films in the150-200 micron range may also be used to achieve a thick stencil thickness.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">OPACITY:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Excellent opacity.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">GEL TEMPERATURE:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Temperature-Inks will gel or flash cure when they reach temperatures between 220-240&deg;F for four to six seconds depending upon the flash cure unit as well as the time and temperature at which the flash cure unit has been set. To speed up gelling, pallets may be preheated to temperatures between 120-140&deg;F immediately before beginning full production.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">CURE TEMPERATURE:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Inks will fully cure after reaching temperatures between 250-290&deg; F for 1&frac12; to 2 minutes inside the curing oven. For delicate fabrics prone to dye migration, shrinkage or fiber damage, cure prints at the lower temperature and higher dwell time.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">MIXING CATALYST:&nbsp;</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">Mixing Catalyst--5-7% by weight of STI7150 Catalyst or STI7151 Gel Catalyst mixed into the inks provides the most excellent results. Amounts less than 5% will result in a finished ink that may not cure properly. For STI7711 Defender Black an addition of 7-10% STI7150 or STI7151 is recommended. For STI7838, STI7701 or STI7702 eight to 10% catalyst must be added. The amounts of catalyst mixed into the inks should be carefully weighed using a digital gram scale. STI7150 Catalyst is a liquid that should be shaken vigorously before adding.</span></p>
<p class="MsoNormal"><strong><span style="font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; color: red; background: white;">CAUTION--!</span></strong><span style="font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; color: #302b27; background: white;">&nbsp;It is recommended that only the amount of ink that can be printed in a four to six hour period be mixed at any one time. Higher amounts of catalyst will diminish the pot life of ink faster. Test print before making a production run.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">SCREEN FABRIC:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;Use 83 to 125 monofilament polyester.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">SQUEEGEE:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;70 durometer or 70/90/70 triple durometer squeegees are recommended.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">SCREEN COATING, FILM, BLOCKOUT:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">Any direct emulsion or capillary film compatible with traditional plastisol textile inks that will produce a thick stencil that produces a thick ink deposit.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">MODIFIERS:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;A small amount of STI7902 reducer (3 to 4%) can be used when necessary.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">MIXING PIGMENTS AND BASES:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;10-15% pigment load into appropriate base for application is recommended. CAUTION: Pigment loads higher than 15% can cause crocking and curing issues.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">TRANSFERS:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;T75, T100,or coated polyester release films may be used. For increased durability, use adhesive powder or print H1 (medium grind) adhesive over the entire transfer while wet. Peel cold.</span></p>
<p style="background: white; margin: 0in 0in 7.5pt 0in;"><strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">WASHUP:</span></strong><span style="font-size: 10.5pt; font-family: \'Arial\',sans-serif; color: #302b27;">&nbsp;T-125 mineral spirits, or biodegradable washes SYS-2500, SYS-2550 or SYS-2510 screen wash gel.</span></p>
<p class="MsoNormal"><strong><span style="font-size: 10.5pt; line-height: 115%; font-family: \'Arial\',sans-serif; color: red; background: white;">ALWAYS TEST PRINT BEFORE PRODUCTION!</span></strong></p>',
                'featured' => 0,
                'id' => 55,
                'min_qty' => NULL,
                'name' => 'STI Silicon',
                'price' => 0.0,
                'product_pdf' => '[{"download_link":"products\\/November2020\\/qzEE2fH3ivPC86xTNlv7.pdf","original_name":"STI Silicone.pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-18 15:43:14',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            17 => 
            array (
                'buying_price' => 0.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/vjbmTOfZyZ680NdImg9w.png',
                'created_at' => '2020-11-18 16:05:55',
            'description' => '<p>Inhalation : Get victim to fresh air. Give artificial respiration or oxygen if breathing has stopped. Get prompt medical attention. Do not give fluids if victim is unconscious. If the victim don&rsquo;t feel good, immediately call the National poison control center (phone: 114) Seek medical attention immediately. Contact with Eyes : Immediately flush eyes with large amounts of water for at least 15 minutes, holding lids apart to ensure flushing of the entire surface. Washing eyes within 1 minute is essential to achieve maximum effectiveness. Seek medical attention immediately. Contact with Skin : Immediately flush skin with plenty of water while removing contaminated clothing. Wash contaminated clothing before reuse. If redness or irritation occurs, seek medical attention. Ingestion : Harmful if swallowed. Do NOT induce vomiting. Never give anything by mouth to an unconscious person. If vomiting occurs, to open the airway of victim&rsquo;s and for prevent aspire, lean to the left side if possible (head down). Immediately consult a doctor with the product label (if possible) 5. FIRE FIGHTING MEASURES : Extinguishers : Dry powder, carbon dioxide, alcohol-resistant foam. Avoid contact with the water. Special hazards arising from the substance or mixture : Carbon oxides, nitrogen oxide</p>',
                'featured' => 0,
                'id' => 57,
                'min_qty' => NULL,
                'name' => 'EP Fluor Green',
                'price' => 0.0,
            'product_pdf' => '[{"download_link":"products\\/November2020\\/mbOJIj1LUWtop3AdzIaK.pdf","original_name":"sds-020-EP-Fluor-Green (1).pdf"}]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 100,
                'top_product' => 0,
                'updated_at' => '2020-11-18 16:05:55',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            18 => 
            array (
                'buying_price' => 120.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/kylLhVe4TGNcXkRyxMsm.jpg',
                'created_at' => '2020-11-18 18:25:52',
                'description' => '<p>chill</p>',
                'featured' => 0,
                'id' => 62,
                'min_qty' => NULL,
                'name' => 'new pdf test',
                'price' => 4500.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 15,
                'top_product' => 0,
                'updated_at' => '2020-11-18 18:25:52',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
            19 => 
            array (
                'buying_price' => 450.0,
                'cash_back_percent' => NULL,
                'cover_img' => 'products/November2020/eWorwf9nyerAQY97aLz7.jpg',
                'created_at' => '2020-11-18 18:27:30',
                'description' => '<p>joke</p>',
                'featured' => 0,
                'id' => 63,
                'min_qty' => NULL,
                'name' => 'new pdf test',
                'price' => 4500.0,
                'product_pdf' => '[]',
                'product_video' => NULL,
                'refurbish_product' => 0,
                'retail_qty' => 0,
                'reward_point' => NULL,
                'shop_id' => NULL,
                'stock' => 120,
                'top_product' => 0,
                'updated_at' => '2020-11-18 18:27:30',
                'wholesale_id' => NULL,
                'wholesale_qty' => 0,
            ),
        ));
        
        
    }
}