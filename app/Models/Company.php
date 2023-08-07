<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    use HasFactory;

    protected $table='companies';

    protected $fillable=[
        /**
         * Basic Company Info
         */
        'company_name',
        'company_description',
        'company_ceo',
        'number_of_employees',
        'city',
        'business_sector',

        /**
         * Company Address
         */
        'email',
        'mobile',
        'website',
        'have_inhouse_product',
        'products_list_and_description',
        'have_customer_site_deployed',
        'customer_site_list',

        /**
         * challenges facing in the company
         */
        'list_of_challenges',

        /**
         * Ownership of free / opensource products
         */
        'have_opensource_product',
        'list_of_opensource_products',
    ];
}
