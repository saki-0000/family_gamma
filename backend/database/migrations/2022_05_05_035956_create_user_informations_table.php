
    <?php

    use Illuminate\Support\Facades\Schema;
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateUserInformationsTable extends Migration
    {
        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create("user_informations", function (Blueprint $table) {

                $table->integer('user_id')->nullable()->unsigned();
                $table->integer('user_information_detail_id')->nullable()->unsigned();
                $table->unique(['user_id', 'user_information_detail_id']);
                $table->foreign("user_id")->references("id")->on("users");
                $table->foreign("user_information_detail_id")->references("id")->on("user_information_details");
                $table->timestamps();



                // ----------------------------------------------------
                // -- SELECT [user_informations]--
                // ----------------------------------------------------
                // $query = DB::table("user_informations")
                // ->leftJoin("users","users.id", "=", "user_informations.user_id")
                // ->leftJoin("user_information_details","user_information_details.id", "=", "user_informations.user_information_id")
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
            Schema::dropIfExists("user_informations");
        }
    }
