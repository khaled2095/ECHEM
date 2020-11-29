<?php

use Illuminate\Database\Seeder;

class CustomPagesTableSeeder extends Seeder
{

    /**
     * Auto generated seed file
     *
     * @return void
     */
    public function run()
    {
        

        \DB::table('custom_pages')->delete();
        
        \DB::table('custom_pages')->insert(array (
            0 => 
            array (
            'content' => '<header class="page-masthead" style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 1400px; padding-right: 25px; padding-left: 25px; margin: 50px auto; text-align: center; font-family: \'Open Sans\', sans-serif; font-size: 16px;">
<h1 class="page-title" style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-size: 30px; margin: 0.67em 0px; text-transform: uppercase; letter-spacing: 0em; color: #333333;" data-open-accessibility-text-original="30px">FREE SHIPPING POLICY</h1>
</header>
<div class="page-content rte" style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); max-width: 1150px; padding-right: 25px; padding-left: 25px; margin: 50px auto; font-size: 16px; line-height: 1.625; font-family: \'Open Sans\', sans-serif;">
<div style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); padding: 30px; border-radius: 0px;">
<h3 style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;" data-open-accessibility-text-original="22px">GENERAL FREE SHIPPING POLICY</h3>
Orders including $200&nbsp;or more of&nbsp;<em style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);">*eligible items</em>&nbsp;qualify for FREE Ground Shipping.
<ul style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem; padding-left: 20px;">
<li style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" data-open-accessibility-text-original="16px">Orders below $200 ship for a flat $19.95.</li>
</ul>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px"><span style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: bold;">Note:</span>&nbsp;Items may not be shipped to Alaska and Hawaii using free shipping.</p>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">If your order doesn\'t qualify for free shipping, your order may contain:</p>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">&bull; Marketplace Items</p>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">&bull; Shipping Address Outside of Contiguous U.S.</p>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">&bull; Cart contains Equipment, Kits or a Package.</p>
<hr style="box-sizing: content-box; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px; overflow: visible;" /><br style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" />
<h3 style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;" data-open-accessibility-text-original="22px">EQUIPMENT FLAT RATES&nbsp;</h3>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">&nbsp;Flat rate shipping charges will be assigned to our Equipment.</p>
<br style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" />Equipment Items will have nominal flat rate charges depending on size, weight, dimensions, and crafting material needed for the products. The flat rate charge will be in addition to the general flat rate.&nbsp;<br style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" /><hr style="box-sizing: content-box; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); height: 0px; overflow: visible;" /><br style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0);" />
<h3 style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); text-transform: uppercase; letter-spacing: 0em; font-size: 22px; margin-top: 2rem; margin-bottom: 1rem; color: #333333;" data-open-accessibility-text-original="22px">ELIGIBLE FREE SHIPPING ITEMS</h3>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px">*Eligible items are products that are consumed and re-ordered on a frequent basis.</p>
<p style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); margin-top: 1rem; margin-bottom: 1rem;" data-open-accessibility-text-original="16px"><span style="box-sizing: inherit; -webkit-font-smoothing: antialiased; text-size-adjust: none; -webkit-tap-highlight-color: rgba(0, 0, 0, 0); font-weight: bold;">Eligible items:</span>&nbsp;Most plastisol &amp; water-based inks, screens, meshes, squeegees, chemicals, emulsions, films, output inks, software, tapes, transfer supplies.</p>
Please contact our Success team at 1-800-314-6390 with any questions.</div>
</div>',
                'created_at' => '2020-10-31 15:39:17',
                'id' => 2,
                'label' => 'shipping',
                'title' => 'Free shipping',
                'updated_at' => '2020-10-31 15:39:17',
            ),
        ));
        
        
    }
}