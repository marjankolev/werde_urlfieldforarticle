<?php
/**
 * This file is part of OXID eShop Community Edition.
 *
 * OXID eShop Community Edition is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * OXID eShop Community Edition is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with OXID eShop Community Edition.  If not, see <http://www.gnu.org/licenses/>.
 *
 * @link      http://www.oxid-esales.com
 * @copyright (C) OXID eSales AG 2003-2017
 * @version   OXID eShop CE
 */

/**
 * Metadata version
 */
$sMetadataVersion = '1.1';

/**
 * Module information
 */
$aModule = array(
    'id'          => 'urlfieldforarticle',
    'title'       => 'URL Field for Article',
    'description' => 'Module for Redirecting shop to the URL entered for the article when Add to Cart button is clicked',
    'thumbnail'   => 'logo.png',
    'version'     => '1.0',
    'author'      => 'Marjan Kolev',
    'url'         => 'http://marjankolev.com/',
    'email'       => 'marjankolev1994@yahoo.com',
    'extend'      => array(
    ),
    'events'      => array(
        'onActivate'    => 'werde_add_field_event::onActivate',
    ),
    'files'       => array(
        'werde_add_field_event' => 'urlfieldforarticle/admin/werde_add_field_event.php',
    ),
    'blocks'      => array(
        array(
            'template'  => 'widget/product/listitem_grid.tpl', 
            'block'     => 'widget_product_listitem_grid_tobasket', 
            'file'      => 'application/views/blocks/widget/product/widget_product_listitem_grid_tobasket.tpl',
        ),
        array(
            'template'  => 'widget/product/listitem_infogrid.tpl', 
            'block'     => 'widget_product_listitem_infogrid_tobasket', 
            'file'      => 'application/views/blocks/widget/product/widget_product_listitem_infogrid_tobasket.tpl',
        ),
        array(
            'template'  => 'page/details/inc/productmain.tpl', 
            'block'     => 'details_productmain_tobasket', 
            'file'      => 'application/views/blocks/productmain_details_productmain_tobasket.tpl',
        ),
        array(
            'template' => 'article_main.tpl',
            'block'    => 'admin_article_main_form',
            'file'     => 'application/views/blocks/admin/admin_article_main.tpl',
        ),
    ),
);
