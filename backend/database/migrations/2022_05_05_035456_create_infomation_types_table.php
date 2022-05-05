
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateInfomationTypesTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("infomation_types", function (Blueprint $table) {

						$table->increments('id');
						$table->string('name');
						$table->string('comment')->nullable();



						// ----------------------------------------------------
						// -- SELECT [infomation_types]--
						// ----------------------------------------------------
						// $query = DB::table("infomation_types")
						// ->get();
						// dd($query); //For checking



                });
            }

            /**
             * Reverse the migrations.
             *
             * @return void
             */
            public function down()
            {
                Schema::dropIfExists("infomation_types");
            }
        }
    