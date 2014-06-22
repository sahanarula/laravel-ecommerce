
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateProductsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('products', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('sku');
			$table->string('title');
			$table->string('description');
			$table->integer('category_id');
			$table->integer('supplier_id');
			$table->decimal('price');
			$table->decimal('msrp');
			$table->decimal('discount');
			$table->decimal('weight');
			$table->boolean('availability')->default(1);
			$table->boolean('discount_available')->default(0);
			$table->decimal('ranking');
			$table->timestamps();
		});
	}


	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('products');
	}

}
