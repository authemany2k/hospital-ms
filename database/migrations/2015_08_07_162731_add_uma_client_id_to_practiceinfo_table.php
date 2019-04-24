<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddUmaClientIdToPracticeinfoTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::table('practiceinfo', function(Blueprint $table)
		{
			$table->string('uma_client_id', 255)->nullable()->default('');
			$table->string('uma_client_secret', 255)->nullable()->default('');
		});
	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::table('practiceinfo', function(Blueprint $table)
		{
			$table->dropColumn('uma_client_id');
			$table->dropColumn('uma_client_secret');
		});
	}

}
