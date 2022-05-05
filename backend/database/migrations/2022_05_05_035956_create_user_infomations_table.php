
    <?php
        use Illuminate\Support\Facades\Schema;
        use Illuminate\Database\Schema\Blueprint;
        use Illuminate\Database\Migrations\Migration;
        
        class CreateUserInfomationsTable extends Migration
        {
            /**
             * Run the migrations.
             *
             * @return void
             */
            public function up()
            {
                Schema::create("user_infomations", function (Blueprint $table) {

						$table->integer('user_id')->nullable()->unsigned();
						$table->integer('user_infomation_id')->nullable()->unsigned();
						$table->unique(['user_id', 'user_infomation_id']);
						//$table->foreign("user_id")->references("id")->on("users");
						//$table->foreign("user_infomation_id")->references("id")->on("user_infomation_details");



						// ----------------------------------------------------
						// -- SELECT [user_infomations]--
						// ----------------------------------------------------
						// $query = DB::table("user_infomations")
						// ->leftJoin("users","users.id", "=", "user_infomations.user_id")
						// ->leftJoin("user_infomation_details","user_infomation_details.id", "=", "user_infomations.user_infomation_id")
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
                Schema::dropIfExists("user_infomations");
            }
        }
    