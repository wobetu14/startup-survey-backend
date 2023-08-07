<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('companies', function (Blueprint $table) {
            $table->id()->startingValue(100000);
            /**
             * Basic Information
             */
            $table->string('company_name');
            $table->string('company_description');
            $table->string('company_ceo');
            $table->string('number_of_employees');
            $table->string('city');
            $table->string('business_sector');

            /**
             * Company Address
             */
            $table->string('email');
            $table->string('mobile');
            $table->string('website');
            $table->string('have_inhouse_product');
            $table->string('products_list_and_description')->nullable();
            $table->string('have_customer_site_deployed');
            $table->string('customer_site_list')->nullable();

            /**
             * challenges facing in the company
             */
            $table->string('list_of_challenges');

            /**
             * Ownership of free / opensource products
             */
            $table->string('have_opensource_product');
            $table->string('list_of_opensource_products')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('companies');
    }
};
